<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories as Categories;

class CategoriesController extends Controller
{ 
    public function edit($id) {
        $movie = Categories::find($id);
        return \View::make('categories/update', compact('categories'));
    }
    public function index()
    {
        $movies= Categories::all();
        return \View::make('categories/list',compact('categories'));
    }
    public function create()
    {
        return \View::make('categories/new'); 
    }
    public function show(Request $request)
    {
        $categories = Categories::where('name', 'like', '%'.$request->name.'%')->get();
        return \View::make('categories/list', compact('categories'));

    }
    
    public function store(Request $request)
    {
        $categories = new Categories();
        $categories->name = $request->name;
        $categories->save();
        return redirect('categories');

    }
    public function update($id, Request $request)
    {
        $categories = Categories::find($id);
        $categories->name = $request->name;
        $categories->save();
        return redirect('categories');
    }
    public function destroy($id)
    {
        $categories = Categories::find($id);
        $categories->delete();
        return redirect()->back();
    }
    


}
