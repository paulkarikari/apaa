<?php

namespace Apaa\Models\Comment;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
                            'comment',
                            'user_id',
                            'service_id',
                            'sentement_level',
                        ];

    public function services()
    {
        return $this->belongsTo('Apaa\Models\Service\Service');
    }

    public function users()
    {
        return $this->belongsTo('Apaa\Models\User\User');
    }
}
