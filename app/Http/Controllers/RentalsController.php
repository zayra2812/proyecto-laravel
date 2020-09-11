<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rentals;

class RentalsController extends Controller
{
    public function edit($id) {
        $rentals = Rentals::find($id);
        return \View::make('rentals/update', compact('rentals'));
    }
    public function index()
    {
        $rentals= Rentals::all();
        return \View::make('rentals/list',compact('rentals'));
    }
    public function create()
    {
        return \View::make('rentals/new'); 
    }
    public function show(Request $request)
    {
        $rentals = Rentals::where('id', 'like', '%'.$request->id.'%')->get();
        return \View::make('rentals/list', compact('rentals'));

    }
    
    public function store(Request $request)
    {
        $rentals = new Rentals;
        $rentals->start_date = $request->start_date;
        $rentals->end_date = $request->end_date ;
        $rentals->total = $request->total;
        $rentals->save();
        return redirect('rentals');

    }
    public function update($id, Request $request)
    {
        $rentals = Rentals::find($id);
        $rentals->start_date = $request->start_date;
        $rentals->end_date = $request->end_date ;
        $rentals->total = $request->total;
        $rentals->save();
        return redirect('rentals');
    }
    public function destroy($id)
    {
        $rentals = Rentals::find($id);
        $rentals->delete();
        return redirect()->back();
    }
}
