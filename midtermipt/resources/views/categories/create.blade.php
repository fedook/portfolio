@extends('layouts.app')

@section('title', 'Add Category')

@section('content')

<div class="card shadow">

    <div class="card-header bg-primary text-white">
        <h4 class="mb-0">Add Category</h4>
    </div>

    <div class="card-body">

        <form method="POST" action="{{ route('categories.store') }}">
            @csrf

            <div class="mb-3">
                <label class="form-label">Category Name</label>
                <input type="text" name="cat_name" class="form-control" placeholder="Enter category name">
            </div>

            <div class="mb-3">
                <label class="form-label">Category Color</label>
                <input type="color" name="cat_color" class="form-control form-control-color">
            </div>

            <button type="submit" class="btn btn-success">
                Save Category
            </button>

            <a href="{{ route('categories.index') }}" class="btn btn-secondary">
                Cancel
            </a>

        </form>

    </div>

</div>

@endsection