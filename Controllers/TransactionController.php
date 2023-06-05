<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use PDF;

class TransactionController extends Controller
{
    public function index()
    {
        $transaction = Transaction::all();
        return view('transaction.transaction', compact('transaction'));
    }

public function downloadpdf() {
    $transaction = Transaction::all();
    $pdf = PDF::loadview('transaction.transaction-pdf', ['transaction' => $transaction])->setOptions(['defaultFont' => 'sans-serif']);
    return $pdf->stream('laporan_transaction.pdf');
}

    public function create()
    {
        return view('transaction.transaction-entry');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
            'barang' => 'required',
            'tipepemesanan' => 'required',
            'tipepembayaran' => 'required',
            'ttlharga' => 'required',   
        ]);



        transaction::create([
            'nama' => $request->nama,
            'barang' => $request->barang,
            'tipepemesanan' => $request->tipepemesanan,
            'tipepembayaran' => $request->tipepembayaran,
            'ttlharga' => $request->ttlharga,
        ]);

        return redirect('/transaction');
    }

    public function edit($id_transaction)
    {
        $transaction = Transaction::find($id_transaction);
        return view('transaction.transaction-edit', compact('transaction'));
    }

    public function update(Request $request, $id_transaction)
    {
        $this->validate($request, [
            'nama' => 'required',
            'barang' => 'required',
            'tipepemesanan' => 'required',
            'tipepembayaran' => 'required',
            'ttlharga' => 'required',
        ]);

        $transaction = Transaction::find($id_transaction);

        $transaction->update([
            'nama' => $request->nama,
            'barang' => $request->barang,
            'tipepemesanan' => $request->tipepemesanan,
            'tipepembayaran' => $request->tipepembayaran,
            'ttlharga' => $request->ttlharga,
        ]);

        return redirect('/transaction');
    }

    public function delete($id_transaction)
    {
        $transaction = Transaction::find($id_transaction);
        return view('transaction.transaction-hapus', compact('transaction'));
    }

    public function destroy($id_transaction)
    {
        $transaction = Transaction::find($id_transaction);
        
        $transaction->delete();

        return redirect('/transaction');
    }


}