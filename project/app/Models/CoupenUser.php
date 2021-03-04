<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CoupenUser extends Model
{
    protected $fillable = ['user_id','coupon'];
    protected $table = 'coupon_users';

    protected $dates = ['created_at'];

    public $timestamps = false;

    public static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->created_at = $model->freshTimestamp();
        });
    }

}
