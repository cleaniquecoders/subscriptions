@extends('layouts.app')

@section('title', 'Unsubscribed Users')

@section('content')
	<div class="container">
		<div class="panel panel-default">
			<div class="panel-heading text-center">
				<h3 class="warning">You're not subscribed yet. Please choose your subscription.</h3>
			</div>
			<div class="panel-body">
				@include('components.display', ['subscriptions' => $subscriptions])
			</div>
		</div>
	</div>
@endsection
