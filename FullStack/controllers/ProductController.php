<?php

require_once '../models/Product.php';

class ProductController {

    public function index() {
        $products = Product::getAll();
    }

    public function show($id) {
        $product = Product::findById($id);
    }

}
