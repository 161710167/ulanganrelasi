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
	<center><h1>One to One</h1></center>
	@foreach ($wali as $temp)<hr>
<h3><small>Nama Wali : {{$temp->nama}}</small>
<li>Nama Siswa :{{$temp->siswa->nama}}</li>

	</h4>
	</hr>
	@endforeach
	</div>
	</body>
	</html>