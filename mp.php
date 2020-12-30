
<?php
session_start();
require_once ('c1.php');
require_once ('db.php');
if($_SESSION['cid']==true){
if (isset($_POST['add'])){
    /// print_r($_POST['product_id']);
    if(isset($_SESSION['cart'])){

        $item_array_id = array_column($_SESSION['cart'], "product_id");

        if(in_array($_POST['product_id'], $item_array_id)){
            echo "<script>alert('Product is already added in the cart..!')</script>";
            echo "<script>window.location = 'mp.php'</script>";
        }else{

            $count = count($_SESSION['cart']);
            $item_array = array(
                'product_id' => $_POST['product_id']
            );

            $_SESSION['cart'][$count] = $item_array;
        }

    }else{

        $item_array = array('product_id' => $_POST['product_id']);

        // Create new session variable
        $_SESSION['cart'][0] = $item_array;
        //print_r($_SESSION['cart']);
    }
}

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/d58e95ce59.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Orbitron&display=swap" rel="stylesheet">

</head>
<body style="background:#ffffbf">
<?php require_once('h1.php');?>
<nav>

        <label for="drop" class="toggle">Menu</label>
        <input type="checkbox" id="drop" />
            <ul class="menu">
                <li><a href="#">Home</a></li>
                <li><a href="td1.php">Today Deal</a></li>
                <li>
                    <!-- First Tier Drop Down -->
                    <label for="drop-1" class="toggle">ElectronicsV</label>
                    <a href="e1.php">Electronics</a>
                    <input type="checkbox" id="drop-1"/>
                    <ul>
                        <li><a href="tv1.php">TV</a></li>
                        <li><a href="mobile1.php">Mobile</a></li>
                        <li><a href="lap1.php">Laptop</a></li>
                    </ul>

                </li>

                <li>

                <!-- First Tier Drop Down -->
                <label for="drop-2" class="toggle">FashionV</label>
                <a href="f1.php">Fashion</a>
                <input type="checkbox" id="drop-2"/>
                <ul>
                    <li><a href="mc1.php">Men</a></li>
                    <li><a href="gc1.php">Women</a></li>

                    </li>
                </ul>
                </li>
                <li><a href="Furniture1.php">Furniture</a></li>
                <li><a href="Sports1.php">Sports</a></li>
                <li><a href="book1.php">Books</a></li>

                <li><a href="#">About</a></li>
                <li>
                    <!-- First Tier Drop Down -->
                    <label for="drop-1" class="toggle">AccountV</label>
                    <a href="#">Account</a>
                    <input type="checkbox" id="drop-1"/>
                    <ul>
                        <li><a href="logout.php">Log_out</a></li>
                    </ul>

                </li>

        </nav>
<section>

    <img class="mySlides" src="./banner5.jpg" style="width:100%; height:650px">
    <img class="mySlides" src="./banner6.jpg" style="width:100%; height: 650px;">
    <img class="mySlides" src="./banner7.jpg" style="width:100%; height:650px">
    <img class="mySlides" src="./banner8.jpg" style="width:100%; height: 650px;">

</section>

<script>
    // Get the modal
    var modal = document.getElementById('id01');
var modal1 =document.getElementById('id02');
    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {

        if (event.target == modal ) {
            modal.style.display = "none";
        }
        if (event.target == modal1 )  {
            modal1.style.display = "none";
        }

    }
    var myIndex = 0;
    carousel();

    function carousel() {
        var i;
        var x = document.getElementsByClassName("mySlides");
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        myIndex++;
        if (myIndex > x.length) {myIndex = 1}
        x[myIndex-1].style.display = "block";
        setTimeout(carousel, 5000);
    }
</script>
<div style="background-color: black;color: #FFFFFF;padding-top: 0px" >
<p> <h2><b style="font-family:'Segoe UI Symbol',fantasy;font-size: 48px;color: red">Electrons</b><button type="button" style="background: blue;float: right;color: white;border: none;padding: 10px"><a href="e1.php">View ALL</a></button> </h2></p>
</div>
<div class="container">
    <div class="row text-center py-5">
        <?php
     require_once ('db.php');
        $resultset=$conn->query("SELECT * FROM component WHERE productid <=4");
        while ($row = ($resultset->fetch_assoc())){
            component($row['productid'], $row['productname'], $row['productpprice'], $row['productprice'],$row['productimg'],$row['descption']);
        }
        ?>
    </div>
</div>

<div style="background-color: black;color: #FFFFFF;padding-top: 0px" >
<p> <h2><b style="font-family:'Segoe UI Symbol',fantasy;font-size: 48px">Fashion</b><button type="button" style="background: deepskyblue;float: right;color: #FFFFFF;border: none;padding: 10px"><a href="f1.php">View ALL</a></button> </h2></p>

</div>
<div class="container">
    <div class="row text-center py-5">
        <?php
     require_once ('db.php');
        $resultset=$conn->query("SELECT * FROM component WHERE productid >4 AND productid<=8");
        while ($row = ($resultset->fetch_assoc())){
            component($row['productid'], $row['productname'], $row['productpprice'], $row['productprice'],$row['productimg'],$row['descption']);
        }
        ?>
    </div>
</div>
<div style="background-color: black;color: #FFFFFF;padding-top: 0px" >

<p> <h2><b style="font-family:'Segoe UI Symbol',fantasy;font-size: 48px">Furniture</b><button type="button" style="background: deepskyblue;float: right;color: #FFFFFF;border: none;padding: 10px"><a href="Furniture1.php">View ALL</a></button> </h2></p>
</div>
<div class="container">
    <div class="row text-center py-5">
        <?php
     require_once ('db.php');
        $resultset=$conn->query("SELECT * FROM component WHERE productid >8 AND productid<=12");
        while ($row = ($resultset->fetch_assoc())){
            component($row['productid'], $row['productname'], $row['productpprice'], $row['productprice'],$row['productimg'],$row['descption']);
        }
        ?>
    </div>
</div>
<div style="background-color: black;color: #FFFFFF;padding-top: 0px" >
<p> <h2><b style="font-family:'Segoe UI Symbol',fantasy;font-size: 48px">Sports</b><button type="button" style="background: deepskyblue;float: right;color: #FFFFFF;border: none;padding: 10px"><a href="Sports1.php">View ALL</a></button> </h2></p>
</div>
<div class="container">
    <div class="row text-center py-5">
        <?php
     require_once ('db.php');
        $resultset=$conn->query("SELECT * FROM component WHERE productid >12 AND productid<=16");
        while ($row = ($resultset->fetch_assoc())){
            component($row['productid'], $row['productname'], $row['productpprice'], $row['productprice'],$row['productimg'],$row['descption']);
        }
        ?>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


</body>
<footer class="site-footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-6">
                <h6>About</h6>
                <p class="text-justify"><i> This webpage is created by Arjun SN and Diwakar N</i></p>
            </div>



            <div class="col-xs-6 col-md-3">
                <h6>Quick Links</h6>
                <ul class="footer-links">
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Contact Us</a></li>

                </ul>
            </div>
        </div>
        <hr>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-6 col-xs-12">
                <p class="copyright-text">Copyright &copy; 2019 All Rights Reserved by
                    <a href="#"><?php

                     echo $_SESSION['cid'];?></a>.
                </p>
            </div>

            <div class="col-md-4 col-sm-6 col-xs-12">
                <ul class="social-icons">
                    <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
                    <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<?php
}
else{
header('location:log_page.php');
}
?>
</html>

