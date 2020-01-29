<?php
session_start();
if(isset($_SESSION["uid"]))
{
    header("location:index.php");
}

include("./connect.php");
error_reporting(0);
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
                    <div class="bleh">
          <ul class="list-unstyled components mb-5" style="background-color: #2d3e4e; text-align: center;color: white; position: fixed; font-family: 'Oswald', sans-serif; ">
            <li>
              <a href="index.php">
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
              <li style="text-align: center; padding-left:20px ; padding-top :20px;" ><a href="logout.php">
              <button type="button" class="btn btn-outline-danger">LOGOUT</button>
              </a> </li>
              <li style="text-align: center; padding-left:20px ; padding-top :20px;"><a href="cart.php">
              <button type="button" class="btn btn-info">CART</button>
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
        </div>
      </div>

      <div class="col-lg-10">
            <div class="container-fluid" > 
            

<?php

$status="";
if (isset($_POST['action']) && $_POST['action']=="remove")
{
    if(!empty($_SESSION["shopping_cart"])) 
    {
        foreach($_SESSION["shopping_cart"] as $key => $value) 
        {
          if($_POST["code"] == $key)
          {
              unset($_SESSION["shopping_cart"][$key]);
              $status = "<div class='box' style='color:red;'>
              Product is removed from your cart!</div>";
          }
              if(empty($_SESSION["shopping_cart"]))
              unset($_SESSION["shopping_cart"]);
        }		
    }
}

if (isset($_POST['action']) && $_POST['action']=="change"){
  foreach($_SESSION["shopping_cart"] as &$value){
    if($value['code'] === $_POST["code"]){
        $value['quantity'] = $_POST["quantity"];
        break; // Stop the loop after we've found the product
    }
}
  	
}
?>
<html>
<head>
<title>cart</title>
<link rel='stylesheet' href='css/style.css' type='text/css' media='all' />
</head>
<body>
<div style="width:700px; margin:50 auto;">

<h2>Demo Shopping Cart</h2>   

<?php
if(!empty($_SESSION["shopping_cart"])) {
$cart_count = count(array_keys($_SESSION["shopping_cart"]));
?>
<div class="cart_div">
<a href="cart.php">
<img src="cart-icon.png" /> Cart
<span><?php echo $cart_count; ?></span></a>
</div>
<?php
}
?>

<div class="cart">
<?php
if(isset($_SESSION["shopping_cart"])){
    $total_price = 0;
?>	
<table class="table">
<tbody>
<tr>
<td></td>
<td>ITEM NAME</td>
<td>QUANTITY</td>
<td>UNIT PRICE</td>
<td>ITEMS TOTAL</td>
</tr>	
<?php		
foreach ($_SESSION["shopping_cart"] as $product){
?>
<tr>
    <td><img src='<?php echo $product["image"]; ?>' width="50" height="40" /></td>
    <td><?php echo $product["name"]; ?><br />
    <form method='post' action=''>
    <input type='hidden' name='code' value="<?php echo $product["code"]; ?>" />
    <input type='hidden' name='action' value="remove" />
    <button type='submit' class='remove'>Remove Item</button>
    </form>
    </td>
    <td>
    <form method='post' action=''>
    <input type='hidden' name='code' value="<?php echo $product["code"]; ?>" />
    <input type='hidden' name='action' value="change" />
    <select name='quantity' class='quantity' onchange="this.form.submit()">
    <option <?php if($product["quantity"]==1) echo "selected";?> value="1">1</option>
    <option <?php if($product["quantity"]==2) echo "selected";?> value="2">2</option>
    <option <?php if($product["quantity"]==3) echo "selected";?> value="3">3</option>
    <option <?php if($product["quantity"]==4) echo "selected";?> value="4">4</option>
    <option <?php if($product["quantity"]==5) echo "selected";?> value="5">5</option>
    </select>
    </form>
    </td>
    <td><?php echo "$".$product["price"]; ?></td>
    <td><?php echo "$".$product["price"]; ?></td>
</tr>
<?php
$total_price += ($product["price"]);
}
?>
<tr>
<td colspan="5" align="right">
<strong>TOTAL: <?php echo "$".$total_price; ?></strong>
</td>
</tr>
</tbody>
</table>		
  <?php
}else{
	echo "<h3>Your cart is empty!</h3>";
	}
?>
</div>

<div style="clear:both;"></div>

<div class="message_box" style="margin:10px 0px;">
<?php echo $status; ?>
</div>


 <br /><br />
<!--<a href="https://www.allphptricks.com/simple-shopping-cart-using-php-and-mysql/"><strong>Tutorial Link</strong></a> <br /><br />
For More Web Development Tutorials Visit: <a href="https://www.allphptricks.com/"><strong>AllPHPTricks.com</strong></a> -->
</div>

 <br />
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