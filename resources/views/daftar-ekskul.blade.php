<!DOCTYPE>
<html>
<head>
	<title>DAFTAR EKSKUL</title>
</head>
<body>
	<center>DAFTAR EKSKUL</center>
	<table border="1" class="table table-striped">

		<tr>
			<td>id</td>
			<td>nama</td>
			<td>kelas</td>
			<td>ekskul</td>
		</tr>

		@foreach ($tampil as $data)
		<tr>
			<td>{{$data ['id']}}</td>
			<td>{{$data ['nama']}}</td>
			<td>{{$data ['kelas']}}</td>
			<td>{{$data ['nama_eskul']}}</td>
		</tr>

		@endforeach
		
	</table>
</body>
</html>