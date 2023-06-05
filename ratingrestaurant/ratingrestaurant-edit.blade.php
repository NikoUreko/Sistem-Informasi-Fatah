@extends('layouts.app')

@section('title')
Edit Ratingrestaurant | Chillin'Vibe Admin
@endsection

@section('content')
<h3>Edit Ratingrestaurant</h3>
<div class="form-login">
  <form action="{{ url('/ratingrestaurant/update/' . $ratingrestaurant->id_ratingrestaurant) }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('put')
    <label for="ratingrestaurant">Ratingrestaurant</label>
    <input class="input" type="text" name="penilaian" id="penilaian" placeholder="penilaian"
      value="{{ old('penilaian', $ratingrestaurant->penilaian) }}" />
    @error('penilaian')
    <p style="font-size: 10px; color: red">{{ $message }}</p>
    @enderror

    <label for="ulasan">Ulasan</label>
    <input class="input" type="text" name="ulasan" id="ulasan" placeholder="ulasan"
      value="{{ old('ulasan', $ratingrestaurant->ulasan) }}" />
    @error('ulasan')
    <p style="font-size: 10px; color: red">{{ $message }}</p>
    @enderror


    <button type="submit" class="btn btn-simpan" name="edit" style="margin-top: 50px">
      Edit
    </button>
  </form>
</div>
@endsection
