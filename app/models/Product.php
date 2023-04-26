<?php
class Product {

    private $db;

    public function __construct(){
        $this->db = new Database;
    }

    public function add_product($data){
        $this->db->query('INSERT INTO products (brand,model,description,img,category,price,color,cond_tion) VALUES(:name,:model,:description,:image,:category,:price,:color,:condition)');
        $this->db->bind(':name', $data['brand']);
        $this->db->bind(':model', $data['model']);
        $this->db->bind(':description', $data['description']);
        $this->db->bind(':image', $data['image']);
        $this->db->bind(':category', $data['category']);
        $this->db->bind(':price', $data['price']);
        $this->db->bind(':color', $data['color']);
        $this->db->bind(':condition', $data['condition']);
        
        if ($this->db->execute()) {
            return true;
        }else{
            return false;
        }
    }

        // Get All Products
        public function getProduct(){
            $this->db->query("SELECT * FROM products");
      
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

            // Add to cart
    public function addToCart($data){
        // Prepare Query
        $this->db->query('INSERT INTO cart (title,description,price,quantity,img,color,cond_tion,p_id) 
        VALUES (:title, :describe, :price, :quantity, :img, :color, :condition, :id)');
  
        // Bind Values
        $this->db->bind(':title', $data['title']);
        $this->db->bind(':describe', $data['description']);
        $this->db->bind(':price', $data['price']);
        $this->db->bind(':quantity', $data['quantity']);
        $this->db->bind(':img', $data['image']);
        $this->db->bind(':color', $data['color']);
        $this->db->bind(':condition', $data['condition']);
        $this->db->bind(':id', $data['id']);
        
        //Execute
        if($this->db->execute()){
          return true;
        } else {
          return false;
        }
      }
  
}