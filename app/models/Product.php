<?php
class Product {

    private $db;

    public function __construct(){
        $this->db = new Database;
    }

    public function add_product($data){
        $this->db->query('INSERT INTO products (brand,model,description,category,sub_cate,price,img,img2,img3,color,cond_tion,s_id) VALUES(:brand,:model,:description,:category,:sub_cate,:price,:img,:img2,:img3,:color,:condition,:user_id)');
        $this->db->bind(':brand', $data['brand']);
        $this->db->bind(':model', $data['model']);
        $this->db->bind(':description', $data['description']);
        $this->db->bind(':category', $data['category']);
         $this->db->bind(':sub_cate', $data['sub_cate']);
        $this->db->bind(':price', $data['price']);
        $this->db->bind(':img', $data['image']);
        $this->db->bind(':img2', $data['image2']);
        $this->db->bind(':img3', $data['image3']);
        $this->db->bind(':color', $data['color']);
        $this->db->bind(':condition', $data['condition']);
        $this->db->bind(':user_id', $data['user_id']);
        
        if ($this->db->execute()) {
            return true;
        }else{
            return false;
        }
    }


    public function add_product2($data){
        $this->db->query('INSERT INTO products (brand,model,description,category,sub_cate,price,img,color,cond_tion,s_id) VALUES(:brand,:model,:description,:category,:sub_cate,:price,:img,:color,:condition,:user_id)');
        $this->db->bind(':brand', $data['brand']);
        $this->db->bind(':model', $data['model']);
        $this->db->bind(':description', $data['description']);
        $this->db->bind(':category', $data['category']);
         $this->db->bind(':sub_cate', $data['sub_cate']);
        $this->db->bind(':price', $data['price']);
        $this->db->bind(':img', $data['image']);
        $this->db->bind(':color', $data['color']);
        $this->db->bind(':condition', $data['condition']);
        $this->db->bind(':user_id', $data['user_id']);
        
        if ($this->db->execute()) {
            return true;
        }else{
            return false;
        }
    }


    // Update Post
    public function update($data){
      // Prepare Query
      $this->db->query('UPDATE products SET brand = :brand, model = :model, description = :des, price = :price, img = :image, img2 = :image2, img3 = :image3, color = :color WHERE id = :id');

      // Bind Values
      $this->db->bind(':id', $data['id']);
      $this->db->bind(':brand', $data['brand']);
      $this->db->bind(':model', $data['model']);
      $this->db->bind(':des', $data['description']);
      $this->db->bind(':price', $data['price']);
      $this->db->bind(':image', $data['image']);
      $this->db->bind(':image2', $data['image2']);
      $this->db->bind(':image3', $data['image3']);
      $this->db->bind(':color', $data['color']);
      
      //Execute
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }
    }

     // Update without image
    public function update1($data){
      // Prepare Query
      $this->db->query('UPDATE products SET brand = :brand, model = :model, description = :des, price = :price, color = :color WHERE id = :id');

      // Bind Values
      $this->db->bind(':id', $data['id']);
      $this->db->bind(':brand', $data['brand']);
      $this->db->bind(':model', $data['model']);
      $this->db->bind(':des', $data['description']);
      $this->db->bind(':price', $data['price']);
      $this->db->bind(':color', $data['color']);
      
      //Execute
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }
    }

    public function deleteProduct($id){
        // Prepare Query
        $this->db->query('DELETE FROM products WHERE id = :id');
  
        // Bind Values
        $this->db->bind(':id', $id);
        
        //Execute
        if($this->db->execute()){
          return true;
        } else {
          return false;
        }
      }

    // Get All Products
    public function getProduct(){
        $this->db->query("SELECT * FROM products WHERE s_id = '2' ORDER BY id DESC");
  
        $results = $this->db->resultset();
  
        return $results;
      }


    // Get LAPTOPS Products
    public function getLaptops(){
        $this->db->query("SELECT * FROM products WHERE category = 'laptop' ORDER BY id DESC");
  
        $results = $this->db->resultset();
  
        return $results;
      }

 // Get per user Products
    public function getUserProduct(){
        $this->db->query("SELECT * FROM products WHERE s_id = :id ORDER BY id DESC");
        $this->db->bind(':id', $_SESSION['user_id']);
        $results = $this->db->resultset();
  
        return $results;
      }


      // Get Product By ID
    public function getById($id){
      $this->db->query("SELECT * FROM products WHERE id = :id");

      $this->db->bind(':id', $id);
      
      $row = $this->db->single();

      return $row;
    }


    }
