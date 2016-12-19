@extends('layouts.master')

@section('title', 'Subscription Details')

@section('content')
	<div class="container">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h2>Subscription Details
					<small class="label label-{{ $subscription->status == 1 ? 'success' : 'danger' }} pull-right">
					{{ config('subscriptions.enum.status')[$subscription->status] }}
					</small>
				</h2>
			</div>
			<div class="panel-body">
				<h3>{{ $subscription->name }} <small>{{ $subscription->label }}</small></h3>
				<h3>Price <small>{{ config('subscription.currency') }} {{ $subscription->price }}</small></h3>
				<h3>Details</h3>
				<p>{{ $subscription->details or 'No Details Provided' }}</p>
				<a href="{{ route('subscriptions.index') }}" class="btn btn-danger pull-right"> Back</a>
			</div>
		</div>
	</div>
@endsection
