<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BillingAddress extends Model
{
    protected $fillable = [
        'user_id',
        'bill_to',
        'billing_email',
        'billing_phone',
        'vat_id',
        'website_url',
        'billing_address',
        'billing_city',
        'billing_state',
        'billing_country_id',
        'billing_post_code',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
