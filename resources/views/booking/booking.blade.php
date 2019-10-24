<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Murder Manila | Booking</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Montserrat|Nunito|Open+Sans&display=swap" rel="stylesheet">

	<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/css/select2.css" rel="stylesheet" />

	<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet"/>
	


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
		/*#summaryContent {
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
    	}*/
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
	<div class="container-fluid text-center" id="bookingDiv">
		<img src="mmlogo.png" width="200" height="200" class="img-fluid">
		<div class="progress">
  <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 0%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
</div>
	
<div class="col-md-12">

	<div class="row mt-5">
		<div class="col-sm-4">
			<h1 class="display-5 text-white">DATE</h1>
			<hr class="my-1"><br/>
			<!-- <form> -->
				<div class="form-group text-white mb-5">
					<input class="form-control" type="date" id="dateStart" placeholder="mm/dd/yyyy"/>
					<small id="dateStart" class="form-text text-muted text-white"><i>please input your preferred date (format: mm/dd/yyyy)</i></small>
				</div>
			<!-- </form> -->
		</div>
		<div class="col-sm-4"></div>
		<div class="col-sm-4">
			<h1 class="display-5 text-white">TIME</h1>
			<hr class="my-1"><br/>
			<!-- <form> -->
				<div class="form-group">
					<input class="form-control" type="time" id="timeStart" placeholder="00:00AM/PM"/>
					<small id="timeStart" class="form-text text-muted"><i>please input your preferred time (format: 00:00AM/PM)</i></small>
			<!-- </form> -->
		</div>
	</div>

	<div class="col-md-12 mb-5"><br>
		<h1 class="display-5 text-white ">SELECT YOUR THEME</h1>
		<hr class="my-1"/>
		<select id="themes" class="form-control">
			<option value="">SELECT</option>
		</select>
	</div>
	<br/>

<div class="col-sm-4">
	<h1 class="display-5 text-white">GROUP SIZE</h1>
	<hr class="my-1"><br/>
	<!-- <form> -->
		<div class="form-group">
			<input type="number" name="maxPax" id="maxPax" class="form-control" disabled />
			<small id="maxPax" class="form-text text-muted"><i>minimum of 8, maximum of 60</i></small>
		</div>
	<!-- </form> -->
</div>
<div class="col-sm-4"></div>
<div class="col-sm-4">
	<h1 class="display-5 text-white">VENUE</h1>
	<hr class='my-1'><br/>
	<!-- <form> -->
		<div class="form-group">
    <textarea class="form-control" id="venue" rows="3" disabled></textarea>
  </div>
	<!-- </form> -->
</div>
<button class="btn btn-primary btn-lg mt-5 mx-auto w-25" id="nextBtn" disabled>Next</button>
</div>
</div>
</div>
</div>

<div class="col-md-12" id="clientInfo" hidden>
	<div class="container-fluid text-center">
		<img src="mmlogo.png" width="200" height="200" class="img-fluid">
		<div class="progress">
  <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
</div>

		<div class="col-sm-12 mt-5">
			<h1 class="display-5 text-white">CUSTOMER INFORMATION</h1>
			<hr class="my-1 mb-5">
		</div>

		<div class="col-sm-12">
			<div class="row">
				<div class="col-sm-4"></div>
					<div class="col-sm-4">
						<div class="form-group">
							<label for="fn" class="text-white">First Name:</label>
							<input type="text" name="firstName" id="firstName" class="form-control">
						</div>
					</div>
				<div class="col-sm-4"></div>
			</div>

						<div class="row">
				<div class="col-sm-4"></div>
					<div class="col-sm-4">
						<div class="form-group">
							<label for="ln" class="text-white">Last Name:</label>
							<input type="text" name="lastName" id="lastName" class="form-control">
						</div>
					</div>
				<div class="col-sm-4"></div>
			</div>

						<div class="row">
				<div class="col-sm-4"></div>
					<div class="col-sm-4">
						<div class="form-group">
							<label for="mn" class="text-white">Mobile Number:</label>
							<input type="number" name="mobileNum" id="mobileNumber" class="form-control">
						</div>
					</div>
				<div class="col-sm-4"></div>
			</div>

						<div class="row">
				<div class="col-sm-4"></div>
					<div class="col-sm-4">
						<div class="form-group">
							<label for="email" class="text-white">Email:</label>
							<input type="email" name="email" id="email" class="form-control"><br>
						</div>
					</div>
				<div class="col-sm-4"></div>
			</div>

						<div class="row">
				<div class="col-sm-4"></div>
					<div class="col-sm-4">
						<div class="form-group">
							<button class="btn btn-primary w-75 btn-lg" id="nextInfoBtn">Next</button>
						</div>
					</div>
				<div class="col-sm-4"></div>
			</div>

		</div>
	</div>
