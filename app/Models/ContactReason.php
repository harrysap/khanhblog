<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactReason extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function contacts()
    {
        return $this->hasMany(Contact::class, 'contact_reason_id');
    }
}
