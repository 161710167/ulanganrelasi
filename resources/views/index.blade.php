<!DOCTYPE html>
<html>
<head>
	<title></title>
<head>
		<meta charset="UTF-8">
		<title></title>
		<!-- CSS -->
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
		<style type="text/css"> body { padding-top:50px; } </style>
	</head>
<body class="container">
		<div class="col-sm-8 col-sm-offset-2">
	<center><h1>Bonus</h1></center>
	@foreach ($siswa as $temp)
	<h3>Nama Guru : <li><strong>{{$temp->guru->nama}}</strong></li>


<h3>
	Kelas : <li><strong>{{$temp->kelas->nama_kelas}}</strong></li>
	Nama Siswa : <li><strong>{{$temp->nama}}</strong></li></h2>
	<h3>Mata Pelajaran :
	   @foreach($temp->mapel as $keling)
	   <li><strong>{{$keling->mapel}}</strong></li>@endforeach</h2>
	   <h4>
	   	
	   </h4>
	<hr/>	
	</h2>
	@endforeach
	</div>
</body>
</html>