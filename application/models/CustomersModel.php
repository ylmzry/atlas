<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CustomersModel extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    $this->load->database();
  }
  // Get all Products form Database with all fields
  public function get_all_customers() {
		$query = $this->db->query('SELECT * FROM customer');
    return $query->result_array();
  }


  // Get Customers Informations by ID
  public function get_customer($id = 0)  {
    if ($id===0) {
      //$query = $this->db->get('customer');
      $query = $this->db->query('SELECT * FROM customer');
      return $query->result_array();
    } else {
      $query = $this->db->query('SELECT * FROM customer WHERE CustomerID =' . $id );
      return $query->row_array();
    }
  }
  /*

  //Get All Product Categories from Database
  public function get_all_customer_categories() {
    $query = $this->db->query('SELECT id, name FROM categories');
    return $query->result_array();
  } */

  //Add New Product
  public function add_customer() {
    $this->load->helper('url');
    $newcustomer = array(
      'Company' => $this->input->post('company'),
      'Name' => $this->input->post('name'),
      'surname' => $this->input->post('surname')
    );
    return $this->db->insert('customer', $newcustomer);
  }
  /*
  //Save Changes
  public function edit_customer($id) {
    $this->load->helper('url');
    $customer = array(
      'name' => $this->input->post('pname'),
      'category_id' => $this->input->post('pcat'),
      'price' => $this->input->post('pprice')
    );
    $this->db->where('id', $id);
    return $this->db->update('customer', $customer);

    if ($id === 0) {
      return false;
    } else {
      $this->db->where('id', $id);
      return $this->db->update('customer', $customer);
    }
  }

  public function delete_customer($id) {
    $this->db->where('id', $id);
    return $this->db->delete('customer');
  } */
}
