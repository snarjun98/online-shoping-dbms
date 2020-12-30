<?php
$f_name = $_POST['f_name'];
$l_name = $_POST['l_name'];
$email=$_POST['email'];
$phno=$_POST['phno'];
$gender = $_POST['gender'];
$pass=$_POST['pass'];
$cpass=$_POST['cpass'];
$ad1=$_POST['ad1'];
$ad2=$_POST['ad2'];
$vkey= md5(time().$f_name);
include("db.php");
if (!empty($f_name) && !empty($email) && !empty($pass)) {


    if ($pass!=$cpass)
    {
        echo "Password doent match";
    }
    else {
        $SELECT = "SELECT email From register Where email = ? Limit 1";
        $INSERT = "INSERT Into register (f_name, l_name,email,phno,gender,pass,cpass,ad1,ad2,vkey) values(?, ?, ?, ?, ?, ?,?,?,?,?)";
        //Prepare statement
        $stmt = $conn->prepare($SELECT);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->bind_result($email);
        $stmt->store_result();
        $rnum = $stmt->num_rows;
        if ($rnum==0) {
            $stmt->close();
            $stmt = $conn->prepare($INSERT);
            $stmt->bind_param("sssissssss", $f_name,$l_name,$email,$phno, $gender,$pass,$cpass,$ad1,$ad2,$vkey);
            $stmt->execute();
            echo "New record inserted sucessfully";
        } else {
            echo "Someone already register using this email";
        }
        if($INSERT)
        {
            $to=$email;
            $subject="Email Verification";
            $message="the verification key  =  $vkey";
            $headers ="From: snarjun98@gmail.com \r\n";
            $headers .="MIME-Version: 1.0"."\r\n";
            $headers .="Content_type:text/html;charset=UTF-8"."\r\n";

            mail($to,$subject,$message,$headers);
            header('location:ty.php');
        }
        $stmt->close();
        $conn->close();
    }
}
else {
    echo "All field are required";
    die();
}






?>