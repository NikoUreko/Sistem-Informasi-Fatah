@extends('layouts.app')

@section('title')
Food | Chillin'Vibe Admin
@endsection

@section('content')
<h3>Food</h3>
<button type="button" class="btn btn-tambah">
  <a href="/food/tambah">Tambah Data</a>
</button>
<button type="button" class="btn">
<a href="{{ url('/food/downloadpdf' ) }}">Cetak</a>
</button>
<table class="table-data">
  <thead>
    <tr>
      <th>nama</th>
      <th>diskon</th>
      <th>harga</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    @forelse ($food as $food)
    <tr>
      <td>{{ $food->nama }}</td>
      <td>{{ $food->diskon }}</td>
      <td>{{ $food->harga }}</td>
      <td>
        <a href="/food/edit/{{ $food->id_food }}">Edit</a>
        <a href="/food/hapus/{{ $food->id_food }}">Hapus</a>
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
