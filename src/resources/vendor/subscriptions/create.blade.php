@extends('layouts.master')

@section('title', 'Create new Subscription')

@section('content')
<div class="container">
  <div class="panel panel-default">
    <div class="panel-body">
      {!! Form::open(['route' => 'packages.store', 'method' => 'POST', 'class' => 'form-horizontal']) !!}
      <fieldset>

      {!! Form::token() !!}

      <!-- Form Name -->
      <legend>New Package Details</legend>

      <!-- Text input-->
       <div class="form-group">
        {!! Form::label('name', 'Name', ['class' => 'col-md-4 control-label']) !!}
        <div class="col-md-4">
          {!! Form::text('name', null, ['class' => 'form-control input-md']) !!}
        </div>
      </div>

      <!-- Text input-->
      <div class="form-group">
        {!! Form::label('label', 'Label', ['class' => 'col-md-4 control-label']) !!}
        <div class="col-md-4">
          {!! Form::text('label', null, ['class' => 'form-control input-md']) !!}
        </div>
      </div>

      <div class="form-group">
        {!! Form::label('status', 'Status', ['class' => 'col-md-4 control-label']) !!}
        <div class="col-md-4">
          {!! Form::select('status', config('package.enum.status'), null, ['class' => 'form-control']) !!}
        </div>
      </div>

      <div class="form-group">
        {!! Form::label('type', 'Type', ['class' => 'col-md-4 control-label']) !!}
        <div class="col-md-4">
          {!! Form::select('type', config('package.enum.type'), null, ['class' => 'form-control']) !!}
        </div>
      </div>

      <div class="form-group">
        {!! Form::label('duration', 'Duration', ['class' => 'col-md-4 control-label']) !!}
        <div class="col-md-4">
          {!! Form::select('duration', config('package.enum.duration'), null, ['class' => 'form-control']) !!}
        </div>
      </div>

      <div class="form-group">
        {!! Form::label('price', 'Price', ['class' => 'col-md-4 control-label']) !!}
        <div class="col-md-4">
          {!! Form::number('price', 0.00) !!}
        </div>
      </div>

      <div class="form-group">
        {!! Form::label('details', 'Details', ['class' => 'col-md-4 control-label']) !!}
        <div class="col-md-4">
          {!! Form::textarea('details', null, ['class' => 'form-control']) !!}
        </div>
      </div>

      <!-- Button (Double) -->
      <div class="form-group">
        <label class="col-md-4 control-label" for="submit"></label>
        <div class="col-md-8">
          <button id="submit" name="submit" class="btn btn-success">Create</button>
          <a href="{{ url('/packages') }}" class="btn btn-danger">Cancel</a>
        </div>
      </div>

      </fieldset>
      {!! Form::close() !!}
    </div>
  </div>
</div>


@endsection
