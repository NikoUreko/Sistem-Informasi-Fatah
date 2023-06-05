@extends('layouts.app')

@section('title')
Ratingcoffeeshop | Chillin'Vibe Admin
@endsection

@section('content')
<h3>Ratingcoffeeshop</h3>
<button type="button" class="btn btn-tambah">
  <a href="/ratingcoffeeshop/tambah">Tambah Data</a>
</button>
<button type="button" class="btn">
  <a href="">Cetak</a>
</button>
<table class="table-data">
  <thead>
    <tr>
      <th>penilaian</th>
      <th>ulasan</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    @forelse ($ratingcoffeeshop as $ratingcoffeeshop)
    <tr>
      <td>{{ $ratingcoffeeshop->penilaian }}</td>
      <td>{{ $ratingcoffeeshop->ulasan }}</td>
      <td>
        <a href="/ratingcoffeeshop/edit/{{ $ratingcoffeeshop->id_ratingcoffeeshop }}">Edit</a>
        <a href="/ratingcoffeeshop/hapus/{{ $ratingcoffeeshop->id_ratingcoffeeshop }}">Hapus</a>
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
