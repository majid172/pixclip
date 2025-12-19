<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserDetails extends Model
{
    protected $fillable = [
        'user_id',
        'uuid',
        'phone',
        'address',
        'city',
        'state',
        'post_code',
        'country_id',
        'ip','last_access_at'

    ];
    public function country()
    {
        return $this->belongsTo(Country::class,'country_id','id');
    }

public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

}
