@extends('layouts.master')

@section('title', 'Subscription List')

@section('content')
<div class="container">
	<div class="panel panel-default">
		<div class="panel-body">
			<a href="{{ route('subscriptions.create') }}" class="btn btn-success pull-right">
				<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
			</a>
			<table class="table table-condensed table-hover">
				<thead>
					<tr>
						<th>Name</th>
						<th>Label</th>
						<th>Status</th>
						<th>Price</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					{{-- comment here --}}
					@forelse($subscriptions as $subscription)
					<tr>
						<td>{{ $subscription->name }}</td>
						<td>{{ $subscription->label }}</td>
						<td>{{ config('subscription.enum.status')[$subscription->status] }}</td>
						<td>{{ config('subscription.currency') }} {{ $subscription->price }}</td>
						<td>
							<div class="btn-group">
								<a href="{{ route('subscsriptions.show', ['id' => $subscription->id]) }}" class="btn btn-default">Details</a>

								<a href="{{ route('subscsriptions.edit', ['id' => $subscription->id]) }}" class="btn btn-primary">Edit</a>

							    <a href="{{ route('subscsriptions.destroy', ['id' => $subscription->id]) }}"
							    	class="btn btn-danger"
							    	onclick="event.preventDefault();
							    			if(confirm('{!! $confirm or 'Are you sure want to delete this record?' !!}')){document.getElementById('action-subscription-form-{{ $subscription->id }}').submit();}">
							    	Delete
							    </a>

							    <form id="action-subscription-form-{{ $subscription->id }}"
							    	action="{{ route('subscsriptions.destroy', ['id' => $subscription->id]) }}"
							    	method="POST" style="display: none;">
							        {{ csrf_field() }}
							        {{ method_field('DELETE') }}
							    </form>
							</div>

						</td>
					</tr>
					@empty
					<tr>
						<td colspan="5">No subscriptions available</td>
					</tr>
					@endforelse
				</tbody>
			</table>
			<div class="pull-right">
				{{ $subscriptions->links() }}
			</div>
		</div>
	</div>
</div>

@endsection


@section('scripts')
	<script type="text/javascript" src="{{ url('/js/delete.js') }}"></script>
@endsection