</div>

<div class="col-md-12" id="summary" hidden>
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
							<input type="text" name="mystery" id="mystery" class="form-control" id="summaryContent" readonly>
						</div>
						<div class="col-sm-2">
							<label for="fn">First Name:</label>
						</div>
						<div class="col-sm-4">
							<input type="text" name="firstName" id="firstNameSummary" class="form-control" id="summaryContent" readonly>
						</div>
					</div>
				</div>

				<div class="col-sm-12"><br>
					<div class="row">
						<div class="col-sm-2">
							<label for="date">Date:</label>
						</div>
						<div class="col-sm-4">
							<input type="text" name="dateStart" id="dateStartSummary" class="form-control" id="summaryContent" readonly>
						</div>
						<div class="col-sm-2">
							<label for="ln">Last Name:</label>
						</div>
						<div class="col-sm-4">
							<input type="text" name="lastName" id="lastNameSummary" class="form-control" id="summaryContent" readonly>
						</div>
					</div>
				</div>

				<div class="col-sm-12"><br>
					<div class="row">
						<div class="col-sm-2">
							<label for="time">Time:</label>
						</div>
						<div class="col-sm-4">
							<input type="text" name="timeStart" id="timeStartSummary" class="form-control" id="summaryContent" readonly>
						</div>
						<div class="col-sm-2">
							<label for="mn">Mobile Number:</label>
						</div>
						<div class="col-sm-4">
							<input type="text" name="mobileNumber" id="mobileNumberSummary" class="form-control" id="summaryContent" readonly>
						</div>
					</div>
				</div>

				<div class="col-sm-12"><br>
					<div class="row">
						<div class="col-sm-2">
							<label for="maxpax">Group Size:</label>
						</div>
						<div class="col-sm-4">
							<input type="text" name="maxPax" id="maxPaxSummary" class="form-control" id="summaryContent" readonly>
						</div>
						<div class="col-sm-2">
							<label for="venue">Venue:</label>
						</div>
						<div class="col-sm-4">
							<input type="text" name="venueStart" id="venueStartSummary" class="form-control" id="summaryContent" readonly>
						</div>
					</div>
				</div>

				<div class="col-sm-12"><br>
					<div class="row">
						<div class="col-sm-2">
							<label for="amount">Total Amount:</label>
						</div>
						<div class="col-sm-4">
							<input type="text" name="amountTotal" id="amountTotal" class="form-control"  id="summaryContent"readonly>
						</div>
						<div class="col-sm-2">
							<label for="email">Email:</label>
						</div>
						<div class="col-sm-4">
							<input type="text" name="eMail" id="eMail" class="form-control" id="summaryContent" readonly>
						</div>
					</div>
				</div>

				<div class="col-md-12">
					<div class="row">
						<div class="col-md-4">
							<label for="verificationcodeCode">Verification Code</label>
						</div>
						<div class="col-md-4">
							<input type="text" class="form-control" id="verificationcodeCodeInput"/>
						</div>
						<div class="col-md-4">
							<button type="button" id="verificationCodeBtn" class="btn btn-info">Verifiy</button>
						</div>
					</div>
				</div>

				<br/><br/>

				<hr/>

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
					<button class="btn btn-primary btn-lg w-25" id="nextBtn" disabled>Next</button>
				</div>
			</div>

			</div>	
	</div>
