<?php

namespace App\Http\Controllers;

use App\Models\Newsletter;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Carbon\Carbon;

class NewsletterController extends Controller
{
    public function subscribe(Request $request)
    {
        $key = 'subscribe:' . $request->ip();

        // if (RateLimiter::tooManyAttempts($key, 5)) {
        //     $seconds = RateLimiter::availableIn($key);

        //     $minutes = floor($seconds / 60);
        //     $remainingSeconds = $seconds % 60;

        //     $timeMessage = $minutes > 0 
        //         ? "{$minutes} phút và {$remainingSeconds} giây" 
        //         : "{$remainingSeconds} giây";

        //     return response()->json([
        //         'message' => "Bạn đã đăng ký quá nhiều lần. Vui lòng thử lại sau {$timeMessage}."
        //     ], 429);
        // }

        RateLimiter::hit($key, 3600);

        // Validate the request
        $request->validate([
            'email' => 'required|email'
        ], [
            'email.required' => 'Email là bắt buộc.',
            'email.email' => 'Định dạng email không hợp lệ.',
        ]);

        $newsletter = Newsletter::where('email', $request->email)->first();

        if ($newsletter) {
            if ($newsletter->active) {
                return response()->json(['message' => 'Email này đã được đăng ký.'], 409); // Conflict status
            } else {
                $newsletter->active = true;
                $newsletter->save(); 
            }
        } else {
            $newsletter = Newsletter::create([
                'email' => $request->email,
                'active' => true,
            ]);
        }

        Mail::to($newsletter->email)->send(new \App\Mail\NewsletterThankYou($newsletter));

        return response()->json(['message' => 'Cảm ơn bạn đã đăng ký nhận bảng tin!']);
    }

    public function unsubscribe(Request $request)
    {
        $email = $request->input('email');
        $reason = $request->input('reason');
    
        $newsletter = Newsletter::where('email', $email)->firstOrFail();
    
        $newsletter->active = false;
        $newsletter->reason = $reason;
        $newsletter->save();
        
        return response()->json(['message' => 'Bạn đã hủy đăng ký thành công!']);
    }
}
