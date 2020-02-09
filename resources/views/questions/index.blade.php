@extends('layouts.app')

@section('content')

    <div class="d-flex justify-content-end">
        <a href="{{route('questions.create')}}" class="btn btn-success btn-lg">Create Question</a>
    </div>
    <table class="table mt-2 table-bordered table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Category name</th>
                    <th>Options</th>

                </tr>
            </thead>
            <tbody>
               @foreach ($questions as $i=>$question)
               <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $question->title }}</td>
                    <td>{{$question->category->name}}</td>
                     <td>
                        <a href="{{route('questions.edit', $question->id)}}" class="btn btn-sm btn-primary">Edit</a>

                    <form method="POST" action="{{route('questions.destroy', $question->id )}}">
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
