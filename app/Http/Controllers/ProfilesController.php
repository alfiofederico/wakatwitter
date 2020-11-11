<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;


class ProfilesController extends Controller
{
    public function show(User $user)
    {
        return view('profiles.show', compact('user'));
    }

    public function edit(User $user)
    {
        if ($user->isNot(current_user())) {
            abort(403);
        }
        return view('profiles.edit', compact('user'));
    }
}
