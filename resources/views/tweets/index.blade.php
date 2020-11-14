<x-app>
    <div>
        @include ('publish-tweet-panel')
        @include('timeline')
    </div>  

    {{ $tweets->links() }}
</x-app>
