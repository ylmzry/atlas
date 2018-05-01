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
						<div class="row">
              <div class="col-md-6 col-sm-12">
                <div class="alert alert-success" role="alert">
                  <button class="close" data-dismiss="alert"></button>
                  <strong>Success: </strong>Changes saved
                </div>
              <div class="card card-default">
                  <div class="card-header ">
                    <div class="card-title">
                      <?php echo $page_title; ?>
                    </div>
                  </div>

                  <div class="card-block">
                      <a href='" . site_url('products/view/'.$product['p_id']) . "' class="btn btn-primary" type="submit" >View Product</a>
                  </div>
                </div>

              </div>
						</div>

          </div>
        </div>
