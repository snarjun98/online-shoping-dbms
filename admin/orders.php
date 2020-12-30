<?php

include("../db.php");
error_reporting(0);
if(isset($_GET['action']) && $_GET['action']!="" && $_GET['action']=='delete')
{
$order_id=$_GET['order_id'];

/*this is delet query*/
mysqli_query($conn,"delete from orders where id='$order_id'")or die("delete query is incorrect...");
}

///pagination
$page=$_GET['page'];

if($page=="" || $page=="1")
{
$page1=0;
}
else
{
$page1=($page*10)-10;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Admin Panel</title>
 <meta name="viewport" content="width=device-width, initial-scale=1">
<link href="style/css/bootstrap.min.css" rel="stylesheet">
<link href="style/css/k.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
</head>
<body>
  <?php include("include/header.php");?>
   	<div class="container-fluid main-container">
	<?php include("include/side_bar.php");?>
    <div class="col-md-9 content" style="margin-left:10px">
    <div class="panel-heading" >
	<h1>Orders  / Page <?php echo $page;?> </h1></div><br>
<div class='table-responsive'>
<div style="overflow-x:scroll;">
<table class="table  table-hover table-striped" style="font-size:18px">
<tr><th>Customer Name</th><th>Products</th><th>Contact | Email</th><th>Address</th><th>price</th></tr>
<?php
$result=mysqli_query($conn,"select orders.id, productname, f_name, phno, email, ad1, ad2, productprice from orders,component,register where orders.product_id=component.productid and register.id=orders.cid")or die ("query 1 incorrect.....");

while(list($order_id,$p_names,$cus_name,$contact_no,$email,$address,$country,$quantity)=mysqli_fetch_array($result))
{
echo "<tr><td>$cus_name</td><td>$p_names</td><td>$email<br>$contact_no</td><td>$address<br>$country</td><td>$quantity</td>

<td>
<a class=' btn btn-success' href='orders.php?order_id=$order_id&action=delete'>Delete</a>
</td></tr>";
}
?>
</table>
</div></div>
<nav align="center">
<?php
//counting paging

$paging=mysqli_query($conn,"select productid,productimg, productname,productprice from components");
$count=mysqli_num_rows($paging);

$a=$count/5;
$a=ceil($a);
echo "<bt>";echo "<bt>";
for($b=1; $b<=$a;$b++)
{
?>
<ul class="pagination " style="border:groove #666">
<li><a class="label-info" href="orders.php?page=<?php echo $b;?>"><?php echo $b." ";?></a></li></ul>
<?php
}
?>
</nav>
</div></div>
<?php include("include/js.php");?>
</body>
</html>