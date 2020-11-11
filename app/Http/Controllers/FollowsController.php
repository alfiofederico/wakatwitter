<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class FollowsController extends Controller
{
    
    public function store(User $user)
    {
        if(current_user()->following($user)){
            current_user()->unfollow($user);
        }else {
            current_user()->follow($user);
        }
        

        return back();
    }
}
