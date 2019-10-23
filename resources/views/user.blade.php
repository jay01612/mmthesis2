<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Murder Manila | Home</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script src="{{ asset('parallax.js-1.5.0/parallax.min.js') }}"></script>
	<link href="https://fonts.googleapis.com/css?family=Montserrat|Nunito|Open+Sans&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/297acfa026.js" crossorigin="anonymous"></script>

	<style>
		body, html{
			height: 100%;
			width: 100%;
			font-family: 'Nunito', sans-serif;
			scroll-behavior: smooth;
		}
		.parallax-window{
			display: table;
			height: 100%;
			width: 100%;
			background-size: cover;
			background: transparent;
		}
		.landing-text{
			display: table-cell;
			vertical-align: middle;
			text-align: center;
			text-shadow: 0 0 10px #000;
			color: #fff;
			font-family: 'Open Sans', sans-serif;
		}
		.navbar {
			text-transform: uppercase;
			font-weight: 500;
			font-size: .9rem;
			letter-spacing: .1rem;
			background: rgba(0, 0, 0, .6) !important;
		}
		.navbar-nav li{
			padding-right: .7rem;
		}
		.navbar .navbar-nav .nav-link {
			color: white;

		}
		.navbar .navbar-nav .nav-link.active,
		.navbar .navbar-nav .nav-link:hover {
			color:#d43333;

		}
		hr {
			border-color: red;
			width: 50%;
		}
		.about-content{
			margin-top: 20px;
			width: 33.33%;

		}	
		#about {
			margin: 40px 0;
		}
		#dark {
			background-color: #000;
		

		}
		.dark-title {
			color: red;
			margin-top: 50px;
		}
		.dark-content {
			width: 33.33%;
		}
		h1 {
			font-family: 'Open Sans', sans-serif;
		}
		.theme-img {
			border: 2px solid black;
		}
		#theme {
			margin: 40px 0;
		}
		#theme-content {
			font-family: 'Montserrat', sans-serif;
			width: 33.33%;
		}
		#img-1, #img-2, #theme-content {
			margin-top: 20px;
		}
		#footer {
			background-color: #000;
		}
	</style>
</head>
<body data-spy="scroll" data-target="#navbarResponsive">

	<!-- Navbar -->
	<nav class="navbar navbar-expand-sm navbar-dark bg-dark fixed-top">
		<a class="navbar-brand" href="#"><img src="mmlogo.png" width="50" height="50"></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarResponsive">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item">
					<a class="nav-link active" href="#">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#theme">Themes</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#faqs">FAQs</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#footer">Contacts</a>
				</li>
			</ul>
		</div>
	</nav>


	<!-- Landing Page -->
	<div class="parallax-window" data-parallax="scroll" data-image-src="1darkres.jpg" data-z-index="-1">
		<div class="landing-text">
			<h4 class="display-5">From the team that brought you &nbsp;<img src="2.png" width="90" height="120"></h4>
			<h3><img src="12.png" width="400" height="400"></h3>
			<a href="{{ url('/booking') }}" class="btn btn-primary btn-lg">BOOK NOW</a>
		</div>
	</div>

	<!-- About -->
<div class="container-fluid" id="about">
  <h1 class="display-4 text-center">What is Murder Manila?</h1>
  <hr class="my-1">
  <div class="row">
  	<div class="col-sm-6 text-center"><p class="about-content mx-auto">We offer a memorable and one-of-a-kind activity perfect for any private occasion. Experience a murder mystery where you and your guests will play the victim, suspects and murderer.</p></div>
  	<div class="col-sm-6 text-center"><p class="about-content mx-auto">We can customize the party for you! Groups of 8 to 30, or even more personal or corporate functions. Choose a venue of your choice, or we can suggest one for you.</p></div>
  </div>
</div>

	<!-- Rules -->
<div class="container-fluid text-white" id="dark">
	<h1 class="display-4 text-center">How do I play Murder Manila?</h1>
	<hr class="my-1">
	<div class="row">
		<div class="col-sm-4 text-center">
			<h4 class="dark-title">Socialize</h4>
			<img src="dark-1.png" width="70" height="70" id="dark-img">
			<p class="dark-content mx-auto">Everyone at your party is guilty! Mingle with potential victims, allies or killers. Get to know their dirty little secrets.</p>
		</div>
		<div class="col-sm-4 text-center">
			<h4 class="dark-title">Whodunnit</h4>
			<img src="dark-2.png" width="70" height="70" id="dark-img">
			<p class="dark-content mx-auto">From all the clues gathered, analyze and deduce who do you think is the mastermind.</p>
		</div>
		<div class="col-sm-4 text-center">
			<h4 class="dark-title">Decide</h4>
			<img src="dark-3.png" width="70" height="70" id="dark-img">
			<p class="dark-content mx-auto">With all the clues that were presented, decide on who is the suspect for the crime and help the good guys capture the bad guys.</p>
		</div>
	</div>
