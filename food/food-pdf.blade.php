<center><h3>Food</h3></center><br>
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
    @forelse ($food as $food)
    <tr>
      <td>{{ $food->nama }}</td>
      <td>{{ $food->diskon }}</td>
      <td>{{ $food->harga }}</td>
    </tr>
    @empty
    <tr>
      <td colspan="4" align="center">Tidak ada data</td>
    </tr>
    @endforelse
  </tbody>
</table>