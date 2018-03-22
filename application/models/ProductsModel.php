<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProductsModel extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    $this->load->database();
  }
  // Get all Products form Database with all fields
  public function get_all_products() {
    $query = $this->db->get('product');
    return $query->result_array();
  }

  // Get Product Informations by ID
  public function get_product($id = 0)  {
    if ($id===0) {
      $query = $this->db->get('product');
      return $query->result_array();
    } else {
      $query = $this->db->get_where('product', array('ProductID'=>$id));
      return $query->row_array();
    }
  }

}