</div>

	<script
	  src="https://code.jquery.com/jquery-3.4.1.js"
	  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
	  crossorigin="anonymous"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script src="{{ asset('parallax.js-1.5.0/parallax.min.js') }}"></script>
	<script src="https://kit.fontawesome.com/297acfa026.js" crossorigin="anonymous"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/js/select2.min.js"></script>

	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

	<script type="text/javascript">

		getThemes();
		var refId;
		var clientInfoId;

		// $('#themes').select2();
		
		$(document).ready(function(){

			$(document).on('change', '#themes', function(){
				var getTheme = $('#themes').val();
				var dateStart = $('#dateStart').val();
				var timeStart = $('#timeStart').val();
				
				// console.log(dateStart);
				// console.log(timeStart);

				if(dateStart != '' && timeStart != ''){
					$.ajax({
						url: "{{ url('api/checkAvailability') }}",
						type: "POST",
						data: {
							theme: getTheme,
							date: dateStart,
							time: timeStart
						},

						beforeSend: function(){
							toastr.info("Please wait checking availability");
						}
					}).done(function(response){
						if(response.success){
							toastr.success(response.message);
							$('#maxPax').prop('disabled', false);
							$('#venue').prop('disabled', false);
							$('#nextBtn').prop('disabled', false);
						}else{
							toastr.error(response.message);
						}
					});
				}

			});

			$(document).on('click', '#nextBtn', function(){

				var theme = $('#themes').val();
				var dateStart = $('#dateStart').val();
				var timeStart = $('#timeStart').val();
				var maxPax = $('#maxPax').val();
				var venue = $('#venue').val();

				var dateRef = dateStart.replace('-', '');
				var timeRef = timeStart.replace(':', '');
				var referenceNumber = dateRef+timeRef+theme+maxPax;
				var referenceNumber2 = referenceNumber.replace('-', '');

				if(maxPax != '' && venue != ''){
					$.ajax({
						url : "{{ url('api/registerClient') }}",
						type: "POST",
						data: {
							theme: theme,
							date: dateStart,
							time: timeStart,
							pax: maxPax,
							venue: venue,
							referenceNumber: referenceNumber2
						},
						beforeSend: function(){
							toastr.info("Please Wait...");
						}
					}).done(function(response){
						if(response.success){
							$('#bookingDiv').prop('hidden', true);
							$('#clientInfo').prop('hidden', false);
							refId = response.refIdToDB;
						}
					});
				}else{
					toastr.error("Please fill out the fileds!");
				}

			});

			$(document).on('click', '#nextInfoBtn', function(){
				var firstname = $('#firstName').val();
				var lastname = $('#lastName').val();
				var mobilenumber = $('#mobileNumber').val();
				var email = $('#email').val();

				if((firstname != '') && (lastname != '') && (mobilenumber != '') && (email != '')){
					$.ajax({
						url : "{{ url('api/clientInfo') }}",
						type: "POST",
						data: {
							firstname : firstname,
							lastname : lastname,
							mobilenumber : mobilenumber,
							email : email,
							refId : refId
						},
						beforeSend: function(){
							toastr.info("Please Wait..");
						}
					}).done(function(response){
						// console.log(response);
						if(response.success){
							clientInfoId = response.data;
							$('#clientInfo').prop('hidden', true);
							$('#summary').prop('hidden', false);
							getInformation();
						}
					});
				}else{
					toastr.error("Please Fill out the Fields!");
				}

			});

			$(document).on('click','#agreementCheck', function(){
				$(nextBtn).prop('disabled', false);
			});

			$(document).on('click', '#verificationCodeBtn', function(){
				var verificationcodeCode = $('#verificationcodeCodeInput').val();

				$.ajax({

					url : "{{ url('api/verifycode') }}",
					method : "POST",
					data : {
						code : verificationcodeCode,
						clientId : clientInfoId
					}

				}).done(function(response){
					if(response.success){
						toastr.success(response.message);
						
					}else{
						toastr.error(response.message);
					}
				});

			});

		});

		function getThemes(){
			$.ajax({
				url: "{{ url('api/getThemes') }}",
				type: "get",
				dataType: "json"
			}).done(function(response){
				if(response.success){
					$('#themes').append(response.data);
				}
			});
		}

		function getInformation(){
			$.ajax({
				url : "{{ url('api/getInformation') }}",
				type: "get",
				dataType : "JSON",
				data : {
					bookingId : refId,
					clientId : clientInfoId
				},
				beforeSend: function(){
					toastr.info("Getting Information Please Wait....");
				},
			}).done(function(response){
				if(response.success){

					$('#mystery').val(response.bookingInfo.themeName);
					$('#firstNameSummary').val(response.clientInfo.fname);
					$('#dateStartSummary').val(response.bookingInfo.date);
					$('#lastNameSummary').val(response.clientInfo.lname);
					$('#timeStartSummary').val(response.bookingInfo.time);
					$('#mobileNumberSummary').val(response.clientInfo.mobile_number);
					$('#maxPaxSummary').val(response.bookingInfo.pax);
					$('#venueStartSummary').val(response.bookingInfo.venue);
					$('#eMail').val(response.clientInfo.email);

					var pax = response.bookingInfo.pax;
					var paxMinus = pax - 8;
					var total = parseInt(paxMinus) * parseInt(500);
					var totalAll = parseInt(total) + parseInt(8000);
					var getTax = parseInt(totalAll) * parseFloat(0.12);
					var totalAmount = parseInt(totalAll) + parseFloat(getTax);

					$('#amountTotal').val(totalAmount);

					sendVerification();

				}else{
					toastr.error(response.message);
				}
			});
		}

		function sendVerification(){
			// clientInfoId
			$.ajax({
				url : "{{ url('api/sendVerification') }}",
				method : "GET",
				data : {
					clientId : clientInfoId
				}
			}).done(function(response){
				if(response.success){
					toastr.info(response.message);	
				}else{
					alert(response.success);
				}
			});	
		}

	</script>
</body>
</html>