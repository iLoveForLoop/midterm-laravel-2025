@extends('layout.layout')


@section('content')
<div class="p-10 flex flex-col justify-start">
    <h1 class="text-3xl mb-5">Projects</h1>
    <table class="">
        <thead>
            <tr>
                <th class="uppercase">id</th>
                <th class="uppercase">name</th>
                <th class="uppercase">description</th>
                <th class="uppercase">start date</th>
                <th class="uppercase">status</th>
                <th class="uppercase">actions</th>

            </tr>
        </thead>

        <tbody>
            @foreach ($projects as $project)
                <tr>
                    <td>{{$project->id}}</td>
                    <td>{{$project->name}}</td>
                    <td>{{$project->description}}</td>
                    <td>{{$project->start_date}}</td>
                    <td>{{$project->status}}</td>
                    <td>
                        <div class="flex gap-2">
                            <a href="" class="bg-blue-300
                            hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Edit
                        </a>

                        <form action="">
                            @csrf
                            <input type="hidden" name="id" value="{{$project->id}}">
                            <button type="submit" class="bg-red-300 hover:bg-red-700 text-whit
                            font-bold py-2 px-4 rounded">Delete
                            </button>
                        </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>


@endsection
