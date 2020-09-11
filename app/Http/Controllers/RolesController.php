<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Roles as Roles;

class RolesController extends Controller
{
    public function edit($id) {
        $roles = Roles::find($id);
        return \View::make('roles/update', compact('roles'));
    }
    public function index()
    {
        $roles= Roles::all();
        return \View::make('roles/list',compact('roles'));
    }
    public function create()
    {
        return \View::make('roles/new'); 
    }
    public function show(Request $request)
    {
        $roles = roles::where('name', 'like', '%'.$request->name.'%')->get();
        return \View::make('roles/list', compact('roles'));

    }
    
    public function store(Request $request)
    {
        $roles = new Roles();
        $roles->name = $request->name;
        $roles->save();
        return redirect('movie');

    }
    public function update($id, Request $request)
    {
        $roles = Roles::find($id);
        $roles->name = $request->name;
        $roles->save();
        return redirect('roles');
    }
    public function destroy($id)
    {
        $roles = Roles::find($id);
        $roles->delete();
        return redirect()->back();
    }
}
