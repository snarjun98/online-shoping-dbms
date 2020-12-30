<?php

include("../db.php");

if(isset($_POST['btn_save']))
{
    $f_name = $_POST['f_name'];
    $l_name = $_POST['l_name'];
    $email=$_POST['email'];
    $phno=$_POST['phno'];
    $gender = $_POST['gender'];
    $pass=$_POST['pass'];
    $cpass=$_POST['cpass'];
    $ad1=$_POST['ad1'];
    $ad2=$_POST['ad2'];
$verified=$_POST['verified'];
mysqli_query($conn,"insert into register(f_name, l_name,email,pass,cpass,phno,ad1,ad2,verified,gender) values ('$f_name','$l_name','$email','$pass','$cpass','$phno','$ad1','$ad2','$verified','$gender')")
			or die ("Query 1 is inncorrect........");
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

<div class="container-fluid">
<?php include("include/side_bar.php"); ?>

  <div class="col-sm-9 " align="center">
  <div class="panel-heading" >
	<h1>Add User  </h1></div><br>

<form action="add_user.php" name="form" method="post">
<div class="col-sm-6">
    <input name="f_name" class="input-lg" type="text"  id="f_name" style="font-size:18px; width:330px" placeholder="First Name" autofocus required><br><br>
</div>
<div class="col-sm-6">
<input name="l_name" class="input-lg" type="text"  id="l_name" style="font-size:18px; width:330px" placeholder="Last Name" autofocus required><br><br>
    </div>
    <div class="col-sm-6">
    <input name="email" class="input-lg" type="text"  id="email" style="font-size:18px; width:330px" placeholder="Email" autofocus required><br><br>
    </div>
    <div class="col-sm-6">
    <input name="phno" class="input-lg" type="phone"  id="phno" style="font-size:18px; width:330px" placeholder="Phone No" autofocus required><br><br>
    </div>

    <div class="col-sm-6">
<input name="pass" class="input-lg" type="text"  id="pass" style="font-size:18px; width:330px"  placeholder="Password" required><br><br>
    </div>
    <div class="col-sm-6">
<input name="cpass" class="input-lg" type="text"  id="cpass" style="font-size:18px; width:330px"  placeholder="Confirm Password" required><br><br>
    </div>


     <div class="col-sm-6">
    <input name="ad1" class="input-lg" type="text"  id="ad1" style="font-size:18px; width:330px" placeholder="Address1" autofocus required><br><br>
    </div>
     <div class="col-sm-6">
    <input name="ad2" class="input-lg" type="text"  id="ad2" style="font-size:18px; width:330px" placeholder="Address2" autofocus required><br><br>
    </div>
    <div class="col-sm-6">
    <label><b>Gender:</b></label>
                                            <label for="male" class="radio-inline"><input type="radio" name="gender" value="m" id="male"><b> Male </b></label>
                                            <label for="female" class="radio-inline"><input type="radio" name="gender" value="f" id="male"><b> Female </b></label>
                                            <label for="other" class="radio-inline"><input type="radio" name="gender" value="o" id="male"><b> Others</b></label> <br><br>
    </div>
    <div class="col-sm-6">
    <input name="verified" class="input-lg" type="number"  id="verified" style="font-size:18px; width:330px" placeholder="Verified" autofocus required><br><br>
    </div>
<div class="col-sm-7" style="margin:20px;margin-left:90px;">
    <button type="submit" class="btn btn-success btn-block center" name="btn_save" id="btn_save" style="font-size:18px">Submit</button></div>
</form>
</div></div>
<?php include("include/js.php"); ?>
</body>
</html>