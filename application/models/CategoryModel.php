<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Category Model
 */
class CategoryModel extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    $this->load->database();
  }

  /**
   * Get all Categories form Database with all fields
   * @return [array]
   */
  public function get_all_categories() {
		$query = $this->db->query('SELECT * FROM categories');
    return $query->result_array();
  }

  /**
   * Get Category Informations by ID
   * @param  integer $id [category id]
   * @return [array]
   */
  public function get_category($id = 0)  {
    if ($id===0) {
      $query = $this->db->get('categories');
      return $query->result_array();
    } else {
      $query = $this->db->get_where('categories', array('id'=>$id));
      return $query->row_array();
    }
  }

  /**
   * Adding new Category
   */
  public function add_category() {
    $this->load->helper('url');
    $newcategory = array(
      'Name' => $this->input->post('cname'),
      'Description' => $this->input->post('cdesc')
    );
    return $this->db->insert('categories', $newcategory);
  }

  /**
   * Edit and Save Changes for a Category
   * @param  [int] $id [category id]
   * @return [boolean] true/false
   */
  public function edit_category($id) {
    $this->load->helper('url');
    $category = array(
      'Name' => $this->input->post('cname'),
      'Description' => $this->input->post('cdesc'),
    );
    $this->db->where('id', $id);
    return $this->db->update('categories', $category);

    if ($id === 0) {
      return false;
    } else {
      $this->db->where('id', $id);
      return $this->db->update('categories', $category);
    }
  }

  /**
   * Delete category by id
   * @param  [int] $id [category id]
   * @return [boolean]  True/False
   */
  public function delete_category($id) {
    $this->db->where('id', $id);
    return $this->db->delete('categories');
  }

}
