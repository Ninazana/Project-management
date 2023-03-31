@extends('layout')

@section('content')
<div class "row">
<div class="col-lg-12 margin-tb">
<div class="pull-left">
  <h2>Project_managment</h2>
  </div>
  <div class="pull-right">
  <a class="btn btn-success" href="{{ route('Project_management.Create')}}">

  Add New Project
    
    </a>
    </div>
    </div>
    </div>

    @if($message::get('success'))
    <div class="alert-alert-success">
    <p>{{ $message}}</p>
    </div>
    $endif

    <table class="table table-bordered">
    <tr>
            <th>id</th>
            <th>naziv</th>
            <th>opis</th>
            <th>nadlezni</th>
            <th>status</th>
            <th>datumP</th>
            <th>datumZ</th>
            <th style="width:200px">Action</th>
            </tr>

            $foreach($Project_management as $project-management)
            <tr>
            <td>{{ ++i }}</td>
            <td>{{ $project->naziv}}
            @if ($project->naziv =='deleted')
             <td><del>{{$project->text }}</del></td>
             <td>Deleted</td>

             @else
             <td>{{$project->text }}</td>
             <td>Active</td>

             @endif
             '<td>
             <form action="{{ route('Project_mangement.destroy' . $project->id)}}" method="POST">
             <a class="btn btn-info"
             href="{{ route('Project_management.show' . $project->id)}}">
             Show
             </a>
             <a class="btn btn-primary"
             href="{{ route('Project_management.edit' . $project->id)}}">
             Edit
             </a>

             {{-- @csrf
             @method('DELETE')
             --}} 
             {{ csrf_field() }
             {{ method_field('DELETE') }} 
             
             <button type="submit"class="btn btn_danger">
             Edit naziv
             </button>

             </form>
             </td>
             </tr>
             @endforeach
             </table>
             {!! $Project_management->links() !!}
             @endsection
             }}