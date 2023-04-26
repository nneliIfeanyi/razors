<?php

class User{
    private $db;

    public function __construct(){
      $this->db = new Database;
    }

    
    // Add User / Register
    public function register($data){
        // Prepare Query
        $this->db->query('INSERT INTO custumers (name,phone,address,password) 
        VALUES (:name, :phone, :address, :password)');
  
        // Bind Values
        $this->db->bind(':name', $data['name']);
        $this->db->bind(':phone', $data['phone']);
        $this->db->bind(':address', $data['address']);
        $this->db->bind(':password', $data['password']);
        
        //Execute
        if($this->db->execute()){
          return true;
        } else {
          return false;
        }
      }

      
    // Find USer BY phone
    public function findUserByPhone($phone){
        $this->db->query("SELECT * FROM custumers WHERE phone = :phone");
        $this->db->bind(':phone', $phone);
  
        $row = $this->db->single();
  
        //Check Rows
        if($this->db->rowCount() > 0){
          return true;
        } else {
          return false;
        }
      }


          // Login / Authenticate User
    public function login($phone, $password){
        $this->db->query("SELECT * FROM custumers WHERE phone = :phone");
        $this->db->bind(':phone', $phone);
  
        $row = $this->db->single();
        if($password == $row->password){
          
          return $row;
        } else {
          return false;
        }
      }
  

      public function cartItems(){
        $this->db->query("SELECT * FROM cart");
  
        $results = $this->db->resultset();
        if($this->db->rowCount() > 0){
          return $results;
        } else {
          return false;
        }
      }


          // Find User By ID
    public function getUserById($id){
      $this->db->query("SELECT * FROM users WHERE id = :id");
      $this->db->bind(':id', $id);

      $row = $this->db->single();

      return $row;
    }

    
}