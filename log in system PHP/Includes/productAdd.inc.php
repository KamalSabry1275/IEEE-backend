<?php

    $productname = $_POST["productname"];
    $price = $_POST["price"];

    include "../classes/dbh.classes.php";
    include "../classes/product.classes.php";
    include "../classes/productController.classes.php";
    $products = new productController();
    $products->setProducts($productname,$price,$_COOKIE["data"]["username"]);
    $products = $products->getProductsUser($_COOKIE["data"]["username"]);
    $items = http_build_query(array('items'=>$products));
    header("location: ../productShow.php?$items&username=".$_COOKIE["data"]["username"]);