@extends('layouts.app')

@section('title')
Edit Transaction | Chillin'Vibe Admin
@endsection

@section('content')
<h3>Edit Transaction</h3>
<div class="form-login">
  <form action="{{ url('/transaction/update/' . $transaction->id_transaction) }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('put')
    <label for="transaction">Transaction</label>
    <input class="input" type="text" name="nama" id="nama" placeholder="nama"
      value="{{ old('nama', $transaction->nama) }}" />
    @error('nama')
    <p style="font-size: 10px; color: red">{{ $message }}</p>
    @enderror

    <label for="barang">Item</label>
    <input class="input" type="text" name="barang" id="barang" placeholder="item"
      value="{{ old('barang', $transaction->barang) }}" />
    @error('barang')
    <p style="font-size: 10px; color: red">{{ $message }}</p>
    @enderror

    <label for="tipepemesanan">Tipe pemesanan</label>
    <input class="input" type="text" name="tipepemesanan" id="tipepemesanan" placeholder="tipepemesanan"
      value="{{ old('tipepemesanan', $transaction->tipepemesanan) }}" />
    @error('tipepemesanan')
    <p style="font-size: 10px; color: red">{{ $message }}</p>
    @enderror

    <label for="tipepembayaran">Tipe Pembayaran</label>
    <input class="input" type="text" name="tipepembayaran" id="tipepembayaran" placeholder="tipepembayaran"
      value="{{ old('tipepembayaran', $transaction->tipepembayaran) }}" />
    @error('tipepembayaran')
    <p style="font-size: 10px; color: red">{{ $message }}</p>
    @enderror

    <label for="ttlharga">Total Harga</label>
    <input class="input" type="text" name="ttlharga" id="ttlharga" placeholder="ttlharga"
      value="{{ old('ttlharga', $transaction->ttlharga) }}" />
    @error('ttlharga')
    <p style="font-size: 10px; color: red">{{ $message }}</p>
    @enderror

    <button type="submit" class="btn btn-simpan" name="edit" style="margin-top: 50px">
      Edit
    </button>
  </form>
</div>
@endsection
