<center><h3>Transaction</h3></center><br>
<table class="table-data">
    <table border="1" width="100%">
  <thead>
    <tr>
      <th>nama Cafe/Resto</th>
      <th>Total Item</th>
      <th>tipe Pemesanan</th>
      <th>tipe Pembayaran</th>
      <th>Total Harga</th>
    </tr>
  </thead>
  <tbody>
    @forelse ($transaction as $transaction)
    <tr>
      <td>{{ $transaction->nama }}</td>
      <td>{{ $transaction->barang }}</td>
      <td>{{ $transaction->tipepemesanan }}</td>
      <td>{{ $transaction->tipepembayaran }}</td>
      <td>{{ $transaction->ttlharga }}</td>
      
    </tr>
    @empty
    <tr>
      <td colspan="4" align="center">Tidak ada data</td>
    </tr>
    @endforelse
  </tbody>
</table>