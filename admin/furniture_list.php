<?php

include("../db.php");
error_reporting(0);
if(isset($_GET['action']) && $_GET['action']!="" && $_GET['action']=='delete')
{
$product_id=$_GET['productid'];
///////picture delete/////////
$result=mysqli_query($conn,"select productimg from component where productid='$product_id'")
or die("query is incorrect...");

list($picture)=mysqli_fetch_array($result);
$path=".$picture";

if(file_exists($path)==true)
{
  unlink($path);
}
else
{}
/*this is delet query*/
mysqli_query($conn,"delete from component where productid='$product_id'")or die("query is incorrect...");
}

///pagination


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
    <div class="panel-heading" style="background-color:white">
	<h1><b>Furniture_List</b></h1></div><br>
<div class='table-responsive'>
<div style="overflow-x:scroll;">
<table class="table  table-hover table-striped" style="font-size:18px">
<tr><th>Image</th><th>Name</th><th>Price</th><th>
	<a class=" btn btn-primary" href="add_product.php">Add New</a></th></tr>
<?php

$result=mysqli_query($conn,"SELECT productid,productimg,productname,productprice FROM component WHERE cat='F' ")or die ("query 2 incorrect.....");

while(list($product_id,$image,$product_name,$price)=mysqli_fetch_array($result))
{
echo "<tr><td><img src='.$image' style='width:50px; height:50px; border:groove #000'></td><td>$product_name</td>
<td>$price</td>
<td>

<a class=' btn btn-default btn-danger' href='furniture_list.php?productid=$product_id&action=delete'>Delete</a>
</td></tr>";
}

?>
</table>
</div></div>

<nav align="center">

</nav>
</div></div>
<?php include("include/js.php");?>
</body>
</html>