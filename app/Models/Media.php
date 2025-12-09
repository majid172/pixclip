<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
     protected $fillable = [
        'user_id',
        'file_name',
        'file',
        'extension',
        'type',
        'file_size',
    ];


    protected $hidden = ['file'];
}
