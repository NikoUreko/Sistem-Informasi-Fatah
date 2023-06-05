<?php

namespace App\Http\Controllers;

use App\Models\Drink;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use PDF;

class DrinkController extends Controller
{
    public function index()
    {
        $drink = Drink::all();
        return view('drink.drink', compact('drink'));
    }

    public function downloadpdf() { 
        $drink = Drink::all();
        $pdf = PDF::loadview('drink.drink-pdf', ['drink' => $drink])->setOptions(['defaultFont' => 'sans-serif']);
        return $pdf->stream('laporan_drink.pdf');
    }

    public function create()
    {
        return view('drink.drink-entry');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
            'diskon' => 'required',
            'harga' => 'required',   
        ]);

        drink::create([
            'nama' => $request->nama,
            'diskon' => $request->diskon,
            'harga' => $request->harga,
        ]);

        return redirect('/drink');
    }

    public function edit($id_drink)
    {
        $drink = Drink::find($id_drink);
        return view('drink.drink-edit', compact('drink'));
    }

    public function update(Request $request, $id_drink)
    {
        $this->validate($request, [
            'nama' => 'required',
            'diskon' => 'required',
            'harga' => 'required',
        ]);

        $drink = Drink::find($id_drink);

        $drink->update([
            'nama' => $request->nama,
            'diskon' => $request->diskon,
            'harga' => $request->harga,
        ]);

        return redirect('/drink');
    }

    public function delete($id_drink)
    {
        $drink = Drink::find($id_drink);
        return view('drink.drink-hapus', compact('drink'));
    }

    public function destroy($id_drink)
    {
        $drink = drink::find($id_drink);
        
        $drink->delete();

        return redirect('/drink');
    }


}