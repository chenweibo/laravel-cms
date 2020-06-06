<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Component extends Model
{
    protected $fillable = ['title', 'notes', 'belong', 'sort', 'detail'];

    protected $casts = [
        'detail' => 'json', // 声明json类型
    ];
}
