<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'order_id',
        'redo_order_id',
        'job_title',
        'user_id',
        'price',
        'service_id',
        'media_id',
        'image_quantity',
        'instruction',
        'image_complexity',
        'return_file_extension',
        'turnaround',
        'status',
        'image_link',
        'output_link',
        'output_media_id',
        'submitted_at',
        'is_invoiced',
        'is_paid',
        'is_redo',
        'is_download',
        'redo_instruction',
        'redo_media_id',
        'redo_image_link',
        'output_redo_media_id',
        'output_redo_link',
    ];

    public function scopeStatus($q,$status)
    {
        return $q->where('status',$status);
    }
    public function user()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }
    public function scopeCheckUser($q)
    {
        if(auth()->user()->is_admin == 1){
            return $q;
        }
        return $q->where('user_id',auth()->user()->id);
    }
}
