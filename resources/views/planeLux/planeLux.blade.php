@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"></div>

                <div class="panel-body">
					{!! Form::open(array('route' => 'planeLux.store', 'method' => 'POST')) !!}

  

					<!-- Form Name -->
					<legend>Lux Airport</legend>

					<!-- Text input-->
					<div class="form-group">
						{!! Form::label('numero', 'Numero:', ['class' => 'col-md-4 control-label']) !!}
							  
									{!! Form::text('numero', null, ['class' => 'form-control', 'placeholder' => 'numero de vol', 'required']) !!}

								
					</div>

				
					<div class="form-group">
						{!! Form::label('date', 'Date:', ['class' => 'col-md-4 control-label']) !!}

						
							{!! Form::date('date', null, ['class' => 'form-control', 'required']) !!}

						
					</div>


					<div class="form-group">
						{!! Form::label('horaire', 'Horaire:', ['class' => 'col-md-4 control-label']) !!}
						
								{!! Form::time('horaire', null, ['class' => 'form-control', 'required']) !!}

						
					</div>




					
					<div class="form-group">
					{!! Form::label('destination', 'Destination:', ['class' => 'col-md-4 control-label']) !!}

					  
								{!! Form::text('destination', null, ['class' => 'form-control', 'placeholder' => 'destination', 'required']) !!}

					  
					</div>

					
					<div class="form-group">
						{!! Form::label('note', 'Note:', ['class' => 'col-md-4 control-label']) !!}

					  
							{!! Form::text('note', null, ['class' => 'form-control', 'placeholder' => 'note']) !!}

					  
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









