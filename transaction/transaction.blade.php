@extends('layouts.app')

@section('title')
Transaction | Chillin'Vibe Admin
@endsection

@section('content')
<h3>Transaction</h3>
<button type="button" class="btn btn-tambah">
  <a href="/transaction/tambah">Tambah Data</a>
</button>
<button type="button" class="btn">
  <a href="{{ url('/transaction/downloadpdf' ) }}">Cetak</a>
</button>
<table class="table-data">
  <thead>
    <tr>
      <th>nama Cafe/Resto</th>
      <th>Total Item</th>
      <th>tipe Pemesanan</th>
      <th>tipe Pembayaran</th>
      <th>Total Harga</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    @forelse ($transaction as $transaction)
    <tr>
      <td>{{ $transaction->nama }}</td>
      <td>{{ $transaction->barang }}</td>
      <td>{{ $transaction->tipepemesanan }}</td>
      <td>{{ $transaction->tipepembayaran }}</td>
      <td>{{ $transaction->ttlharga }}</td>
      <td>
        <a href="/transaction/edit/{{ $transaction->id_transaction }}">Edit</a>
        <a href="/transaction/hapus/{{ $transaction->id_transaction }}">Hapus</a>
      </td>
    </tr>
    @empty
    <tr>
      <td colspan="4" align="center">Tidak ada data</td>
    </tr>
    @endforelse
  </tbody>
</table>
@endsection