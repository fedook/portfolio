@extends('layouts.app')
@section('title', 'Edit Category')

@section('content')

<div class="card shadow">

    <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
        <h4 class="mb-0">Edit Category</h4>
        <a href="{{ route('categories.index') }}" class="btn btn-light btn-sm">
            Back to List
        </a>
    </div>

    <div class="card-body">

        <form action="{{ route('categories.update', $category->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="cat_name" class="form-label">Category Name</label>
                <input type="text" class="form-control" id="cat_name" name="cat_name" value="{{ $category->cat_name }}" placeholder="Enter category name">
            </div>

            <div class="mb-3">
                <label for="cat_color" class="form-label">Category Color</label>
                <input type="color" class="form-control form-control-color" id="cat_color" name="cat_color" value="{{ $category->cat_color }}">
            </div>

            <button type="submit" class="btn btn-success">Update Category</button>
        </form>

    </div>

</div>

@endsection