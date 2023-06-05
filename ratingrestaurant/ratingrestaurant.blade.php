@extends('layouts.app')

@section('title')
Ratingrestaurant | Chillin'Vibe Admin
@endsection

@section('content')
<h3>Ratingrestaurant</h3>
<button type="button" class="btn btn-tambah">
  <a href="/ratingrestaurant/tambah">Tambah Data</a>
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
    @forelse ($ratingrestaurant as $ratingrestaurant)
    <tr>
      <td>{{ $ratingrestaurant->penilaian }}</td>
      <td>{{ $ratingrestaurant->ulasan }}</td>
      <td>
        <a href="/ratingrestaurant/edit/{{ $ratingrestaurant->id_ratingrestaurant }}">Edit</a>
        <a href="/ratingrestaurant/hapus/{{ $ratingrestaurant->id_ratingrestaurant }}">Hapus</a>
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
