<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends CI_Controller{

  public function __construct() {
      parent::__construct();

      $this->output->set_template('default');
	    $this->load->helper('url'); // For Base URLs
      $this->load->library('ion_auth');
      $data['user']=$this->ion_auth->user()->row_array();

      $this->load->css('template/pagesadmin/assets/plugins/pace/pace-theme-flash.css');
      $this->load->css('template/pagesadmin/assets/plugins/bootstrap/css/bootstrap.min.css');
      $this->load->css('template/pagesadmin/assets/plugins/font-awesome/css/font-awesome.css');
      $this->load->css('template/pagesadmin/assets/plugins/jquery-scrollbar/jquery.scrollbar.css');
      $this->load->css('template/pagesadmin/assets/plugins/select2/css/select2.min.css');
      $this->load->css('template/pagesadmin/assets/plugins/switchery/css/switchery.min.css');
      $this->load->css('template/pagesadmin/assets/plugins/nvd3/nv.d3.min.css');
      $this->load->css('template/pagesadmin/assets/plugins/rickshaw/rickshaw.min.css');
      $this->load->css('template/pagesadmin/assets/plugins/bootstrap-datepicker/css/datepicker3.css');
      $this->load->css('template/pagesadmin/assets/plugins/mapplic/css/mapplic.css');
      $this->load->css('template/pagesadmin/assets/css/dashboard.widgets.css');
      $this->load->css('template/pagesadmin/assets/css/style.css');
      $this->load->css('template/pagesadmin/pages/css/pages-icons.css');
      $this->load->css('template/pagesadmin/pages/css/themes/light.css');

      $this->load->js('template/pagesadmin/assets/plugins/feather-icons/feather.min.js');
      $this->load->js('template/pagesadmin/assets/plugins/pace/pace.min.js');
      $this->load->js('template/pagesadmin/assets/plugins/jquery/jquery-1.11.1.min.js');
      $this->load->js('template/pagesadmin/assets/plugins/modernizr.custom.js');
      $this->load->js('template/pagesadmin/assets/plugins/jquery-ui/jquery-ui.min.js');
      $this->load->js('template/pagesadmin/assets/plugins/tether/js/tether.min.js');
      $this->load->js('template/pagesadmin/assets/plugins/bootstrap/js/bootstrap.min.js');
      $this->load->js('template/pagesadmin/assets/plugins/jquery/jquery-easy.js');
      $this->load->js('template/pagesadmin/assets/plugins/jquery-unveil/jquery.unveil.min.js');
      $this->load->js('template/pagesadmin/assets/plugins/jquery-ios-list/jquery.ioslist.min.js');
      $this->load->js('template/pagesadmin/assets/plugins/jquery-actual/jquery.actual.min.js');
      $this->load->js('template/pagesadmin/assets/plugins/jquery-scrollbar/jquery.scrollbar.min.js');
      $this->load->js('template/pagesadmin/assets/plugins/select2/js/select2.full.min.js');
      $this->load->js('template/pagesadmin/assets/plugins/classie/classie.js');
      $this->load->js('template/pagesadmin/assets/plugins/switchery/js/switchery.min.js');
      $this->load->js('template/pagesadmin/assets/plugins/nvd3/lib/d3.v3.js');
      $this->load->js('template/pagesadmin/assets/plugins/nvd3/nv.d3.min.js');
      $this->load->js('template/pagesadmin/assets/plugins/nvd3/src/utils.js');
      $this->load->js('template/pagesadmin/assets/plugins/nvd3/src/tooltip.js');
      $this->load->js('template/pagesadmin/assets/plugins/nvd3/src/interactiveLayer.js');
      $this->load->js('template/pagesadmin/assets/plugins/nvd3/src/models/axis.js');
      $this->load->js('template/pagesadmin/assets/plugins/nvd3/src/models/line.js');
      $this->load->js('template/pagesadmin/assets/plugins/nvd3/src/models/lineWithFocusChart.js');
      $this->load->js('template/pagesadmin/assets/plugins/rickshaw/rickshaw.min.js');
      $this->load->js('template/pagesadmin/assets/plugins/mapplic/js/hammer.js');
      $this->load->js('template/pagesadmin/assets/plugins/mapplic/js/jquery.mousewheel.js');
      $this->load->js('template/pagesadmin/assets/plugins/mapplic/js/mapplic.js');
      $this->load->js('template/pagesadmin/assets/js/dashboard.js');

      $this->load->js('template/pagesadmin/pages/js/pages.min.js');
      $this->load->js('template/pagesadmin/assets/js/dashboard.js');
      $this->load->js('template/pagesadmin/assets/js/scripts.js');

      $this->load->section('sidebar', 'themes/sections/sidebar');
	    $this->load->section('header', 'themes/sections/header', $data);
      $this->load->section('quickview', 'themes/sections/quickview');
      $this->load->section('overlay', 'themes/sections/overlay');

      $this->load->model('OrdersModel', 'OrdersModel');
    }

    function index()  {
      $data['all_orders']= $this->OrdersModel->get_all_orders();
      $data['page_title'] = "Orders";
  		$this->load->view('main/orders/order', $data);
    }
 /*
  public function view($id) {
      $data['product'] = $this->ProductsModel->get_product($id);
      $this->load->view('main/products/single-product', $data);
  }
  public function add() {
      $this->load->helper(array('form', 'url'));
      $this->load->library('form_validation');

      $dataform['page_title'] = "Add new Product";
      $dataform['all_products_categories'] = $this->ProductsModel->get_all_product_categories();
      $datasuccess['page_title'] = "Succesfully Added";

      $this->form_validation->set_rules(
          'pname', 'Product Name', 'required|alpha_numeric_spaces',
           array(
             'required'=>'Product Name is empty.',
             'alpha_numeric_spaces'=>'Product Name contains something other than alpha-numeric characters or spaces.',
           )
      );
      $this->form_validation->set_rules('pcat', 'Product Category', 'required',
          array(
            ' required'      => 'Product Category is empty.',
          )
        );
      $this->form_validation->set_rules('pprice', 'Product Price', 'required|alpha_numeric_spaces',
        array(
          'required'      => 'Product Name is empty.',
          'decimal'     => 'Product Price contains something other than alpha-numeric characters or spaces.',
        )
      );

      if ($this->form_validation->run() === FALSE) {
        $this->load->view('main/products/add-product', $dataform);
      } else {
        $this->ProductsModel->add_product();
        $this->load->view('main/products/add-product-success', $datasuccess);
      }
  }

  public function edit($id) {
    $this->load->helper(array('form', 'url'));
    $this->load->library('form_validation');

    $data['product'] = $this->ProductsModel->get_product($id);
    $data['all_products_categories'] = $this->ProductsModel->get_all_product_categories();
    $data['page_title'] = "Edit Product";

    $datasuccess['page_title'] = "Changes succesfully Saved";

    $this->form_validation->set_rules(
        'pname', 'Product Name', 'required|alpha_numeric_spaces',
         array(
           'required'=>'Product Name is empty.',
           'alpha_numeric_spaces'=>'Product Name contains something other than alpha-numeric characters or spaces.',
         )
    );
    $this->form_validation->set_rules('pcat', 'Product Category', 'required',
        array(
          ' required'      => 'Product Category is empty.',
        )
      );
    $this->form_validation->set_rules('pprice', 'Product Price', 'required|alpha_numeric_spaces',
      array(
        'required'      => 'Product Name is empty.',
        'decimal'     => 'Product Price contains something other than alpha-numeric characters or spaces.',
      )
    );

      if ($this->form_validation->run() === FALSE) {
          $this->load->view('main/products/edit-product', $data);
      } else {
        $this->ProductsModel->edit_product($id);
        $this->load->view('main/products/edit-product-success', $datasuccess, $data);
      }

  }

  public function delete($id) {
    $data['product'] = $this->ProductsModel->get_product($id);
    $this->ProductsModel->delete_product($id);
    //$data['deletesuccess'] = "Product Succesfully deleted";
    redirect( base_url() . 'index.php/products');
  } */
}
