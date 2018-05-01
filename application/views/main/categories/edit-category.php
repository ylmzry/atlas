<div class="content">
          <!-- START PAGE COVER -->
          <div class=" container-fluid   container-fixed-lg">
						<!-- START BREADCRUMB -->
						<ul class="breadcrumb p-l-0">
              <li class="breadcrumb-item"><a href="#">Home</a>
              </li>
              <li class="breadcrumb-item active">Categories
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
              <div class="card card-default">

                  <div class="card-header ">
                    <div class="card-title">
                      <h4><?php echo $category['name']; ?></h4>
                    </div>
                  </div>

                  <div class="card-block">
                    <!-- Start Form Validation Errors -->
                    <?php if(validation_errors()) { ?>
                      <div class="alert alert-danger" role="alert">
                        <button class="close" data-dismiss="alert"></button>
                        <?php echo validation_errors(); ?>
                      </div>
                    <?php } ?>
                    <!-- End Form Validation Errors -->

                    <?php echo form_open('category/edit/' . $category['id']); ?>
                      <div class="form-group form-group-default required ">
                        <label for="cname">Name</label>
                        <input type="text" class="form-control" required="" name="cname" value="<?php echo $category['name']; ?>">
                      </div>
                      <div class="form-group form-group-default required ">
                        <label for="cdesc">Description</label>
                        <input type="text" class="form-control" required="" name="cdesc" value="<?php echo $category['description']; ?>">
                      </div>
                      <button class="btn btn-primary" type="submit">Save Changes</button>
                      <button class="btn btn-secondary">Return to Catgeory</button>
                    </form>

                  </div>
                </div>
              </div>
						</div>

          </div>
        </div>
