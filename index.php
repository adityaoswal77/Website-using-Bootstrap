<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">    
          <title>Home</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script> 
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js"></script>
    <script>WebFont.load({  google: {    families: ["Oswald:200,300,400,500,600,700","Droid Sans:400,700","Roboto:300,regular,500"]  }});</script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  
</head>

<body>


        <div class="row" style="width: 100vw; height: 100vh;" >
          <div class="col-lg-2"  >
                            <!-- sidebar -->
                    <!-- calling sidebar here -->
                    <div class="bleh">

            <style>
            body {
              margin: 0;
              font-family: "Lato", sans-serif;
            }

            .sidebar {
              margin: 0;
              padding: 0;
              width: 200px;
              background-color: #2d3e4e;
               text-align: center;
              position: fixed;
              height: 100%;
              overflow: auto;
            }

            .sidebar a {
              display: block;
              color: white;
              padding: 16px;
              text-decoration: none;
            }
            
            .sidebar a.active {
              

            }

            .sidebar a:hover:not(.active) {
              background-color: #555;
              color: white;
            }

            div.content {
              margin-left: 150px;
              padding: 1px 16px;
              height: 1000px;
            }

            @media screen and (max-width: 700px) {
              .sidebar {
                width: 100%;
                height: auto;
                position: relative;
              }
              .sidebar a {float: left;}
              div.content {margin-left: 0;}
              .profile-userpic{
                width:70px;
                height : 70px;
              }
            }

            @media screen and (max-width: 400px) {
              .sidebar a {
                text-align: center;
                float: none;
              }
            }
            </style>
</head>

<div class="sidebar">
      <a href="index.php">
          <div class="profile-userpic">
              <img src="img/logoo.png" style="width: 100px; height: 100px; align-content: center;" class="img-responsive" alt="">
          </div>
      </a>
      <a class="active" href="#home">Home</a>
      <a href="#news">News</a>
      <a href="#contact">About</a>
      <a href="#about">Contact</a>
      <a href="login.php"><button type="button" class="btn btn-outline-success">Login</button></a> 
      <a href="register.php"><button type="button" class="btn btn-info">Register</button></a>
  
      
</div>
          
          <!--  -->
          <div class="row profile" style="text-align: center; position:fixed;bottom:0;left:50px;right:0;height:30px;">
            <div class="social-footer hidden-medium hidden-small w-hidden-tiny">
              <a href="https://github.com/adityaoswal77" class="social-icon-link inline-block"><img src="img/social-03-white.svg" width="17" alt=""></a>
              <a href="#" class="social-icon-link inline-block"><img src="img/social-18-white.svg" width="17" alt=""></a>
              <a href="#" class="social-icon-link inline-block"><img src="img/social-30-white.svg" width="17" alt=""></a>
              <a href="https://github.com/adityaoswal77" class="social-icon-link inline-block"><img src="img/social-14-white.svg" width="17" alt=""></a>
              <a href="#" class="social-icon-link inline-block"><img src="img/social-12-white.svg" width="17" alt=""></a>
              <a href="#" class="social-icon-link inline-block"><img src="img/social-08-white.svg" width="17" alt=""></a>
              </div>
          
          </div>
            <div class="footer">

            </div>
        
      </div>
          </div>

        <div class="col-lg-10">
            <div class="container-fluid"  > 
              <div class="content">
              <?php
                   include("home_content.html")
              ?>
              </div>
          </div>

          <div class="w-100">

        </div>
    </div>
  </div>

</body>
</html>
<?php
?>