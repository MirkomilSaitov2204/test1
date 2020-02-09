@extends('layouts.app')

@section('content')

    <div class="d-flex justify-content-end">
        <a href="{{route('categories.create') }}" class="btn btn-success btn-lg">Create Category</a>
    </div>
    <table class="table mt-2 table-bordered table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Question</th>
                    <th>Operation</th>
                </tr>
            </thead>
            <tbody>
               @foreach ($categories as $i=>$category)
               <tr>
                   <td>{{ ++$i }}</td>
                     <td>{{ $category->name }}</td>
                    <td>{{$category->questions->count()}}</td>
                     <td>
                        <a href="{{route('categories.edit', $category->id)}}" class="btn btn-sm btn-primary">Edit</a>

                    <form method="POST" action="{{route('categories.destroy', $category->id )}}">
                            @csrf
                            @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                        </form>
                    </td>

                </tr>


               @endforeach
            </tbody>
    </table>


@endsection
