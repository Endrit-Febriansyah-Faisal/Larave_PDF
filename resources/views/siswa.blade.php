<!DOCTYPE html>
<html lang="">
<head>
	<title>Export Laporan PDF Pada Laravel</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
 
	<div class="container">
		<center>
			<h4>Export Laporan PDF Pada Laravel</h4>
			{{-- <h5><a target="_blank" href="https://www.malasngoding.com/">www.malasngoding.com</a></h5> --}}
		</center>
		
		<a href="/siswa/siswa_pdf" class="btn btn-success my-3" target="_blank">EXPORT PDF</a>
        <a href="/siswa/tambah" class="btn btn-primary">Input Siswa Baru</a>
		
		<table class='table table-bordered'>
			<thead>
				<tr>
					<th>No</th>
					<th>Nama</th>
					<th>NIS</th>
					<th>Alamat</th>
				</tr>
			</thead>
			<tbody>
				@foreach($siswa as $s => $i)
				<tr>
					<td>{{ $s+1}}</td>
					<td>{{$i->nama}}</td>
					<td>{{$i->nis}}</td>
					<td>{{$i->alamat}}</td>
					<td>
					<a href="/siswa/hapus/{{$i->id}}" onclick=" return confirm('Yakin data di hapus?');" class="btn btn-danger">Hapus</a>
					<a href="/siswa/edit/{{$i->id}}" class="btn btn-warning">Edit</a>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
 
</body>
</html>