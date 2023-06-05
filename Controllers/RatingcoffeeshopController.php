<?php

namespace App\Http\Controllers;

use App\Models\Ratingcoffeeshop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;


class RatingcoffeeshopController extends Controller
{
    public function index()
    {
        $ratingcoffeeshop = Ratingcoffeeshop::all();
        return view('ratingcoffeeshop.ratingcoffeeshop', compact('ratingcoffeeshop'));
    }

    public function create()
    {
        return view('ratingcoffeeshop.ratingcoffeeshop-entry');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'penilaian' => 'required',
            'ulasan' => 'required',   
        ]);



        ratingcoffeeshop::create([
            'penilaian' => $request->penilaian,
            'ulasan' => $request->ulasan,
        ]);

        return redirect('/ratingcoffeeshop');
    }

    public function edit($id_ratingcoffeeshop)
    {
        $ratingcoffeeshop = Ratingcoffeeshop::find($id_ratingcoffeeshop);
        return view('ratingcoffeeshop.ratingcoffeeshop-edit', compact('ratingcoffeeshop'));
    }

    public function update(Request $request, $id_ratingcoffeeshop)
    {
        $this->validate($request, [
            'penilaian' => 'required',
            'ulasan' => 'required',
        ]);

        $ratingcoffeeshop = Ratingcoffeeshop::find($id_ratingcoffeeshop);

        $ratingcoffeeshop->update([
            'penilaian' => $request->penilaian,
            'ulasan' => $request->ulasan,
        ]);

        return redirect('/ratingcoffeeshop');
    }

    public function delete($id_ratingcoffeeshop)
    {
        $ratingcoffeeshop = Ratingcoffeeshop::find($id_ratingcoffeeshop);
        return view('ratingcoffeeshop.ratingcoffeeshop-hapus', compact('ratingcoffeeshop'));
    }

    public function destroy($id_ratingcoffeeshop)
    {
        $ratingcoffeeshop = Ratingcoffeeshop::find($id_ratingcoffeeshop);
        
        $ratingcoffeeshop->delete();

        return redirect('/ratingcoffeeshop');
    }


}