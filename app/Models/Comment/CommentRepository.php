<?php

namespace Apaa\Models\Comment;

use Apaa\Models\User\User;

class CommentRepository implements CommentInterface
{
    private $comment;

    public function __construct(Comment $comment)
    {
        $this->comment = $comment;
    }

    /**
     * create comment for the current user.
     *
     * @param array $commentData
     * @param User  $user
     */
    public function save(array $commentData, User $user)
    {
        return $user->comments()->create($commentData);
    }
}
