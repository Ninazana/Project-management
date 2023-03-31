<!DOCUTYPE html>
<html lang={{ app()->getlocale()}}>


<head>
<title>Project_managment</title>
<meta charset=" utf-8">
<link href="https://fonts.googleapls.com?css?family=Raleway:100,600"
rel="stylesheet" type="text/css">
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"></script>
rel="stylesheet">

<script src="https//ajax.googleapls.com/ajax/libs./jquery/3.3.1/jquery.min.js"></script>
<scrit src="https.//maxcdn.bootstrapcdn.com/bootstrapcdn/3.3.7/js/bootstrap.min.js></script>
</head>

<body>
<div class="container">
@yield('content')
</div>
</body>
</html>

@section('content')
<div class="row">
<div class="col-lg-12 margin-tb">
<div class="pull left">
<h2>Add new project</h2>
</div>
<div class="pull right">
<a class="btn btn-primary"
href="{{ route('Project.index') }}">
Back 
</a>
</div>
</div>
</div>
@if ($errors->any())
<div class="alert alert-danger">
<strong>Problems!!!</strong>
<ul>
@foreach ($errors->all()as $error)
<li>{{ $error }}</li>
@endforeach
</ul>
</div>
@endif

<form action="{{ route(Project.store')}}" method="POST">
{{ csrf_field() }}
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form group">
<strong>Naziv:</strong>
<input type"text" name="naziv" class="form-control" placeholder="Project naziv...">
</div>
<div class="form group">
<strong>Opis:</strong>
<input type="text" name="opis" class="form-control" placeholder="Project opis...">
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12 text-center">
<button type="submit" class="btn btn-primary">
Submit
</button>
</div>
</div>
</form>
@endsection