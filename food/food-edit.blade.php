@extends('layouts.app')

@section('title')
Edit Food | Chillin'Vibe Admin
@endsection

@section('content')
<h3>Edit Food</h3>
<div class="form-login">
  <form action="{{ url('/food/update/' . $food->id_food) }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('put')
    <label for="food">Food</label>
    <input class="input" type="text" name="nama" id="nama" placeholder="nama"
      value="{{ old('nama', $food->nama) }}" />
    @error('nama')
    <p style="font-size: 10px; color: red">{{ $message }}</p>
    @enderror

    <label for="diskon">Diskon</label>
    <input class="input" type="text" name="diskon" id="diskon" placeholder="diskon"
      value="{{ old('diskon', $food->diskon) }}" />
    @error('diskon')
    <p style="font-size: 10px; color: red">{{ $message }}</p>
    @enderror

    <label for="harga">Harga</label>
    <input class="input" type="text" name="harga" id="harga" placeholder="harga"
      value="{{ old('harga', $food->harga) }}" />
    @error('harga')
    <p style="font-size: 10px; color: red">{{ $message }}</p>
    @enderror

    <button type="submit" class="btn btn-simpan" name="edit" style="margin-top: 50px">
      Edit
    </button>
  </form>
</div>
@endsection
