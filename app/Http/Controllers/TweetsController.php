<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tweet;
use App\User;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Bcrypt;
use Illuminate\Support\Facades\Hash;


class TweetsController extends Controller
{
        public function index()
    {
        return view('tweets.index', [
            'tweets' => auth()
                ->user()
                ->timeline(),
        ]);
    }
    public function store()
    {
        $attributes = request()->validate(['body'=>'required|max:255',]);

        Tweet::create([
            'user_id'=> auth()->id(),
            'body'=> $attributes['body'],
        ]);

        return redirect('/tweets');
    }

    public function destroy(Tweet $tweet)
    {   
        $this->authorize('delete',$tweet);
        $tweet->delete();
        return redirect('/tweets');
    }
}
