<?php
session_start();
if(isset($_SESSION['uid'])){
	header('location:after_login.php');
}
else{
	//header('location:login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">    
<title>login_screen</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/style.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script> 
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js"></script>
    <script>WebFont.load({  google: {    families: ["Oswald:200,300,400,500,600,700","Droid Sans:400,700","Roboto:300,regular,500"]  }});</script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="row" style="width: 100vw; height: 100vh;" >
          <div class="col-lg-2" style="background-color: #2d3e4e;" >
                            <!-- sidebar -->
                    <!-- calling sidebar here -->
                    <div class="row" style="width: 100vw; height: 100vh;" >
          <div class="col-lg-2" style="background-color: #2d3e4e;" >
                            <!-- sidebar -->
                    <!-- calling sidebar here -->
                    <div class="bleh">
          <ul class="list-unstyled components mb-5" style="background-color: #2d3e4e; text-align: center;color: white; position: fixed; font-family: 'Oswald', sans-serif; ">
            <li>
              <a href="#">
                <div class="profile-userpic">
                 <img src="img/logoo.png" style="width: 100px; height: 100px; align-content: center;" class="img-responsive" alt="">
                </div>
            </a>
            </li>
            <li class="active" style="text-align: center; padding-left:20px ; padding-top :20px;">
                    <a href="#">Home</a>
            </li>
            <li style="text-align: center; padding-left:20px ; padding-top :20px; color: white;">
                  <a href="#">About</a>
            </li>
            <li style="text-align: center; padding-left:20px ; padding-top :20px;color: white;">
                    <a href="#">OTHER Products</a>
            </li>
            <li style="text-align: center; padding-left:20px ; padding-top :20px; color: white;">
                    <a href="#">Contact</a>
            </li>

            <li style="text-align: center; padding-left:20px ; padding-top :20px;"><a href="register.php">
              <button type="button" class="btn btn-info">SUBSCRIBE</button>
            </a></li>
    </ul>
     
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
            <div class="container-fluid" > 
<center>
<div class="box">
    <h1>Login</h1>
    <h1>Login</h1>
        <form name="Login"  action="login.php" onsubmit="return validate(this) " method="Post">
    <div class="textbox">
        <input type="Email" class="txt" placeholder="Email" name="mail" value="" required>
    </div>
    <div class="textbox">
        <input type="Password" class= "txt" placeholder="Password" name="pass" value="" required>
    </div>
    <input class= "login" type="submit" name="login" id="popup" value="Sign In">
    <br>
    <a href="./register.php"><h4>Not have an Account?</h4> Register</a>
    </div>
</form>

<style>

.container{
    background-color : white;
    box-shadow : 1px 1px 1px 1px grey;
    padding : 10px 8px 20px 30px;
    width : 40% ;
    height : 85% ;
    margin-left: 35%;

}
.txt{
    width : 20%;
    height : 3%;
    border: 1px solid black;
    border-radius : 5px;
    padding: 20px 15px 20px 15px;
    margin: 5px 0px 15px 0px;
}

.login{
    width : 20%;
    height : 3%;
    border: 1px solid blue;
    border-radius : 5px;
    padding: 20px 15px 20px 15px;
    margin: 5px 0px 15px 0px;
}

#popup{
    width : 20%;
    height : 3%;
    border: 1px solid brown;
    border-radius : 5px;
    padding: 20px 15px 20px 15px;
    margin: 5px 0px 15px 0px;
}

#popup:hover{
    background-color: green;
}

</style>



<script>
function validate(this_form)
{
var password = this_form.pass.value;
var regex_password = /^[a-zA-Z0-9!@#$%^&*]{6,16}$/;
errors = [];
if (password.length < 8) 
{
errors.push("Your password must be at least 8 characters");
}
if (password.search(/[a-z]/i) < 0) 
{
errors.push("Your password must contain at least one letter.");
}
if (password.search(/[0-9]/) < 0) {
errors.push("Your password must contain at least one digit.");
}
if (password.search(/[!@#$%^&*]/) < 0) {
errors.push("Your password must contain at least one charactor.");
}
if (errors.length > 0) {
alert(errors.join("\n"));
return false;
}
return true;
}

</script>
</center>

<div class="w-100">

</div>
</div>
</div>

</body>
</html>
<?php
include("connect.php");
if (isset($_POST["login"]))
{
    $username=$_POST["mail"];
    echo $username;
    $password =$_POST["pass"];
    echo $password;
    $query="SELECT * FROM `user` WHERE `email`= '$username' AND `password`= '$password'";
    echo $query;
    $run = mysqli_query($conn,$query);

    
    //$data= mysqli_fetch_assoc($run);
    $row = mysqli_num_rows($run);

    if($row<1)
    {
        ?>
        <script>
        alert("Wrong email or Password."<br>" please try again");
        </script>
        <?php
    }
    else
        {
            $data= mysqli_fetch_assoc($run);
            $id=$data["user_id"];
            echo "id=".$id;
            session_start();
            $_SESSION["uid"]=$id;
            header("location:after_login.php");
        }
}   
else {
    header("location:index.php");
}
?>

