@extends('welcome')
@section('user')
@foreach($usertab as $value)
<div class="card" style="width: 18rem;">
  <img src="{{asset('img/'.$value->img)}}" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text">{{$value->id}}</p>
    <h2>{{$value->nom}}</h2>
    <h4>{{$value->age}}</h4>
    <h4>{{$value->email}}</h4>
  </div>
</div>  
@endforeach
@endsection