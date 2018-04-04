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

  //Get All Product Categories from Database
  public function get_all_product_categories() {
    $query = $this->db->query('SELECT DISTINCT Category FROM product');
    // $query = $this->db->query('SELECT DISTINCT Category FROM category');
    return $query->result_array();
  }

  //Add New Product
  public function add_product() {
    /*
    if (count($this->get_all_product_categories()) === 0) {
      redirect('/category/add');  
    }
     */

    $this->load->helper('url');
    $newproduct = array(
      'Name' => $this->input->post('pname'),
      'Category' => $this->input->post('pcat'),
      'Price' => $this->input->post('pprice')
    );
    return $this->db->insert('product', $newproduct);
  }

  //Save Changes
  public function edit_product($id) {
    $this->load->helper('url');
    $product = array(
      'Name' => $this->input->post('pname'),
      'Category' => $this->input->post('pcat'),
      'Price' => $this->input->post('pprice')
    );
    $this->db->where('ProductID', $id);
    return $this->db->update('product', $product);

    if ($id === 0) {
      //return $this->db->insert('news', $data);
    } else {
      $this->db->where('ProductID', $id);
      return $this->db->update('product', $product);
    }

  }

  public function delete_product($id) {
    $this->db->where('ProductID', $id);
    return $this->db->delete('product');
  }

}
