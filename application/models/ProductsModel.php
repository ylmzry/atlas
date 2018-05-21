<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProductsModel extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    $this->load->database();
  }
  /**
   * Get all Products form Database with all fields
   * @return [array]
   */
  public function get_all_products() {
		$query = $this->db->query('SELECT *, product.id as p_id, categories.name as cat_name, product.name as p_name FROM product LEFT OUTER JOIN categories ON product.category_id = categories.id');
    return $query->result_array();
  }

  /**
   * Get Product Informations by ID
   * @param  integer $id [product id]
   * @return [array]
   */
  public function get_product($id = 0)  {
    if ($id===0) {
      $query = $this->db->query('SELECT * FROM product LEFT OUTER JOIN categories ON product.id = categories.id');
      return $query->result_array();
    } else {
      $query = $this->db->query('SELECT *, product.id as p_id, categories.name as cat_name, product.name as p_name FROM product LEFT OUTER JOIN categories ON product.category_id = categories.id WHERE product.id=' . $id );
      return $query->row_array();
    }
  }

  /**
   * Get Product Categories Informations by ID
   * @return [array]
   */
  public function get_all_product_categories() {
    $query = $this->db->query('SELECT id, name FROM categories');
    return $query->result_array();
  }

  /**
   * Adding new Product
   */
  public function add_product() {
    $this->load->helper('url');
    $newproduct = array(
      'name' => $this->input->post('pname'),
      'category_id' => $this->input->post('pcat'),
      'price' => $this->input->post('pprice')
    );
    return $this->db->insert('product', $newproduct);
  }

  /**
   * Edit and Save Changes for a Product
   * @param  [int] $id [product id]
   * @return [boolean] true/false
   */
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

    /**
     * Delete product by id
     * @param  [int] $id [product id]
     * @return [boolean]  True/False
     */
  public function delete_product($id) {
    $this->db->where('id', $id);
    return $this->db->delete('product');
  }

}
