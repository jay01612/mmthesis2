<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Murder Manila | Summary</title>
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
		input[type="text"], input[type="number"], input[type="email"] {
			color: white;
		}
		input[type="number"]::-webkit-outer-spin-button, input[type="number"]::-webkit-inner-spin-button {
    		-webkit-appearance: none;
    		margin: 0;
    	}
    	.agreement-content {
			border: solid 2px #ccc;
			overflow-y: scroll;
    	}
    	.card-header {
    		background-color: #89c13e;
    	}
    	.card-footer {
    		background-color: #167cf8;
    	}
	</style>
</head>
<body class="bg-dark">
	<div class="container-fluid text-center">
			<img src="mmlogo.png" width="200" height="200" class="img-fluid">
			<div class="progress">
	  <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 50%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
			</div>

			<div class="summary"><br>
				<div class="col-sm-12">
					<div class="row">
						<div class="col-sm-12">
							<h1 class="display-5 text-white">BOOKING SUMMARY</h1>
							<hr class="my-1">
						</div>
					</div>
				</div>
			</div>

			<div class="summary-content text-white "><br>
				<div class="col-sm-12">
					<div class="row">
						<div class="col-sm-2">
							<label for="mystery">Mystery:</label>
						</div>
						<div class="col-sm-4">
							<input type="text" name="mystery" id="mystery" class="form-control" readonly>
						</div>
						<div class="col-sm-2">
							<label for="fn">First Name:</label>
						</div>
						<div class="col-sm-4">
							<input type="text" name="firstName" id="firstName" class="form-control" readonly>
						</div>
					</div>
				</div>

				<div class="col-sm-12"><br>
					<div class="row">
						<div class="col-sm-2">
							<label for="date">Date:</label>
						</div>
						<div class="col-sm-4">
							<input type="text" name="dateStart" id="dateStart" class="form-control" readonly>
						</div>
						<div class="col-sm-2">
							<label for="ln">Last Name:</label>
						</div>
						<div class="col-sm-4">
							<input type="text" name="lastName" id="lastName" class="form-control" readonly>
						</div>
					</div>
				</div>

				<div class="col-sm-12"><br>
					<div class="row">
						<div class="col-sm-2">
							<label for="time">Time:</label>
						</div>
						<div class="col-sm-4">
							<input type="text" name="timeStart" id="timeStart" class="form-control" readonly>
						</div>
						<div class="col-sm-2">
							<label for="mn">Mobile Number:</label>
						</div>
						<div class="col-sm-4">
							<input type="text" name="mobileNumber" id="mobileNumber" class="form-control" readonly>
						</div>
					</div>
				</div>

				<div class="col-sm-12"><br>
					<div class="row">
						<div class="col-sm-2">
							<label for="maxpax">Group Size:</label>
						</div>
						<div class="col-sm-4">
							<input type="text" name="maxPax" id="maxPax" class="form-control" readonly>
						</div>
						<div class="col-sm-2">
							<label for="venue">Venue:</label>
						</div>
						<div class="col-sm-4">
							<input type="text" name="venueStart" id="venueStart" class="form-control" readonly>
						</div>
					</div>
				</div>

				<div class="col-sm-12"><br>
					<div class="row">
						<div class="col-sm-2">
							<label for="amount">Total Amount:</label>
						</div>
						<div class="col-sm-4">
							<input type="text" name="amountTotal" id="amountTotal" class="form-control" readonly>
						</div>
						<div class="col-sm-2">
							<label for="email">Email:</label>
						</div>
						<div class="col-sm-4">
							<input type="text" name="eMail" id="eMail" class="form-control" readonly>
						</div>
					</div>
				</div>

				<div class="terms"><br><br>
					<div class="row">
						<div class="col-sm-3"></div>
							<div class="col-sm-6">
								<div class="row">
									<h1 class="display-5 mx-auto">TERMS & CONDITIONS</h1>
									<hr class="my-1">
								</div>
							</div>
						<div class="col-sm-3"></div>
					</div>
				</div>

				<div class="agreement text-white text-left"><br>
					<div class="row">
						<div class="col-sm-2"></div>
							<div class="col-sm-8">
								<div class="row">
									<div class="pre-scrollable agreement-content p-4">
										<p><b>We fully understand and acknowledge that:</b>
											<br><br>1.) Risks and danger exist in our participation in the activities.<br><br>

											2.) Our participation in such activities and/or use of such equipment may result in my injury or illness, including, but not limited to bodily injury, disease strains, heart attack, death or other ailments that could cause serious disability.<br><br>

											3.) These risks and dangers may arise from foreseeable or unforeseeable causes.<br><br>

											4.) By our participation in these activities, we hereby assume all risks and dangers and all responsibility for any losses and/or damages, whether caused in whole or in part by the negligence or other conduct of the owners, agents, officers, and employees of Murder Manila or by any other person.<br><br>

											5.) We have read the Data Privacy Waiver and FAQs and will abide with all the policies that Murder Manila has imposed (i.e. rebooking and cancellation policies).<br><br>

											6.) I hereby irrevocably consent without royalty or other compenstation of any kind to the use, for any lawfil purpose, including but not limited to advertising and trade purposes, by Murder Manila or 360 Aevent Management Corporation, its subsidiaries, affiliated companies and successors-in interest.<br><br>

											7.) We, on behalf or ourselves, our personal representatives and our heirs, hereby voluntarily agree to release, waive, discharge, hold harmless, defend and indemnify Murder Manila and its owners, agents, officers and employees from any and all claims, actions, or losses for bodily injury, property damage, wrongful death, loss of services or otherwise which may arise out of my participation in activities. We specifically understand that we are releasing, discharging and waiving any claims or actions that we may have present or in the future for the negligent acts or other conduct by the owners, agents, officers or employees of Murder Manila. We also agree to handle all items related to the activity with care, including but not limited to furniture, props and clues. In the event of loss or damage to any of the items, we agree to pay the corresponding amount to cover for the replacement or repair of the item/s.<br><br></p>
											<br>
											<br>
												<div class="agreement-check text-center">
													<div class="form-check">
														<input type="checkbox" name="checkbox" value="" id="agreementCheck" class="form-check-input"/>
														<label class="form-check-label" for="agreementbox">I agree with the terms & conditions</label>
													</div>
												</div>
									</div>
								</div>
							</div>
						<div class="col-sm-2"></div>
					</div>
				</div>

			<div class="payment"><br><br>
				<div class="col-sm-12">
				<h1 class="display-5 text-center">PAYMENT</h1>
				<hr class="my-1">
				</div>
			</div>

			<div class="payment-content w-75 mx-auto"><br>
				<div class="col-sm-12">
					<div class="card text-center text-dark">
						  <div class="card-header">
						    Paymaya
						  </div>
						  <div class="card-body">
						    <h5 class="card-title"><img src="paymaya.png" class="img-fluid" width="100" height="100"></h5>
						  </div>
						  <div class="card-footer text-dark">
						     <div class="form-check">
						     	<input type="radio" name="" class="form-check-input" id="payrdb">
						     	<label class="form-check-label" for="radio1">Click Here</label>
						     </div>
						  </div>
						</div>
				</div>
			</div>

			<div class="btn-next"><br><br>
				<div class="col-sm-12">
					<a href="" class="btn btn-primary btn-lg w-25" id="nextBtn">Next</a>
				</div>
			</div>

			</div>	
	</div>	
	<script type ="text/javascript">
		
		$(document).ready(function(){
			 $(document).on('click', '#nextBtn', function(){
			// 	//  //$('#nextBtn').remove();
			// 	// $('body').append('<div class="col-sm-12"><a href="" class="btn btn-primary btn-lg w-25 text-center" id="nextBtn">Next</a></div>');
			// 	// var cb = $('#agreementCheck');
				if (($('#agreementCheck').prop('checked')) || ($('#radio_button').is(':checked'))){
					// alert("hello");
					$ajax({
			            url: "",
			            type: "",
			            data: {
			              
			            }
			          })
   				}else{
   					alert("please check the terms condition or choose a mode of payment")
   				}
			});
		});
	</script>
</body>
</html>