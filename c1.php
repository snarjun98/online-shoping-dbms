<?php

function component($productid,$productname, $productpprice,$productprice, $productimg,$descption){
    $element = "

    <div class=\"col-md-3 col-sm-6 my-3 my-md-0\">
                <form action=\"mp.php\" method=\"post\">
                    <div class=\"card shadow\" style='border-color: white'>
                        <div style='height: 250px'>
                            <img src=\"$productimg\" alt=\"Image\" class=\"img-fluid card-img-top\" height=\"200px\">
                        </div>
                        <div class=\"card-body\" style='background: #FFFFFF'>
                            <h5 class=\"card-title\">$productname</h5>
                            <h6>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"far fa-star\"></i>
                            </h6>
                            <p class=\"card-text\">
                               $descption
                            </p>
                            <h5>
                                <small><s class=\"text-secondary\">₹$productpprice</s></small>
                                <span class=\"price\">₹$productprice</span>
                            </h5>

                            <button type=\"submit\" class=\"btn btn-warning my-3\" name=\"add\" style='background-color:Black;color: yellow; border-color: white'>Add to Cart <i class=\"fas fa-shopping-cart\"style='color:red' ></i></button>
                             <input type='hidden' name='product_id' value='$productid'>
                        </div>
                    </div>
                </form>
            </div>
    ";
    echo $element;
}

function cartElement($productimg, $productname, $productprice, $productid){
    $element = "

    <form action=\"cart.php?action=remove&id=$productid\" method=\"post\" class=\"cart-items\">
                    <div class=\"border rounded\">
                        <div class=\"row bg-white\">
                            <div class=\"col-md-3 pl-0\">
                                <img src=$productimg alt=\"Image1\" class=\"img-fluid\">
                            </div>
                            <div class=\"col-md-6\">
                                <h5 class=\"pt-2\">$productname</h5>
                                <small class=\"text-secondary\">Seller:Shoping </small>
                                <h5 class=\"pt-2\">₹$productprice</h5>
                                <button type=\"submit\" class=\"btn btn-warning\">Save for Later</button>
                                <button type=\"submit\" class=\"btn btn-danger mx-2\" name=\"remove\">Remove</button>
                            </div>
                            <div class=\"col-md-3 py-5\">
                                <div>



                                </div>
                            </div>
                        </div>
                    </div>
                </form>

    ";
    echo  $element;
}

















