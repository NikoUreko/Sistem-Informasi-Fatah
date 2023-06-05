@extends('layouts.app')

@section('title')
Edit Restaurant | Chillin'Vibe Admin
@endsection

@section('content')
<h3>Edit Restaurant</h3>
<div class="form-login">
  <form action="{{ url('/restaurant/update/' . $restaurant->id_restaurant) }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('put')
    <label for="restaurant">Restaurant</label>
    <input class="input" type="text" name="nama" id="nama" placeholder="nama"
      value="{{ old('nama', $restaurant->nama) }}" />
    @error('nama')
    <p style="font-size: 10px; color: red">{{ $message }}</p>
    @enderror

    <label for="alamat">Alamat</label>
    <input class="input" type="text" name="alamat" id="alamat" placeholder="alamat"
      value="{{ old('alamat', $restaurant->alamat) }}" />
    @error('alamat')
    <p style="font-size: 10px; color: red">{{ $message }}</p>
    @enderror


    <button type="submit" class="btn btn-simpan" name="edit" style="margin-top: 50px">
      Edit
    </button>
  </form>
</div>
@endsection
