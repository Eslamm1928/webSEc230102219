@extends('layouts.master')
@section('title', 'Add Product')
@section('content')
<div class="container mt-4">
    <h2>Add Product</h2>
    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data" class="mt-3">
        @csrf
        <div class="mb-3">
            <label class="form-label">Code</label>
            <input type="text" name="code" class="form-control" placeholder="Product Code" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Name</label>
            <input type="text" name="name" class="form-control" placeholder="Product Name" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Price</label>
            <input type="number" name="price" class="form-control" placeholder="Price" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Model</label>
            <input type="text" name="model" class="form-control" placeholder="Model" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Description</label>
            <textarea name="description" class="form-control" placeholder="Description"></textarea>
        </div>
        <div class="mb-3">
            <label class="form-label">Photo</label>
            <input type="file" name="photo" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Add</button>
    </form>
</div>
@endsection
