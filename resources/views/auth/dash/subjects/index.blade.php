@extends('layouts.dash')

<!--     Fonts and icons     -->
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="{{ url('https://demos.creative-tim.com/material-dashboard-pro/assets/css/material-dashboard.min.css?v=2.0.2') }}">
<link rel="stylesheet" type="text/css" href="{{ url('https://demos.creative-tim.com/material-dashboard-pro/assets/demo/demo.css') }}">
 

@section('content')
        <main class="mdl-layout__content mdl-blue-grey-50 mdl-color--white-400 mdl-color-text--blue-grey-50">
            <div class="mdl-grid demo-content">
               <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> Materias </div>

                <table class="table">
  
  <thead>
    <tr>
    <th>ID</th>
      <th>Materia</th>
       <th>Ativo</th>
      <th>Academia de ingles</th>
      <th>Carrera</th>
      <th>Area</th>
      <th>CREADO</th>
      <th>ACTUALIZADO</th>
      <th>ACCIONES</th>
    </tr>
  </thead>
  <tbody>
    @foreach($subjects as $key)
    <tr>
      <td>{{ $key->ids}}</td>
      <td>{{ $key->subject }}</td>
      <td>{{ $key->active }}</td>
       <td>{{ $key->academy }}</td>
      <td>{{ $key->idc }}</td>
      <td>{{ $key->ida }}</td>
      <td>{{ $key->created_at }}</td>
      <td>{{ $key->updated_at }}</td>
      
    </tr>
   

    @endforeach
  </tbody>
     
    
</table>


         </main>
 @endsection