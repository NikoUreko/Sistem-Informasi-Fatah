@extends('layouts.app')

@section('title')
Edit Employer | Chillin'Vibe Admin
@endsection

@section('content')
<h3>Edit Employer</h3>
<div class="form-login">
  <form action="{{ url('/employer/update/' . $employer->id_employer) }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('put')
    <label for="employer">Employer</label>
    <input class="input" type="text" name="nama" id="nama" placeholder="nama"
      value="{{ old('nama', $employer->nama) }}" />
    @error('nama')
    <p style="font-size: 10px; color: red">{{ $message }}</p>
    @enderror

    <label for="alamat">Alamat</label>
    <input class="input" type="text" name="alamat" id="alamat" placeholder="alamat"
      value="{{ old('alamat', $employer->alamat) }}" />
    @error('alamat')
    <p style="font-size: 10px; color: red">{{ $message }}</p>
    @enderror

    <label for="umur">Umur</label>
    <input class="input" type="text" name="umur" id="umur" placeholder="umur"
      value="{{ old('umur', $employer->umur) }}" />
    @error('umur')
    <p style="font-size: 10px; color: red">{{ $message }}</p>
    @enderror

    <button type="submit" class="btn btn-simpan" name="edit" style="margin-top: 50px">
      Edit
    </button>
  </form>
</div>
@endsection
