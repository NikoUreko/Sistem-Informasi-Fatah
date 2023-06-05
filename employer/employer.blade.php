@extends('layouts.app')

@section('title')
Employer | Chillin'Vibe Admin
@endsection

@section('content')
<h3>Employer</h3>
<button type="button" class="btn btn-tambah">
  <a href="/employer/tambah">Tambah Data</a>
</button>
<button type="button" class="btn">
  <a href="">Cetak</a>
</button>
<table class="table-data">
  <thead>
    <tr>
      <th>nama</th>
      <th>alamat</th>
      <th>umur</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    @forelse ($employer as $employer)
    <tr>
      <td>{{ $employer->nama }}</td>
      <td>{{ $employer->alamat }}</td>
      <td>{{ $employer->umur }}</td>
      <td>
        <a href="/employer/edit/{{ $employer->id_employer }}">Edit</a>
        <a href="/employer/hapus/{{ $employer->id_employer }}">Hapus</a>
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