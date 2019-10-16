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
		/*#theme-1 {
			display: none;
		}*/
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

	<div class="col-md-12"><br>
		<h1 class="display-5 text-white ">SELECT YOUR THEME</h1>
		<hr class="my-1">
	</div>
	<br/>
	<div class="col-md-12">
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4">
				{{-- <select class="form-control" id="theme">
					<option value="" class="active">SELECT</option>
					<option value="1">Murder at the Mansion</option>
					<option value="2">Revenge at the Reunion</option>
				</select> --}}
			</div>
			<div class="col-md-4"></div>
		</div>
		<br/>
		<div class="row">
			<div id="holder">
				<div class="col-md-12 text-center" id="imageHolder">
				</div>

			</div>
		</div>
	</div>

	<div class="row mt-5">
		<div class="col-sm-4">
			<h1 class="display-5 text-white">DATE</h1>
			<hr class="my-1"><br/>
			<!-- <form> -->
				<div class="form-group text-white mb-5">
					<input class="form-control" type="date" id="dateStart"/>
				</div>
			<!-- </form> -->
		</div>
		<div class="col-sm-4"></div>
		<div class="col-sm-4">
			<h1 class="display-5 text-white">TIME</h1>
			<hr class="my-1"><br/>
			<!-- <form> -->
				<div class="form-group">
					<input class="form-control" type="time" id="timeStart"/>
			<!-- </form> -->
		</div>
</div>
<div class="col-sm-4">
	<h1 class="display-5 text-white">GROUP SIZE</h1>
	<hr class="my-1"><br/>
	<!-- <form> -->
		<div class="form-group">
			<input type="text" name="maxPax" id="maxPax" class="form-control"/>
		</div>
	<!-- </form> -->
</div>
<div class="col-sm-4"></div>
<div class="col-sm-4">
	<h1 class="display-5 text-white">VENUE</h1>
	<hr class='my-1'><br/>
	<!-- <form> -->
		<div class="form-group">
    <textarea class="form-control" id="venue" rows="3" textarea=""></textarea>
  </div>
	<!-- </form> -->
</div>
<button class="btn btn-primary btn-lg mt-5 mx-auto w-25" id="nextBtn">Next</button>
</div>
</div>
</div>


	<script type="text/javascript">
		$(document).ready(function(){
			$(document).on('click', '#nextBtn', function(){
				var game = $('#theme').val();
				var dateStart = $('#dateStart').val();
				var timeStart = $('#timeStart').val();
				var maxPax = $('#maxPax').val();
				var venue = $('#venue').val();

				// console.log(game + " " + dateStart + " " + timeStart);

				if((game == "") || (dateStart === null) || (timeStart === null) || (maxPax == "") || (venue == "")){
					alert("Please fill out the form!");
				}else{
					$.ajax({
						url : "{{ url('api/nextStep') }}",
						type: "POST",
						data : {
							game : game,
							dateStart : dateStart,
							timeStart : timeStart,
							maxPax : maxPax
						}
					}).done(function(response){
						if(response.response){
							// document.location.replace('{{ url('/info') }}');
							console.log(response.datas);
						}
					});
				}

			});

			$(document).on('change', '#theme', function(){

				var themes = $('#theme').val();

				// if(themes != ''){
				// 	console.log(themes);
				// 	if(themes == '1'){
				// 		$('#imageHolder').append('<img src=" {{ asset('11.jpg') }} " width="" height="" class="img-fluid" id="theme-1">');
							
				// 		}else if(themes == '2'{
				// 			$('#imageHolder').append('<img src=" {{ asset('11.jpg') }} " width="" height="" class="img-fluid" id="theme-1">');
				// 			}else{
				// 				$('#imageHolder').remove();
				// 				$('#holder').append('<div class="col-md-12 text-center" id="imageHolder"></div>');		
				// 			};
				// 		}		
				// 	}	
				// };
				if(themes == '1'){
				 		$('#imageHolder').append('<img src=" {{ asset('11.jpg') }} " width="" height="" class="img-fluid" id="theme-1">');
				 	}
							
				
			});
		});
	</script>
</body>
</html>