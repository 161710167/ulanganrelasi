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
	<center><h1>One to many</h1></center>
	
	@foreach ($guru as $temp)<hr>
	<h2><small>Nama Guru : {{$temp->nama}}</small><br>

	Nama Siswa : @foreach($temp->siswa as $kel)
	<li><strong>{{$kel->nama}}</strong></li>@endforeach</h2>
	
	</h4>
	</hr>
	@endforeach
	</div>
	</body>
	</html>