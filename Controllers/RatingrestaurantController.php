<?php

namespace App\Http\Controllers;

use App\Models\Ratingrestaurant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;


class RatingrestaurantController extends Controller
{
    public function index()
    {
        $ratingrestaurant = Ratingrestaurant::all();
        return view('ratingrestaurant.ratingrestaurant', compact('ratingrestaurant'));
    }

    public function create()
    {
        return view('ratingrestaurant.ratingrestaurant-entry');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'penilaian' => 'required',
            'ulasan' => 'required',   
        ]);



        ratingrestaurant::create([
            'penilaian' => $request->penilaian,
            'ulasan' => $request->ulasan,
        ]);

        return redirect('/ratingrestaurant');
    }

    public function edit($id_ratingrestaurant)
    {
        $ratingrestaurant = Ratingrestaurant::find($id_ratingrestaurant);
        return view('ratingrestaurant.ratingrestaurant-edit', compact('ratingrestaurant'));
    }

    public function update(Request $request, $id_ratingrestaurant)
    {
        $this->validate($request, [
            'penilaian' => 'required',
            'ulasan' => 'required',
        ]);

        $ratingrestaurant = Ratingrestaurant::find($id_ratingrestaurant);

        $ratingrestaurant->update([
            'penilaian' => $request->penilaian,
            'ulasan' => $request->ulasan,
        ]);

        return redirect('/ratingrestaurant');
    }

    public function delete($id_ratingrestaurant)
    {
        $ratingrestaurant = Ratingrestaurant::find($id_ratingrestaurant);
        return view('ratingrestaurant.ratingrestaurant-hapus', compact('ratingrestaurant'));
    }

    public function destroy($id_ratingrestaurant)
    {
        $ratingrestaurant = Ratingrestaurant::find($id_ratingrestaurant);
        
        $ratingrestaurant->delete();

        return redirect('/ratingrestaurant');
    }


}