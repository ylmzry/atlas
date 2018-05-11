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

  public function get_all_products() {
    $query = $this->db->query('SELECT * FROM product');
    return $query->result_array();
  }

  public function get_all_customers() {
    $query = $this->db->query('SELECT * FROM customer');
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
   */
  //Add New Order
  public function add_order() {
    $this->load->helper('url');
    $today = date('Y-m-d');
    $neworder = array(
      'CustomerID' => $this->input->post('customer_selector'),
      'OrderDate' => $today
    );

    $this->db->insert('order', $neworder);
    $order_id = $this->db->insert_id();

    $selected_products = $this->input->post('product_id');
    $selected_products_quantities = $this->input->post('product_quantity');
    $selected_products_total = $this->input->post('product_total');

    if (!empty($selected_products)) {
      $i = 0;
      foreach ($selected_products as $selected_product) {
        $neworderline = array(
          'OrderID' =>  $order_id,
          'ProductID' => $selected_product,
          'Quantity' => $selected_products_quantities[$i],
	  'TotalAmount' => $selected_products_total[$i++]
        );
        $this->db->insert('orderline', $neworderline);
      }
    }
  }
  /*
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
