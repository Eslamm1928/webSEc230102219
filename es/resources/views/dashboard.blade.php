@extends('layouts.master')
@section('content')
<div class="container mt-5">
    <div class="card p-4 shadow">
        <h2 class="mb-3">Welcome, {{ Auth::user()->name }}!</h2>
        <p>You are logged in.</p>
    </div>
</div>
@endsection