<div class="flex flex-col h-full w-1/6 bg-green-500 justify-between items-start p-4 text-gray-700">
    <div class="flex flex-col gap-3">
        <div class="flex items-center gap-3 mb-10">
            <a href="{{ route('index') }}" class=" text-4 text-3xl font-semibold text-black">Spatiepy</a>
            <img class=" w-8 rotate-45" src="{{ asset('images/spotify-black.svg') }}" alt="">
        </div>

        {{-- <div class=" h-0.5 w-full bg-white"></div> --}}
        <a href="{{ route('index') }}"
            class="text-l hover:text-black transform transition duration-300 hover:scale-101 uppercase font-semibold">Music</a>
        <a href="{{ route('home') }}"
            class="text-l hover:text-black transform transition duration-300 hover:scale-101 uppercase font-semibold">Home</a>

        @if (auth()->check())
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit"
                    class="text-l cursor-pointer hover:text-red-700 transform transition duration-300 hover:scale-101 uppercase font-semibold">Logout</button>
            </form>
        @else
            <a
                class="text-l hover:text-black transform transition duration-300 hover:scale-101 uppercase font-semibold"href="{{ route('login') }}">Login</a>
        @endif
    </div>

    <div class="w-full flex justify-center items-center">
        @if (auth()->check())
            <p class="uppercase">{{ auth()->user()->name }}</p>
        @else
            <p class="uppercase">Guest</p>
        @endif
    </div>

</div>
