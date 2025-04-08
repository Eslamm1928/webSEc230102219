@extends('layouts.master')

@section('title', 'Insufficient Balance')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6 text-center border rounded p-4 shadow-sm">
            <h3 class="text-danger mb-3">Balance is not enough</h3>
            <p class="mb-4">Your current balance is not enough to complete this purchase.</p>
            <a href="{{ route('products_list') }}" class="btn btn-outline-danger px-4">Back to Products</a>
        </div>
    </div>
</div>
@endsection
