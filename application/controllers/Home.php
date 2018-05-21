<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Home Controller
 */
class Home extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
  }

  function index()
  {
    $this->load->helper("url");
    $this->load->view('header/header');
    $this->load->view('sidebar/sidebar');
    $this->load->view('home');
    $this->load->view('footer/footer');

  }

}
