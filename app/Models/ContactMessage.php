<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactMessage extends Model
{
    protected $fillable = ['service', 'details', 'name', 'email', 'phone', 'company', 'preference', 'message'];

    protected function casts(): array
    {
        return [
            'details' => 'array',
        ];
    }
}
