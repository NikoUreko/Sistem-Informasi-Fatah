@extends('layouts.app')

@section('title')
Coffeeshop | Chillin'Vibe Admin
@endsection

@section('content')
<h3>Coffeeshop</h3>
<button type="button" class="btn btn-tambah">
  <a href="/coffeeshop/tambah">Tambah Data</a>
</button>
<button type="button" class="btn">
<a href="{{ url('/coffeeshop/downloadpdf' ) }}">Cetak</a>
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
    @forelse ($coffeeshop as $coffeeshop)
    <tr>
      <td>{{ $coffeeshop->nama }}</td>
      <td>{{ $coffeeshop->alamat }}</td>
      <td>
        <a href="/coffeeshop/edit/{{ $coffeeshop->id_coffeeshop }}">Edit</a>
        <a href="/coffeeshop/hapus/{{ $coffeeshop->id_coffeeshop }}">Hapus</a>
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
