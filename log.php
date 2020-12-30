<?php
session_start();
include("db.php");
    $email=$_POST['email'];
    $pass=$_POST['pass'];
    $resultset=$conn->query("SELECT * FROM register WHERE email='$email' AND pass='$pass' LIMIT 1");
    if($resultset->num_rows !=0)
    {
        $row=$resultset->fetch_assoc();
$id=$row['id'];
        $verified=$row['verified'];
        if($verified == 1)
        {
        $_SESSION['cid']=$id;
            header('location:mp.php');
        }else{
            echo "Your Account is not verified";
        }

    }else{
        echo "<script>alert('Check ur Email and Password')</script>";
        echo "<script>window.location ='log_page.php'</script>";

    }

?>