@extends('layout.layout')

@section('content')
    <div class="flex flex-col w-full px-10 py-4 uppercase font-semibold text-green-500">


        <form action="{{ route('music-store') }}" method="POST">
            @csrf
            <div class="w-full flex justify-between items-center mb-10">
                <h1 class="text-4xl ">Add Music</h1>
                <button class="bg-green-500 text-gray-700 py-2 px-6 rounded-full cursor-pointer" type="submit">Save</button>
            </div>

            <div class="flex flex-col gap-1.5 mb-5">
                <label class="text-xl" for="title">Title</label>
                <input class="border-b-1 border-green-500 outline-none text-white caret-green-500 " type="text"
                    name="title">
            </div>

            <div class="flex flex-col gap-1.5 mb-5">
                <label class="text-xl" for="artist">Music artist</label>
                <input class="border-b-1 border-green-500 outline-none text-white caret-green-500 " type="text"
                    name="artist">
            </div>

            <div class="flex flex-col gap-1.5 mb-5">
                <label class="text-xl" for="genre">Genre</label>
                <select class="border-b-1 border-green-500 outline-none " name="genre">
                    <option value="">Select Genre</option>
                    <option value="Rock" {{ old('genre') == 'Rock' ? 'selected' : '' }}>Rock</option>
                    <option value="Pop" {{ old('genre') == 'Pop' ? 'selected' : '' }}>Pop</option>
                    <option value="Jazz" {{ old('genre') == 'Jazz' ? 'selected' : '' }}>Jazz</option>
                    <option value="Hip Hop" {{ old('genre') == 'Hip Hop' ? 'selected' : '' }}>Hip Hop</option>
                    <option value="Classical" {{ old('genre') == 'Classical' ? 'selected' : '' }}>Classical</option>
                    <option value="Electronic" {{ old('genre') == 'Electronic' ? 'selected' : '' }}>Electronic</option>
                </select>
            </div>

            <div class="flex flex-col gap-1.5 mb-5">
                <label class="text-xl" for="duration">Music duration <span class=" lowercase">(in seconds)</span></label>
                <input
                    class="border-b-1 border-green-500 outline-none text-white caret-green-500 [appearance:textfield] [&::-webkit-inner-spin-button]:appearance-none [&::-webkit-outer-spin-button]:appearance-none"
                    type="number" name="duration">
            </div>

            <div class="flex flex-col gap-1.5 mb-5">
                <label class="text-xl" for="release_date">Music release_date</label>
                <input class="border-b-1 border-green-500 outline-none text-green-500 " type="date" name="release_date">
            </div>



        </form>
    </div>
@endsection
