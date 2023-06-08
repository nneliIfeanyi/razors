<?php

class Users extends Controller{
    private $userModel;
    private $productModel;
    public function __construct(){
        $this->userModel = $this->model('User');
        $this->productModel = $this->model('Product');
      }
      

  public function login(){
    if($this->isLoggedIn()){
        flash('login_success', 'You are Logged in.');
        redirect('admin');
      }
    // Check if POST
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
      // Sanitize POST
      $_POST  = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
      $phone = ltrim($_POST['phone'], '\0');
      $pass = trim($_POST['password']);
      $data = [       
        'phone' => $phone,
        'password' => md5($pass),       
        'phone_err' => '',
        'password_err' => '',       
      ];

      // Check for email
      if(empty($data['phone'])){
        $data['phone_err'] = 'Please enter phone number.';
      }else if(empty($pass)){
        $data['password_err'] = 'Please enter password.';
      }else if(!$this->userModel->findUserByPhone($data['phone'])){
        $data['phone_err'] = 'This number is not registered.';
      } else {
        $loggedInUser = $this->userModel->login($data['phone'], $data['password']);
        if($loggedInUser){
          // User Authenticated!
          $this->createUserSession($loggedInUser);
          flash('login_success', 'You are Logged in.');
          redirect('admin');
         
        } else {
          $data['password_err'] = 'Password incorrect.';
          // Load View
          $this->view('users/login', $data);
        }
      }
      $this->view('users/login', $data);
      } else {
       // If NOT a POST

        // Init data
         $data = [
          'phone' => '',
          'password' => '',
          'phone_err' => '',
          'password_err' => '',
        ];

        // Load View
        $this->view('users/login', $data);
      }
    }

    
  // Check Logged In
  public function isLoggedIn(){
    if(isset($_SESSION['user_id'])){
      return true;
    } else {
      return false;
    }
  }


  // Create Session With User Info
  public function createUserSession($user){
    $_SESSION['user_id'] = $user->id;
    $_SESSION['user_phone'] = $user->phone; 
    $_SESSION['user_name'] = $user->name;
    $_SESSION['address'] = $user->address;
    redirect('pages');
  }


  public function view_p($id){
    $products = $this->userModel->getProductById($id);
    $seller = $this->userModel->getUserById($products->s_id);
    $sellerGoods = $this->userModel->allSellerGoods($products->s_id);
    
    $data = [
      'product' => $products,
      'seller' => $seller,
      'sellerGoods' => $sellerGoods,
      
    ];
   
    $this->view('users/view_p', $data);
  }

  public function pwd_reset(){

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $_POST  = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
      $phone = ltrim($_POST['phone'], '\0');

      $data = [      
        'phone' => $phone,
        'phone_err' => '',
      ];

       if(empty($data['phone'])){
        $data['phone_err'] = 'Please enter phone number.';
        $this->view('users/pwd_reset', $data);
      }elseif(!$this->userModel->findUserByPhone($data['phone'])){
        $data['phone_err'] = 'This number is not registered.';
        $this->view('users/pwd_reset', $data);
      }else{
            $_SESSION['phone'] = $data['phone'];
            redirect('users/send_link');
          }

    }
    
    $data = [
       'phone' => '',
       'phone_err' => '', 
    ];
   
    $this->view('users/pwd_reset', $data);
  }


    public function send_link(){
        
      $suspectedUser = $this->userModel->send_link( $_SESSION['phone']);
      $data = [

        'user' => $suspectedUser,

      ];
     
      $this->view('users/send_link', $data);
    }


     public function now_reset(){
       if (!isset($_SESSION['phone'])) {
          redirect('pages');
        }

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
          $_POST  = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
          $pass = trim($_POST['password']);
          $data = [     
            'phone' => $_SESSION['phone'],
            'password' => md5($pass),
            'password_err' => '',
          ];

           if(empty($pass)){
            $data['password_err'] = 'Please enter new password.';
            $this->view('users/now_reset', $data);
          }elseif(strlen($pass) < 6 ){
            $data['password_err'] = 'Too short, must be more than 5 digits.';
            $this->view('users/now_reset', $data);
          }else{

              $this->userModel->new_pass($data);
                unset($_SESSION['phone']);
                redirect('users/login');
          }

        }
      
      $data = [

        'password' => '',
        'password_err' => '',

      ];
     
      $this->view('users/now_reset', $data);
    }



    
  }
