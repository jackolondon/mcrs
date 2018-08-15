@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"></div>

                <div class="panel-body">
					{!! Form::open(array('route' => ['room.update', $room->id] , 'method' => 'POST')) !!}
					
					 <input type="hidden" name="_method" value="PUT">
    

					<!-- Form Name -->
					<legend>Edit room</legend>

					<!-- Text input-->
					<div class="form-group">
						{!! Form::label('numero', 'Numero:', ['class' => 'col-md-4 control-label']) !!}
							  
							{!! Form::text('numero', $room->numero, ['class' => 'form-control', 'placeholder' => 'numero de salle', 'required']) !!}

								
					</div>

				
					<div class="form-group">
						{!! Form::label('date', 'Date:', ['class' => 'col-md-4 control-label']) !!}

						
							{!! Form::date('date', $room->date, ['class' => 'form-control', 'required']) !!}

						
					</div>


					<div class="form-group">
						{!! Form::label('horaire', 'Horaire:', ['class' => 'col-md-4 control-label']) !!}
						
								{!! Form::time('horaire', $room->horaire, ['class' => 'form-control', 'required']) !!}

						
					</div>
					
					<div class="form-group">
						{!! Form::label('note', 'Note:', ['class' => 'col-md-4 control-label']) !!}

					  
							{!! Form::text('note', $room->note, ['class' => 'form-control', 'placeholder' => 'note', 'required']) !!}

					  
					</div>

					<div class="form-group">
					  <label class="col-md-4 control-label" for="send"></label>
					  
						{!! Form::submit('Envoyer !', ['class' => 'btn btn-success']) !!}					
					  
					</div>
					{!! Form::close() !!}
					<a href="{!! url('room/indexParDate', date('Y-m-d')) !!}" class="btn btn-default">edit rooms</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection









