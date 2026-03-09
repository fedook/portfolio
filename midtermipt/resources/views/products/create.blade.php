@extends('layouts.app')

@section('title', 'Add Product')

@section('content')

<div class="card shadow">
    <div class="card-header bg-dark text-white">
        <h4>Add Product</h4>
    </div>

    <div class="card-body">

        <form action="{{ route('products.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label class="form-label">Product Name</label>
                <input type="text" name="name" class="form-control" placeholder="Enter product name">
            </div>

            <div class="mb-3">
                <label class="form-label">Category</label>
                <select name="category_id" class="form-control">
                    <option value="">Select Category</option>
                </select>
            </div>

            <div class="mb-3">
                <label class="form-label">Price</label>
                <input type="number" name="price" class="form-control" placeholder="Enter price">
            </div>

           

            <button type="submit" class="btn btn-success">Save Product</button>
            <a href="/products" class="btn btn-secondary">Cancel</a>

        </form>

    </div>
</div>

@endsection