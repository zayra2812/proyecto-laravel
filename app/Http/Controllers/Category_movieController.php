<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category_movie as Category_movie;

class Category_movieController extends Controller
{
    public function edit($id) {
        $movie = Category_movie::find($id);
        return \View::make('category_movie/update', compact('category_movie'));
    }
    public function index()
    {
        $movies= Category_movie::all();
        return \View::make('category_movie/list',compact('category_movie'));
    }
    public function create()
    {
        return \View::make('category_movie/new'); 
    }
    public function show(Request $request)
    {
        $movies = Category_movie::where('movie_id', 'like', '%'.$request->name.'%')->get();
        return \View::make('category_movie/list', compact('category_movie'));

    }
    
    public function store(Request $request)
    {
        $category_movie = new Category_movie();
        $category_movie->movie_id = $request->movie_id;
        $category_movie->category_id = $request->category_id;
        $category_movie->save();
        return redirect('category_movie');

    }
    public function update($id, Request $request)
    {
        $category_movie = Category_movie::find($id);
        $category_movie->movie_id = $request->movie_id;
        $category_movie->category_id = $request->category_id;
        $category_movie->save();
        return redirect('category_movie');
    }
    public function destroy($id)
    {
        $category_movie = Category_movie::find($id);
        $category_movie->delete();
        return redirect()->back();
    }
}
