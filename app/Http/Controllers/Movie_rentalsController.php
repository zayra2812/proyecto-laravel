<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie_rental as Movie_rental;

class Movie_rentalController extends Controller
{
    public function edit($id) {
        $movie_rental = Movie_rental::find($id);
        return \View::make('movie_rental/update', compact('movie_rental'));
    }
    public function index()
    {
        $movie_rental= Movie_rental::all();
        return \View::make('movie_rental/list',compact('movie_rental'));
    }
    public function create()
    {
        return \View::make('movie_rental/new'); 
    }
    public function show(Request $request)
    {
        $movie_rental = Movie_rental::where('name', 'like', '%'.$request->name.'%')->get();
        return \View::make('movie_rental/list', compact('movie_rental'));

    }
    
    public function store(Request $request)
    {
        $movie_rental = new Movie_rental();
        $movie_rental->movie_id = $request->movie_id;
        $movie_rental->rental_id = $request->rental_id;
        $movie_rental->prince = $request->prince;
        $movie_rental->observations = $request->observations;
        $movie_rental->save();
        return redirect('movie_rental');
        
    }
    public function update($id, Request $request)
    {
        $movie_rental = Movie_rental::find($id);
        $movie_rental->movie_id = $request->movie_id;
        $movie_rental->rental_id = $request->rental_id;
        $movie_rental->prince = $request->prince;
        $movie_rental->observations = $request->observations;
        $movie_rental->save();
        return redirect('movie_rental');
    }
    public function destroy($id)
    {
        $movie_rental = Movie_rental::find($id);
        $movie_rental->delete();
        return redirect()->back();
    }
}
