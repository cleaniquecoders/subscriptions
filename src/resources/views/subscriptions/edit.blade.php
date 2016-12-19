@extends('layouts.master')

@section('title', 'Create new Subscription')

@section('content')
<div class="container">
  <div class="panel panel-default">
    <div class="panel-body">
      {!! Form::open(['route' => ['subscriptions.update', $subscription->id], 'method' => 'PUT', 'class' => 'form-horizontal']) !!}
      <fieldset>

      {!! Form::token() !!}

      <!-- Form Name -->
      <legend>Edit Subscription Details</legend>

      <!-- Text input-->
       <div class="form-group">
        {!! Form::label('name', 'Name', ['class' => 'col-md-4 control-label']) !!}
        <div class="col-md-4">
          {!! Form::text('name', $subscription->name, ['class' => 'form-control input-md']) !!}
        </div>
      </div>

      <!-- Text input-->
      <div class="form-group">
        {!! Form::label('label', 'Label', ['class' => 'col-md-4 control-label']) !!}
        <div class="col-md-4">
          {!! Form::text('label', $subscription->label, ['class' => 'form-control input-md']) !!}
        </div>
      </div>

      <div class="form-group">
        {!! Form::label('status', 'Status', ['class' => 'col-md-4 control-label']) !!}
        <div class="col-md-4">
          {!! Form::select('status', config('subscription.enum.status'), $subscription->status, ['class' => 'form-control']) !!}
        </div>
      </div>

      <div class="form-group">
        {!! Form::label('type', 'Type', ['class' => 'col-md-4 control-label']) !!}
        <div class="col-md-4">
          {!! Form::select('type', config('subscription.enum.type'), $subscription->type, ['class' => 'form-control']) !!}
        </div>
      </div>

      <div class="form-group">
        {!! Form::label('duration', 'Duration', ['class' => 'col-md-4 control-label']) !!}
        <div class="col-md-4">
          {!! Form::select('duration', config('subscriptions.enum.duration'), $subscription->duration, ['class' => 'form-control']) !!}
        </div>
      </div>

      <div class="form-group">
        {!! Form::label('price', 'Price', ['class' => 'col-md-4 control-label']) !!}
        <div class="col-md-4">
          {!! Form::number('price', $subscription->price) !!}
        </div>
      </div>

      <div class="form-group">
        {!! Form::label('details', 'Details', ['class' => 'col-md-4 control-label']) !!}
        <div class="col-md-4">
          {!! Form::textarea('details', $subscription->details, ['class' => 'form-control']) !!}
        </div>
      </div>

      <!-- Button (Double) -->
      <div class="form-group">
        <label class="col-md-4 control-label" for="submit"></label>
        <div class="col-md-8">
          <button id="submit" name="submit" class="btn btn-success">Update</button>
          <a href="{{ route('subscriptions.index') }}" class="btn btn-danger">Cancel</a>
        </div>
      </div>

      </fieldset>
      {!! Form::close() !!}
    </div>
  </div>
</div>


@endsection
