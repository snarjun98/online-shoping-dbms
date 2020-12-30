<?php
session_start();
require_once ('component.php');
require_once ('db.php');
if (isset($_POST['add'])){
    /// print_r($_POST['product_id']);
    if(isset($_SESSION['cart'])){

        $item_array_id = array_column($_SESSION['cart'], "productid");

        if(in_array($_POST['product_id'], $item_array_id)){
            echo "<script>alert('Product is already added in the cart..!')</script>";
            echo "<script>window.location = 'log_page.php'</script>";
        }else{

            $count = count($_SESSION['cart']);
            $item_array = array( 'product_id' => $_POST['product_id']);
            $_SESSION['cart'][$count] = $item_array;
        }

    }else{

        $item_array = array( 'product_id' => $_POST['product_id']);
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
<body style="background:white">
<?php require_once('header.php');?>
<nav>

        <label for="drop" class="toggle">Menu</label>
        <input type="checkbox" id="drop" />
            <ul class="menu">
                <li><a href="#">Home</a></li>
                <li><a href="td.php">Todays Deal</a></li>
                <li>
                    <!-- First Tier Drop Down -->
                    <label for="drop-1" class="toggle">Electronics V</label>
                    <a href="e.php">Electronics</a>
                    <input type="checkbox" id="drop-1"/>
                    <ul>
                        <li><a href="tv.php">TV</a></li>
                        <li><a href="mobile.php">Mobile</a></li>
                        <li><a href="lap.php">Laptop</a></li>
                    </ul>

                </li>

                <li>

                <!-- First Tier Drop Down -->
                <label for="drop-2" class="toggle">Fashion V</label>
                <a href="f.php">Fashion</a>
                <input type="checkbox" id="drop-2"/>
                <ul>
                    <li><a href="mc.php">Men</a></li>
                    <li><a href="gc.php">Women</a></li>

                    </li>
                </ul>
                </li>
                <li><a href="Furniture.php">Furniture</a></li>
                <li><a href="Sports.php">Sports</a></li>
                <li><a href="book.php">Books</a></li>

                <li><a href="#">About</a></li>
                <li><a><button onclick="document.getElementById('id02').style.display='block'" style="width: auto" class="b1"><i class="fas fa-sign-in-alt" style="color: red">Login</i></button></a></li>
        </nav>








<section>

    <img class="mySlides" src="./banner5.jpg" style="width:100%; height:650px">
    <img class="mySlides" src="./banner6.jpg" style="width:100%; height: 650px;">
    <img class="mySlides" src="./banner7.jpg" style="width:100%; height:650px">
    <img class="mySlides" src="./banner8.jpg" style="width:100%; height: 650px;">

</section>
<div id="id01" class="modal">

    <form class="modal-content animate" action="connection.php" method="post">
        <div class="imgcontainer">
            <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
            <h1>Sign Up</h1>
            <p>Please fill in this form to create an account.</p>
            <hr>
        </div>

        <div class="container">
                        <label for="f_name"><b> name</b></label>
                        <input type="text"  id="f_name" name="f_name"/>

                        <label for="l_name"><b>Last name</b></label>
                        <input type="text"  id="l_name" name="l_name"/>

                        <label for="email"><b>email</b></label>
                        <input type="email"  id="email" name="email"/>

                        <label for="phno"><b>Phone no</b></label>
                        <input type="number"  id="phno" name="phno"/>

                        <label for="pass"><b>Password</b></label>
                        <input type="password"  id="pass" name="pass"/>


                        <label for="cpass"><b>Confirm Password</b></label>
                        <input type="password"  id="cpass" name="cpass"/>
                        <br>
                        <br>

                                        <label><b>Gender:</b></label>
                                            <label for="male" class="radio-inline"><input type="radio" name="gender" value="m" id="male"><b> Male </b></label>
                                            <label for="female" class="radio-inline"><input type="radio" name="gender" value="f" id="male"><b> Female </b></label>
                                            <label for="other" class="radio-inline"><input type="radio" name="gender" value="o" id="male"><b> Others</b></label>
                        <br>
                        <br>


                        <label for="ad1"><b>Address1</b></label>
                        <input type="text"  id="ad1" name="ad1" />

                        <label for="ad2"><b>Address2</b></label>
                        <input type="text"  id="ad2" name="ad2" />


            <button type="submit" class="b2"><b>Sign up</b></button>
            <label>
        </div>

        <div class="container" style="background-color:#f1f1f1">
            <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
            <span onclick="document.getElementById('id01').style.display='none'"class="psw"><p onclick="document.getElementById('id02').style.display='block'" style="width: auto" class="a" ><b><u> Already a member</u></b></p>
        </div>
    </form>
</div>
<div id="id02" class="modal1">

        <form class="modal-content animate" action="log.php" method="post">
            <div class="imgcontainer">
                <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
                <h1>Login</h1>
            </div>
            <hr>
            <div class="container">
                <label for="email"><b>Email</b></label>
                <input type="text" placeholder="Enter Username" name="email" required>

                <label for="pass"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="pass" required>

                <button type="submit" class="b2">Login</button>
                <label>
                    <input type="checkbox" checked="checked" name="remember"> Remember me
                </label>
                <span class="nid">Forgot <a href="#">password?</a></span>


            </div>

            <div class="container" style="background-color:#f1f1f1">
                <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
                <span onclick="document.getElementById('id02').style.display='none'"class="psw"><p onclick="document.getElementById('id01').style.display='block'" style="width: auto" class="a" ><u>Create new account</u></p>
            </div>
        </form>
    </div>

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
<p> <h2><b style="font-family:'Segoe UI Symbol',fantasy;font-size: 48px;color: red">Electrons</b><button type="button" style="background: blue;float: right;color: white;border: none;padding: 10px">View ALL</button> </h2></p>
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
<p> <h2><b style="font-family:'Segoe UI Symbol',fantasy;font-size: 48px">Fashion</b><button type="button" style="background: deepskyblue;float: right;color: #FFFFFF;border: none;padding: 10px">View ALL</button> </h2></p>

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

<p> <h2><b style="font-family:'Segoe UI Symbol',fantasy;font-size: 48px">Furniture</b><button type="button" style="background: deepskyblue;float: right;color: #FFFFFF;border: none;padding: 10px">View ALL</button> </h2></p>
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
<p> <h2><b style="font-family:'Segoe UI Symbol',fantasy;font-size: 48px">Sports</b><button type="button" style="background: deepskyblue;float: right;color: #FFFFFF;border: none;padding: 10px">View ALL</button> </h2></p>
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
                    <li><a href="#">Contribute</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                </ul>
            </div>
        </div>
        <hr>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-6 col-xs-12">
                <p class="copyright-text">Copyright &copy; 2019 All Rights Reserved by
                    <a href="#">jit</a>.
                </p>
            </div>

            <div class="col-md-4 col-sm-6 col-xs-12">
                <ul class="social-icons">
                    <li><a class="face" href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a class="twit" href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a class="drib" href="#"><i class="fa fa-dribbble"></i></a></li>
                    <li><a class="link" href="#"><i class="fa fa-linkedin"></i></a></li>
                </ul>
            </div>
        </div>
    </div>

</footer>
</html>