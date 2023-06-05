@extends('layouts.app')

@section('title')
Hapus Ratingcoffeeshop | Chillin'Vibe Admin
@endsection

@section('content')
<h3>Hapus Ratingcoffeeshop</h3>
<div class="form-login">
<h4>Ingin Menghapus Data ?</h4>
  <button type="submit" class="btn btn-simpan" name="hapus" style="width: 40%; margin: 20px auto;">
    <a href="{{ url('/ratingcoffeeshop/destroy/' . $ratingcoffeeshop->id_ratingcoffeeshop ) }}">
      Yes
    </a>
  </button>
  <button type="submit" class="btn btn-simpan" name="tidak" style="width: 40%; margin: 20px auto;">
    <a href="/ratingcoffeeshop">
      No
    </a>

  </button>
</div>
@endsection
