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


					@foreach ($planeLuxs as $planeLux)
						<tr>
							<td class="text-primary"><strong>{!! $planeLux->numero !!}</strong></td>
							<td class="text-primary"><strong>{!! $planeLux->date !!}</strong></td>
							<td class="text-primary"><strong>{!! $planeLux->horaire !!}</strong></td>
							<td class="text-primary"><strong>{!! $planeLux->destination !!}</strong></td>
							<td class="text-primary"><strong>{!! $planeLux->note !!}</strong></td>
						</tr>
					@endforeach
	  			</tbody>
			</table>


@endsection