<x-app>
<body style="background:#d9e6f3">
    <div>
        @include ('publish-tweet-panel')
        @include('timeline')
    </div>  

    {{ $tweets->links() }}
</body>
</x-app>
