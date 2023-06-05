<center><h3>Restaurant</h3></center><br>
<table class="table-data">
    <table border="1" width="100%">
  <thead>
  <tr>
      <th>nama</th>
      <th>alamat</th>
    </tr>
  </thead>
  <tbody>
    @forelse ($restaurant as $restaurant)
    <tr>
      <td>{{ $restaurant->nama }}</td>
      <td>{{ $restaurant->alamat }}</td>
    </tr>
    @empty
    <tr>
      <td colspan="4" align="center">Tidak ada data</td>
    </tr>
    @endforelse
  </tbody>
</table>