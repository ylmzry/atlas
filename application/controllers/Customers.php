<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Customer Controller
 */
class Customers extends CI_Controller{

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

      $this->load->model('CustomersModel', 'CustomersModel');
    }

    /**
     * Get All Customer with Selected Informations
     * @return [array] [All Customers with all Informations]
     */
    function index()  {
      $data['all_customers']= $this->CustomersModel->get_all_customers();
      $data['page_title'] = "Customers";
  		$this->load->view('main/customers/customers',$data);
    }

  /**
   * Showing Detailed Informations of Customer
   * @param  [int] $id [Customer ID]
   * @return [array]     [Customer Informations in Array]
   */
  public function view($id) {
      $data['customer'] = $this->CustomersModel->get_customer($id);
      $this->load->view('main/customers/single-customer', $data);
  }
 /**
  * Adding new Customer
  */
  public function add() {
      $this->load->helper('form');
      $this->load->library('form_validation');

      $dataform['page_title'] = "Add new Customer";
      $datasuccess['page_title'] = "Succesfully Added";

      $this->form_validation->set_rules(
          'company', 'Company', 'required|alpha_numeric_spaces',
           array(
             'required'=>'Company is empty.',
             'alpha_numeric_spaces'=>'Company contains something other than alpha-numeric characters or spaces.',
           )
      );
      $this->form_validation->set_rules(
          'name', 'Name', 'required',
           array(
             'required'=>'Name is empty.'
           )
      );
      $this->form_validation->set_rules(
          'surname', 'Surname', 'required',
           array(
             'required'=>'Surname is empty.'
           )
      );
      $this->form_validation->set_rules(
          'email', 'E-Mail', 'required|valid_email',
           array(
             'required'=>'E-Mail is empty.',
             'alpha_numeric_spaces'=>'E-Mail is not valid.',
           )
      );

      if ($this->form_validation->run() === FALSE) {
        $this->load->view('main/customers/add-customer', $dataform);
      } else {
        $this->CustomersModel->add_customer();
        $this->load->view('main/customers/add-customer-success', $datasuccess);
      }
  }

  public function edit($id) {
    $this->load->helper('form');
    $this->load->library('form_validation');

    $data['customer'] = $this->CustomersModel->get_customer($id);
    $data['page_title'] = "Edit Costumer";

    $datasuccess['page_title'] = "Changes succesfully Saved";

    $this->form_validation->set_rules(
        'company', 'Company', 'required|alpha_numeric_spaces',
         array(
           'required'=>'Company is empty.',
           'alpha_numeric_spaces'=>'Company contains something other than alpha-numeric characters or spaces.',
         )
    );
    $this->form_validation->set_rules(
        'name', 'Name', 'required|alpha_numeric_spaces',
         array(
           'required'=>'Name is empty.',
           'alpha_numeric_spaces'=>'Name contains something other than alpha-numeric characters or spaces.',
         )
    );
    $this->form_validation->set_rules(
        'surname', 'Surname', 'required|alpha_numeric_spaces',
         array(
           'required'=>'Surname is empty.',
           'alpha_numeric_spaces'=>'Surname contains something other than alpha-numeric characters or spaces.',
         )
    );
    $this->form_validation->set_rules(
        'email', 'E-Mail', 'required|valid_email',
         array(
           'required'=>'E-Mail is empty.',
           'alpha_numeric_spaces'=>'E-Mail is not valid.',
         )
    );
    $this->form_validation->set_rules(
        'tel', 'Tel', 'alpha_numeric_spaces',
         array(
            'alpha_numeric_spaces'=>'Tel contains something other than alpha-numeric characters or spaces.',
         )
    );
    $this->form_validation->set_rules(
        'fax', 'Fax', 'alpha_numeric_spaces',
         array(
           'alpha_numeric_spaces'=>'Fax contains something other than alpha-numeric characters or spaces.',
         )
    );
    $this->form_validation->set_rules(
        'address', 'Address', 'alpha_numeric_spaces',
         array(
           'alpha_numeric_spaces'=>'Address contains something other than alpha-numeric characters or spaces.',
         )
    );
    $this->form_validation->set_rules(
        'address2', 'Address2', 'alpha_numeric_spaces',
         array(
           'alpha_numeric_spaces'=>'Address Line 2 contains something other than alpha-numeric characters or spaces.',
         )
    );
    $this->form_validation->set_rules(
        'address3', 'Address3', 'alpha_numeric_spaces',
         array(
           'alpha_numeric_spaces'=>'Address Line 3 contains something other than alpha-numeric characters or spaces.',
         )
    );

      if ($this->form_validation->run() === FALSE) {
          $this->load->view('main/customers/edit-customer', $data);
      } else {
        $this->CustomersModel->edit_customer($id);
        $this->load->view('main/customers/edit-customer-success', $datasuccess, $data);
      }

  }
 /**
  * Delete Customer by ID
  * @param  [int] $id [Customer ID]
  * @return [boolean] [true false]
  */
  public function delete($id) {
    $data['customer'] = $this->CustomersModel->get_customer($id);
    $this->CustomersModel->delete_customer($id);
    redirect( base_url() . 'index.php/customers');
  }

}
