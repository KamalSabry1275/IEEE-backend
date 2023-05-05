<?php
    include "../classes/dbh.classes.php";
    include "../classes/product.classes.php";
    include "../classes/productController.classes.php";

    $productname = $_GET["productname"];
    $username = $_GET["username"];
    
    $delete = new productController();
    $delete->deleteProduct($productname,$username);
    $products = $delete->getProductsUser($_COOKIE["data"]["username"]);
    $items = http_build_query(array('items'=>$products));
    header("location: ../productShow.php?$items&username=".$_COOKIE["data"]["username"]);