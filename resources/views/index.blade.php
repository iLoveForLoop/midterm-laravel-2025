@extends('layout.layout')

@section('content')
    <div class="max-h-screen p-4 md:p-8 bg-gray-100 overflow-scroll scrollbar-hidden">
        <div class="max-w-7xl mx-auto">

            <div class="flex flex-col sm:flex-row justify-between items-center mb-6 gap-4">
                <h1 class="text-2xl md:text-3xl font-semibold text-gray-800">Music</h1>
                @can('create-record')
                    <a href="{{ route('music-create') }}"
                        class="bg-blue-500 hover:bg-blue-600 text-white font-medium py-2 px-4 rounded-lg transition-colors">
                        Add Music
                    </a>
                @endcan
            </div>


            <div class=" bg-white rounded-lg shadow">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="border-b bg-gray-50">
                            <th class="py-3 px-4 text-sm font-semibold text-gray-600 uppercase">ID</th>
                            <th class="py-3 px-4 text-sm font-semibold text-gray-600 uppercase">Title</th>
                            <th class="py-3 px-4 text-sm font-semibold text-gray-600 uppercase">Artist</th>
                            <th class="py-3 px-4 text-sm font-semibold text-gray-600 uppercase">Genre</th>
                            <th class="py-3 px-4 text-sm font-semibold text-gray-600 uppercase">Duration</th>
                            <th class="py-3 px-4 text-sm font-semibold text-gray-600 uppercase">Release Date</th>
                            @role('admin')
                                <th class="py-3 px-4 text-sm font-semibold text-gray-600 uppercase">Actions</th>
                            @endrole
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($music as $song)
                            <tr class="border-b hover:bg-gray-50">
                                <td class="py-3 px-4 text-gray-700">{{ $song->id }}</td>
                                <td class="py-3 px-4 text-gray-700">{{ $song->title }}</td>
                                <td class="py-3 px-4 text-gray-700">{{ $song->artist }}</td>
                                <td class="py-3 px-4 text-gray-700">{{ $song->genre }}</td>
                                <td class="py-3 px-4 text-gray-700">{{ gmdate('i:s', $song->duration) }}</td>
                                <td class="py-3 px-4 text-gray-700">{{ $song->release_date }}</td>
                                @role('admin')
                                    <td class="py-3 px-4">
                                        <div class="flex gap-2">
                                            <a href="{{ route('music-edit', $song->id) }}"
                                                class="bg-blue-500 hover:bg-blue-600 text-white text-sm py-1 px-3 rounded transition-colors">
                                                Edit
                                            </a>
                                            <form action="{{ route('music-delete', $song->id) }}" method="post">
                                                @method('DELETE')
                                                @csrf
                                                <input type="hidden" name="id" value="{{ $song->id }}">
                                                <button type="submit"
                                                    class="bg-red-500 hover:bg-red-600 text-white text-sm py-1 px-3 rounded transition-colors">
                                                    Delete
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                @endrole
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="py-4 px-4 text-center text-gray-500">
                                    No music found in the library.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <style>
        .scrollbar-hidden::-webkit-scrollbar {
            display: none;
        }

        .scrollbar-hidden {
            -ms-overflow-style: none;
            /* IE and Edge */
            scrollbar-width: none;
            /* Firefox */
        }
    </style>
@endsection
