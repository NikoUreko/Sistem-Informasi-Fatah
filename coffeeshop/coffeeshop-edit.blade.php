@extends('layouts.app')

@section('title')
Edit Coffeeshop | Chillin'Vibe Admin
@endsection

@section('content')
<h3>Edit Coffeeshop</h3>
<div class="form-login">
  <form action="{{ url('/coffeeshop/update/' . $coffeeshop->id_coffeeshop) }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('put')
    <label for="coffeeshop">Coffeeshop</label>
    <input class="input" type="text" name="nama" id="nama" placeholder="nama"
      value="{{ old('nama', $coffeeshop->nama) }}" />
    @error('nama')
    <p style="font-size: 10px; color: red">{{ $message }}</p>
    @enderror

    <label for="alamat">Alamat</label>
    <input class="input" type="text" name="alamat" id="alamat" placeholder="alamat"
      value="{{ old('alamat', $coffeeshop->alamat) }}" />
    @error('alamat')
    <p style="font-size: 10px; color: red">{{ $message }}</p>
    @enderror


    <button type="submit" class="btn btn-simpan" name="edit" style="margin-top: 50px">
      Edit
    </button>
  </form>
</div>
@endsection
