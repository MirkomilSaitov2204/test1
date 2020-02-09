@extends('layouts.app')

@section('content')




    <div class="card">
        <div class="card-header">
            Update Question
        </div>
        <div class="card-body">
            <form action="{{ route('answers.update',['id'=>$answer->id]) }}" method="POST">

                @csrf
                @method('PUT')

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
                                        @if ($question->id == $answer->question_id)
                                            selected
                                      @endif
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
                            <textarea name="option_1" id="option_1" rows="4" class="form-control">{{$answer->option_1}}</textarea>
                            </div>
                            <div class="form-group">
                                    {!! Form::label('correct', "Correct", ['class'=>'control-label']) !!}
                                <input type="radio" name="correct[]" value="{{ 1 }}"
                                @if ($answer->correct == 1)
                                        checked
                                @endif
                              >
                            </div>
                        </div>
                    </div>
                    <div class="card mt-2">
                        <div class="card-header"> Option Answer</div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="option_2">Option 2</label>
                                <textarea name="option_2" id="option_2" cols="1" rows="4" class="form-control">{{$answer->option_2}}</textarea>
                            </div>
                            <div class="form-group">
                                    {!! Form::label('correct', "Correct", ['class'=>'control-label']) !!}
                                <input type="radio" name="correct[]" value="{{ 2 }}"
                                @if ($answer->correct == 2)
                                    checked
                                @endif
                                >
                            </div>
                        </div>
                    </div>
                    <div class="card mt-2">
                        <div class="card-header"> Option Answer</div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="option_3">Option 3</label>
                                <textarea name="option_3" id="option_3" cols="1" rows="4" class="form-control">{{$answer->option_3}}</textarea>
                            </div>
                            <div class="form-group">
                                    {!! Form::label('correct', "Correct", ['class'=>'control-label']) !!}
                                <input type="radio" name="correct[]" value="{{ 3 }}"
                                @if ($answer->correct == 3)
                                    checked
                                @endif
                                >
                            </div>
                        </div>
                    </div>
                    <div class="card mt-2">
                        <div class="card-header"> Option Answer</div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="option_4">Option 4</label>
                                <textarea name="option_4" id="option_4" cols="1" rows="4" class="form-control">{{$answer->option_4}}</textarea>
                            </div>
                            <div class="form-group">
                                    {!! Form::label('correct', "Correct", ['class'=>'control-label']) !!}
                                <input type="radio" name="correct[]" value="{{ 4 }}"
                                @if ($answer->correct == 4)
                                    checked
                                 @endif
                                >
                            </div>
                        </div>
                    </div>




                <button type="submit" class="btn btn-success btn-lg">Submit</button>
            </form>
        </div>
    </div>

@endsection
