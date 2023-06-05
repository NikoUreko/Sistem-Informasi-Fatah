@extends('layouts.app')

@section('title')
Restaurant | Chillin'Vibe Admin
@endsection

@section('content')
<h3>Restaurant</h3>
<button type="button" class="btn btn-tambah">
  <a href="/restaurant/tambah">Tambah Data</a>
</button>
<button type="button" class="btn">
<a href="{{ url('/restaurant/downloadpdf' ) }}">Cetak</a>
</button>
<table class="table-data">
  <thead>
    <tr>
      <th>nama</th>
      <th>alamat</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    @forelse ($restaurant as $restaurant)
    <tr>
      <td>{{ $restaurant->nama }}</td>
      <td>{{ $restaurant->alamat }}</td>
      <td>
        <a href="/restaurant/edit/{{ $restaurant->id_restaurant }}">Edit</a>
        <a href="/restaurant/hapus/{{ $restaurant->id_restaurant }}">Hapus</a>
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
