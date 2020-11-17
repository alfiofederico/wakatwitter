<x-app>
    <body style="background:#d9e6f3">
    <header class="mb-6 relative">
    <div class="relative">
        <img src="{{ $user->banner }}" alt="banner" class="mb-5 rounded-2xl"  style="max-height: 287px; min-width:700px" >

        <img src="{{ $user->avatar }}" alt="avatar" class="rounded-full mr-2 absolute bottom-0 transform -translate-x-1/2 translate-y-1/2 w-16"  style="left: 50%">
    </div>

        <div class="flex justify-between items-center mb-6">
            <div style="max-width: 280px">
               <h2 class="font-bold text-2xl mb-0">{{$user -> name}}</h2>
                <p class="text-sm mb-5">Member since {{$user->created_at->diffForHumans()}}</p>
            </div>
            <div class="flex">
            @if (current_user()->is($user))
            <a href="{{ $user ->path('edit')}}" class=" bg-white rounded-full shadow py-2 px-4 text-black text-xs" style="outline:none">Edit profile</a>
            @endif
            <form method="POST" action="/profiles/{{$user->username}}/follow">
                @csrf
            @if (current_user()->isNot($user))
            <button type="submit" class="bg-blue-500 rounded-full shadow-md py-2 px-4 text-white text-xs" style="outline:none">{{current_user()->following($user) ? 'Unfollow Me' : 'Follow Me'}}</button>
            @endif
            </form>
            </div>
        </div>

        
        <p>{{ $user->bio}}</p>
    </header>

    @include('timeline', [
        'tweets'=>$tweets
    ])

    </body>
</x-app>
