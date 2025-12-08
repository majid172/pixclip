<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function scopeStatus($q,$status)
    {
        return $q->where('status',$status);
    }
}
