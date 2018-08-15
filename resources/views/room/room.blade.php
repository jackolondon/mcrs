@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"></div>

                <div class="panel-body">
					{!! Form::open(array('route' => 'room.store', 'method' => 'POST')) !!}

  

					<!-- Form Name -->
					<legend>Ajouter titre de salle</legend>

					<!-- Text input-->

								@for ($i = 1; $i < 15 ; $i++)

									<div class="form-check form-check-inline">
									<input class="form-check-input" type="radio" name="numero" id="inlineRadio1" value="{{ $i }}">
									<label class="form-check-label" for="inlineRadio1">{{ $i }}</label>
									</div>
								@endfor


				
					<div class="form-group">
						{!! Form::label('date', 'Date:', ['class' => 'col-md-4 control-label']) !!}

						
							{!! Form::date('date', null, ['class' => 'form-control', 'required']) !!}

						
					</div>


					<div class="form-group">
						{!! Form::label('horaire', 'Horaire:', ['class' => 'col-md-4 control-label']) !!}
						
								{!! Form::time('horaire', null, ['class' => 'form-control', 'required']) !!}

						
					</div>
				
					<div class="form-group">
						{!! Form::label('note', 'Note:', ['class' => 'col-md-4 control-label']) !!}

					  
							{!! Form::text('note', null, ['class' => 'form-control', 'placeholder' => 'note' , 'required']) !!}

					  
					</div>

					<div class="form-group">
					  <label class="col-md-4 control-label" for="send"></label>
					  
						{!! Form::submit('Envoyer !', ['class' => 'btn btn-success']) !!}					
					  
					</div>
					{!! Form::close() !!}
					<a href="{!! url('home') !!}" class="btn btn-default">Retour</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection









