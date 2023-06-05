<?php

namespace App\Http\Controllers;

use App\Models\Employer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;


class EmployerController extends Controller
{
    public function index()
    {
        $employer = Employer::all();
        return view('employer.employer', compact('employer'));
    }

    public function create()
    {
        return view('employer.employer-entry');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
            'alamat' => 'required',
            'umur' => 'required',   
        ]);



        employer::create([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'umur' => $request->umur,
        ]);

        return redirect('/employer');
    }

    public function edit($id_employer)
    {
        $employer = Employer::find($id_employer);
        return view('employer.employer-edit', compact('employer'));
    }

    public function update(Request $request, $id_employer)
    {
        $this->validate($request, [
            'nama' => 'required',
            'alamat' => 'required',
            'umur' => 'required',
        ]);

        $employer = Employer::find($id_employer);

        $employer->update([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'umur' => $request->umur,
        ]);

        return redirect('/employer');
    }

    public function delete($id_employer)
    {
        $employer = Employer::find($id_employer);
        return view('employer.employer-hapus', compact('employer'));
    }

    public function destroy($id_employer)
    {
        $employer = Employer::find($id_employer);
        
        $employer->delete();

        return redirect('/employer');
    }


}