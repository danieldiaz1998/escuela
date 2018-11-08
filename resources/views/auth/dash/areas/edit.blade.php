


               {!! Form::open(['route' => ['areas.update', $key->ida], 'method' => 'PUT']) !!}
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h4 class="modal-title">Category {{ $key->area }}</h4>
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                        <i class="material-icons">clear</i>
                      </button>
                    </div>
                    <div class="modal-body">
                      
               {{ Form::label('area', 'Ingresa el Nombre') }}
               {{ Form::text('area', $key->area, ['class' => 'form-control', 'placeholder' => 'Aqui va el nombre', 'required' => true])}}
              
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default btn-link" data-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-success">Save</button>
                    </div>
                  </div>
                </div>
                {!! Form::close() !!}
              </div>
              <!--  End Modal -->