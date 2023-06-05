<center><h3>Drink</h3></center><br>
<table class="table-data">
    <table border="1" width="100%">
  <thead>
  <tr>
      <th>nama</th>
      <th>diskon</th>
      <th>harga</th>
    </tr>
  </thead>
  <tbody>
    @forelse ($drink as $drink)
    <tr>
      <td>{{ $drink->nama }}</td>
      <td>{{ $drink->diskon }}</td>
      <td>{{ $drink->harga }}</td>
    </tr>
    @empty
    <tr>
      <td colspan="4" align="center">Tidak ada data</td>
    </tr>
    @endforelse
  </tbody>
</table>