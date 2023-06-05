@extends('layouts.app')

@section('title')
Tambah Drink | Chillin'Vibe Admin
@endsection

@section('content')
<h3>Input Drink</h3>
<div class="form-login">
  <form action="{{ url('/drink/store') }}" method="post" enctype="multipart/form-data">
    @csrf


    <label for="nama">Nama</label>
    <input class="input" type="text" name="nama" id="drink" placeholder="drink" value="{{ old('nama') }}" />
    @error('nama')
    <p style="font-size: 10px; color: red">{{ $message }}</p>
    @enderror

    <label for="diskon">Diskon</label>
    <input class="input" type="text" name="diskon" id="diskon" placeholder="diskon" value="{{ old('diskon') }}" />
    @error('diskon')
    <p style="font-size: 10px; color: red">{{ $message }}</p>
    @enderror

    <label for="harga">Harga</label>
    <input class="input" type="text" name="harga" id="harga" placeholder="harga" value="{{ old('harga') }}" />
    @error('harga')
    <p style="font-size: 10px; color: red">{{ $message }}</p>
    @enderror



    <button type="submit" class="btn btn-simpan" name="simpan" style="margin-top: 50px">
      Simpan
    </button>
  </form>
</div>
@endsection