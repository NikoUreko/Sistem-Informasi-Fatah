@extends('layouts.app')

@section('title')
Tambah Ratingrestaurant | Chillin'Vibe Admin
@endsection

@section('content')
<h3>Input Ratingrestaurant</h3>
<div class="form-login">
  <form action="{{ url('/ratingrestaurant/store') }}" method="post" enctype="multipart/form-data">
    @csrf


    <label for="penilaian">Penilaian</label>
    <input class="input" type="text" name="penilaian" id="ratingrestaurant" placeholder="ratingrestaurant" value="{{ old('penilaian') }}" />
    @error('penilaian')
    <p style="font-size: 10px; color: red">{{ $message }}</p>
    @enderror

    <label for="ulasan">Ulasan</label>
    <input class="input" type="text" name="ulasan" id="ulasan" placeholder="ulasan" value="{{ old('ulasan') }}" />
    @error('ulasan')
    <p style="font-size: 10px; color: red">{{ $message }}</p>
    @enderror



    <button type="submit" class="btn btn-simpan" name="simpan" style="margin-top: 50px">
      Simpan
    </button>
  </form>
</div>
@endsection