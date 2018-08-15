@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"></div>

                <div class="panel-body">

				<legend>Lux Airport</legend>

				{!! Form::date('date', $date, ['id' => 'dateSelector', 'class' => 'form-control']) !!}

				<table class="table">
				<thead>
					<tr>
						<th>Numero</th>
						<th>Date</th>
						<th>Horaire</th>
						<th>Destination</th>
						<th>Note</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($planeLuxs as $planeLux)
						<tr>
							
							<td class="text-primary"><strong>{!! $planeLux->numero !!}</strong></td>
							<td class="text-primary"><strong>{!! $planeLux->date !!}</strong></td>
							<td class="text-primary"><strong>{!! $planeLux->horaire !!}</strong></td>
							<td class="text-primary"><strong>{!! $planeLux->destination !!}</strong></td>
							<td class="text-primary"><strong>{!! $planeLux->note !!}</strong></td>
							<td>{!! link_to_route('planeLux.edit', 'Modifier', [$planeLux->id], ['class' => 'btn btn-warning btn-block']) !!}</td>
							<td>
								{!! Form::open(array('route' => ['planeLux.destroy', $planeLux->id] , 'method' => 'DELETE')) !!}
								{!! Form::submit('Delete !', ['class' => 'btn btn-danger']) !!}	
								{{ Form::close() }}
							</td>
						</tr>
					@endforeach
	  			</tbody>
			</table>
		</div>
					<a href="{!! url('home') !!}" class="btn btn-default">Retour</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')
<script type= text/javascript>
	var url = '{!! url('planeLux/indexParDate') !!}' + '/';

	var datePicker = document.getElementById('dateSelector');

	datePicker.addEventListener('change', function(){
		window.location = url + datePicker.value;
	});

</script>
@endsection







