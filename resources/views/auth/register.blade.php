<x-master>
    <body style="background:#d9e6f3">
<div class="container mx-auto flex justify-center">
    <div class="px-6 py-4 bg-gray-500 mb-1">
        <div class="col-md-8">
            
                <div class="font-bold text-lg mb-4">{{ __('Register') }}</div>

               <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                           for="username"
                    >
                        Username
                    </label>

                    <input class="border border-gray-400 p-2 w-full"
                           type="text"
                           name="username"
                           id="username"
                           autocomplete="username"
                           autofocus
                           value="{{ old('username') }}"
                           style="outline: none"
                           required
                    >

                    @error('username')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                           for="name"
                    >
                        Name
                    </label>

                    <input class="border border-gray-400 p-2 w-full"
                           type="text"
                           name="name"
                           id="name"
                           value="{{ old('name') }}"
                           required
                           style="outline: none"
                    >

                    @error('name')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                           for="email"
                    >
                        Email
                    </label>

                    <input class="border border-gray-400 p-2 w-full"
                           type="email"
                           name="email"
                           id="email"
                           value="{{ old('email') }}"
                           autocomplete="email"
                           style="outline: none"
                           required
                    >

                    @error('email')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>


                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                           for="password"
                    >
                        Password
                    </label>

                    <input class="border border-gray-400 p-2 w-full"
                           type="password"
                           name="password"
                           id="password"
                           autocomplete="new-password"
                           style="outline: none"
                    >

                    @error('password')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                           for="password_confirmation"
                    >
                        Password Confirmation
                    </label>

                    <input class="border border-gray-400 p-2 w-full"
                           type="password"
                           name="password_confirmation"
                           id="password_confirmation"
                           autocomplete="new-password"
                           style="outline: none"
                    >

                    @error('password_confirmation')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <button type="submit"
                            class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500 mr-2" style="outline: none"
                    >
                        Register
                    </button>
                </div>
            </form>
        </body>
</x-master>
