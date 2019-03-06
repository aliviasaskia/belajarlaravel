<html>
<head>
	<title>Kategori</title>
</head>
<style>
body {
    background-color: pink
}
</style>
<br>
    <center>
	    <h2>Daftar Kategori Film</h2>
    </center>
 
	<a href="kategori/tambah"> + Tambah Data</a>
	
	<br/>
	<br/>
 
	<table border="1" width="100%">
		<tr>
			<th>ID</th>
			<th>Nama Kategori</th>
			<th>SLUG</th>
			<th>Tanggal Input</th>
            <th>Created At</th>
            <th>Updated At</th>
			<th>Opsi</th>
		</tr>
		@foreach($kategori as $kategori)
		<tr>
            <td>{{ $kategori->id }}</td>
			<td>{{ $kategori->nama_kategory }}</td>
			<td>{{ $kategori->slug }}</td>
			<td>{{ $kategori->tanggal_input_data }}</td>
            <td>{{ $kategori->created_at }}</td>
            <td>{{ $kategori->updated_at }}</td>
			<td>
				<a href="/kategori/edit/{{ $kategori->id }}">Edit</a>
				|
				<a href="/kategori/hapus/{{ $kategori->id }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
</body>
</html>