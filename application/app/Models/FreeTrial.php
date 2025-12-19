<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FreeTrial extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'company_name',
        'website',
        'quantity',
        'service_name',
        'media_id',
        'file',
        'link',
        'instruction',
    ];

    protected $casts = [
        'media_id' => 'array',
    ];
}
