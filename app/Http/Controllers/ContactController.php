<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use App\Models\settings;
use App\Models\ContactReason;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\RateLimiter;

class ContactController extends Controller
{
    public function create()
    {
        $setting = settings::find(1);
        
        seo()
            ->title((App::getLocale() === 'vi' ? 'Liên hệ' : 'Contact me') . ' | Khanh Nguyen')
            ->description($setting->site_description ?? 'Chia sẻ về các bài viết công nghệ, lập trình, ERP, SAP B1, NETSUITE, Misa.')
            ->image(asset($settings->image_home ?? 'assets/default_image.png'))
            // ->image('https://previewlinks.io/generate/templates/1055/meta?url=' . url()->current())
            ->tag('previewlinks:overline', 'SAP B1')
            ->tag('previewlinks:title', 'Bài viết')
            ->tag('previewlinks:subtitle', $setting->site_description ?? 'Chia sẻ về các bài viết công nghệ, lập trình, ERP, SAP B1, NETSUITE, Misa.')
            ->tag('previewlinks:image', asset($settings->image_home ?? 'assets/default_image.png'))
            ->tag('previewlinks:repository', 'harrydev/sap');

        $contactReasons = ContactReason::all();

        return view('contact', compact('contactReasons')); 
    }

    public function store(Request $request)
    {
        $ip = $request->ip();

        // Kiểm tra hạn chế submit
        if (RateLimiter::tooManyAttempts('contact-form:' . $ip, 5)) {
            return response()->json(['error' => 'Bạn đã gửi quá nhiều yêu cầu. Vui lòng thử lại sau.'], 429);
        }

        // Validate dữ liệu
        $validator = Validator::make($request->all(), [
            'full_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        try {
            // Lưu vào bảng liên hệ
            $contact = Contact::create($request->only('full_name', 'email', 'phone_number', 'topic', 'message'));

            // Gửi email cảm ơn
            Mail::to($contact->email)->send(new \App\Mail\ContactThankYou($contact));

            RateLimiter::hit('contact-form:' . $ip);

            return response()->json(['success' => true, 'message' => 'Cảm ơn bạn đã liên hệ! Chúng tôi sẽ trả lời sớm nhất có thể.']);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => $e->getMessage()], 500);
        }
    }

    public function storeWithReason(Request $request)
    {
        $ip = $request->ip();

        // Kiểm tra hạn chế submit
        if (RateLimiter::tooManyAttempts('contact-form:' . $ip, 5)) {
            return response()->json(['error' => 'Bạn đã gửi quá nhiều yêu cầu. Vui lòng thử lại sau.'], 429);
        }

        // Validate dữ liệu
        $validator = Validator::make($request->all(), [
            'full_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
            'contact_reason_id' => 'exists:contact_reasons,id', 
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        try {
            // Lưu vào bảng liên hệ
            $contact = Contact::create($request->only('full_name', 'email', 'phone_number', 'topic', 'company', 'message', 'contact_reason_id'));

            // Gửi email cảm ơn
            Mail::to($contact->email)->send(new \App\Mail\ContactThankYou($contact));

            RateLimiter::hit('contact-form:' . $ip);

            return response()->json(['success' => true, 'message' => 'Cảm ơn bạn đã liên hệ! Chúng tôi sẽ trả lời sớm nhất có thể.']);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => $e->getMessage()], 500);
        }
    }

    public function getContactReasons()
    {
        $contactReasons = ContactReason::all(); 
        return response()->json($contactReasons); 
    }
}