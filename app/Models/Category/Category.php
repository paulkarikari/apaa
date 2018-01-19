<?php

namespace Apaa\Models\Category;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['category_name'];

    public function services()
    {
        return $this->hasMany('Apaa\Models\Service\Service');
    }
}
