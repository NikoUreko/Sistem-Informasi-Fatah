@extends('layouts.app')

@section('title')
Hapus Employer | Chillin'Vibe Admin
@endsection

@section('content')
<h3>Hapus Employer</h3>
<div class="form-login">
<h4>Ingin Menghapus Data ?</h4>
  <button type="submit" class="btn btn-simpan" name="hapus" style="width: 40%; margin: 20px auto;">
    <a href="{{ url('/employer/destroy/' . $employer->id_employer ) }}">
      Yes
    </a>
  </button>
  <button type="submit" class="btn btn-simpan" name="tidak" style="width: 40%; margin: 20px auto;">
    <a href="/employer">
      No
    </a>

  </button>
</div>
@endsection
