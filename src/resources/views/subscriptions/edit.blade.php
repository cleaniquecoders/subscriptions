@extends('layouts.master')

@section('title', 'Create new Subscription')

@section('content')
<div class="container">
  <div class="panel panel-default">
    <div class="panel-body">
      {!! Form::open(['route' => ['packages.update', $package->id], 'method' => 'put', 'class' => 'form-horizontal']) !!}
      <fieldset>

      {!! Form::token() !!}

      <!-- Form Name -->
      <legend>New Package Details</legend>

      <!-- Text input-->
       <div class="form-group">
        {!! Form::label('name', 'Name', ['class' => 'col-md-4 control-label']) !!}
        <div class="col-md-4">
          {!! Form::text('name', $package->name, ['class' => 'form-control input-md']) !!}
        </div>
      </div>

      <!-- Text input-->
      <div class="form-group">
        {!! Form::label('label', 'Label', ['class' => 'col-md-4 control-label']) !!}
        <div class="col-md-4">
          {!! Form::text('label', $package->label, ['class' => 'form-control input-md']) !!}
        </div>
      </div>

      <div class="form-group">
        {!! Form::label('status', 'Status', ['class' => 'col-md-4 control-label']) !!}
        <div class="col-md-4">
          {!! Form::select('status', config('package.enum.status'), $package->status, ['class' => 'form-control']) !!}
        </div>
      </div>

      <div class="form-group">
        {!! Form::label('type', 'Type', ['class' => 'col-md-4 control-label']) !!}
        <div class="col-md-4">
          {!! Form::select('type', config('package.enum.type'), $package->type, ['class' => 'form-control']) !!}
        </div>
      </div>

      <div class="form-group">
        {!! Form::label('duration', 'Duration', ['class' => 'col-md-4 control-label']) !!}
        <div class="col-md-4">
          {!! Form::select('duration', config('package.enum.duration'), $package->duration, ['class' => 'form-control']) !!}
        </div>
      </div>

      <div class="form-group">
        {!! Form::label('price', 'Price', ['class' => 'col-md-4 control-label']) !!}
        <div class="col-md-4">
          {!! Form::number('price', $package->price) !!}
        </div>
      </div>

      <div class="form-group">
        {!! Form::label('details', 'Details', ['class' => 'col-md-4 control-label']) !!}
        <div class="col-md-4">
          {!! Form::textarea('details', $package->details, ['class' => 'form-control']) !!}
        </div>
      </div>

      <!-- Button (Double) -->
      <div class="form-group">
        <label class="col-md-4 control-label" for="submit"></label>
        <div class="col-md-8">
          <button id="submit" name="submit" class="btn btn-success">Update</button>
          <a href="{{ url('/packages') }}" class="btn btn-danger">Cancel</a>
        </div>
      </div>

      </fieldset>
      {!! Form::close() !!}
    </div>
  </div>
</div>


@endsection
