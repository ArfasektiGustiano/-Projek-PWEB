<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>M. Arfasekti Gustiano Avicenna</title>
		<link rel="stylesheet" type="text/css" href="porto.css">
		<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
	</head>
	<body>
		
		<!-- sidebar -->
		<input type="checkbox" id="check">
		<div class="sidebar">
			<ul>
				<li><a href="#about">About</a></li>
				<li><a href="#skills">Skills</a></li>
				<li><a href="#portfolio">Portfolio</a></li>
				<li><a href="#contact">Contact</a></li>
			</ul>
		</div>

		<!-- bagian header -->
		<header>
			<div class="container">
				<h1><a href="">M. Arfasekti Gustiano Avicenna</a></h1>
				<ul>
					<li><a href="#about">About</a></li>
					<li><a href="#skills">Skills</a></li>
					<li><a href="#portfolio">Portfolio</a></li>
					<li><a href="#contact">Contact</a></li>
				</ul>

				<!-- menu mobile -->
				<label for="check" class="mobile-menu"><i class="fas fa-bars fa-2x"></i></label>
			</div>
		</header>

		<!-- bagian banner -->
		<section class="banner">
			<div class="container">
				<div class="banner-left">
					<img src="gusti.jpg">
					<h2>Hai...<br>
						Saya adalah seorang <span class="efek-ngetik"></span></h2>
					<p>Selamat datang di website portofolio saya!</p>
				</div>
			</div>
		</section>

		<!-- bagian about -->
		<section id="about">
			<div class="container">
				<h3>About</h3>
				<p>Hai, Selamat datang di website pribadi saya. Sebelumnya saya ucapkan terimakasih banyak atas kesediaannya mengunjungi situs saya ini, saya berasal dari Sumatera Selatan tepatnya di Kota Palembang. Saat ini saya sedang menempuh pendidikan sarjana Teknik Informatika di Universitas Ahmad dahlan. Saya pernah menjadi mahasiswa magang di PT. PLN Nusantara Power Unit Pembangkitan Paiton Jawa Timur, saya terlibat dalam berbagai proyek yang berkaitan dengan desain antarmuka pengguna (UI) dan pengalaman pengguna (UX). Saya bekerja di bawah bimbingan langsung seorang desainer senior, yang memberikan arahan dan umpan balik yang berharga dalam pengembangan keterampilan desain saya.
    			<p>Salam Inovatif.....</p>
			</div>
		</section>

		<!-- bagian skills -->
		<section id="skills">
			<div class="container">
				<h3>Skills</h3>
				<h4>HTML</h4>
				<div class="bar">
					<span class="nilai html">100%</span>
				</div>

				<h4>CSS</h4>
				<div class="bar">
					<span class="nilai css">90%</span>
				</div>

				<h4>PHP</h4>
				<div class="bar">
					<span class="nilai js">80%</span>
				</div>

				<h4>Figma</h4>
				<div class="bar">
					<span class="nilai php">95%</span>
				</div>

				<h4>Photoshop</h4>
				<div class="bar">
					<span class="nilai ps">85%</span>
				</div>
			</div>
		</section>


		<!-- bagian portfolio -->
		<section id="portfolio">
			<div class="container">
				<h3>Portfolio</h3>
				<div class="col-4">
					<a href="">
						<img src="1.jpg">
						<span>Portfolio 1</span>
					</a>
				</div>

				<div class="col-4">
					<a href="">
						<img src="2.jpg">
						<span>Portfolio 2</span>
					</a>
				</div>

				<div class="col-4">
					<a href="">
						<img src="3.jpg">
						<span>Portfolio 3</span>
					</a>
				</div>

				<div class="col-4">
					<a href="">
						<img src="4.jpg">
						<span>Portfolio 4</span>
					</a>
				</div>
			</div>
		</section>

		<!-- bagian contact -->
		<section id="contact">
			<div class="container">
				<h3>Contact</h3>
				<div class="col-3">
					<h4>Alamat</h4>
					<p>Prabumulih, Palembang, Sumatera Selatan</p>
				</div>

				<div class="col-3">
					<h4>Email</h4>
					<p>gusticenna.ano@gmail.com</p>
				</div>

				<div class="col-3">
					<h4>Telp/Hp</h4>
					<p>+6285258255009</p>
				</div>	
			</div>
		</section>

		<!-- bagian footer -->
		<footer>
			<div class="container">
				<small>Copyright &copy; 2024 - M. Arfasekti Gustiano.</small>
			</div>
		</footer>

		<script src="porto.js"></script>
	</body>
</html>
