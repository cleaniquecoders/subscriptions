@extends('layouts.master')

@section('title', 'Package Details')

@section('content')
	<div class="container">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h2>Package Details <small class="label label-{{ $package->status == 1 ? 'success' : 'danger' }} pull-right">{{ config('package.enum.status')[$package->status] }}</small></h2>
			</div>
			<div class="panel-body">
				<h3>{{ $package->name }} <small>{{ $package->label }}</small></h3>
				<h3>Price <small>{{ config('package.currency') }} {{ $package->price }}</small></h3>
				<h3>Details</h3>
				<p>{{ $package->details or 'No Details Provided' }}</p>
				<a href="{{ route('packages.index') }}" class="btn btn-danger pull-right"> Back</a>
			</div>
		</div>
	</div>
@endsection

@section('scripts')
	<script type="text/javascript" src="{{ url('js/delete.js') }}"></script>
@endsection
