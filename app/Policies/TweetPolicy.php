<?php

namespace App\Policies;

use App\User;
use App\Tweet;
use Illuminate\Auth\Access\HandlesAuthorization;

class TweetPolicy
{
    use HandlesAuthorization;

    public function delete(User $user, Tweet $tweet)
    {
        return $user->id === $tweet->user_id;
    }
}
