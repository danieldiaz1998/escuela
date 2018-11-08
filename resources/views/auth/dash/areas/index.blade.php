@extends('layouts.dash')

<!--     Fonts and icons     -->
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="{{ url('https://demos.creative-tim.com/material-dashboard-pro/assets/css/material-dashboard.min.css?v=2.0.2') }}">
<link rel="stylesheet" type="text/css" href="{{ url('https://demos.creative-tim.com/material-dashboard-pro/assets/demo/demo.css') }}">
 

@section('content')
       <main class="mdl-layout__content mdl-blue-grey-50 mdl-color--green-400 mdl-color-text--blue-grey-50">
            <div class="mdl-grid demo-content">
               <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> Areas </div>

                <table class="table">
  
  <thead>
    <tr>
    <th>ID</th>
       <th>AREA</th>
      <th>CREADO</th>
      <th>ACTUALIZADO</th>
      <th>ACCIONES</th>
    </tr>
  </thead>
  <tbody>
          @if(count($areas) > 0)
    @foreach($areas as $key)
    <tr>
      <td>{{ $key->ida}}</td>
      <td>{{ $key->area }}</td>
      <td>{{ $key->created_at }}</td>
      <td>{{ $key->updated_at }}</td>

                                       
                                        <td>
                                         @if($key->deleted_at =="")
                                        {!!link_to_route('areas.edit', $title = 'Editar', $parameters = $key->ida, $attributes = ['class'=>'btn btn-success btn-flat btn-addon m-b-10 m-l-5'])!!} 
                                       {{ Form::open(['route' => ['areas.destroy', $key->ida], 'method' => 'DELETE']) }}
                                        {!!Form::submit('Eliminar',['class'=>'btn btn-inverse waves-effect waves-light'  ])!!}
                                        {!!Form::close()!!}
                                        @else
                                        {!!link_to_route('areas.show', $title = 'Restaurar', $parameters = $key->ida, $attributes = ['class'=>'btn btn-info btn-flat btn-addon m-b-10 m-l-5'] )!!} 
                                        
                                        @endif

                                       </td>
                                        </tbody>
                                       @endforeach
                                       @endif
                              
  </tbody>
     
    
</table>


         </main>
 @endsection