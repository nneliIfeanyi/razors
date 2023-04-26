<?php
  class Pages extends Controller {

    public $productModel;
    public function __construct(){
      $this->productModel = $this->model('Product');
    }
    
    public function index(){
      $data = [
        'title' => 'GSM',
      ];
     
      $this->view('pages/index', $data);
    }

    public function about(){
      $data = [
        'title' => 'About Us',
        'description' => 'An eCommerce website for smartPhones, repairs and accessories.'
      ];

      $this->view('pages/about', $data);
    }

   public function shop(){
    $products = $this->productModel->getProduct();
      $data = [
        'products' => $products
      ];

      $this->view('pages/shop', $data);
    }

    
  }