@extends('layouts.app')

@section('title')
Edit Ratingcoffeeshop | Chillin'Vibe Admin
@endsection

@section('content')
<h3>Edit Ratingcoffeeshop</h3>
<div class="form-login">
  <form action="{{ url('/ratingcoffeeshop/update/' . $ratingcoffeeshop->id_ratingcoffeeshop) }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('put')
    <label for="ratingcoffeeshop">Ratingcoffeeshop</label>
    <input class="input" type="text" name="penilaian" id="penilaian" placeholder="penilaian"
      value="{{ old('penilaian', $ratingcoffeeshop->penilaian) }}" />
    @error('penilaian')
    <p style="font-size: 10px; color: red">{{ $message }}</p>
    @enderror

    <label for="ulasan">Ulasan</label>
    <input class="input" type="text" name="ulasan" id="ulasan" placeholder="ulasan"
      value="{{ old('ulasan', $ratingcoffeeshop->ulasan) }}" />
    @error('ulasan')
    <p style="font-size: 10px; color: red">{{ $message }}</p>
    @enderror


    <button type="submit" class="btn btn-simpan" name="edit" style="margin-top: 50px">
      Edit
    </button>
  </form>
</div>
@endsection
