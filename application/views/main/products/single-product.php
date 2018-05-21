<div class="content">
          <!-- START PAGE COVER -->
          <div class=" container-fluid   container-fixed-lg">
						<!-- START BREADCRUMB -->
						<ul class="breadcrumb p-l-0">
              <li class="breadcrumb-item"><a href="#">Home</a>
              </li>
              <li class="breadcrumb-item active">Products
              </li>
							<li class="breadcrumb-item active"><?php echo $product['p_name']; ?>
              </li>
            </ul>
            <!-- END BREADCRUMB -->

          </div>
          <div class=" container-fluid   container-fixed-lg">
						<div class="row">
								<div class="col-xs-12 col-lg-2 col-md-3">Product Category</div>
								<div class="col-xs-12 col-lg-10 col-md-9"><?php echo $product['cat_name']; ?></div>
						</div>
						<div class="row">
								<div class="col-xs-12 col-lg-2 col-md-3">Product Price</div>
								<div class="col-xs-12 col-lg-10 col-md-9">EUR <?php echo number_format($product['price'],2); ?></div>
						</div>
          </div>
        </div>
