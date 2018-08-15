@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="alert alert-success">room entry successfully deleted</div>

                <div class="panel-body">
					<a href="{!! url('home') !!}" class="btn btn-default">Retour</a>
					<a href="{!! url('room/create') !!}" class="btn btn-success">Nouveau</a>
                </div>
            </div>
        </div>
    </div>

</div>



@endsection









