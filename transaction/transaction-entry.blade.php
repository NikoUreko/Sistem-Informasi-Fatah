@extends('layouts.app')

@section('title')
Tambah Transaction | Chillin'Vibe Admin
@endsection

@section('content')
<h3>Input Transaction</h3>
<div class="form-login">
  <form action="{{ url('/transaction/store') }}" method="post" enctype="multipart/form-data">
    @csrf


    <label for="nama">Nama</label>
    <input class="input" type="text" name="nama" id="transaction" placeholder="Resto/Cafe" value="{{ old('nama') }}" />
    @error('nama')
    <p style="font-size: 10px; color: red">{{ $message }}</p>
    @enderror

    <label for="barang">Item</label>
    <input class="input" type="text" name="barang" id="barang" placeholder="item" value="{{ old('barang') }}" />
    @error('barang')
    <p style="font-size: 10px; color: red">{{ $message }}</p>
    @enderror

    <label for="tipepemesanan">Tipe Pemesanan</label>
    <input class="input" type="text" name="tipepemesanan" id="tipepemesanan" placeholder="tipepemesanan" value="{{ old('tipepemesanan') }}" />
    @error('tipepemesanan')
    <p style="font-size: 10px; color: red">{{ $message }}</p>
    @enderror

    <label for="tipepembayaran">Tipe Pembayaran</label>
    <input class="input" type="text" name="tipepembayaran" id="tipepembayaran" placeholder="tipepembayaran" value="{{ old('tipepembayaran') }}" />
    @error('tipepembayaran')
    <p style="font-size: 10px; color: red">{{ $message }}</p>
    @enderror

    <label for="ttlharga">Total Harga</label>
    <input class="input" type="text" name="ttlharga" id="ttlharga" placeholder="ttlharga" value="{{ old('ttlharga') }}" />
    @error('ttlharga')
    <p style="font-size: 10px; color: red">{{ $message }}</p>
    @enderror




    <button type="submit" class="btn btn-simpan" name="simpan" style="margin-top: 50px">
      Simpan
    </button>
  </form>
</div>
@endsection