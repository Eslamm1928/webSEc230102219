@extends('layouts.master')
@section('title', 'Bought Products')
@section('content')
<div class="container mt-4">
    <h3>Bought Products - {{ $user->name }}</h3>

    <table class="table table-bordered mt-3">
        <thead>
            <tr>
                <th>Product Name</th>
                <th>Unit Price</th>
                <th>Quantity</th>
                <th>Total Price</th>
            </tr>
        </thead>
        <tbody>
            @forelse($orders as $order)
                <tr>
                    <td>{{ $order->product->name ?? 'Product Deleted' }}</td>
                    <td>${{ number_format($order->product->price ?? 0, 2) }}</td>
                    <td>{{ $order->quantity }}</td>
                    <td>${{ number_format($order->total_price, 2) }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" class="text-center">No purchases yet.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
