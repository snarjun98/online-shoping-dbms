<?php
session_start();
$host = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbname = "a";
//create connection
$conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
if (mysqli_connect_error()) {
    die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
}
$cid=$_SESSION['cid'];
$pid=$_SESSION['pid'];
$total=$_SESSION['total'];


mysqli_query($conn,"INSERT INTO `orders`(`cid`, `product_id`, `total price`) VALUES ('$cid','$pid','$total')")or die("No iteams in cart");
header("location: ty1.php");
mysqli_close($conn);
