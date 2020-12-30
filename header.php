
<header id="header">
    <nav class="navbar navbar-expand-lg navbar-dark bg-black">
        <a href="log_page.php" class="navbar-brand">
            <h3 class="px-5">
                <i class="fas fa-shopping-basket" style="color: red"></i> Shopping Cart
            </h3>
        </a>
        <button class="navbar-toggler"
            type="button"
                data-toggle="collapse"
                data-target = "#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup"
                aria-expanded="false"
                aria-label="Toggle navigation"
        >
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="search-container">
                <input type="text" placeholder="Search.." name="search" style="width: 600px;height: 40px">
            <button type="submit" style="background-color: black; border-color: black;"><h3 class="px-2"><i class="fas fa-search" style="color: red "></i></h3></button>
        </div>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="mr-auto"></div>
            <div class="navbar-nav">
                <a href="cart.php" class="nav-item nav-link active">
                    <h5 class="px-5 cart">
                        <i class="fas fa-shopping-cart"></i> Cart
                        <?php

                        if (isset($_SESSION['cart'])){
                            $count = count($_SESSION['cart']);
                            echo "<span id=\"cart_count\" class=\"text-warning bg-black\" style=\"width:100px\">$count</span>";
                        }else{
                            echo "<span id=\"cart_count\" class=\"text-warning bg-black\">0</span>";
                        }

                        ?>
                    </h5>
                </a>
            </div>
        </div>

    </nav>
</header>






