<?php
class Products extends Controller {
  public $productModel;

  public function __construct(){
      $this->productModel = $this->model('Product');
  }


  public function add_product(){
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

      $_POST = filter_input_array(INPUT_POST, FILTER_DEFAULT);
      $image_file = $_FILES['picture']['name'];
      $file_nameArr = explode(".", $image_file);
      $extension = end($file_nameArr);
      $ext = strtolower($extension);
      $unique_name = rand(1100, 999).rand(100, 999).'.'.$ext;
      $db_image_file = "/uploaded/".$unique_name;
      $image_folder = "uploaded/".$unique_name;
      $data = [
        'category' => $_POST['category'],
        'condition' => $_POST['condition'],
        'brand' => $_POST['brand'],
        'description' => trim($_POST['description']),
        'model' => trim($_POST['model']),
        'price' => trim($_POST['price']),
        'color' => trim($_POST['color']),
        'image' => $db_image_file,
        'priceErr' => '',
        'nameErr' => '',
        'imgErr' => '',
        'descErr' => '',
        'move' => move_uploaded_file($_FILES['picture']['tmp_name'],$image_folder)
        
      ]; 

      if($this->productModel->add_product($data)){
        // Redirect to login
        flash('success', 'Add Product Successfull');
        redirect('pages/shop');
      } else {
        die('Something went wrong');
      }

      /*

      if (empty($data['name'])) {
        $data['nameErr'] = "This field is required";
      }
      if (empty($data['description'])) {
        $data['descErr'] = "This field is required";
      }
      if (empty($data['price'])) {
        $data['priceErr'] = "This field is required";
      }

      if (empty($data['image'])) {
        $data['imgErr'] = "Upload image pls..";
      }
      //VALIDATION ENDS//
      //INSERT HERE//
      if(empty($data['nameErr']) && empty($data['priceErr']) && empty($data['descErr']) && empty($data['imgErr'])){
        
        if($this->productModel->add_product($data)){
          // Redirect to login
          flash('success', 'Add Product Successfull');
          redirect('pages/shop');
        } else {
          die('Something went wrong');
        }
        
      
      }else{
        //Load View
      $this->view('products/add_product', $data);
      }
       */   
      }else{
        if(!isset($_SESSION['user_id'])){
          redirect('users/login');
        }
        $data = [
          'name' => '',
          'category' => '',
          'condition' => '',
          'model' => '',
          'color' => '',
          'description' => '',
          'price' => '',
          'image' => '',
          'priceErr' => '',
          'nameErr' => '',
          'descErr' => '',
          'imgErr' => ''

          
        ]; 

        //Load View
        $this->view('products/add_product', $data);
        }
    }


    public function view_p($id){
      $show = $this->productModel->getById($id);
      
      $data = [
        'product' => $show,
      ];
     
      $this->view('products/view_p', $data);
    }




    public function addtocart(){
       //Cart Addition
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $brand = ($_POST['brand']);
      //$model = ($_POST['model']);
      $title = $brand;// . ' ' . $model;
      
      $data = [
        'id' => ($_POST['id']),
        'title' => $title, 
        'description' => ($_POST['desc']),
        'price' => ($_POST['price']),
        'color' => ($_POST['color']),
        'image' => ($_POST['picture']),
        'quantity' => ($_POST['quantity']),
        'condition' => ($_POST['condition']),
       
      ];

      if($this->productModel->addToCart($data)){
        flash('cart_success', 'Added to cart');
        redirect('users/cart');
      } else {
        die('Something went wrong');
      }
     
    }
    
    }

}