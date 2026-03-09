@extends('layouts.app')
@section('title', 'Category List')

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
        <h4 class="mb-0">Categories</h4>
        <a href="{{ route('categories.create') }}" class="btn btn-secondary btn-sm">Add Category</a>
    </div>

    <div class="card-body">

        @php
            function hexToColorName($hex) {
                $colors = [
                    '#ff0000' => 'Red',
                    '#00ff00' => 'Green',
                    '#0000ff' => 'Blue',
                    '#ffff00' => 'Yellow',
                    '#ffa500' => 'Orange',
                    '#800080' => 'Purple',
                    '#000000' => 'Black',
                    '#ffffff' => 'White',
                ];

                return $colors[strtolower($hex)] ?? $hex;
            }
        @endphp

        <table class="table table-bordered table-hover">

            <thead class="table-white">
                <tr>
                    <th>Name</th>
                    <th>Color</th>
                    <th width="180">Actions</th>
                </tr>
            </thead>

            <tbody>
                @foreach($categories as $category)

                <tr>
                    <td>{{ $category->cat_name }}</td>

                    <td>
                        <div style="width:30px; height:20px; background-color: {{ $category->cat_color }}; display:inline-block; border:1px solid #000;"></div>
                        {{ hexToColorName($category->cat_color) }}
                    </td>

                    <td>

                        <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-warning btn-sm">
                            Edit
                        </a>

                        <form action="{{ route('categories.destroy', $category->id) }}" method="POST" style="display:inline;">
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