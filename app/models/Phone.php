<?php
class Phone {

    private $db;

    public function __construct(){
        $this->db = new Database;
    }


 public function allphones(){
      $this->db->query("SELECT * FROM products WHERE category = 'mobile phone' AND s_id = '2' ");
        $results = $this->db->resultset();
  
        return $results;
    }


     // Get Product By Brand new
    public function android(){
      $this->db->query("SELECT * FROM products WHERE sub_cate = 'android device' AND s_id = '2' ");
        $results = $this->db->resultset();
  
        return $results;
    }


     // Get Product By second hand
    public function iphones(){
      $this->db->query("SELECT * FROM products WHERE sub_cate = 'ios device' AND s_id = '2' ");
        $results = $this->db->resultset();
  
        return $results;
    }

}