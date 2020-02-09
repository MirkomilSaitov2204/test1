@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            {{ isset($category)? 'Edit Category': 'Create Category' }}
        </div>
        <div class="card-body">
            <form action="{{isset($category)? route('categories.update', $category->id) : route('categories.store')}}" method="POST">

                @csrf
                @if (isset($category))
                    @method('PUT')
                @endif
                <div class="form-group">
                        <label for="name"></label>
                <input type="text" name="name" class="form-control"  value="{{isset($category) ? $category->name : ""}}">
                </div>
                <button type="submit" class="btn btn-success btn-lg">{{ isset($category)? 'Update' : 'Create' }}</button>
            </form>
        </div>
    </div>
@endsection
