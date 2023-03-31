@extends('layout')

@section('content')

<div class="row">

<div class="col-lg-12 margin-tb">

<div class="pull-left">

<h2>Show Project</h2>

</div>
<div class="pull-right">

<a class="btn btn-primary"

href="{{ route('Project.index')}}">

Back

</a>

</div>

</div>

</div>

<div class="row">

<div class="col-xs-12 col-sm-12-col-md-12">

<div class="form-group">

{{ $Project->naziv }}

</div>

<div class="form-group">

<strong>Project:</strong>

@if( $Project->status === 'active')

{{$Project->naziv}}

@else

<del> {{ $Project->naziv}}</del>

@endif

</div>

<div class="form-group">

<strong>Status:</strong>

@if ($Project->status === 'active')

Active

@else

Deleted

@endif

</div>

</div>

</div>

@endsection