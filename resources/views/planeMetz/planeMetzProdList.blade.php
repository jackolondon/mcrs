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
					@foreach ($planeMetzs as $planeMetz)
						<tr>
							<td class="text-primary"><strong>{!! $planeMetz->numero !!}</strong></td>
							<td class="text-primary"><strong>{!! $planeMetz->date !!}</strong></td>
							<td class="text-primary"><strong>{!! $planeMetz->horaire !!}</strong></td>
							<td class="text-primary"><strong>{!! $planeMetz->destination !!}</strong></td>
							<td class="text-primary"><strong>{!! $planeMetz->note !!}</strong></td>
						</tr>
					@endforeach
	  			</tbody>
			</table>


@endsection