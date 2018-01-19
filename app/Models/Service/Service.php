<?php

namespace Apaa\Models\Service;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [
        'service_name',
        'description',
        'user_id',
        'category_id',
    ];
}
