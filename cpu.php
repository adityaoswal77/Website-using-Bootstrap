<?php
session_start();
if(isset($_SESSION['uid'])){
	//header('location:after_login.php');
}
else{
	header('location:login.php');
}
error_reporting(0);
?>
<head>
  	<title>cpu</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">    

		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/sidebarstyle.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script> 
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js"></script>
    <script>WebFont.load({  google: {    families: ["Oswald:200,300,400,500,600,700","Droid Sans:400,700","Roboto:300,regular,500"]  }});</script>

  </head>
<body>
<div class="row" style="width: 100vw; height: 100vh;" >
          <div class="col-lg-3"  >
                            <!-- sidebar -->
                    <!-- calling sidebar here -->
                    <div class="bleh">

			<div class="sidebar">
				<a href="index.php">
					<div class="profile-userpic">
						<img src="img/logoo.png" style="width: 100px; height: 100px; align-content: center;" class="img-responsive" alt="">
					</div>
				</a>
				<a class="active" href="after_login.php">Home</a>
					<a href="after_login.php">About Us</a>
					<a href="after_login.php">Other Products</a>
					<a href="after_login.php">Contact</a>
					<a href="login.php"><button type="button" class="btn btn-outline-danger">LOGOUT</button></a>
					<a href="cart.php"><button type="button" class="btn btn-info">CART</button></a>		
					</div>
          
          <!-- Social links -->
<?php
include("social_links.html")
?>

		</div>
          </div>	
        <div class="col-lg-9">
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
		}
		else{
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
<div class="ref">
        <button type="button" class="btn btn-warning btn-lg"><a href="gpu.php"> NEXT</a></button>
</div>
<?php
if(!empty($_SESSION["shopping_cart"])) {
$cart_count = count(array_keys($_SESSION["shopping_cart"]));
?>

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