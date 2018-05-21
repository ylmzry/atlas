<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Category Class
 */
class Category extends CI_Controller{

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

      $this->load->model('CategoryModel', 'CategoryModel');
    }
    /**
     * Get All Categories with Selected Informations
     * @return [array] [All Categories with all Informations]
     */
    function index()  {
      $data['all_categories']= $this->CategoryModel->get_all_categories();
      $data['page_title'] = "Categories";
  		$this->load->view('main/categories/categories',$data);
    }

  /**
   * View Controller
   * @param  int $id Category ID
   * @return [array] [Category Informations in Array]
   */
  public function view($id) {
      $data['category'] = $this->CategoryModel->get_category($id);
      $this->load->view('main/categories/single-category', $data);
  }

  /**
   * Add new Category Controller
   */
  public function add() {
      $this->load->helper('form');
      $this->load->library('form_validation');

      $dataform['page_title'] = "Add new Category";
      $datasuccess['page_title'] = "Succesfully Added";

      /**
       * Form Validations
       * Category Name, Desctription
       */
      $this->form_validation->set_rules(
          'cname', 'Category Name', 'required|alpha_numeric_spaces',
           array(
             'required'=>'Category Name is empty.',
             'alpha_numeric_spaces'=>'Category Name contains something other than alpha-numeric characters or spaces.',
           )
      );

      $this->form_validation->set_rules(
          'cdesc', 'Category Description', 'required|alpha_numeric_spaces',
           array(
             'required'=>'Category Description is empty.',
             'alpha_numeric_spaces'=>'Category Description contains something other than alpha-numeric characters or spaces.',
           )
      );

      if ($this->form_validation->run() === FALSE) {
        $this->load->view('main/categories/add-category', $dataform);
      } else {
        $this->CategoryModel->add_category();
        $this->load->view('main/categories/add-category-success', $datasuccess);
      }
  }
  /**
   * Category Edit Controllers
   * @param  [int] $id [Category ID]
   * @return View Category edit forms and success massages
   */
   public function edit($id) {
    $data['category'] = $this->CategoryModel->get_category($id);
    $this->load->helper('form');
    $this->load->library('form_validation');

    $data['page_title'] = "Edit Category";
    $datasuccess['page_title'] = "Changes on category succesfully Saved";

    $this->form_validation->set_rules(
        'cname', 'Category Name', 'required|alpha_numeric_spaces',
         array(
           'required'=>'Category Name is empty.',
           'alpha_numeric_spaces'=>'Category Name contains something other than alpha-numeric characters or spaces.',
         )
    );
    $this->form_validation->set_rules(
      'cdesc', 'Category Description', 'required|alpha_numeric_spaces',
       array(
         'required'=>'Category Description is empty.',
         'alpha_numeric_spaces'=>'Category Description contains something other than alpha-numeric characters or spaces.',
       )
    );

      if ($this->form_validation->run() === FALSE) {
          $this->load->view('main/categories/edit-category', $data);
      } else {
        $this->CategoryModel->edit_category($id);
        $this->load->view('main/categories/edit-category-success', $datasuccess, $data);
      }

  }

  /**
   * Delete Category by ID
   * @param  [int] $id [Category ID]
   * @return [boolean]  True/False
   */
  public function delete($id) {
    $data['category'] = $this->CategoryModel->get_category($id);
    $this->CategoryModel->delete_category($id);
    redirect( base_url() . 'index.php/category');
  }

}
