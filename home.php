<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ADP STORE Indonesia: Belanja Online Fashion & Lifestyle Terbaru</title>
	<link rel="stylesheet" type="text/css" href="view.css">

	<link rel="stylesheet"
  href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

</head>
<body>
	<!----header--->
	<header>
		<a href="#" class="logo">ADP STORE</a>

		<ul class="navlist">
			<li><a href="#home">Home</a></li>
            <li><a href="about.php"onClick= "return confirm ('Anda akan di arahkan ke About');">About</a></li>
			<li><a href="#featured">Featured</a></li>
			<li><a href="#new">New</a></li>
			<li><a href="#contact">Contacts</a></li>

		</ul>

        <a href="logout.php" class="btn">Log Out</a>
		<a href="ubah.php?id=1" class="btn">Edit</a>


	</header>

	<!----home Page--->
	<section class="home" id="home">
		<div class="home-text">
			<h1>Men's New <br><span>Arrivals</span></h1>
			<p>New colors, now also available in men's sizing</p>
			<a href="products.php" class="btn">View Collection</a>
		</div>
	</section>

	<!----featured--->
	<section class="featured" id="featured">
		<div class="center-text">
			<h2>Featured Categories</h2>
		</div>

		<div class="featured-content">
			<div class="row">
				<img src="img/fea1.jpg">
				<div class="fea-text">
					<h5>Mens</h5>
					<p>10 items</p>
				</div>
				<div class="arrow">
					<a href="#"><i class='bx bx-right-arrow-alt' ></i></a>
				</div>
			</div>

			<div class="row">
				<img src="img/fea2.jpg">
				<div class="fea-text">
					<h5>Mens</h5>
					<p>10 items</p>
				</div>
				<div class="arrow">
					<a href="#"><i class='bx bx-right-arrow-alt' ></i></a>
				</div>
			</div>

			<div class="row">
				<img src="img/fea3.jpg">
				<div class="fea-text">
					<h5>Mens</h5>
					<p>10 items</p>
				</div>
				<div class="arrow">
					<a href="#"><i class='bx bx-right-arrow-alt' ></i></a>
				</div>
			</div>

			<div class="row">
				<img src="img/fea4.jpg">
				<div class="fea-text">
					<h5>Mens</h5>
					<p>10 items</p>
				</div>
				<div class="arrow">
					<a href="#"><i class='bx bx-right-arrow-alt' ></i></a>
				</div>
			</div>

			<div class="row">
				<img src="img/fea5.jpg">
				<div class="fea-text">
					<h5>Mens</h5>
					<p>10 items</p>
				</div>
				<div class="arrow">
					<a href="#"><i class='bx bx-right-arrow-alt' ></i></a>
				</div>
			</div>

			<div class="row">
				<img src="img/fea6.jpg">
				<div class="fea-text">
					<h5>Mens</h5>
					<p>10 items</p>
				</div>
				<div class="arrow">
					<a href="#"><i class='bx bx-right-arrow-alt' ></i></a>
				</div>
			</div>

		</div>
	</section>

	<!----cta--->
	<section class="cta">
		<div class="cta-text">
			<h6>SUMMER ON SALE</h6>
			<h4>5% OFF <br> NEW ARRIVAL</h4>
			<a href="products.php" class="btn">Shop Now</a>
		</div>
	</section>

	<!----new--->
	<section class="new" id="new">
		<div class="center-text">
			<h2>New Arrivals</h2>
		</div>

		<div class="new-content">
			<div class="box">
				<img src="img/tren1.jpg">
				<h5>Jacket</h5>
				<h6>$10</h6>
				<div class="sale">
					<h4>Sale</h4>
				</div>
			</div>

			<div class="box">
				<img src="img/tren2.jpg">
				<h5>Long Pants</h5>
				<h6>$5</h6>
				<div class="sale">
					<h4>Sale</h4>
				</div>
			</div>

			<div class="box">
				<img src="img/tren3.jpg">
				<h5>Hoddie</h5>
				<h6>$12</h6>
				<div class="sale">
					<h4>Sale</h4>
				</div>
			</div>

			<div class="box">
				<img src="img/tren4.jpg">
				<h5>Sports Pants</h5>
				<h6>$4</h6>
				<div class="sale">
					<h4>Sale</h4>
				</div>
			</div>

		</div>
	</section>


	<!----brand--->
	<section class="brand">
		<div class="brand-content">
			<div class="main">
				<img src="img/brand1.png">
			</div>

			<div class="main">
				<img src="img/brand2.png">
			</div>

			<div class="main">
				<img src="img/brand3.png">
			</div>

			<div class="main">
				<img src="img/brand4.png">
			</div>

			<div class="main">
				<img src="img/brand5.png">
			</div>

			<div class="main">
				<img src="img/brand6.png">
			</div>

		</div>
	</section>

	<!----contact--->
	<section class="contact" id="contact">
		<div class="main-contact">
			<h3>CONTACT</h3>
			<h5>Let's Connect With Us</h5>
			<div class="icons">
				<a href="https://www.facebook.com/profile.php?id=100014811908420"><i class='bx bxl-facebook-square' ></i></a>
				<a href="https://www.instagram.com/adampermana04/"><i class='bx bxl-instagram-alt' ></i></a>
				<a href="#"><i class='bx bxl-twitter' ></i></a>

			</div>
		</div>

		<div class="main-contact">
			<h3>Explore</h3>
			<li><a href="#home">Home</a></li>
			<li><a href="#featured">Featured</a></li>
			<li><a href="#new">New</a></li>
			<li><a href="#contacts">Contact</a></li>
            <li><a href="logout.php">log Out</a></li>
			<li><a href="ubah.php?id=1"onClick= "return confirm ('yakin mau di ubah?');">EDIT</a></li>


		</div>

		<div class="main-contact">
			<h3>Our Services</h3>
			<li><a href="#">Pricing</a></li>
			<li><a href="#">Free Shipping</a></li>
			<li><a href="#">Gift Cards</a></li>
		</div>

		<div class="main-contact">
			<h3>Shopping</h3>
			<li><a href="#">Clothing Store</a></li>
			<li><a href="#">Trending Shoes</a></li>
			<li><a href="#">Accessories</a></li>
			<li><a href="#">Sale</a></li>
		</div>

	</section>

	<div class="last-text">
		<p>Copyright 2015 - 2022 PT. ADP STORE SEJAHTERA. All rights reserved.</p>
	</div>

	<!----scroll top--->
	<a href="#" class="top"><i class='bx bx-up-arrow-alt' ></i></a>


	<script src="https://unpkg.com/scrollreveal"></script>

	<!----custom js link--->
	<script src="home.js"></script>
	
</body>
</html>