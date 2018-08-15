@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"></div>

                <div class="panel-body">

				<legend>Rooms</legend>

				{!! Form::date('date', $date, ['id' => 'dateSelector', 'class' => 'form-control']) !!}

				<table class="table">
				<thead>
					<tr>
						<th>Numero</th>
						<th>Date</th>
						<th>Horaire</th>
						<th>Note</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($rooms as $room)
						<tr>
							<td class="text-primary"><strong>{!! $room->numero !!}</strong></td>
							<td class="text-primary"><strong>{!! $room->date !!}</strong></td>
							<td class="text-primary"><strong>{!! $room->horaire !!}</strong></td>
							<td class="text-primary"><strong>{!! $room->note !!}</strong></td>
							<td>{!! link_to_route('room.edit', 'Edit', [$room->id], ['class' => 'btn btn-warning']) !!}</td>

							<td>
								{!! Form::open(array('route' => ['room.destroy', $room->id] , 'method' => 'DELETE')) !!}
									{!! Form::submit('Delete !', ['class' => 'btn btn-danger']) !!}	
								{{ Form::close() }}
							</td>


							<!-- <td>{!! link_to_route('room.destroy', 'Delete', [$room->id], ['class' => 'btn btn-danger']) !!}</td> -->
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
	var url = '{!! url('room/indexParDate') !!}' + '/';

	var datePicker = document.getElementById('dateSelector');

	datePicker.addEventListener('change', function(){
		window.location = url + datePicker.value;
	});

</script>
@endsection











