<?php

class User{
    private $db;

    public function __construct(){
      $this->db = new Database;
    }

    
    // Find USer BY phone
    public function findUserByPhone($phone){
        $this->db->query("SELECT * FROM users WHERE phone = :phone");
        $this->db->bind(':phone', $phone);
  
        $row = $this->db->single();
  
        //Check Rows
        if($this->db->rowCount() > 0){
          return true;
        } else {
          return false;
        }
      }

      public function findUserByName($name){
        $this->db->query("SELECT * FROM users WHERE name = :name");
        $this->db->bind(':name', $name);
  
        $row = $this->db->single();
  
        //Check Rows
        if($this->db->rowCount() > 0){
          return true;
        } else {
          return false;
        }
      }


       public function send_link($phone){
        $this->db->query("SELECT * FROM users WHERE phone = :phone");
        $this->db->bind(':phone', $phone);
  
        $row = $this->db->single();

        return $row;
      }



      public function new_pass($data){
      // Prepare Query
      $this->db->query('UPDATE users SET password = :password WHERE phone = :phone');

      // Bind Values
      $this->db->bind(':phone', $data['phone']);
      $this->db->bind(':password', $data['password']);
      
      //Execute
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }
    }


    public function new_pass1($data){
      // Prepare Query
      $this->db->query('UPDATE users SET password = :password WHERE id = :id');

      // Bind Values
      $this->db->bind(':id', $data['id']);
      $this->db->bind(':password', $data['password']);
      
      //Execute
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }
    }

    public function edit_pic($data){
      // Prepare Query
      $this->db->query('UPDATE users SET img = :img WHERE id = :id');

      // Bind Values
      $this->db->bind(':id', $data['id']);
      $this->db->bind(':img', $data['image']);
      
      //Execute
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }
    }

    public function edit_profile($data){
      // Prepare Query
      $this->db->query('UPDATE users SET name = :name, phone = :phone, address = :address WHERE id = :id');

      // Bind Values
      $this->db->bind(':id', $data['id']);
      $this->db->bind(':name', $data['name']);
      $this->db->bind(':phone', $data['phone']);
      $this->db->bind(':address', $data['address']);
      
      //Execute
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }
    }


          // Login / Authenticate User
    public function login($phone, $password){
        $this->db->query("SELECT * FROM users WHERE phone = :phone");
        $this->db->bind(':phone', $phone);
  
        $row = $this->db->single();
        if($password == $row->password){
          
          return $row;
        } else {
          return false;
        }
      }
  

  
      // Get Product By ID
    public function getProductById($id){
      $this->db->query("SELECT * FROM products WHERE id = :id");

      $this->db->bind(':id', $id);
      
      $row = $this->db->single();

      return $row;
    }

 
          // Find User By ID
    public function getUserById($id){
      $this->db->query("SELECT * FROM users WHERE id = :id");
      $this->db->bind(':id', $id);

      $row = $this->db->single();

      return $row;
    }


    public function allSellerGoods($id){
      $this->db->query("SELECT * FROM products WHERE s_id = :id");
      $this->db->bind(':id', $id);

      $row = $this->db->resultset();

      return $row;
    }

    
}