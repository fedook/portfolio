@extends('layouts.app')
@section('title', 'Product List')

@section('content')
<!-- Put this at the top of your card or page content -->
@if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

<div class="card shadow">

    <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
        <h4 class="mb-0">Products</h4>
        <a href="{{ route('products.create') }}" class="btn btn-light btn-sm">
            Add Product
        </a>
    </div>

    <div class="card-body">

        <table class="table table-bordered table-hover">

            <thead class="table-dark">
                <tr>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Category</th>
                    <th width="180">Actions</th>
                </tr>
            </thead>

            <tbody>

                @foreach($products as $product)

                <tr>
                    <td>{{ $product->name }}</td>

                    <td>₱ {{ number_format($product->price, 2) }}</td>

                    <td>
                        {{ $product->category?->cat_name ?? 'No Category' }}
                    </td>

                    <td>

                        <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning btn-sm">
                            Edit
                        </a>

                        <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn btn-danger btn-sm">
                                Delete
                            </button>
                        </form>

                    </td>
                </tr>

                @endforeach

            </tbody>

        </table>

    </div>

</div>

@endsection