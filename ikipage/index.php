<!DOCTYPE html>
<html>
<head>
	<title>Iki puslapis</title>

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="utf-8">

	<link rel="stylesheet" type="text/css" href="css/reset.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<header>
		<div class="header-content">
			<div class="first-nav"><!-- iki logo url 
			https://www.iki.lt/themes/iki/img/logo-desktop.png -->
				<nav>
					<a href=""> Apie IKI</a>
					<a href="">Verslui</a>
					<a href="">Karjera</a>
					<a href="">Naujienos</a>
					<a href="">Paslaugos</a>
					<a href="">IKI parduotuvių tinklas</a>
				</nav>
			</div>
			<div class="second-nav">
				<nav>
					<a href="">Akcijos</a>
					<a href="">Alkoholiniai gėrimai</a>
					<a href="">Prekių ženklai</a>
					<a href="">Lojalumo kortelės</a>
					<a href="">Specialios akcijos</a>
					<a href="">Maisto kultūra</a>
					<a href="">IKI programėlė</a>
				</nav>
			</div>
		</div>
	</header>
	<main>
		<!-- slide images

		https://www.iki.lt/assets/Uploads/Slider/Slides/1280x500-HERO-no-logo.jpg
		https://www.iki.lt/assets/Uploads/Slider/Slides/IKI-10proc-titulinis-1280-500.jpg
		https://www.iki.lt/assets/Uploads/Slider/Slides/IKI-1280x500-IIdalis.jpg
		https://www.iki.lt/assets/Uploads/Slider/Slides/alkoholis-1280x500.jpg
	-->
		<div class="slideshow-container">

		<div class="mySlides fade">
		  <img src="https://www.iki.lt/assets/Uploads/Slider/Slides/1280x500-HERO-no-logo.jpg">
		  <!-- was  width: 100%; -->
		  <div class="text">Caption Text</div>
		</div>

		<div class="mySlides fade">
		  <img src="https://www.iki.lt/assets/Uploads/Slider/Slides/IKI-10proc-titulinis-1280-500.jpg">
		  <div class="text">Caption Two</div>
		</div>

		<div class="mySlides fade">
		  <img src="https://www.iki.lt/assets/Uploads/Slider/Slides/IKI-1280x500-IIdalis.jpg">
		  <div class="text">Caption Three</div>
		</div>

		<div class="mySlides fade">
		  <img src="https://www.iki.lt/assets/Uploads/Slider/Slides/alkoholis-1280x500.jpg">
		  <div class="text">Caption Three</div>
		</div>

		<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
		<a class="next" onclick="plusSlides(1)">&#10095;</a>

		</div>
		<br>

		<div style="text-align:center">
		  <span class="dot" onclick="currentSlide(1)"></span> 
		  <span class="dot" onclick="currentSlide(2)"></span> 
		  <span class="dot" onclick="currentSlide(3)"></span> 
		</div>
	</main>
	<section class="offers">
		<div class="offer-wrapper">
			<div class="offer-text">
				<h2>Šios savaitės geriausi IKI pasiūlymai!</h2>
				<a href="">Visos akcijos</a>
			</div>
			<div class="offer-products">
				<img src="https://www.iki.lt/assets/Uploads/Product/2019-22-5.jpg">
				<img src="https://www.iki.lt/assets/Uploads/Product/2019-22-4.jpg">
				<img src="https://www.iki.lt/assets/Uploads/Product/2019-22-3.jpg">
			</div>
		</div>
	</section>
	<section class="clever-offers">
		<div class="clever-wrapper">
			<div class="clever-text">
				<h2>CLEVER – visada žema kaina be akcijų!</h2>
				<a href="">Visi CLEVER pasiūlymai</a>
			</div>
			<div class="clever-products">
				<img src="https://www.iki.lt/assets/Uploads/Product/2019-09-016.jpg">
				<img src="https://www.iki.lt/assets/Uploads/Product/2019-09-017.jpg">
				<img src="https://www.iki.lt/assets/Uploads/Product/2019-09-019.jpg">
				<img src="https://www.iki.lt/assets/Uploads/Product/2019-11-007.jpg">
			</div>
		</div>
	</section>
	<section class="special-offers">
		<div class="special-wrapper">
			<div class="special-text">
				<h2>Specialios akcijos</h2>
			</div>
			<div class="special-product">
				<img src="https://www.iki.lt/assets/Uploads/TradeMark/580x280px-lojalumas.jpg">
			</div>
		</div>
	</section>
	<footer>
		<span>2016 © „Palink“, UAB. Visos teisės saugomos.</span>
		<div class="footer-social-networks">
			
		</div>
	</footer>
	 <script src="js/slider.js"></script>
</body>
</html>