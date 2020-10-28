<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!doctype html>
<html lang="en">
 
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootsrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Register</title>
  </head>
  <body>
    <h1>Register Page:</h1>
    <p> Fill in the details to register on our website </p>
    
    <?php if(isset($_SESSION['success'])) { ?>
        <div class="alert alert-success"><?php echo $_SESSION['success']; ?></div>
        <?php

    } ?>
    <?php echo validation_errors('<div class="alert alert-danger">', '</div>') ?>
    
    <form action="" method="POST">
        <div class="col-lg-8 col-lg-offset-2">
            <div class="form-group">
                <label for="firstname" >Firstname:</label>
                <input class="form-control" name="firstname" id="firstname" typer="text">
            </div>

            <div class="form-group">
                <label for="lastname" >Lastname:</label>
                <input class="form-control" name="lastname" id="lastname" type="text"> 
            </div>
            <div class="form-group">
                <label for="contact">Contact Number:</label>
                <input class="form-control" name="contact" id="contact" type="text">
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input class="form-control" name="email" id="email" type="email">
            </div>

            <div class="form-group">
                <label for="password" >Password:</label>
                <input class="form-control" name="password" id="password" type="password">
            </div>

            <div class="form-group">
                <label for="password" >Confirm Password:</label>
                <input class="form-control" name="password2" id="password" type="password">
            </div>

        
            
          
            <div>
                <button class="btn btn-primary" name="register">Register</button>
            
            </div>
           

        </div>

        </form>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>