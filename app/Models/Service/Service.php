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

    public function category()
    {
        return $this->belongsTo('Apaa\Models\Category\Category');
    }

    public function user()
    {
        return $this->belongsTo('Apaa\Models\User\User');
    }
}
