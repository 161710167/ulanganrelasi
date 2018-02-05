<html>
<head>
		<meta charset="UTF-8">
		<title></title>
		<!-- CSS -->
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
		<style type="text/css"> body { padding-top:50px; } </style>
	</head>
<body class="container">
		<div class="col-sm-8 col-sm-offset-2">
	<center><h1>Many to Many</h1></center>
	
	@foreach ($kelas $temp)<hr>
	<h2><small>Kelas : {{$temp->nama_kelas}}</small></h2>
	<h2>@foreach($temp->siswa as $kel)
	<li>Nama Siswa : <strong>{{$kel->nama}}</strong></li>@endforeach</h2>

	</h4>
	</hr>
	@endforeach
	</div>
	</body>
	</html>