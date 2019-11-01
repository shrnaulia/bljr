<?php require_once("koneksi.php");
	if (!isset($_SESSION)) {
		session_start();
	} ?>
<!DOCTYPE html>
<html>
<head>
	<!-- meta -->
	<meta charset="utf-8">
	<title>OlshopIT | Toko Komputer Terpercaya</title>
	<meta name="description" content="Komputer, samarinda, vsga, digitalent, baru, murah"/>
	<meta name="keywords" content="hardisk, ram, pc, samarinda, vsga, digitalent"/>
	<meta name="author" content="Sherina Aulia Miranda">
	<!-- end meta -->

	<meta name="viewport" content="widtg=device-width, initial-scale=1, maximum-scale=1">

	<!-- facebook -->
	<meta property="og:title" content=""/>
	<meta property="og:description" content=""/>
	<meta property="og:type" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:image" content=""/>
	<!-- facebook -->

	<!-- css -->
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/bootstrap-responsive.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Droid+Sans:400,700">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Droid+Serif">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Boogaloo">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Economica:700,400italic">

</head>
<body>

	<header>
		<div class="container">
			<div class="row">

				<div class="logo span3">
					<a class="brand" href="#"><img src="img/logo2.png" alt="Logo"></a>
				</div>
				
				<div class="span9">
					<div class="navbar navbar-inverse">
						<div class="navbar-inner">
							<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</a>
							<div class="nav-collapse collapse">
								<ul class="nav">
									<li class="active"><a href="index.php">Home</a></li>
									<li><a href="produk.php">Produk Kami</a></li>
									<li><a href="detail.php">Keranjang</a></li>
									<li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown">Login <b class="caret"></b></a>
										<ul class="dropdown-menu">
											<li><a href="index.html">Admin</a></li>
											<li><a href="index.php">Konsumen</a></li>
										</ul>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

	<!-- slider -->
	<div class="slider-wrapper">
		<div id="da-slider" class="da-slider">
			<div class="da-slide">
				<h2>Hardware</h2>
				<p>kami menyediakan komputer yg murah dan bagus</p>
				<a href="#" class="da-link">Lihat Produk</a>
				<div class="da-img"><img src="img/parallax-slider/pc.png" alt="image01" /></div>
			</div>
			<div class="da-slide">
				<h2>Software</h2>
				<p>kami memiliki berbagai macam software yg murah</p>
				<a href="#" class="da-link">Lihat Produk</a>
				<div class="da-img"><img src="img/parallax-slider/software.png" alt="image02" /></div>
			</div>
			<nav class="da-arrows">
				<span class="da-arrows-prev"></span>
				<span class="da-arrows-next"></span>
			</nav>		
		</div>
	</div>
	<!-- slider -->

	<!-- wrapper -->
	<div id="wrapper">

		<div class="container">

			<div class="hero-unit">
				<p>
					kami adalah olshop komputer terpercaya, dengan harga termurah dibanding seluruh toko yg lain. selamat berbelanja costumer
				</p>
				<p><a class="btn btn-success btn-large" href="produk.php">Mulai Berbelanja &raquo;</a></p>
			</div>

			<!-- row -->
			<div class="row">
					<?php 
					$sql = mysqli_query($connect, "SELECT * FROM barang ORDER BY id_barang DESC limit 9");
					while ($data = mysqli_fetch_array($sql)) {
					 } ?>
				<div class="span4">
					<div class="icons-box">
						<div class="title"><h3><?php echo $data['nama_barang']; ?></h3></div>
						<img src="<?php echo $data['gambar']; ?>" />
						<div><h3>Rp.<?php echo number_format($data['harga'],2,",",".");?></h3></div>

						<div class="clear"><a href="detailproduk.php?kd=<?php echo $data['id_barang'];?>" class="btn btn-lg btn-danger">Detail</a> <a href="detailproduk.php?kd=<?php echo $data['id_barang'];?>" class="btn btn-lg btn-success">Beli &raquo;</a></div>
					</div>
				</div>
				<?php ?>
			</div>
			<!-- row -->

		</div>
	</div>

<script src="js/jquery-1.8.2.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/flexslider.js"></script>
<script src="js/carousel.js"></script>
<script src="js/jquery.cslider.js"></script>
<script src="js/slider.js"></script>
<script defer="defer" src="js/custom.js"></script>

</body>
</html>