@extends('layouts.master')

@section('title', 'Product List')

@section('content')
    <div class="container mt-4">
        <h2 class="mb-4">Product List</h2>

        @if(auth()->user() && auth()->user()->hasRole('admin'))
            <a href="{{ route('products.create') }}" class="btn btn-primary mb-3">Add New Product</a>
        @endif

        <div class="row">
            @foreach ($products as $product)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        @if($product->photo)
                            <img src="{{ asset($product->photo) }}" class="card-img-top" alt="Product Image">
                        @endif
                        <div class="card-body">
                            <h5 class="card-title">{{ $product->name }}</h5>
                            <p class="card-text"><strong>Code:</strong> {{ $product->code }}</p>
                            <p class="card-text"><strong>Price:</strong> ${{ $product->price }}</p>
                            <p class="card-text"><strong>Model:</strong> {{ $product->model }}</p>

                            @if(auth()->user() && auth()->user()->hasRole('admin'))
                                <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning">Edit</a>
                                <form action="{{ route('products.destroy', $product->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
