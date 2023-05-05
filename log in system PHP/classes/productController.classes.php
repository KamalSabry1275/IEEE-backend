<?php
class productController extends product{

    public function getProductsUser($username){
        $result = $this->getProducts($username);
        return $result;
    }

    public function setProducts($productname,$price,$username){
        $result = $this->setProduct($productname,$price,$username);
        return $result;
    }

    public function editProducts($price,$productname,$username){
        $result = $this->editProduct($price,$productname,$username);
        return $result;
    }

    public function deleteProduct($productname,$username){
        $this->delete($productname,$username);
    }
}