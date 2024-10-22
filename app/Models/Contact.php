<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = ['full_name', 'email', 'phone_number', 'topic', 'message', 'contact_reason_id'];

    public function contactReason()
    {
        return $this->belongsTo(ContactReason::class, 'contact_reason_id');
    }
}
