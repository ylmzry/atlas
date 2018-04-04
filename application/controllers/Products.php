<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Prodxucts extends CI_Controller{

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
  public function add() {
      $this->load->helper('form');
      $this->load->library('form_validation');

      $dataform['page_title'] = "Add new Product";
      $dataform['all_products_categories'] = $this->ProductsModel->get_all_product_categories();
      $datasuccess['page_title'] = "Succesfully Added";

      $this->form_validation->set_rules('pname', 'Product Name', 'required');

      if ($this->form_validation->run() === FALSE) {
        $this->load->view('main/add-product', $dataform);
      } else {
        $this->ProductsModel->add_product();
        $this->load->view('main/add-product-success', $datasuccess);
      }
  }

  public function edit($id) {
    $data['product'] = $this->ProductsModel->get_product($id);
    $this->load->helper('form');
    $this->load->library('form_validation');


    $data['all_products_categories'] = $this->ProductsModel->get_all_product_categories();
    $data['page_title'] = "Edit Product";

    $datasuccess['page_title'] = "Changes succesfully Saved";
    $this->form_validation->set_rules('pname', 'Product Name', 'required');

      if ($this->form_validation->run() === FALSE) {
          $this->load->view('main/edit-product', $data);
      } else {
        $this->ProductsModel->edit_product($id);
        $this->load->view('main/edit-product-success', $datasuccess);
      }

  }

  public function delete($id) {
    $data['product'] = $this->ProductsModel->get_product($id);
    $this->ProductsModel->delete_product($id);
    //$data['deletesuccess'] = "Product Succesfully deleted";
    redirect( base_url() . 'index.php/products');
  }
}
