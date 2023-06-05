<?php

namespace App\Http\Controllers;

use App\Models\Food;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use PDF;

class FoodController extends Controller
{
    public function index()
    {
        $food = Food::all();
        return view('food.food', compact('food'));
    }


    public function downloadpdf() { 
        $food = Food::all();
        $pdf = PDF::loadview('food.food-pdf', ['food' => $food])->setOptions(['defaultFont' => 'sans-serif']);
        return $pdf->stream('laporan_food.pdf');
    }

    public function create()
    {
        return view('food.food-entry');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
            'diskon' => 'required',
            'harga' => 'required',   
        ]);


        food::create([
            'nama' => $request->nama,
            'diskon' => $request->diskon,
            'harga' => $request->harga,
        ]);

        return redirect('/food');
    }

    public function edit($id_food)
    {
        $food = Food::find($id_food);
        return view('food.food-edit', compact('food'));
    }

    public function update(Request $request, $id_food)
    {
        $this->validate($request, [
            'nama' => 'required',
            'diskon' => 'required',
            'harga' => 'required',
        ]);

        $food = Food::find($id_food);

        $food->update([
            'nama' => $request->nama,
            'diskon' => $request->diskon,
            'harga' => $request->harga,
        ]);

        return redirect('/food');
    }

    public function delete($id_food)
    {
        $food = Food::find($id_food);
        return view('food.food-hapus', compact('food'));
    }

    public function destroy($id_food)
    {
        $food = Food::find($id_food);
        
        $food->delete();

        return redirect('/food');
    }


}