<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class OrdersModel extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    $this->load->database();
  }
  // Get all Products form Database with all fields
  public function get_all_orders() {
		$query = $this->db->get('order');
    return $query->result_array();
  }
 /*
  // Get Product Informations by ID
  public function get_product($id = 0)  {
    if ($id===0) {
      //$query = $this->db->get('product');
      $query = $this->db->query('SELECT * FROM product LEFT OUTER JOIN categories ON product.id = categories.id');
      return $query->result_array();
    } else {
      $query = $this->db->query('SELECT *, product.id as p_id, categories.name as cat_name, product.name as p_name FROM product LEFT OUTER JOIN categories ON product.category_id = categories.id WHERE product.id=' . $id );
      return $query->row_array();
    }
  }

  //Get All Product Categories from Database
  public function get_all_product_categories() {
    $query = $this->db->query('SELECT id, name FROM categories');
    return $query->result_array();
  }

  //Add New Product
  public function add_product() {
    $this->load->helper('url');
    $newproduct = array(
      'name' => $this->input->post('pname'),
      'category_id' => $this->input->post('pcat'),
      'price' => $this->input->post('pprice')
    );
    return $this->db->insert('product', $newproduct);
  }

  //Save Changes
  public function edit_product($id) {
    $this->load->helper('url');
    $product = array(
      'name' => $this->input->post('pname'),
      'category_id' => $this->input->post('pcat'),
      'price' => $this->input->post('pprice')
    );
    $this->db->where('id', $id);
    return $this->db->update('product', $product);

    if ($id === 0) {
      return false;
    } else {
      $this->db->where('id', $id);
      return $this->db->update('product', $product);
    }
  }

  public function delete_product($id) {
    $this->db->where('id', $id);
    return $this->db->delete('product');
  } */

}
