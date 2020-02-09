@extends('layouts.app')

@section('content')
    <form action="{{route('answers.store')}}" method="POST">

        @csrf
        <div class="card mt-2">
            <div class="card-header">
                Qaysi savol Javobi
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label >Question</label>
                    <select name="question"  class="form-control">
                        @foreach ($questions as $question)
                             <option value="{{$question->id}}"

                             > {{ $question->title }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>

        <div class="card mt-2">
                <div class="card-header"> Option Answer</div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="option_1">Option 1</label>
                        <textarea name="option_1" id="option_1" cols="1" rows="1" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                            {!! Form::label('correct', "Correct", ['class'=>'control-label']) !!}
                        <input type="radio" name="correct[]" value="{{ 1 }}"    >
                    </div>
                </div>
            </div>
            <div class="card mt-2">
                <div class="card-header"> Option Answer</div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="option_2">Option 2</label>
                        <textarea name="option_2" id="option_2" cols="1" rows="1" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                            {!! Form::label('correct', "Correct", ['class'=>'control-label']) !!}
                        <input type="radio" name="correct[]" value="{{ 2 }}"    >
                    </div>
                </div>
            </div>
            <div class="card mt-2">
                <div class="card-header"> Option Answer</div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="option_3">Option 3</label>
                        <textarea name="option_3" id="option_3" cols="1" rows="1" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                            {!! Form::label('correct', "Correct", ['class'=>'control-label']) !!}
                        <input type="radio" name="correct[]" value="{{ 3 }}"    >
                    </div>
                </div>
            </div>
            <div class="card mt-2">
                <div class="card-header"> Option Answer</div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="option_4">Option 4</label>
                        <textarea name="option_4" id="option_4" cols="1" rows="1" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                            {!! Form::label('correct', "Correct", ['class'=>'control-label']) !!}
                        <input type="radio" name="correct[]" value="{{ 4 }}"    >
                    </div>
                </div>
            </div>




        <button type="submit" class="btn btn-success btn-lg">Submit</button>

    </form>



@endsection
