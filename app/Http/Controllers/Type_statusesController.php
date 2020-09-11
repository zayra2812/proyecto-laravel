<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Type_statuses as Type_statuses;


class Type_statusesController extends Controller
{
    public function edit($id) {
        $type_statuses = Type_statuses::find($id);
        return \View::make('type_statuses/update', compact('type_statuses'));
    }
    public function index()
    {
        $type_statuses= Type_statuses::all();
        return \View::make('type_statuses/list',compact('type_statuses'));
    }
    public function create()
    {
        return \View::make('type_statuses/new'); 
    }
    public function show(Request $request)
    {
        $type_statuses = Type_statuses::where('name', 'like', '%'.$request->name.'%')->get();
        return \View::make('type_statuses/list', compact('type_statuses'));

    }
    
    public function store(Request $request)
    {
        $type_statuses = new Type_statuses();
        $type_statuses->name = $request->name;
        $type_statuses->save();
        return redirect('type_statuses');

    }
    public function update($id, Request $request)
    {
        $type_statuses = Type_statuses::find($id);
        $type_statuses->name = $request->name;
        $type_statuses->save();
        return redirect('type_statuses');
    }
    public function destroy($id)
    {
        $type_statuses = Type_statuses::find($id);
        $type_statuses->delete();
        return redirect()->back();
    }
}
