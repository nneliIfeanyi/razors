<?php
class Accessory {

    private $db;

    public function __construct(){
        $this->db = new Database;
    }


 public function allAccessories(){
      $this->db->query("SELECT * FROM products WHERE category = 'accessories' AND s_id = '2' ");
        $results = $this->db->resultset();
  
        return $results;
    }

     public function charger(){
      $this->db->query("SELECT * FROM products WHERE sub_cate = 'charger' AND s_id = '2' ");
        $results = $this->db->resultset();
  
        return $results;
    }


     public function powers(){
      $this->db->query("SELECT * FROM products WHERE sub_cate = 'power bank' AND s_id = '2' ");
        $results = $this->db->resultset();
  
        return $results;
    }

     public function bluetooth(){
      $this->db->query("SELECT * FROM products WHERE sub_cate = 'bluetooth device' AND s_id = '2' ");
        $results = $this->db->resultset();
  
        return $results;
    }
}