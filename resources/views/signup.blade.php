<!DOCTYPE html>
<html>
<head>
	<title>Murder Manila | Admin</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://kit.fontawesome.com/297acfa026.js" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">

</head>
<body>

	<!--navigation bar-->
	<nav class="navbar navbar-expand-sm navbar-light bg-dark">
  <a class="navbar-brand" style="color:#fff;" href="#"><i class="fas fa-search"></i> Murder Manila</a>
  </nav>

  	<!--form-->
  	<div class="container-fluid">
  		<center class="center">
  			<div class="col-md-2">
  				<label for="first-name">First name</label>
  				<input type="text" class="form-control">
  		</div>

  		<div class="col-md-2">
  				<label for="last-name">Last name</label>
  				<input type="text" class="form-control">
  		</div>

      <div class="col-md-2">
          <label for="e-mail">E-mail</label>
          <input type="email" class="form-control">
      </div>

  		<div class="col-md-2">
  				<label for="password">Password</label>
  				<input type="password" class="form-control">
  		</div>

  		<div class="col-md-2" id="row-2">
  				<label for="position">Position</label>
  				<select class="form-control">
  					<option>lorem ipsum</option>
  					<option>lorem ipsum</option>
  					<option>lorem ipsum</option>
  					<option>lorem ipsum</option>
  				</select>
		</div>

  		<div class="col-md-4" id="button">
  			<button type="button" class="btn btn-dark">Sign Up</button>
  	</div>
</center>

<!--table-->
<table class="table table-hover table-dark" id="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First name</th>
      <th scope="col">Last name</th>
      <th scope="col">E-Mail</th>
      <th scope="col">Position</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>test</td>
      <td>test</td>
      <td>test</td>
      <td>test</td>

    </tr>
    <tr>
      <th scope="row">2</th>
      <td>test</td>
       <td>test</td>
      <td>test</td>
       <td>test</td>
    </tr>
    <tr>
      <th scope="row">3</th>
       <td>test</td>
       <td>test</td>
        <td>test</td>
         <td>test</td>
    </tr>
  </tbody>
</table>
<style>
	*{ 
	color: #fff;
	padding: 0;
	margin: 0;
	 }

  body {
    background-color: #000;
    font-family: 'Nunito', sans-serif;
    letter-spacing: 0.5px;
  }
  
	.row {
		padding: 10px 10px;
	}
	#row-2 {
		padding: 10px 10px;
	}

	#button {
		padding: 42px 15px;
	}

	.center {
		padding: 50px 0px;
  }

  #table {
    background-color: #000;
  }
  </style>
</body>
</html>