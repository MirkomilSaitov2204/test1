@extends('layouts.app')

@section('content')

    <div class="d-flex justify-content-end">
        <a href="{{route('answers.create')}}" class="btn btn-success btn-lg">Create Answers</a>
    </div>
    <table class="table mt-2 table-bordered table-striped">
            <thead>
                <tr>
                    <th>Q №</th>
                    <th>Question Title</th>
                    <th>Option 1</th>
                    <th>Option 2</th>
                    <th>Option 3</th>
                    <th>Option 4</th>
                    <th>Correct Option </th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
               @foreach ($answers as $i=>$answer)
               <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $answer->question->title }}</td>
                    <td>{{ $answer->option_1 }}</td>
                    <td>{{ $answer->option_2 }}</td>
                    <td>{{ $answer->option_3 }}</td>
                    <td>{{ $answer->option_4 }}</td>
                    <td>{{ $answer->correct }}</td>
                     <td>
                        <a href="{{route('answers.edit', $answer->id)}}" class="btn btn-sm btn-primary">Edit</a>

                    <form method="POST" action="{{route('answers.destroy', $answer->id )}}">
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
