@extends('layout')

@section('content')
<a class="btn btn-primary" role="button" href="{{ route('crud.create') }}"> Добавить сим</a>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">msisdn</th>
      <th scope="col">iccid</th>
      <th scope="col">name</th>
      <th scope="col">date</th>
      <th scope="col">tarif</th>
    </tr>
    <body>

    @foreach ($crud as $crud)
        <tr>
           <td>{{ $crud->id }}</td>
            <td>{{ $crud->msisdn }}</td>
            <td>{{ $crud->iccid }}</td>
            <td>{{ $crud->name }}</td>
            <td>{{ $crud->date }}</td>
            <td>{{ $crud->tarif }}</td>
            <td>
            <a type="button" class="btn btn-warning" href="{{route ('crud.edit', $crud) }}"> edit</a>          
            </td>
           
        </tr>
        @endforeach
       
</body>
  </thead>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
 

@endsection