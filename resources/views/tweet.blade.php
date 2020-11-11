<div class="flex p-4 
{{ $loop->last ? '' : 'border-b border-b-gray-400' }}">
  <div class="mr-2 flex-shrink-0">
    <a href="{{ route('profile', $tweet->user) }}"><img src="{{ $tweet->user->avatar }}" alt="avatar" class="rounded-full mr-2" width="60" height="60"></a> 
  </div>
    <div>
      <h5 class="font-bold mb-2">
        <a href="{{ route('profile', $tweet->user) }}">
        {{$tweet->user->name}}
        </a>
      </h5>
        <p class="text-sm">{{$tweet->body}}</p>
    </div>
</div>