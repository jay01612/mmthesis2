<!DOCTYPE html>
<html>
<head>
	<title>Murder Manila | Home</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://kit.fontawesome.com/297acfa026.js" crossorigin="anonymous"></script>
	<link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script src="/parallax.js-1.5.0/parallax.min.js"></script>
</head>
<body>

<!--navbar-->
{{-- <nav class="navbar navbar-dark bg-dark" id="navbar">
	<a class="navbar-brand" href="#"><i class="fas fa-search"></i> Murder Manila</a>
</nav> --}}

<!--parallax-->
<div class="parallax" data-parallax="scroll" data-z-index="-1" data-image-src="1dark.jpg">
<div class="heading">
	From the team that brought you Mystery Manila <img src="2.png" width="50" height="70">
	<br>
	<img src="12.png" width="570" height="570">
	<br>
	<button type="button" class="btn btn-light" id="btn-booking">BOOK NOW</button>
	</div>
</div>
<section>
<div class="container-2">
	<h3 class="booking-title">What is Murder Manila?</h3>
	<hr class="hr">
	<div class="booking">
<p>We offer a memorable and one-of-a-kind activity perfect for any private occasion. Experience a murder mystery where you and your guests will play the victim, suspects, and murderer.</p>
	</div>

	<div class="booking">
<p>We can customize the party for you! Groups of 8 to 30, or even more personal or corporate functions. <br>
	Choose a venue of your choice, or we can suggest one for you.
 </p>
	</div>
	</div>
<div class="container-3">
	a
</div>
</section>
{{-- <footer id="footer">
	<p class="footer-con">CONTACT US | Bruce James Dela Cruz</p>
</footer> --}}
</body>
<style>
	body {
		padding: 0;
		margin: 0;
		width: 100%;
		height: 100vh;
		font-family: 'Nunito', sans-serif;
		 letter-spacing: 0.5px;
	}
	.parallax {
		min-height:95%;
		background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5));
		background-size: cover;
		background-repeat: no-repeat;
		background-position: center;
		background:transparent;

		
	
	}
	.heading {
		position: absolute;
		color: #fff;
		top: 20px;
		width: 100%;
		font-size: 150%;
		text-shadow: 0 0 10px #000;
		text-align: center;
	}
	#btn-booking {
		width: 10%;
	}
	.booking {
		float: left;
		width: 50%;
		padding: 0 4%;
		text-align: center;
	}
	section {
		overflow: auto;
	}
	.booking-title {
		text-align: center;
	}
	.container-2 {
		padding: 20px;
		min-height: 50%;
	}
	.hr { 
		width: 50%;
		border: none;
		height: 2px;
		background-color: red;
	}
	
	
</style>
</html>