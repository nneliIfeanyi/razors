<?php

class Products extends Controller{
    private $userModel;
    private $productModel;

    public function __construct(){
        $this->userModel = $this->model('User');
        $this->productModel = $this->model('Product');
      }


      public function laptops(){
        $products = $this->productModel->getLaptops();
             if (!empty($products)) {
        $data = [
              'title' => 'Laptops',
              'products' => $products
            ];
      }else{
         flash('success', 'No results found');
        $data = [
              'title' => 'All laptops',
              'products' => $products
            ];
      }

       
        $this->view('products/laptops', $data);
      }


}