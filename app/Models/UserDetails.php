<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserDetails extends Model
{
    public function country()
    {
        return $this->belongsTo(Country::class,'country_id','id');
    }

public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

}
