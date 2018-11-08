@extends('layouts.dash')

@section('content')
        <main class="mdl-layout__content mdl-blue-grey-500 mdl-color--blue-grey-500 mdl-color-text--blue-grey-50">
            <div class="mdl-grid demo-content">
                @if (session('status'))
                    <div class="alert alert-success" >
                        {{ session('status') }}
                    </div>
                @endif
               <h1>Lista de Brands</h1>
               <div class="mdl-cell mdl-cell--12-col">
                  <div class="col-md">
                     {!! Form::open(['route' => 'brands.store']) !!}
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                           {{ Form::label('name', 'Name Brand', ['class' => 'mdl-textfield__label']) }}
                           {{ Form::text('name', null,['class' => 'mdl-textfield__input']) }}                           
                        </div>
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                           {{ Form::submit('Save Me!', ['class' => 'mdl-button mdl-js-button mdl-button--raised mdl-button--colored']) }}
                        </div>
                     {!! Form::close() !!}                     
                  </div>
               </div>
               <div class="mdl-cell mdl-cell--12-col">
                  <div class="demo-list-action mdl-list">
                     @foreach ($brands as $element)
                        {{-- expr --}}
                       <div class="mdl-list__item">
                         <span class="mdl-list__item-primary-content">                           
                           <span>{{ $element->name }}</span>
                         </span>
                         <a class="mdl-list__item-secondary-action" href="#"><i class="material-icons">star</i></a>
                       </div>                    
                     @endforeach
                  </div>                  
               </div>
            </div>
         </main>
@endsection
