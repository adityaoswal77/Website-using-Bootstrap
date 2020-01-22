<?php
session_start();
if(isset($_SESSION["uid"]))
{
    header("location:ogin.php");
}

include("./connect.php");
error_reporting(0);
?>
<head>
  	<title>cpu</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">    

		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/style.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script> 
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js"></script>
    <script>WebFont.load({  google: {    families: ["Oswald:200,300,400,500,600,700","Droid Sans:400,700","Roboto:300,regular,500"]  }});</script>
  
  </head>
<body>
        <div class="row" style="width: 100vw; height: 100vh;" >
          		<div class="col-lg-2" style="background-color: #2d3e4e;" >
                            <!-- sidebar -->
                    <!-- calling sidebar here -->
                    
                     <div class="bleh">
					 <ul class="list-unstyled components mb-5" style="background-color: #2d3e4e; text-align: center;color: white; position: fixed; font-family: 'Oswald', sans-serif; ">
					   <li>
						 <a href="home.php">
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
					   <li style="text-align: center; padding-left:20px ; padding-top :20px;" ><a href="login.php">
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
					   <div class="footer">
		   
					   </div>
				   
				 </div>
          </div>

        <div class="col-lg-10">
            <div class="container-fluid" > 
              
			<?php
include('db.php');
$status="";
if (isset($_POST['code']) && $_POST['code']!="")
{
		$code = $_POST['code'];
		$result = mysqli_query($con,"SELECT * FROM `item` WHERE `code`='$code'");
		$row = mysqli_fetch_assoc($result);
		$name = $row['item_name'];
		$code = $row['code'];
		$price = $row['item_price'];
		$image = $row['image'];

		$cartArray = 
		array(
				$code=>array(
				'name'=>$name,
				'code'=>$code,
				'price'=>$price,
				'quantity'=>1,
				'image'=>$image)
			);

		if(empty($_SESSION["shopping_cart"])) {
			$_SESSION["shopping_cart"] = $cartArray;
			$status = "<div class='box'>Product is added to your cart!</div>";
		}else{
					$array_keys = array_keys($_SESSION["shopping_cart"]);
					if(in_array($code,$array_keys)) 
					{
						$status = "<div class='box' style='color:red;'>
						Product is already added to your cart!</div>";	
					} else 
					{
						$_SESSION["shopping_cart"] = array_merge($_SESSION["shopping_cart"],$cartArray);
						$status = "<div class='box'>Product is added to your cart!</div>";
					}

			}
}
?>
<html>
<head>
<title>CPU</title>
<link rel='stylesheet' href='css/style.css' type='text/css' media='all' />
</head>
<body>
<div style="width:700px; margin:50 auto;">

<h2>Choose your CPU</h2>   

<?php
if(!empty($_SESSION["shopping_cart"])) {
$cart_count = count(array_keys($_SESSION["shopping_cart"]));
?>
<div class="cart_div" >
<a href="cart.php"><img src="cart-icon.png" /> Cart<span><?php echo $cart_count; ?></span></a>

</div>
<?php
}

$result = mysqli_query($con,"SELECT * FROM `item`WHERE `item_type` = 'CPU'");
while($row = mysqli_fetch_assoc($result)){
	?>
		<div class='product_wrapper'> 
			  <form method='post' action=''>
			  <input type='hidden' name='code' value=".$row['code']." />
			   <div class='image' style="width:200px; height : 200px ; padding-top :50px" ><img style="width:100px; height : 100px ; align: center"  src="./product-images/<?php echo $row["image"] ?>" /></div>

			  <div class='name'><?php echo $row["item_name"] ?></div>
		   	  <div class='price'><?php echo $row["item_price"] ?></div>
			  <button type='submit' class='buy'>Buy Now</button>
			  </form>
		   	  </div> <?php
        }
mysqli_close($con);
?>

<div style="clear:both;"></div>

<div class="message_box" style="margin:10px 0px;">
<?php echo $status; ?>
</div>

<br />
</div>
<div class="ref">
        <button type="button" class="btn btn-danger btn-sm"><a href="gpu.php"> NEXT</a></button>
      </div>

          </div>

          <div class="w-100">

        </div>
    </div>
  </div>

</body>
</html>

<body>
</body>
</html>