@extends('layouts.prod')

@section('content')


				<table class="table table-striped">
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
					@foreach ($trains as $train)
						<tr>
							<td class="text-primary"><strong>{!! $train->numero !!}</strong></td>
							<td class="text-primary"><strong>{!! $train->date !!}</strong></td>
							<td class="text-primary"><strong>{!! $train->horaire !!}</strong></td>
							<td class="text-primary"><strong>{!! $train->destination !!}</strong></td>
							<td class="text-primary"><strong>{!! $train->note !!}</strong></td>
						</tr>
					@endforeach
	  			</tbody>
			</table>


@endsection