<div class="flex flex-col h-full w-1/4 bg-green-500 justify-between items-start p-4 text-gray-700">
    <div class="flex flex-col gap-3">
        <a href="{{ route('index') }}" class=" text-4 text-3xl font-semibold mb-3">Spatiefy</a>
        {{-- <div class=" h-0.5 w-full bg-white"></div> --}}
        <a href="{{ route('home') }}" class="">Home</a>

        @if (auth()->check())
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="">Logout</button>
            </form>
        @else
            <a class="" href="{{ route('login') }}">Login</a>
        @endif
    </div>

    <div class="w-full flex justify-center items-center">
        @if (auth()->check())
            <p class="">{{ auth()->user()->name }}</p>
        @else
            <p class="">Guest</p>
        @endif
    </div>

</div>
