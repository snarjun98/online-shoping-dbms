<?php
session_start();
include("../db.php");
    $username=$_POST['username'];
    $pass=$_POST['pass'];
    $resultset=$conn->query("SELECT * FROM admin_info WHERE admin_email='$username' AND admin_password='$pass' LIMIT 1");
    if($resultset->num_rows !=0)
{
            header('location:../admin/index.php');
        }
    else{
        echo "<script>alert('Check ur Username and Password')</script>";
        echo "<script>window.location ='index.html'</script>";

    }

?>