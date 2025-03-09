@extends('layout.layout')

@section('content')
    <div class="w-auto h-screen flex flex-col justify-center items-center gap-4">
        <div class="flex items-center gap-3">

            <h1 class="text-6xl text-green-500 font-bold">Spatiepy</h1>
            <img class=" w-15 rotate-45" src="{{ asset('images/spotify.svg') }}" alt="">
        </div>
        <h1 class="text-8xl text-green-500 font-bold uppercase">Jeferson Bayking</h1>
        <h1 class="text-4xl text-green-500 font-bold">Pinayagan Sur, Tubigon, Bohol </h1>
        <h1 class="text-6xl text-green-500 font-bold">BSIT - 3</h1>
    </div>
@endsection
