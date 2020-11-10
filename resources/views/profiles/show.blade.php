<x-app>
    <header class="mb-6 relative">
        <img src="https://i.pinimg.com/originals/a9/db/d6/a9dbd64a85d59e3cbd9e89beab8968f7.jpg" alt="" class="mb-2 rounded-2xl">


        <div class="flex justify-between items-center">
            <div>
               <h2 class="font-bold text-2xl mb-0">{{$user -> name}}</h2>
                <p class="text-sm mb-5">Member since {{$user->created_at->diffForHumans()}}</p>
            </div>
            <div>
                <a href="" class="rounded-full shadow py-2 px-4 text-black text-xs" style="outline:none">Edit profile</a>
                <a href="" class="bg-blue-500 rounded-full shadow py-2 px-4 text-white text-xs" style="outline:none">Follow Me</a>
            </div>
        </div>

        <img src="{{ $user->avatar }}" alt="avatar" class="rounded-full mr-2 absolute" style="width: 150px; left:calc(50% - 75px); top:47%;">
        <p class="text-sm">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Placeat atque, in explicabo quod corporis voluptates quisquam id ipsam harum culpa maiores. Possimus corporis debitis iusto enim nisi cum odit saepe inventore! Aspernatur quam, saepe corrupti necessitatibus cumque nesciunt sint ipsam.</p>
    </header>

    @include('timeline', [
        'tweets'=>$user->tweets
    ])
</x-app>
