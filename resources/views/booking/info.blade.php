<!DOCTYPE html>
<html>
<head>
	<title>Murder Manila | Booking</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://kit.fontawesome.com/297acfa026.js" crossorigin="anonymous"></script>
	<link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">
</head>
<body>
	<div class="logo">
	<img src="12.png" width="180" height="180">
	</div>

	<div class="container">
		<ul class="progressbar">
			<li class="active">Date</li>
			<li class="info">Info</li>
			<li class="summary">Summary</li>
			<li class="payment">Payment</li>
			<li class="confirmation">Confirmation</li>
		</ul>
	</div>

	<div class="container">
<p class="text-center">Information</p>
</div>
<hr class="hr">

	<div class="container">

			 <form>
  <div class="form-group row">
    <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">First Name: </label>
    <div class="col-sm-4">
      <input type="text" class="form-control form-control-sm" id="colFormLabelSm" placeholder="Enter your first name">
      <br>
    </div>
    <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Last Name: </label>
    <div class="col-sm-4">
      <input type="text" class="form-control form-control-sm" id="colFormLabelSm" placeholder="Enter your last name">
    </div>
    <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Mobile Number: </label>
    <div class="col-sm-4">
      <input type="text" class="form-control form-control-sm" id="colFormLabelSm" placeholder="Enter your mobile number (no special characters)">
    </div>
    <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">
    E-Mail: </label>
    <div class="col-sm-4">
      <input type="text" class="form-control form-control-sm" id="colFormLabelSm" placeholder="Enter your email">
      <br>
    </div>
    <div class="container">
    <button type="button" class="btn btn-success" id="btn">Submit</button>
    </div>
	</div>
</form>

</body>
<style>
	body {
		padding: 0;
		margin: 0;
		background-color: #000;
		height: 100vh;
		text-align: center;
		color: #fff;
	}
	.logo {
		position: absolute;
		width: 100%;
		text-align: center;
	}
	.container {
		width: 100%;
	}
	.progressbar {
		counter-reset: step;
	}
	.progressbar li{
		list-style-type: none;
		float: left;
		color: #fff;
		position: relative;
		margin-top: 20%;
		width: 20%;
		right: 20px;
		text-align: center;
		text-transform: uppercase;
		font-weight: 100;
		font-size: 70%;
		
	}
	.progressbar li:before {
		content: counter(step);
		counter-increment: step;
		width: 20px;
		height: 20px;
		border: 1px solid #ddd;
		display: block;
		text-align: center;
		margin: 0 auto 10px auto;
		border-radius: 50%;
		background-color: #000;
	}
	.progressbar li:after {
		content:'';
		position: absolute;
		width: 100%;
		height: 1px;
		background-color: #ddd;
		top: 10px;
		left: -50%;
		z-index: -1;
	}
	.progressbar li:first-child:after {
		content: none;
	}
	.progressbar li.active {
		color: #55efc4;
	}
	.progressbar li.active:before {
		border-color: #55efc4;
	}
	.progressbar li.active + li:after {
		background-color: #55efc4;
	}
	.progressbar li.info {
		color: #55efc4;
	}
	.progressbar li.info:before {
		border-color: #55efc4;
	}
	.container-fluid{
		margin-top: 20px;
		display: inline-flex;
	}
	.text-center{
		text-transform: uppercase;
		letter-spacing: 0.5em;
		line-height: 80px;
	}
	.hr {
		width: 80%;
		border: none;
		height: 1px;
		background-color: #fff;
	}
	#btn {
		width: 50%;
	}


</style>
</html>