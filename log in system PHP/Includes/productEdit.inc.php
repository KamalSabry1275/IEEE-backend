<?php
    include "../classes/dbh.classes.php";
    include "../classes/product.classes.php";
    include "../classes/productController.classes.php";

    $productname = $_POST["productname"];
    $price = $_POST["price"];

    $products = new productController();
    $products->editProducts($price,$productname,$_COOKIE["data"]["username"]);
    $ps = $products->getProductsUser($_COOKIE["data"]["username"]);
    $items = http_build_query(array('items'=>$ps));
    header("location: ../productShow.php?$items&username=".$_COOKIE["data"]["username"]);