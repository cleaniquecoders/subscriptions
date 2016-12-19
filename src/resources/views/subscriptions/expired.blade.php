@extends('layouts.app')

@section('title', 'Subscription Details')

@section('content')
	<div class="container">
		<div class="panel panel-default">
			<div class="panel-heading text-center">
				<h3 class="warning">Opsss! Subscription expired! Please update your subscription.</h3>
			</div>
			<div class="panel-body">
				@include('packages.components.display', ['packages' => $packages])
			</div>
		</div>
	</div>
@endsection
