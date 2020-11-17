<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\User;


class ProfilesController extends Controller
{
    public function show(User $user)
    {
        return view('profiles.show', [
            'user' => $user,
            'tweets' => $user->tweets()->paginate(10),
            'tweets' => $user
                ->tweets()
                ->withLikes()
                ->paginate(10),
        ]);
    }

    public function edit(User $user)
    {
        if ($user->isNot(current_user())) {
            abort(403);
        }
        return view('profiles.edit', compact('user'));
    }

    public function update(User $user)
    {
        $attributes = request()->validate([
            'username' => ['required', 'string', 'max:255', 
            'alpha_dash', Rule::unique('users')->ignore($user)],
            'avatar' => ['image','dimensions:min_width=100,min_height=200'],
            'banner' => ['image','mimes:jpeg,png,jpg,gif,svg'],
            'bio' =>['string', 'max:255','nullable'],
            'name' =>['required', 'string', 'max:255'],
            'email'=> ['required', 'string', 'email', 'max:255', 
            Rule::unique('users')->ignore($user)],
            'password' => ['string', 'min:8', 'max:255','confirmed','nullable'],
        ]);

        if ($attributes['password']=='') {
            $attributes['password'] = $user->password;
        }

        if(request('avatar')){
             $attributes['avatar']=request('avatar')->store('avatars');
        } 
        if(request('banner')){
            $attributes['banner']=request('banner')->store('banners');
        }
        if(request('bio')){
            $attributes['bio']=request('bio');
        }

        
            /* if(request('avatar')){
             $attributes['avatar']=request('avatar')->store('avatars');
            } elseif(request('banner')){
                $attributes['banner']=request('banner')->store('banners');
            }elseif(request('bio')){
                $attributes['bio']=request('bio');
            }
             */
        

        $user->update($attributes);
        return redirect($user->path());
    }
}