</div>

	<!-- Theme -->
<div class="container-fluid text-black" id="theme">
	<h1 class="display-4 text-center">Select your Mystery</h1>
	<hr class="my-1">
	<div class="row">
		<div class="col-sm-6 text-right">
			<img src="11.jpg" width="370" height="350" class="theme-img"
			id="img-1">
		</div>
		<div class="col-sm-6 text-left">
			<p id="theme-content">You do not know each other but you have all been invited to a mysterious dinner party by an unknown host in the famous Mystery Mansion. The night turns fatal as one of the guests is murdered shortly after dinner. What’s even more frightening is the realization that the killer is amongst you.<br><br>

Is it the mild-mannered doctor, the wise judge, the flirtatious maid, or the loyal butler? You must find out by the end of the night before the killer strikes again.</p>
		</div>
		<div class="col-sm-6 text-right">
			<img src="12.jpg" width="370" height="350" class="theme-img"
			id="img-2">
		</div>
		<div class="col-sm-6 text-left">
			<p id="theme-content">It’s been 15 years since you’ve graduated from high school and it’s time to reunite and catch up with your former classmates to see how everyone is doing and what everyone has become.<br><br>
			 Unfortunately, the reunion will turn deadly as a killer is amongst you waiting to strike at his victim.<br><br>

			Stay alert and use your detective skills to uncover the murderer before the end of the night.</p>
		</div>
	</div>

	<h1 class="display-4 text-center mt-5" id="faqs">Frequently Asked Questions</h1>
	<hr class="my-1">
	<div class="row">
		<div class="col-sm-12 text-center">
			<h3 class="display-5 mt-5"><u>How to book?</u></h3>
			<p id="faqs-content">Choose your mystery <br> 
				Finalize the date, time, venue, and headcount of participants<br>
				Booking must be <strong>1 week before the event</strong> if you book less than a week there will be a rush fee <strong>(3,000 PHP)</strong>.<br>
				<br>
				<!-- Email: info@murdermanila.com -->
			</p>
		</div>
		<div class="col-sm-12 text-center">
			<h3 class="display-5 mt-5"><u>How much is Murder Manila?</u></h3>
			<p id="faqs-content">Price starts at PHP 8,000 for 8 people then additional PHP 500/head for every person in excess.
			</p>
		</div>
		<div class="col-sm-12 text-center mb-5">
			<h3 class="display-5 mt-5"><u>What are the inclusions?</u></h3>
			<p id="faqs-content">The package includes the following: <br>
				<li>A mystery that can be played for 2 hours, complete with individual roles, objectives, and other pertinent guidelines for each player such as costume and background story per character.</li> 
				<li>A gamekeeper/ficilitator and host for the mystery solving portion.</li> 
				<li>Minor props such as clues, play money, and detective kits needed for the mystery.</li>
				<li>Free Mystery Manila shirts for the fastest solver, best actor, best in costume, and the one with most play money left at the end of the game.</li>
				<li>Free Mystery Manila stickers for all participants.</li>
			</p>
		</div>
	</div>
	</div>

	<!-- Footer -->
<footer class="container-fluid text-white" id="footer">
		<h1 class="display-4 text-center pt-5"><img src="mmlogo.png" width="200" height="200"></h1>
		<hr class="my-1 mb-5">
		<div class="row">
			<div class="col-sm-4 text-center">
				Contacts:<br>
				(21)12351345<br>
				(34)12313756<br>
				(58)95710922<br>
			</div>
			<div class="col-sm-4 text-center">
				E-Mail:<br>
				apdsofkaposdkf@gmail.com<br>
				paowkefopakwoe@yandex.com<br>
				defkpoakfeapfa@fb.com<br>
			</div>
			<div class="col-sm-4 text-center">
				Social Media:<br>
				<a href="{{ url('https://www.facebook.com/Murder-Manila-1611595099069010/') }}" target="_blank"><i class="fab fa-facebook"></i></a>
				<a href="{{ url('https://www.instagram.com/murdermanila/?hl=en') }}" target="_blank"><i class="fab fa-instagram"></i></a>

			</div>
			<hr class="my-1 w-25 mt-5">
			<div class="col-sm-12 text-center">© Group 5</div>
		</div>
</footer>
</body>
</html>