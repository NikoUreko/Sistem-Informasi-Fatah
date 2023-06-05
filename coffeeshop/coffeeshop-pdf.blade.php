<center><h3>Coffeeshop</h3></center><br>
<table class="table-data">
    <table border="1" width="100%">
  <thead>
  <tr>
      <th>nama</th>
      <th>alamat</th>
    </tr>
  </thead>
  <tbody>
    @forelse ($coffeeshop as $coffeeshop)
    <tr>
      <td>{{ $coffeeshop->nama }}</td>
      <td>{{ $coffeeshop->alamat }}</td>
    </tr>
    @empty
    <tr>
      <td colspan="4" align="center">Tidak ada data</td>
    </tr>
    @endforelse
  </tbody>
</table>