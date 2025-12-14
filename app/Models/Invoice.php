<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    //
    protected $fillable = [
        'invoice_id',
        'order_id',
        'service_name',
        'comments',
        'qty',
        'price',
        'single_discount',
        'row_sub_total',
        'sub_total',
        'discount',
        'discount_type',
        'grand_total',
    ];
}
