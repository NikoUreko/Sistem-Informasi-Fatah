@extends('layouts.app')

@section('title')
Edit Drink | Chillin'Vibe Admin
@endsection

@section('content')
<h3>Edit Drink</h3>
<div class="form-login">
  <form action="{{ url('/drink/update/' . $drink->id_drink) }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('put')
    <label for="drink">Drink</label>
    <input class="input" type="text" name="nama" id="nama" placeholder="nama"
      value="{{ old('nama', $drink->nama) }}" />
    @error('nama')
    <p style="font-size: 10px; color: red">{{ $message }}</p>
    @enderror

    <label for="diskon">Diskon</label>
    <input class="input" type="text" name="diskon" id="diskon" placeholder="diskon"
      value="{{ old('diskon', $drink->diskon) }}" />
    @error('diskon')
    <p style="font-size: 10px; color: red">{{ $message }}</p>
    @enderror

    <label for="harga">Harga</label>
    <input class="input" type="text" name="harga" id="harga" placeholder="harga"
      value="{{ old('harga', $drink->harga) }}" />
    @error('harga')
    <p style="font-size: 10px; color: red">{{ $message }}</p>
    @enderror

    <button type="submit" class="btn btn-simpan" name="edit" style="margin-top: 50px">
      Edit
    </button>
  </form>
</div>
@endsection
