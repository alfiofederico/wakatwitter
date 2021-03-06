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
      <div class="container border border-blue-400 rounded-lg px-8 py-6 mb-8 " style="max-width: 600px; min-width:600px">
        <p class="text-sm mb-3" style="word-break: break-all">{{$tweet->body}}</p>
      @can('delete',$tweet)
          <form action="{{route('tweets.destroy', $tweet)}}" method="POST">
          @csrf 
          @method('DELETE')
          <button type="submit" class="bg-blue-500 rounded-full shadow-md py-1 px-3 text-white text-xs mb-3" style="outline: none">Delete</button>
          </form>
       @endcan
      
        <div class="flex">
        <form  method="POST" action="/tweets/{{$tweet->id}}/like">
           @csrf
          <div class="flex items-center mr-4 {{ $tweet->isLikedBy(current_user()) ? 'text-green-500' : 'text-gray-500' }}">
            <svg viewBox="0 0 20 20" class="text-gray-500 mr-1 w-3">
						<g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
							<g class="fill-current">
								<path d="M11.0010436,0 C9.89589787,0 9.00000024,0.886706352 9.0000002,1.99810135 L9,8 L1.9973917,8 C0.894262725,8 0,8.88772964 0,10 L0,12 L2.29663334,18.1243554 C2.68509206,19.1602453 3.90195042,20 5.00853025,20 L12.9914698,20 C14.1007504,20 15,19.1125667 15,18.000385 L15,10 L12,3 L12,0 L11.0010436,0 L11.0010436,0 Z M17,10 L20,10 L20,20 L17,20 L17,10 L17,10 Z" id="Fill-97"></path>
							</g>
						</g>
            </svg>
            <button type="submit" class="text-xs" style="outline: none">
              {{$tweet->likes ?: 0 }}
            </button>
          </div>
          </form>

          <form  method="POST" action="/tweets/{{$tweet->id}}/like">
            @csrf
            @method('DELETE')
          <div class="flex items-center mr-4 {{ $tweet->isDislikedBy(current_user()) ? 'text-red-500' : 'text-gray-500' }}">
          <svg viewBox="0 0 20 20" class="text-gray-500 mr-1 w-3">
						<g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
							<g class="fill-current">
								<path d="M11.0010436,20 C9.89589787,20 9.00000024,19.1132936 9.0000002,18.0018986 L9,12 L1.9973917,12 C0.894262725,12 0,11.1122704 0,10 L0,8 L2.29663334,1.87564456 C2.68509206,0.839754676 3.90195042,8.52651283e-14 5.00853025,8.52651283e-14 L12.9914698,8.52651283e-14 C14.1007504,8.52651283e-14 15,0.88743329 15,1.99961498 L15,10 L12,17 L12,20 L11.0010436,20 L11.0010436,20 Z M17,10 L20,10 L20,0 L17,0 L17,10 L17,10 Z" id="Fill-97"></path>
							</g>
						</g>
						</svg>
            <button type="submit" class="text-xs" style="outline: none">
              {{$tweet->dislikes ?: 0}}
            </button>
          </div>
          </form>
        </div>
      </div>
    </div>

    
</div>

