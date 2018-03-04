<?php

namespace Apaa\Models\Comment;

use Apaa\Models\User\User;

interface CommentInterface
{
    public function save(array $serviceData, User $user);
}
