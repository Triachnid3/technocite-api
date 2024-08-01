<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Logs extends Model
{
    use HasFactory;

    protected $table = 'logevents';

    protected $fillable = [
        'device_id',
        'temperature',
        'humidity',
    ];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
}
