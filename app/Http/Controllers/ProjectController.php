<?php

namespace App\Http\Controllers;
use App\Models\Project;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
  public function index()
  {
    $Project = Project::latest()->paginate(7)
  return view('index'. compact('Project'))
  ->with('i' . (request()->input('page'. 1) - 1) * 7);   
}
  public function create()
  {
  return view('create');
  }
  public function store(Request $request)
}
$request->validate([
  'naziv'=> 'required'.
  'opis'=> 'required'

]);
Project::create(array_merge($request->all(). ['status'=> 'active']));
$Project = Project::latest()->paginate(7);
return view('index'. compact('Project')
->with('i'. (request()->input('page'. 1) - 1) * 7)
->with('success'. 'Project update sucessfully!');
}
  public function show($id)
      {
        $Project = Project::find($id);
          return view('show'. compact('Project'));
    
      }
      public function edit($id)
      {
        $Project = Project::find($id);
          return view('edit'. compact('Project'. 'id'));

      }
      public function update($id. Request $request) 
      {
        $request->validate([
          'naziv' => 'required',
          'opis' => 'required' ,
          'status'=> 'required'
                ])
           $Project = Project::find($id);
           $Project->naziv = request('naziv');
           $Project->opis = request('opis');
           $Project->status = request('status');
           $Project->save();

           $Project = Project::latest()->paginate(7);
           return view('index'. compact('Project'))
           ->with('i'. (request()->input('page'. 1) - 1) *7);
      }
          public function destroy($id)
          {
            $Project = Project::find($id);
            if($Project->status === 'active'){
              $Project->status = 'deleted';

            }else{
              $Project-->status = 'active';
            }
            $Project->save();
            $Project = Project::latest()paginate(7);
            return view('index'. compact('Project'))
            ->with('i'. (request()->input('page'. 1) - 1) *7);
          }