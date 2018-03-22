<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  function index()
  {
    $this->load->helper("url");
    $this->load->view('header/header');
    $this->load->view('sidebar/sidebar');
    $this->load->view('home');
    $this->load->view('footer/footer');
    //redirect('home/tryit', 'refresh');
    // helpers
    //$this->load->helper("url");
    //echo site_url('home/tryit');
    //echo base_url('home/tryit');
    //echo anchor('home/tryit', 'myLink', 'class="test"');
    //echo anchor_popup('home/tryit', 'myLink', 'class="test"');
    //$title = "my Title";
    //echo url_title($title, 'dash', TRUE);
    // Accessing Model in Controller
    //$this->load->model('ModHome', 'ModHome');
    //$this->ModHome->addUser();

    /* Learning without a Model
    $data = array();
    $data["Name"] = "Eray";
    $data["City"] = "Vienna";
    $data["Country"] = "Austria";
    $this->load->view('home', $data);
    */
  }
  public function tryit() {
    echo "Trying is allways";
  }

}
