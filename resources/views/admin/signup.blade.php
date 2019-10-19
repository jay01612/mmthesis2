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
</head>

<style>
  .signup-form {
    border: solid 2px #fff;
    background-color: #fff;
    border-radius: 10px;
    padding: 10px;
    text-align: center;
  }
  .panel-title {
    line-height: 20px;
    letter-spacing: 0.2rem;
    text-transform: uppercase;
    font-size: small;
    font-weight: lighter;
  }
  hr {
    border-color: #000;
  }
</style>
<body class="bg-dark">
<div class="container-fluid">

    <div class="signup mt-5">
      <div class="row centered-form">
    
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
          <div class="signup-form">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h4 class="panel-title">Sign up</h4>
                <hr class="my-2 mb-3">
              </div>
              <div class="panel-body">
               <form class="row">
                 <input type="text" id="firstName" class="form-control input-sm col-sm-5 mx-auto" placeholder="First Name">
                  <input type="text" id="firstName" class="form-control input-sm col-sm-5 mx-auto" placeholder="Last Name">
                  <input type="email" id="email" class="form-control input-sm col-sm-11 mx-auto mt-2" placeholder="Email">
                  <select name="positionLevels" id="position" class="form-control input-sm col-sm-11 mx-auto mt-2" placeholder="Position">
                  <input type="submit" value="Register" class="btn btn-info btn-block col-sm-11 mx-auto mt-2" id="btnRegister">
               </form> 
              </div>
            </div>
          </div>
        <div class="col-sm-3"></div>
      
      </div>
    </div>

    
  </div>
</div>


<script type="text/javascript">
  $(document).ready(function(){
    $(document).on('click', '#btnRegister', function(){
      //alert('Your password will be sent in your email.');
      var firstname = $('#firstName').val();
      var lastname = $('#lastName').val();
      var email = $('#emailai').val();
      var position = $('#positionLevels').val();

        if((firstname == "") || (lastname == "") || (email == "")|| (position == "")){
          alert("Please complete the form!");
        }else{
          $ajax({
            url: "{{ url('api/signup') }}",
            type: "POST",
            data: {
              firstname : firstname,
              lastname : lastname,
              email : email,
              position : position
            }
          }).done(function(response){
            if(response.response){
              //document.location.replace('{{ url('/login') }}');
              console.log(response)
            }
          });
        }
    });

  });
</script>
</body>
</html>