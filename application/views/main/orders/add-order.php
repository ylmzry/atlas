<div class="content">
          <!-- START PAGE COVER -->
          <div class=" container-fluid   container-fixed-lg">
						<!-- START BREADCRUMB -->
						<ul class="breadcrumb p-l-0">
              <li class="breadcrumb-item"><a href="#">Home</a>
              </li>
              <li class="breadcrumb-item active">Products
              </li>
							<li class="breadcrumb-item active"><?php echo $page_title; ?>
              </li>
            </ul>
            <!-- END BREADCRUMB -->
            <h3 class="page-title"><?php echo $page_title; ?></h3>
          </div>
          <div class=" container-fluid   container-fixed-lg">
						<div id="rootwizard" class="m-t-50">
	              <!-- Nav tabs -->
	              <ul class="nav nav-tabs nav-tabs-linetriangle nav-tabs-separator nav-stack-sm hidden-sm-down" role="tablist" data-init-reponsive-tabs="dropdownfx">
	                <li class="nav-item">
	                  <a class="active" data-toggle="tab" href="#tab1" role="tab" aria-expanded="true"><i class="fa fa-shopping-cart tab-icon"></i> <span>Products</span></a>
	                </li>
	                <li class="nav-item">
	                  <a class="" data-toggle="tab" href="#tab2" role="tab" aria-expanded="false"><i class="fa fa-truck tab-icon"></i> <span>Customer</span></a>
	                </li>

	                <li class="nav-item">
	                  <a class="" data-toggle="tab" href="#tab4" role="tab" aria-expanded="false"><i class="fa fa-check tab-icon"></i> <span>Summary and Order</span></a>
	                </li>
	              </ul><div class="nav-tab-dropdown cs-wrapper full-width hidden-md-up"><div class="cs-select cs-skin-slide full-width" tabindex="0"><span class="cs-placeholder"> Your cart</span><div class="cs-options"><ul><li data-option="" data-value="#tab1"><span> Your cart</span></li><li data-option="" data-value="#tab2"><span> Shipping information</span></li><li data-option="" data-value="#tab3"><span> Payment details</span></li><li data-option="" data-value="#tab4"><span> Summary</span></li></ul></div><select class="cs-select cs-skin-slide full-width" data-init-plugin="cs-select"><option value="#tab1" selected=""> Your cart</option><option value="#tab2"> Shipping information</option><option value="#tab3"> Payment details</option><option value="#tab4"> Summary</option></select><div class="cs-backdrop"></div></div></div>
	              <!-- Tab panes -->
		            <?php echo form_open('order/add'); ?>
	              <div class="tab-content">
	                <div class="tab-pane padding-20 sm-no-padding slide-left active" id="tab1" aria-expanded="true">
	                  <div class="row row-same-height">
	                    <div class="col-md-5 b-r b-dashed b-grey sm-b-b">
	                      <div class="padding-30 sm-padding-5 sm-m-t-15 m-t-50">
	                        <i class="fa fa-shopping-cart fa-2x hint-text"></i>
	                        <h2>Please Select Products</h2>
                          <!-- Start Form Validation Errors -->
                          <?php if(validation_errors()) { ?>
                            <div class="alert alert-danger" role="alert">
                              <button class="close" data-dismiss="alert"></button>
                              <?php echo validation_errors(); ?>
                            </div>
                          <?php } ?>
                          <!-- End Form Validation Errors -->

	                      </div>
	                    </div>
	                    <div class="col-md-7">
	                      <div class="padding-30 sm-padding-5">
	                        <table class="table table-condensed">
	                          <tbody class="order-line">
	                          <tr class="order-line-tr">
	                            <td class="col-lg-8 col-md-6 col-sm-7">
	                              <a href="#" class="order-remove-item"><i class="pg-close"></i></a>
                                  <label for="product_selector" style="display: none">Product</label>
                                  <select class="product-selector" name="holder">
                                    <option value="0">Please select...</option>
                                    <?php
                                    foreach ($products as $product) {
                                      echo '<option value="'.$product["id"].'" data-price="'.$product["price"].'">'.$product["name"].'</option>';
                                    }
                                    ?>
                                  </select>
				                           <input type="hidden" name="product_id[]" class="product-id" disabled>
				                           <input type="hidden" name="product_total[]" class="product-sum" disabled>
	                            </td>
	                            <td class="col-lg-2 col-md-3 col-sm-3 text-right">
	                              <input type="number" min="1" name="product_quantity[]" class="form-control product-quantity" required disabled>
	                            </td>
	                            <td class=" col-lg-2 col-md-3 col-sm-2 text-right">
	                              <h4 class="text-primary no-margin font-montserrat product-total"></h4>
	                            </td>

	                          </tr>
	                        </tbody></table>

                          <button class="btn btn-primary btn-cons pull-right" type="button" onclick="addNewOrderLine()">
                            <span>Add New Product</span>
                          </button>
	                        <br>
	                        <div class="row b-a b-grey no-margin">
	                          <div class="col-md-3 p-l-10 sm-padding-15 align-items-center d-flex">
	                            <div>

	                            </div>
	                          </div>
	                          <div class="col-md-7 col-middle sm-padding-15 align-items-center d-flex">
	                            <div>

	                            </div>
	                          </div>
	                          <div class="col-md-2 text-right bg-primary padding-10">
	                            <h5 class="font-montserrat all-caps small no-margin hint-text text-white bold">Total</h5>
	                            <h4 class="no-margin text-white sumofcart" id="price-total-all">$0</h4>
	                          </div>
	                        </div>
	                      </div>
	                    </div>
	                  </div>
	                </div>
	                <div class="tab-pane slide-left padding-20 sm-no-padding" id="tab2" aria-expanded="false">
	                  <div class="row row-same-height">
	                    <div class="col-md-5 b-r b-dashed b-grey ">
	                      <div class="padding-30 sm-padding-5 sm-m-t-15 m-t-50">
	                        <h2>Select Customer</h2>
	                      </div>
	                    </div>
	                    <div class="col-md-7">
	                      <div class="padding-30 sm-padding-5">
                          <label for="customer_selecto" style="display: none">Customer</label>
                          <select class="customer-selector" name="customer_selector">
                            <option value="0">Please select...</option>
                            <?php
                              foreach ($customers as $customer) {
                                echo '<option value="'.$customer["CustomerID"].'">'.$customer["Name"].'</option>';
                              }
                              ?>
                          </select>
	                      </div>
	                    </div>
	                  </div>
	                </div>

	                <div class="tab-pane slide-left padding-20 sm-no-padding" id="tab4" aria-expanded="false">
	                  <h1>Summary</h1>
			                 <div id="product-overview"></div>
	                </div>


	                <div class="padding-20 sm-padding-5 sm-m-b-20 sm-m-t-20 bg-white clearfix">
	                  <ul class="pager wizard no-style">
	                    <li class="next" style="display: list-item;">
	                      <button class="btn btn-primary btn-cons pull-right" type="button">
	                        <span>Next</span>
	                      </button>
	                    </li>
	                    <li class="next finish" style="display: none;">
	                      <button class="btn btn-primary btn-cons pull-right" type="submit">
	                        <span>Finish</span>
	                      </button>
	                    </li>
	                    <li class="previous first hidden disabled">
	                      <button class="btn btn-default btn-cons pull-right" type="button">
	                        <span>First</span>
	                      </button>
	                    </li>
	                    <li class="previous disabled">
	                      <button class="btn btn-default btn-cons pull-right" type="button">
	                        <span>Previous</span>
	                      </button>
	                    </li>
	                  </ul>
	                </div>
	              </div>
		  		       </form>
		</div>

          </div>
        </div>
