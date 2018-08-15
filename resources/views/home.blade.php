@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif






			<table class="table">
				<thead>
					<tr>
					</tr>
				</thead>
				<tbody>
						<tr>
							<td class="text-primary"><strong>Salles</strong></td>
							<td class="text-primary"><strong><a href="{!! url('room/create') !!}" class="btn btn-primary col-md-8">add room</a></strong></td>
							<td class="text-primary"><a href="{!! url('room/indexParDate', date('Y-m-d')) !!}" class="btn btn-default col-md-8">edit rooms</a></td>
							
						</tr>
						<tr>
							<td class="text-primary"><strong>Trains</strong></td>
							<td class="text-primary"><strong><a href="{!! url('train/create') !!}" class="btn btn-primary col-md-8">add train</a></strong></td>
							<td class="text-primary"><a href="{!! url('train/indexParDate', date('Y-m-d')) !!}" class="btn btn-default col-md-8">edit trains</a></td>
						</tr>
						<tr>
							<td class="text-primary"><strong>Lorraine Airport</strong></td>
							<td class="text-primary"><strong><a href="{!! url('planeMetz/create') !!}" class="btn btn-primary col-md-8">add plane from Metz</a></strong></td>
							<td class="text-primary"><a href="{!! url('planeMetz/indexParDate', date('Y-m-d')) !!}" class="btn btn-default col-md-8">edit plane from Metz</a></td>
						</tr>
						<tr>
							<td class="text-primary"><strong>Lux Airport</strong></td>
							<td class="text-primary"><strong><a href="{!! url('planeLux/create') !!}" class="btn btn-primary col-md-8">add plane from Lux</a></strong></td>
							<td class="text-primary"><a href="{!! url('planeLux/indexParDate', date('Y-m-d')) !!}" class="btn btn-default col-md-8">edit plane from Lux</a></td>
						</tr>
	  			</tbody>
			</table>


















			<!--
					<div class="form-group">
						<h2>Salles</h2>

						<a href="{!! url('room/create') !!}" class="btn btn-primary col-md-6">add room</a><a href="{!! url('room') !!}" class="btn btn-warning col-md-6">edit rooms</a>	  								
					</div>
						

					<div class="form-group">
						<h2>Lorraine TGV</h2>
						<a href="{!! url('train/create') !!}" class="btn btn-primary col-md-6">add train</a><a href="{!! url('train') !!}" class="btn btn-warning col-md-6">edit trains</a>
					</div>

					<div class="form-group">
						<h2>Lorraine Airport</h2>
						<a href="{!! url('planeMetz/create') !!}" class="btn btn-primary col-md-6">add plane from Metz</a><a href="{!! url('planeMetz') !!}" class="btn btn-warning col-md-6">edit plane from Metz</a>
					</div>

					<div class="form-group">
						<h2>Lux Airport</h2>
						<a href="{!! url('planeLux/create') !!}" class="btn btn-primary col-md-6">add plane from Lux</a><a href="{!! url('planeLux') !!}" class="btn btn-warning col-md-6">edit plane from Lux</a>
					</div> -->

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
