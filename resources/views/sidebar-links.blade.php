
@auth
<ul>
  <li><a href="{{ route('home') }}" class="font-bold text-lg mb-4 block"><i class="fas fa-home mr-2"></i>Home</a></li>
  <li><a href="/explore" class="font-bold text-lg mb-4 block"><i class="fas fa-users mr-2"></i>Members</a></li>
  <li><a href="{{ route('profile', auth()->user()) }}" class="font-bold text-lg mb-4 block"><i class="fas fa-user mr-2"></i>Profile</a></li>
  <li>
    <form action="/logout" method="POST">
      @csrf
      <button class="font-bold text-lg" style="outline:none"><i class="fas fa-sign-out-alt mr-2"></i>Logout</button>  
      </form>
  </li>
</ul>

@endauth