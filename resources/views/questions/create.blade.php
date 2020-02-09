@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
           Create Question
        </div>
        <div class="card-body">
            <form action="{{ route('questions.store') }}" method="POST">

                @csrf


                <div class="form-group">
                        <label for="name">Title</label>
                <input type="text" name="title" class="form-control" >
                </div>
                <div class="form-group">
                    <label for="">Description</label>
                    <textarea name="desc" id="" cols="30" rows="10" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <label >Category</label>
                    <select name="category"  class="form-control">
                        @foreach ($categories as $category)
                             <option value="{{$category->id}}"

                             > {{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-success btn-lg">Create</button>
            </form>
        </div>
    </div>
@endsection
