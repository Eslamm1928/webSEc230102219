@extends('layouts.master')
@section('content')
<div class="container mt-5">
    <h2 class="mb-4">Register</h2>
    <form action="{{ route('register') }}" method="POST" class="w-50 mx-auto">
        @csrf
        <div class="mb-3">
            <input class="form-control" type="text" name="name" placeholder="Name" required>
        </div>
        <div class="mb-3">
            <input class="form-control" type="email" name="email" placeholder="Email" required>
        </div>
        <div class="mb-3">
            <input class="form-control" type="password" name="password" placeholder="Password" required>
        </div>
        <div class="mb-3">
            <input class="form-control" type="password" name="password_confirmation" placeholder="Confirm Password" required>
        </div>
        <button class="btn btn-primary" type="submit">Register</button>
    </form>
</div>
@endsection