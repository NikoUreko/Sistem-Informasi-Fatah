@extends('layouts.app')

@section('title')
Tambah Ratingcoffeeshop | Chillin'Vibe Admin
@endsection

@section('content')
<h3>Input Ratingcoffeeshop</h3>
<div class="form-login">
  <form action="{{ url('/ratingcoffeeshop/store') }}" method="post" enctype="multipart/form-data">
    @csrf


    <label for="penilaian">Penilaian</label>
    <input class="input" type="text" name="penilaian" id="ratingcoffeeshop" placeholder="ratingcoffeeshop" value="{{ old('penilaian') }}" />
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