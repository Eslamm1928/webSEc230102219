
@extends('layouts.master')
@section('title', 'even Numbers')
@section('content')
<div class="card">
  <div class="card-header">Even Numbers</div>
  <div class="card-body">
    @foreach (range(1, 100) as $i)
      @if($i%2==0)
        <span class="badge bg-primary">{{$i}}</span>  
      @else
        <span class="badge bg-secondary">{{$i}}</span>  
      @endif
    @endforeach
  </div>
 </div>
 

</body>
@endsection