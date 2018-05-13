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
    $query = $this->db->query('SELECT * FROM orders LEFT OUTER JOIN customer ON orders.CustomerID = customer.CustomerID');
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

  public function get_order($id = 0)  {
     if ($id===0) {
      $query = $this->db->query('SELECT * FROM orders');
      return $query->result_array();
    } else {
        $query = $this->db->query('SELECT * FROM orders LEFT OUTER JOIN customer ON orders.CustomerID = customer.CustomerID WHERE orders.orderid=' . $id );
       return $query->row_array();
     }
  }

  public function get_order_detail($id= 0) {
    if ($id===0) {
    //$query = $this->db->get('product');
     $query = $this->db->query('SELECT * FROM orders');
     return $query->result_array();
   } else {
       $query = $this->db->query('SELECT * FROM orderline LEFT OUTER JOIN product ON orderline.ProductID = product.id LEFT OUTER JOIN orders ON orderline.OrderID = orders.OrderID WHERE orders.orderid=' . $id );
      return $query->result_array();
    }

  }

  public function get_order_line_detail($id= 0) {
    if ($id===0) {
    //$query = $this->db->get('product');
     $query = $this->db->query('SELECT * FROM orders');
     return $query->result_array();
   } else {
       $query = $this->db->query('SELECT * FROM orderline WHERE OrderLineID=' . $id );
      return $query->row_array();
    }

  }

  public function add_order() {
    $this->load->helper('url');
    $today = date('Y-m-d');
    $neworder = array(
      'CustomerID' => $this->input->post('customer_selector'),
      'OrderDate' => $today
    );

    $this->db->insert('orders', $neworder);
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
  public function delete_order($id) {
       $this->db->where('orderid', $id);
       return $this->db->delete('orders');
  }
  public function delete_order_item($orderlineid) {
    $this->db->where('OrderLineID', $orderlineid);
    return $this->db->delete('orderline');
 }

}
