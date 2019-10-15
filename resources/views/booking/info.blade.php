<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Murder Manila | Info</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script src="{{ asset('parallax.js-1.5.0/parallax.min.js') }}"></script>
	<link href="https://fonts.googleapis.com/css?family=Montserrat|Nunito|Open+Sans&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/297acfa026.js" crossorigin="anonymous"></script>

	<style>
		body {
			font-family: 'Montserrat', sans-serif;
			padding: 20px;
		}
		hr {
			border-color: red;
			width: 50%;
		}
		h1 {
			letter-spacing: 0.1em;
		}
		.form-control {
			border-bottom-color: black;
			background: transparent;
			border-top-color: transparent;
			border-left-color: transparent;
			border-right-color: transparent;
			text-align: center;
			border-radius: 10px;
		}
	</style>
</head>
<body class="bg-dark">
	<div class="container-fluid text-center">
		<img src="mmlogo.png" width="200" height="200" class="img-fluid">
		<div class="progress">
  <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
</div>

		<div class="col-sm-12 mt-5">
			<h1 class="display-5 text-white">CUSTOMER INFORMATION</h1>
			<hr class="my-1 mb-5">
		</div>


		<div class="row">
		
				<div class="col-sm-3"></div>
				<div class="col-sm-6">
				<form class="form-group text-white">
					<label for="fn">First Name:</label>
					<input type="text" name="firstName" id="firstName" class="form-control w-50 mx-auto">
				</div>
				</form>
				<div class="col-sm-3"></div>

				<div class="col-sm-3"></div>
				<div class="col-sm-6">
				<form class="form-group text-white">
					<label for="ln">Last Name:</label>
					<input type="text" name="lastName" id="lastName" class="form-control w-50 mx-auto">
				</div>
				</form>
				<div class="col-sm-3"></div>

				<div class="col-sm-3"></div>
				<div class="col-sm-6">
				<form class="form-group text-white">
					<label for="mn">Mobile Number:</label>
					<input type="text" name="mobileNumber" id="mobileNumber" class="form-control w-50 mx-auto">
				</div>
				</form>
				<div class="col-sm-3"></div>

				<div class="col-sm-3"></div>
				<div class="col-sm-6">
				<form class="form-group text-white">
					<label for="email">E-Mail:</label>
					<input type="text" name="eMail" id="eMail" class="form-control w-50 mx-auto">
				</div>
				</form>
				<div class="col-sm-3"></div>
				<a href="" class="btn btn-primary btn-lg mt-5 mx-auto w-25" id="next">Next</a>
		
		</div>
	</div>
	<script>
		$(document).ready(function(){
			$(document).on('click', '#next', function(){
				var firstName = $('#firstName').val();
				var lastName = $('#lastName').val();
				var mobileNumber = $('#mobileNumber').val();
				var eMail = $('#eMail').val();
			});
		});
	</script>
</body>
</html>