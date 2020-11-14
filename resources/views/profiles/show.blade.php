<x-app>
    <header class="mb-6 relative">
    <div class="relative">
        <img src="https://i.pinimg.com/originals/a9/db/d6/a9dbd64a85d59e3cbd9e89beab8968f7.jpg" alt="" class="mb-2 rounded-2xl">
        <img src="{{ $user->avatar }}" alt="avatar" class="rounded-full mr-2 absolute bottom-0 transform -translate-x-1/2 translate-y-1/2" width="150px" style="left: 50%">
    </div>

        <div class="flex justify-between items-center mb-6">
            <div style="max-width: 280px">
               <h2 class="font-bold text-2xl mb-0">{{$user -> name}}</h2>
                <p class="text-sm mb-5">Member since {{$user->created_at->diffForHumans()}}</p>
            </div>
            <div class="flex">
            @if (current_user()->is($user))
            <a href="{{ $user ->path('edit')}}" class="rounded-full shadow py-2 px-4 text-black text-xs" style="outline:none">Edit profile</a>
            @endif
            <form method="POST" action="/profiles/{{$user->username}}/follow">
                @csrf
            @if (current_user()->isNot($user))
            <button type="submit" class="bg-blue-500 rounded-full shadow-md py-2 px-4 text-white text-xs" style="outline:none">{{current_user()->following($user) ? 'Unfollow Me' : 'Follow Me'}}</button>
            @endif
            </form>
            </div>
        </div>

        
        <p class="text-sm">testm.</p>
    </header>

    @include('timeline', [
        'tweets'=>$tweets
    ])

   
</x-app>
