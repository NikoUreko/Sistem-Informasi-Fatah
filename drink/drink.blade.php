@extends('layouts.app')

@section('title')
Drink | Chillin'Vibe Admin
@endsection

@section('content')
<h3>Drink</h3>
<button type="button" class="btn btn-tambah">
  <a href="/drink/tambah">Tambah Data</a>
</button>
<button type="button" class="btn">
<a href="{{ url('/drink/downloadpdf' ) }}">Cetak</a>
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
    @forelse ($drink as $drink)
    <tr>
      <td>{{ $drink->nama }}</td>
      <td>{{ $drink->diskon }}</td>
      <td>{{ $drink->harga }}</td>
      <td>
        <a href="/drink/edit/{{ $drink->id_drink }}">Edit</a>
        <a href="/drink/hapus/{{ $drink->id_drink }}">Hapus</a>
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
