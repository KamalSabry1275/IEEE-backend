<?php

if(isset($_POST["show_products"])){
    include "../classes/dbh.classes.php";
    include "../classes/product.classes.php";
    include "../classes/productController.classes.php";

    session_start();
    $products = new productController();
    $products = $products->getProductsUser($_COOKIE["data"]["username"]);
    $items = http_build_query(array('items'=>$products));
    header("location: ../productShow.php?$items&username=".$_COOKIE["data"]["username"]);
}
?>