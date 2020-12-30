<?php

include("../db.php");
$id=$_REQUEST['user_id'];

$result=mysqli_query($conn,"select id, email, pass from register where id='$id'")or die ("query 1 incorrect.......");

list($id,$name,$pass)=mysqli_fetch_array($result);

if(isset($_POST['btn_save']))
{
$name=$_POST['email'];
$pass=$_POST['password'];
$verified=$_POST['verified'];
mysqli_query($conn,"UPDATE register SET email = '$name',pass='$pass',cpass='$pass',verified='$verified' WHERE register.id = '$id'")or die(mysql_error());

header("location: manage_users.php");
mysqli_close($conn);
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
   	<div class="container-fluid main-container">
	<?php include("include/side_bar.php");?>

	<div class="col-md-9 content" align="center">
<div class="panel-heading" >
	<h1>Edit User Details </h1></div><br>
<form action="edit_user.php" name="form" method="post" enctype="multipart/form-data">
<input type="hidden" name="user_id" id="user_id" value="<?php echo $id;?>" />


<div class="col-sm-7 ">
    <label style="font-size:18px;">Email</label><br>
    <input class="input-lg" style="font-size:18px; width:200px" name="email" type="text"  id="email" value="<?php echo $name; ?>" autofocus><br><br>
    </div>
    <div class="col-sm-7 ">
    <label style="font-size:18px;">verified</label><br>
    <input class="input-lg" style="font-size:18px; width:200px" name="verified" type="number"  id="verified" value="<?php echo $verified; ?>" autofocus><br><br>
    </div>

<div class="col-sm-7 ">
<label style="font-size:18px;">Password</label><br>
<input class="input-lg" style="font-size:18px; width:200px" name="password" type="text"  id="password" value="<?php echo $pass; ?>">
    <br><br></div>
    <div class="col-sm-7">
        <button type="submit" class="btn btn-success " name="btn_save" id="btn_save" style="font-size:18px">Submit</button></div>
</form>
</div></div>
<?php include("include/js.php");?>
</body>
</html>