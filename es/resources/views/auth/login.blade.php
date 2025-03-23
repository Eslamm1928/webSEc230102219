@extends('layouts.master')
@section('content')
<div class="container mt-5">
    <h2 class="mb-4">Login</h2>
    <form action="{{ route('login') }}" method="POST" class="w-50 mx-auto">
        @csrf
        <div class="mb-3">
            <input class="form-control" type="email" name="email" placeholder="Email" required>
        </div>
        <div class="mb-3">
            <input class="form-control" type="password" name="password" placeholder="Password" required>
        </div>
        <button class="btn btn-primary" type="submit">Login</button>
    </form>
</div>
@endsection
