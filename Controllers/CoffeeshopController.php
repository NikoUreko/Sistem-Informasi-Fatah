<?php

namespace App\Http\Controllers;

use App\Models\Coffeeshop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use PDF;

class CoffeeshopController extends Controller
{
    public function index()
    {
        $coffeeshop = Coffeeshop::all();
        return view('coffeeshop.coffeeshop', compact('coffeeshop'));
    }

    public function downloadpdf() {
        $coffeeshop = Coffeeshop::all();
        $pdf = PDF::loadview('coffeeshop.coffeeshop-pdf', ['coffeeshop' => $coffeeshop])->setOptions(['defaultFont' => 'sans-serif']);
        return $pdf->stream('laporan_coffeeshop.pdf');
    }

    public function create()
    {
        return view('coffeeshop.coffeeshop-entry');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
            'alamat' => 'required',   
        ]);



        coffeeshop::create([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
        ]);

        return redirect('/coffeeshop');
    }

    public function edit($id_coffeeshop)
    {
        $coffeeshop = Coffeeshop::find($id_coffeeshop);
        return view('coffeeshop.coffeeshop-edit', compact('coffeeshop'));
    }

    public function update(Request $request, $id_coffeeshop)
    {
        $this->validate($request, [
            'nama' => 'required',
            'alamat' => 'required',
        ]);

        $coffeeshop = Coffeeshop::find($id_coffeeshop);

        $coffeeshop->update([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
        ]);

        return redirect('/coffeeshop');
    }

    public function delete($id_coffeeshop)
    {
        $coffeeshop = Coffeeshop::find($id_coffeeshop);
        return view('coffeeshop.coffeeshop-hapus', compact('coffeeshop'));
    }

    public function destroy($id_coffeeshop)
    {
        $coffeeshop = Coffeeshop::find($id_coffeeshop);
        
        $coffeeshop->delete();

        return redirect('/coffeeshop');
    }


}