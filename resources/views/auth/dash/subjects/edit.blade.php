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

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                     <br>
                     {!!Form::model($subject,['route' => ['subjects.update',$subject->ids],'method'=>'PUT'])!!} 

              
      
              
                 <br> Materia
               {{ Form::text('subject', null, ['class' => 'form-control', 'placeholder' => 'Aqui va el nombre', 'required' => true])}}
              <br>Activo
               {{ Form::select('active', ['No' => 'Inactive', 'Si' => 'Active'], '1', ['class' => 'form-control']) }}
              <br>Academia de ingles
               {{ Form::select('academy', ['No' => 'Inactive', 'Si' => 'Active'], '1', ['class' => 'form-control']) }}
              <br>Carrera
               {{ Form::select('idc', $career,[] ,['class' => 'form-control this','placeholder', 'placeholder' => 'Selecciona carrera', 'required' => true]) }}  
               <br>Area
               {{ Form::select('ida', $areas,[] ,['class' => 'form-control this','placeholder', 'placeholder' => 'Selecciona area', 'required' => true]) }}                                        
               <br>{{ form::submit('Guardar', ['class' => 'btn btn-primary btn-lg']) }}
               {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
         </main>
 @endsection