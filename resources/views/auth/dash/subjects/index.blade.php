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
     @if(count($subjects) > 0)
    @foreach($subjects as $subject)
    <tr>
      <td>{{ $subject->ids}}</td>
      <td>{{ $subject->subject }}</td>
      <td>{{ $subject->active }}</td>
       <td>{{ $subject->academy }}</td>
      <td>{{ $subject->idc }}</td>
      <td>{{ $subject->ida }}</td>
      <td>{{ $subject->created_at }}</td>
      <td>{{ $subject->updated_at }}</td>
      <td>
                                        @if($subject->deleted_at =="")
                                        {!!link_to_route('subjects.edit', $title = 'Editar', $parameters = $subject->ids, $attributes = ['class'=>'btn btn-success btn-flat btn-addon m-b-10 m-l-5'])!!} 
                                        {!!Form::open(['route' => ['subjects.destroy',$subject->ids],'method'=>'DELETE'])!!} 
                                        {!!Form::submit('Eliminar',['class'=>'btn btn-inverse waves-effect waves-light'  ])!!}
                                        {!!Form::close()!!}
                                        @else
                                        {!!link_to_route('subjects.show', $title = 'Restaurar', $parameters = $subject->ids, $attributes = ['class'=>'btn btn-success waves-effect waves-light m-r-10'] )!!} 
                                        
                                        @endif

                                       </td>
                                        </tbody>
                                       @endforeach
                                       @endif
                                   </table>
           
          </td>

          </tbody>
      
          
       
         </tr>

</table>

@endsection