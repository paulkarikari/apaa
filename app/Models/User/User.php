<?php

namespace Apaa\Models\User;

use Illuminate\Support\Facades\Config;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'company', 'phone', 'user_type',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function services()
    {
        return $this->hasMany('Apaa\Models\Service\Service');
    }

    public function isServiceProdiver()
    {
        return $this->getAttribute('user_type') == Config::get('constants.SERVICE_PROVIDER');
    }
}
