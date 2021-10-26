<!DOCTYPE html>
<html>
<head>
	<title>@yield('judul_page','Sekolah Koding')</title>
	<link rel="stylesheet" href="../../css/master.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<header>
			<div class="bannerContainer">
				<img src="../../img/sekolahbanner.jpg" id="bannerImg">
			</div>
			<nav class="navbar navbar-expand-lg navbar-dark" style="background-color:#2c8ebb;">
				<div class="container-fluid">
					<a class="navbar-brand" href="/">Siswaku.ac.id</a>
					<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav me-auto mb-2 mb-lg-0">
						<li class="nav-item">
						<a class="nav-link {{ Request::is('/') ? 'active' : '' }}" aria-current="page" href="/">Home</a>
						</li>
						<li class="nav-item">
						<a class="nav-link {{ Request::is('daftar') ? 'active' : '' }}" href="/daftar">Daftar Siswa</a>
						</li>
						<li class="nav-item">
						<a class="nav-link {{ Request::is('pendaftar') ? 'active' : '' }}" href="/pendaftar">Pendaftar</a>
						</li>
					</div>
				</div>
				</nav>
		</header>
		<br/>
	
		<!-- bagian judul halaman blog -->
		<h3> @yield('judul_halaman') </h3>
	
	
		<!-- bagian konten blog -->
		@yield('konten')
	
	
		<br/>
		<br/>
		<hr/>
		<footer>
			<p>&copy; Fikri azhari 1910511005 - 2021</p>
		</footer>
	</div>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>