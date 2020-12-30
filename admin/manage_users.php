<?php

include("../db.php");
if(isset($_GET['action']) && $_GET['action']!="" && $_GET['action']=='delete')
{
$id=$_GET['user_id'];

/*this is delet quer*/
mysqli_query($conn,"delete from register where id='$id'")or die("query is incorrect...");
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
<?php include("include/header.php"); ?>

<div class="container-fluid">

<?php include("include/side_bar.php"); ?>
<div class="col-sm-9" style="margin-left:10px">
<div class="panel-heading" >
	<h1>Manage User </h1></div><br>

<div style="overflow-x:scroll;">
<table class="table table-bordered table-hover table-striped" style="font-size:18px">
	<tr>
			    <th>User Name</th>
                <th>User Password</th>
				<th>verified</th>
	<th><a href="add_user.php">Add New</a></th></tr>
<?php
$result=mysqli_query($conn,"select id, email, pass,verified from register")or die ("query 2 incorrect.......");

while(list($id,$name,$pass,$verified)=
mysqli_fetch_array($result))
{
echo "<tr><td>$name</td><td>$pass</td><td>$verified</td>";

echo"<td>
<a href='edit_user.php?user_id=$id'>Edit</a>
<a href='manage_users.php?user_id=$id&action=delete'>Delete</a>
</td></tr>";
}
mysqli_close($conn);
?>
</table>
</div>
</div></div>
<?php include("include/js.php"); ?>
</body>
</html>