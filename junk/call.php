<head>
  	<title>call into cards</title>
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
<?php
$conn = mysqli_connect("localhost","root","","custom");
$query = "SELECT `item_id`,`item_company`, `item_name`, `item_info`, `item_price`,`item_type` FROM `item`";
$data =mysqli_query($conn,$query);
$total = mysqli_num_rows($data);
//echo $total; 
if($total > 0 ){

	while($result=mysqli_fetch_assoc($data))
	{
		?>
<div class="album py-5 bg-light">
                  <div class="container">
                    <div class="row">
                      <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">
                          <div class="card-body">
                            <h5 class="card-title"><?php echo $result['item_company']; ?></h5>
                            <p class="card-text"><?php echo $result['item_info']; ?></p>
                            <p class="card-text"><?php echo $result['item_price']; ?></p>
                            <div class="d-flex justify-content-between align-items-center">
                             <a href="index.php" class="btn btn-primary">Go somewhere</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                    <?php } 
}?>
</body>