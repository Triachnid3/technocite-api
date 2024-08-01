<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Logs extends Model
{
    use HasFactory;

    protected $table = 'LogData';

    protected $fillable = [
        'DeviceID',
        'Temperature',
        'Humidity',
        'LogTime',
    ];

    protected $casts = [
        'created_at' => 'datetime',
    ];
}
