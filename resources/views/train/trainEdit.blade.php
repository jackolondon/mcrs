@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"></div>

                <div class="panel-body">
					{!! Form::open(array('route' => ['train.update', $trains->id] , 'method' => 'POST')) !!}
					
					 <input type="hidden" name="_method" value="PUT">
    

					<!-- Form Name -->
					<legend>Edit train</legend>

					<!-- Text input-->
					<div class="form-group">
						{!! Form::label('numero', 'Numero:', ['class' => 'col-md-4 control-label']) !!}
							  
									{!! Form::text('numero', $trains->numero, ['class' => 'form-control', 'placeholder' => 'numero de train', 'required']) !!}

								
					</div>

				
					<div class="form-group">
						{!! Form::label('date', 'Date:', ['class' => 'col-md-4 control-label']) !!}

						
							{!! Form::date('date', $trains->date, ['class' => 'form-control', 'required']) !!}

						
					</div>


					<div class="form-group">
						{!! Form::label('horaire', 'Horaire:', ['class' => 'col-md-4 control-label']) !!}
						
								{!! Form::time('horaire', $trains->horaire, ['class' => 'form-control', 'required']) !!}

						
					</div>




					
					<div class="form-group">
					{!! Form::label('destination', 'Destination:', ['class' => 'col-md-4 control-label']) !!}

					  
								{!! Form::text('destination', $trains->destination, ['class' => 'form-control', 'placeholder' => 'destination', 'required']) !!}

					  
					</div>

					
					<div class="form-group">
						{!! Form::label('note', 'Note:', ['class' => 'col-md-4 control-label']) !!}

					  
							{!! Form::text('note', $trains->note, ['class' => 'form-control', 'placeholder' => 'note']) !!}

					  
					</div>

					<div class="form-group">
					  <label class="col-md-4 control-label" for="send"></label>
					  
						{!! Form::submit('Envoyer !', ['class' => 'btn btn-success']) !!}					
					  
					</div>
					{!! Form::close() !!}
					<a href="{!! url('train/indexParDate', date('Y-m-d')) !!}" class="btn btn-default">edit trains</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection









