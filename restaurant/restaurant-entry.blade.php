@extends('layouts.app')

@section('title')
Tambah Restaurant | Chillin'Vibe Admin
@endsection

@section('content')
<h3>Input Restaurant</h3>
<div class="form-login">
  <form action="{{ url('/restaurant/store') }}" method="post" enctype="multipart/form-data">
    @csrf


    <label for="nama">Nama</label>
    <input class="input" type="text" name="nama" id="restaurant" placeholder="restaurant" value="{{ old('nama') }}" />
    @error('nama')
    <p style="font-size: 10px; color: red">{{ $message }}</p>
    @enderror

    <label for="alamat">alamat</label>
    <input class="input" type="text" name="alamat" id="alamat" placeholder="alamat" value="{{ old('alamat') }}" />
    @error('alamat')
    <p style="font-size: 10px; color: red">{{ $message }}</p>
    @enderror



    <button type="submit" class="btn btn-simpan" name="simpan" style="margin-top: 50px">
      Simpan
    </button>
  </form>
</div>
@endsection