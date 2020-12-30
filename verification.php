<?php
include("db.php");
$vkey2=$_POST['vkey2'];

$resultSet=$conn->query("SELECT vkey FROM register WHERE vkey='$vkey2' LIMIT 1");

if($resultSet->num_rows !=0){

    $update=$conn->query("UPDATE register SET verified = 1 WHERE vkey='$vkey2' LIMIT 1");
    if($update)
    {
        echo "<script>alert('Your Account Is verified plz login..!')</script>";
        echo "<script>window.location = 'log_page.php'</script>";
    }
    else{
        echo $conn->error;
    }
}
else{
    echo "not verified plz contact admin to get verified";
}

?>