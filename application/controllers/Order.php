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
    $this->load->css('template/pagesadmin/assets/css/style.css');
    $this->load->css('template/pagesadmin/pages/css/pages-icons.css');
    $this->load->css('template/pagesadmin/pages/css/themes/light.css');
    $this->load->css('assets/themes/default/css/custom.css');

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
    $this->load->js('template/pagesadmin/assets/plugins/bootstrap3-wysihtml5/bootstrap3-wysihtml5.all.min.js');
    $this->load->js('template/pagesadmin/assets/plugins/jquery-autonumeric/autoNumeric.js');
    $this->load->js('template/pagesadmin/assets/plugins/dropzone/dropzone.min.js');
    $this->load->js('template/pagesadmin/assets/plugins/bootstrap-tag/bootstrap-tagsinput.min.js');
    $this->load->js('template/pagesadmin/assets/plugins/jquery-inputmask/jquery.inputmask.min.js');
    $this->load->js('template/pagesadmin/assets/plugins/bootstrap-form-wizard/js/jquery.bootstrap.wizard.min.js');
    $this->load->js('template/pagesadmin/assets/plugins/jquery-validation/js/jquery.validate.min.js');
    $this->load->js('template/pagesadmin/assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js');
    $this->load->js('template/pagesadmin/assets/plugins/summernote/js/summernote.min.js');
    $this->load->js('template/pagesadmin/assets/plugins/moment/moment.min.js');
    $this->load->js('template/pagesadmin/assets/plugins/bootstrap-timepicker/bootstrap-timepicker.min.js');

    $this->load->js('template/pagesadmin/pages/js/pages.min.js');
    $this->load->js('template/pagesadmin/assets/js/form_wizard.js');
    $this->load->js('template/pagesadmin/assets/js/scripts.js');

    // OWN Scripts
    $this->load->js('assets/themes/default/js/scripts.js');

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
  public function view($id) {
     $data['order'] = $this->OrdersModel->get_order($id);
     $data['orderdetail'] = $this->OrdersModel->get_order_detail($id);
     $this->load->view('main/orders/single-order', $data);
   }

  public function add() {
    $this->load->helper(array('form', 'url'));
    $this->load->library('form_validation');

    $dataform['page_title'] = "Add Order";
    //$dataform['all_products_categories'] = $this->ProductsModel->get_all_product_categories();
    $datasuccess['page_title'] = "Order Succesfully Added";

    $dataform['products'] = $this->OrdersModel->get_all_products();
    $dataform['customers'] = $this->OrdersModel->get_all_customers();

    $this->form_validation->set_rules(
      'customer_selector', 'Customer', 'required',
      array(
        'required'=>'Select a Customer',
      )
    );

    if ($this->form_validation->run() === FALSE) {
      $this->load->view('main/orders/add-order', $dataform);
    } else {
      $this->OrdersModel->add_order();
      $this->load->view('main/orders/add-order-success', $datasuccess);
    }
  }
  public function editorderline($orderlineid) {
    $this->load->helper(array('form', 'url'));
    $this->load->library('form_validation');

    $data['orderline'] = $this->OrdersModel->get_order_line_detail($orderlineid);
    $data['page_title'] = "Edit Order Line";

    $this->form_validation->set_rules('pcat', 'Product Category', 'required',
      array(
      ' required'      => 'Product Category is empty.',
      )
      );

    if ($this->form_validation->run() === FALSE) {
      $this->load->view('main/orders/edit-order-line', $data);
    } else {
      $this->ProductsModel->edit_product($id);
      $this->load->view('main/orders/edit-order-line-success', $data);
    }
  }
  /*
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

     }*/

     public function delete($id) {
       $this->OrdersModel->delete_order($id);
       redirect( base_url() . 'index.php/order');
     }
     public function deleteorderitem($orderid, $orderlineid) {
       $this->OrdersModel->delete_order_item($orderlineid);
       redirect( base_url() . 'index.php/order/view/' . $orderid);
     }
}
