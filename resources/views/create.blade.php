@extends('layout')

@section('content')
<form method="POST" action="{{ route('crud.store') }}" >

@csrf

<div class="row">
 
  <div class="col">
    <input name="msisdn" type="text" class="form-control" placeholder="msisdn" aria-label="msisdn">
    <input name="iccid" type="text" class="form-control" placeholder="iccid" aria-label="iccid">
    <input name="date" type="text" class="form-control" placeholder="date" aria-label="date">
    <input name="tarif" type="text" class="form-control" placeholder="tarif" aria-label="tarif">
    <input name="name" type="text" class="form-control" placeholder="name" aria-label="name">
  </div>
  
</div>
<button type="submit" class="btn btn-success" > Create </button>


</from>

@endsection