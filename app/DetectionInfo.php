<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetectionInfo extends Model
{
    protected $fillable=[
        'public_id',
        'user_ip',
        'device',
        'operating_system'
    ];

    protected $hidden=['id'];
}
