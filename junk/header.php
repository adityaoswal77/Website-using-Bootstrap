<?php
session_start();
if(isset($_SESSION["uid"]))
{
    header("location:index.php");
}

include("./connect.php");
error_reporting(0);
?>
<?php
$_SESSION['cart']=isset($_SESSION['cart']) ? $_SESSION['cart'] : array();
?>
<!DOCTYPE html>
<html lang="en">
<head>
 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
    <title><?php echo isset($page_title) ? $page_title : "The Code of a Ninja"; ?></title>
 
    <!-- Latest compiled and minified Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
   
    <!-- our custom CSS -->
    <link rel="stylesheet" href="libs/css/custom.css" />
</head>
<body>
 
    <?php include 'nav.php'; ?>
    <!-- container -->
    <div class="container">
        <div class="row">
 
        <div class="col-md-12">
            <div class="page-header">
                <h1><?php 
                $page_title = "The Code of a Ninja";
                echo isset($page_title) ? $page_title : "The Code of a Ninja"; ?></h1>
            </div>
        </div>