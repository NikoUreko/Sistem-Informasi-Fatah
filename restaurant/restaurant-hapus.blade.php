@extends('layouts.app')

@section('title')
Hapus Restaurant | Chillin'Vibe Admin
@endsection

@section('content')
<h3>Hapus Restaurant</h3>
<div class="form-login">
<h4>Ingin Menghapus Data ?</h4>
  <button type="submit" class="btn btn-simpan" name="hapus" style="width: 40%; margin: 20px auto;">
    <a href="{{ url('/restaurant/destroy/' . $restaurant->id_restaurant ) }}">
      Yes
    </a>
  </button>
  <button type="submit" class="btn btn-simpan" name="tidak" style="width: 40%; margin: 20px auto;">
    <a href="/restaurant">
      No
    </a>

  </button>
</div>
@endsection
