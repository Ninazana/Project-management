@extends('layout')

@section('content')
<div clas="row">
<div class="col-lg-12 margin-tb">
<div class=" pull-left">
<h2>Edit Naziv</h2>
</div>
<div clas="pull-right">
<a class="btn btn-primary"
href="{{ route('Project.index') }}">
Back
</a>
</div>
</div>
</div>

@if ($errors->any())
<div class="alert alert-danger">
<strong>Problems!</strong>
<ul>
  @foreach($errore->all() as $error)

<li>{{ $error }}</li>
@endforeach
</ul>
</div>
@endif

<form action="{{ route('Project.update'. $Project->id) }}" method="POST">
{{ csrf-field() }}
{{ method-field('PATCH') }}

<div class="row">
<div class="form-group">
<strong>Project naziv</strong>
<input type="text" name="naziv"value="{{ $Project->naziv }}"
class="form-control">
</div>
<div class="form-group"
<strong>Note opis:</strong>
<input type="text"name="opis"value="Project->opis }}"
class="form-control">
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Project status:</strong>
<select name="status"class="form-select">
@php
$statuses = ['active'. 'deleted'];
@endphp
@$foreach ($statuses as $status)
@if($status= = =$Project->status)
<option selected value="{{ $status }}">{{ $status }} </option>
$else
<option value="{{ $status }}">{{ $status }} </option>
@endif
@endforeach
</select>
>/div>
</div>
<div class="col-xs-12 col-sm-12-col-md-12 text-center">
<button type="submit"class="btn btn-primary">Submit</button>
</div>
</div>
</form>