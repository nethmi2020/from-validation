<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>From Validation-JQUERY</title>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" />

</head>
<body class="container">
<div class="row mt-3">
    <div class="col-md-6">
      <h4 class="mb-3">Form Validation in PHP - <a href="https://www.cluemediator.com" target="_blank" rel="noopener noreferrer">Clue Mediator</a>
      </h4>
      <form id="form" method="post" action="getData.php"  >
        <div class="form-group">
          <label for="name">Name</label>
          <input type="text" class="form-control" name="name" id="name">
        </div>
        <div class="form-group">
          <label for="email">Email Address</label>
          <input type="text" class="form-control" name="email" id="email">
        </div>
        <div class="form-group">
          <label for="contact">Contact</label>
          <input type="text" class="form-control" name="contact" id="contact">
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" class="form-control" name="password" id="password">
        </div>
        <div class="form-group">
          <label for="confirmPassword">Confirm Password</label>
          <input type="password" class="form-control" name="confirmPassword" id="confirmPassword">
        </div>
        <input type="submit" class="btn btn-primary" value="Submit" />
      </form>
    </div>
  </div>
    
</body>
<style>
  .error {
    color: red;
  }
</style>
<script>
    $(document).ready(function(){

        $('#form').validate({
            rules:{
                name:{
                    required:true
                },
                email:{
                    required:true,
                    email:true
                },
                contact:{
                    required:true,
                    rangelength:[10,12],
                    number:true
                },
                password:{
                    required:true,
                    minlength:8
                },
                confirmPassword:{
                    required:true,
                    equalTo:"#password"
                }
              
            },

            messages:{
                name:'please enter name',
                email:{
                    required:'please enter email address',
                    email:'Please enter a valid Email address'
                },

                contact:{
                    required:'Please enter contacts',
                    rangelength:'Contact should be 10 digit number'
                },
                password:{
                    required:'please enter password',
                    minlength:'password must be at least 8 character long'
                },
                confirmPassword:{
                    required:'Please enter Confirm password',
                    equalTo:'Confirm Password do not match with Password.'
                }

            },
            submitHandler :function(form){
                form.submit();
            }

        });
    });
</script>
</html>