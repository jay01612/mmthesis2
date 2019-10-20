<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Murder Manila | Admin</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <script src="{{ asset('parallax.js-1.5.0/parallax.min.js') }}"></script>
  <link href="https://fonts.googleapis.com/css?family=Montserrat|Nunito|Open+Sans&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/297acfa026.js" crossorigin="anonymous"></script>

<style>
  .login-form {
    border: solid 2px #fff;
    border-radius: 20px; 
    background-color: #fff;
    padding: 20px;
    box-shadow: 0 0 4px #000;
  }
  .label-content, #signUp {
    font-weight: lighter;
    cursor: pointer;
    text-decoration: underline;
    font-size: 15px;
    color: black;
  }
  .form-email {
    order: solid 2px #fff;
    border-radius: 20px; 
    background-color: #fff;
    padding: 20px;
    box-shadow: 0 0 4px #000;
    display: none;
  }
</style>
</head>
<body class="bg-dark">
  <div class="container-fluid">

    <div class="login mt-5">
      <div class="row">
    
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
          <div class="login-form">

            <div class="input-group input-group-sm mb-4">
              <div class="input-group-prepend">
                <span class="input-group-text" id="inputUser">Username</span>
              </div>
              <input type="text" id="inputUser" class="form-control">
            </div>

            <div class="input-group input-group-sm mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="inputPassword">Password</span>
              </div>
              <input type="password" id="inputPassword" class="form-control">
            </div>

            <div class="labels">
              <div class="forgotPw">
                <!-- <label for="pw" class="label-content" id="pw"><i>Forgot Password?</i></label> -->
              </div>
              
              <div class="signup">
                <!-- <a href="{{ url('/signup') }}" id="signUp"><i>Sign up</i></a> -->
              </div>
            </div>

            <div class="login-btn text-center">
              <a href="" class="btn btn-md btn-primary w-25" id="logInbtn">Login</a>
            </div>
          </div><br><br>

          <div class="form-email">
            <div class="form-pw-content">
              <div class="input-group input-group-sm mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="inputEmail">Email</span>
                </div>
                <input type="email" id="inputEmail" class="form-control">
              </div>
            </div>

            <div class="form-email-btn text-center" >
              <a href="" class="btn btn-md btn-primary w-25" id="Idbtn">Send</a>
            </div>
          </div>
        </div>
        <div class="col-sm-3"></div>
      
      </div>
    </div>

    
  </div>


<script type="text/javascript">
  $(document).ready(function(){
    $(document).on('click','#pw', function(){
      $('.form-email').fadeIn(800);
    });

    $(document).on('click', '#logInbtn', function(){
      var username = $('#inputUser').val();
      var password = $('#inputPassword').val();

        if((username = '') || (password == "")){
          alert("please fill out the form");
          //console.log(test)
        }
    });

    $(document).on('click', '#Idbtn', function(){

      var email = $('#inputEmail').val();

        if(email == ""){
          alert("please provide your e-mail")
        }
    });   
  });

</script>
</body>
</html>