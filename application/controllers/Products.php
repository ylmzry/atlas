<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller{

  public function __construct() {
      parent::__construct();
      $this->output->set_template('default');
    	$this->load->helper('url'); // For Base URLs
      $this->load->model('ProductsModel', 'ProductsModel');
    }
    function index()  {
      $data['all_products']= $this->ProductsModel->get_all_products();
      $data['page_title'] = "Products";
  		$this->load->view('main/products',   $data);
    }

  public function view($id) {
      $data['product'] = $this->ProductsModel->get_product($id);
      $this->load->view('main/single-product', $data);
  }

}
