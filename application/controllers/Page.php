<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
		$this->load->helper('url'); // For Base URLs
  }

  function index()
  {
		$this->output->set_template('default');
		$this->load->view('main/dashboard');
  }

  public function dashboard() {
		$this->output->set_template('default');
		$this->load->view('main/dashboard');
  }

}
?>
