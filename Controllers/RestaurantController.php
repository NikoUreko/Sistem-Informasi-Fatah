<?php

namespace App\Http\Controllers;

use App\Models\Restaurant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use PDF;

class RestaurantController extends Controller
{
    public function index()
    {
        $restaurant = Restaurant::all();
        return view('restaurant.restaurant', compact('restaurant'));
    }


    public function downloadpdf() {
        $restaurant = Restaurant::all();
        $pdf = PDF::loadview('restaurant.restaurant-pdf', ['restaurant' => $restaurant])->setOptions(['defaultFont' => 'sans-serif']);
        return $pdf->stream('laporan_restaurant.pdf');
    }

    public function create()
    {
        return view('restaurant.restaurant-entry');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
            'alamat' => 'required',   
        ]);

     

        restaurant::create([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
        ]);

        return redirect('/restaurant');
    }

    public function edit($id_restaurant)
    {
        $restaurant = Restaurant::find($id_restaurant);
        return view('restaurant.restaurant-edit', compact('restaurant'));
    }

    public function update(Request $request, $id_restaurant)
    {
        $this->validate($request, [
            'nama' => 'required',
            'alamat' => 'required',
        ]);

        $restaurant = Restaurant::find($id_restaurant);

        $restaurant->update([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
        ]);

        return redirect('/restaurant');
    }

    public function delete($id_restaurant)
    {
        $restaurant = Restaurant::find($id_restaurant);
        return view('restaurant.restaurant-hapus', compact('restaurant'));
    }

    public function destroy($id_restaurant)
    {
        $restaurant = Restaurant::find($id_restaurant);
        
        $restaurant->delete();

        return redirect('/restaurant');
    }


}