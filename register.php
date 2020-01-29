<?php
session_start();
if(isset($_SESSION["uid"]))
{
    header("location:login.php");
}
else{
    //header("location:login.php");
}
error_reporting(0);
include ('./db.php')
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">    
<title>Home</title>
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
  
</head>
<body>
        <div class="row" style="width: 100vw; height: 100vh;" >
          <div class="col-lg-2" style="background-color: #2d3e4e;" >
                            <!-- sidebar -->
                    <!-- calling sidebar here -->
        <?php
        include("sidebar_home.html")
        ?>
          </div>

        <div class="col-lg-10">
            <div class="container-fluid" > 
              
             
 
   <script type="text/javascript">
    //form validation
        function validatefield(this_form) 
        {
            var username = this_form.name.value;
            var password = this_form.pass.value;
            //document.write(username);(this_form.name.value.match(regex_username) && this_form.pass.value.match(regex_password) && 
            errors = [];
            var regex_password = /^[a-zA-Z0-9!@#$%^&*]{6,16}$/;
            //var regex_username = /^[a-zA-Z0-9]+([a-zA-Z0-9](_|-| )[a-zA-Z0-9])*[a-zA-Z0-9]+$/;
            if (username == null || username == "") 
            {
                alert("Please enter the username");
                this_form.name.focus();
                return false;
            }
            
            if (password == null || password == "") 
            {
                alert("Please enter the password");
                this_form.pass.focus();
                return false;
            }
            /* 
            if (this_form.pass.value.match(regex_password)) {
                alert("Success");
                return true;
            } else {
                return ("Incorrect Selection");
            }*/

            if (password.length < 8) {
                errors.push("Your password must be at least 8 characters");
            }
            if (password.search(/[a-z]/i) < 0) {
                errors.push("Your password must contain at least one letter.");
            }
            if (password.search(/[0-9]/) < 0) {
                errors.push("Your password must contain at least one digit.");
            }
            if (errors.length > 0) {
                alert(errors.join("\n"));
                return false;
            }
            return true;
        }
    </script>

<div class="container"> 
    <form name="login" action="./login.php" onsubmit="return validate(this)"> 
                <h1 id="">CREATE AN ACCOUNT</h1>
                <p>Please fill in this form.</p>
                <br>
                <label for="name"><b>Name</b></label>
                <br>
                <input type="text" class="txt" placeholder="Enter your Name" name="name" required>
                <br>
                <label for="email"><b>Email</b></label>
                <br>
                <input type="email" class="txt" placeholder="Enter Email" name="email" required>
                <br>
                <label for="phone"><b>Phone number</b></label>
                <br>
                <input type="number" class="txt" placeholder="Enter phone number" name="phone" required >
                <br>
                <label for="pass"><b>Password</b></label>
                <br>
                <input type="password" class="txt" placeholder="Enter Password" name="pass" required>
                
            <div>
            <a href="./login.php"><input type="submit"  id="popup" value="Submit" name="submit"></a>

            <a href="./login.php"><h4>Already have an account? <br> Login</a>            </div>
    </form>
    </div>
    </div>

<div class="w-100">

</div>
</div>
</div>

    </body>
    
    <script>
function validate(this_form){
var password = this_form.pass.value;
var regex_password = /^[a-zA-Z0-9!@#$%^&*]{6,16}$/;
errors = [];
if (password.length < 8) {
errors.push("Your password must be at least 8 characters");
}
if (password.search(/[a-z]/i) < 0) {
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
    width : 90%;
    height : 4%;
    border: 1px solid black;
    border-radius : 5px;
    padding: 20px 15px 20px 15px;
    margin: 5px 0px 15px 0px;
}

#popup{
    width : 90%;
    height : 4%;
    border: 1px solid black;
    border-radius : 5px;
    padding: 20px 15px 20px 15px;
    margin: 5px 0px 15px 0px;
}

#popup:hover{
    background-color: green;
}

</style>
</html>

<?php
if($_GET['submit'])
{
$name = $_GET['name'];
$email = $_GET['email'];
$phone = $_GET['phone'];
$pass = $_GET['pass'];

if($name!="" && $email!="" && $phone!="" && $pass!="")
    {   
        $query="INSERT INTO `user`(`name`, `email`, `phone`, `password`) VALUES ('$name','$email','$phone','$pass')";
        //echo $query;
        $run = mysqli_query($conn,$query);
        
            if ($run)
                {
                    ?>
                    <script>
                    alert(" Welcome" );
                    echo "You have been successfully Registered";
                    </script>
                <?php
            }
    }

    else
    {
        echo "not submitted";
    }
}

    ?>