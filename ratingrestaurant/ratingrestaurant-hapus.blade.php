@extends('layouts.app')

@section('title')
Hapus Ratingrestaurant | Chillin'Vibe Admin
@endsection

@section('content')
<h3>Hapus Ratingrestaurant</h3>
<div class="form-login">
<h4>Ingin Menghapus Data ?</h4>
  <button type="submit" class="btn btn-simpan" name="hapus" style="width: 40%; margin: 20px auto;">
    <a href="{{ url('/ratingrestaurant/destroy/' . $ratingrestaurant->id_ratingrestaurant ) }}">
      Yes
    </a>
  </button>
  <button type="submit" class="btn btn-simpan" name="tidak" style="width: 40%; margin: 20px auto;">
    <a href="/ratingrestaurant">
      No
    </a>

  </button>
</div>
@endsection
