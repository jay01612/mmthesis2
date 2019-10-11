<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Murder Manila | Booking</title>
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
		#theme-1 {
			display: none;
		}
		h1 {
			letter-spacing: 0.1em;
		}
	</style>
</head>
<body class="bg-dark">
	<div class="container-fluid text-center">
		<img src="mmlogo.png" width="200" height="200" class="img-fluid">
		<div class="progress">
  <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 0%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
</div>

	<div class="row mt-5">
		<div class="col-sm-12">
			<h1 class="display-5 text-white ">SELECT YOUR THEME</h1>
			<hr class="my-1">
		</div>
		<div class="col-sm-4 text-center mt-5">
			<form>
				<div class="form-group text-white">
					<select class="form-control" id="theme">
						<option class="active">&nbsp;</option>
						<option value="t-1">Murder at the Mansion</option>
						<option value="t-2">Revenge at the Reunion</option>
					</select>
				</div>
			</form>
		</div>
		<div class="col-sm-2"></div>
		<div class="col-sm-6 text-center mt-5">
			<img src="11.jpg" width="500" height="500" class="img-fluid" id="theme-1">
		</div>
		<div class="col-sm-4">
			<h1 class="display-5 text-white">DATE</h1>
			<hr class="my-1"><br/>
			<form>
				<div class="form-group text-white mb-5">
					<input class="form-control" type="date" id="dateStart"/>
				</div>
			</form>
		</div>
		<div class="col-sm-4"></div>
		<div class="col-sm-4">
			<h1 class="display-5 text-white">TIME</h1>
			<hr class="my-1"><br/>
			<form>
				<div class="form-group">
					<input class="form-control" type="time" id="timeStart"/>
			</form>
		</div>
</div>
<div class="col-sm-4">
	<h1 class="display-5 text-white">GROUP SIZE</h1>
	<hr class="my-1"><br/>
	<form>
		<div class="form-group">
			<input type="text" name="maxPax" id="maxPax" class="form-control"/>
		</div>
	</form>
</div>
<div class="col-sm-4"></div>
<div class="col-sm-4">
	<h1 class="display-5 text-white">VOUCHER CODE</h1>
	<hr class='my-1'><br/>
	<form>
		<div class="form-group">
			<input type="text" name="voucherCode" id="voucherCode" class="form-control"/>
		</div>
	</form>
</div>
<a href="{{ url('/info') }}" class="btn btn-primary btn-lg mt-5 mx-auto w-25" id="nextBtn">Next</a>
</div>
</div>
</div>


	<script type="text/javascript">
		$(document).ready(function(){
			$(document).on('click', '#nextBtn', function(){
				var game = $('#theme').val();
				var dateStart = $('#dateStart').val();
				var timeStart =$('timeStart').val();

				console.log(game + " " + dateStart + " " + timeStart);
			});
		});
	</script>
</body>
</html>