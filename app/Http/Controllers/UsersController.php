<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User as Users;

class UsersController extends Controller
{
    public function edit($id) {
        $users = Users::find($id);
        return \View::make('users/update', compact('users'));
    }
    public function index()
    {
        $users= Users::all();
        return \View::make('users/list',compact('users'));
    }
    public function create()
    {
        return \View::make('users/new'); 
    }
    public function show(Request $request)
    {
        $users =  Users::where('name', 'like', '%'.$request->name.'%')->get();
        return \View::make('users/list', compact('users'));

    }
    
    public function store(Request $request)
    {
        $users = new Users();
        $users->name = $request->name;
        $users->email = $request->email;
        $users->password = $request->password;
        $users->save();
        return redirect('users');

    }
    public function update($id, Request $request)
    {
        $users = Users::find($id);
        $users->name = $request->name;
        $users->email = $request->email;
        $users->password = $request->password;
        $users->save();
        return redirect('users');
    }
    public function destroy($id)
    {
        $users = Users::find($id);
        $users->delete();
        return redirect()->back();
    }
}
