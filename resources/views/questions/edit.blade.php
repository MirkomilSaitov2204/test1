@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            Update Question
        </div>
        <div class="card-body">
            <form action="{{ route('questions.update',['id'=>$question->id]) }}" method="POST">

                @csrf
                @method('PUT')


                <div class="form-group">
                        <label for="name">Title</label>
                <input type="text" name="title" value="{{ $question->title }}" class="form-control" >
                </div>
                <div class="form-group">
                    <label for="">Description</label>
                <textarea name="desc" id="" cols="30" rows="10" class="form-control">{{$question->desc}}</textarea>
                </div>
                <div class="form-group">
                    <label >Category</label>
                    <select name="category"  class="form-control">
                        @foreach ($categories as $category)
                             <option value="{{$category->id}}"

                                    @if ($category->id == $question->category_id)
                                        selected
                                     @endif

                             > {{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-success btn-lg">Create</button>
            </form>
        </div>
    </div>
@endsection
