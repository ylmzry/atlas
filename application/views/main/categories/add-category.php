<div class="content">
          <!-- START PAGE COVER -->
          <div class=" container-fluid   container-fixed-lg">
						<!-- START BREADCRUMB -->
						<ul class="breadcrumb p-l-0">
              <li class="breadcrumb-item"><a href="#">Home</a>
              </li>
              <li class="breadcrumb-item active">All Categories
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
                      <?php echo $page_title; ?>
                    </div>
                  </div>

                  <div class="card-block">
                    <?php echo form_open('category/add'); ?>
                    <?php // <form class="" role="form" action=""> ?>
                      <div class="form-group form-group-default required ">
                        <label for="cname">Category Name</label>
                        <input type="text" class="form-control" required="" name="cname">
                      </div>
                      <div class="form-group form-group-default required ">
                        <label for="cname">Category Description</label>
                        <input type="text-area" class="form-control" required="" name="cdesc">
                      </div>
                      <button class="btn btn-primary" type="submit">Add Category</button>
                      <button class="btn btn-secondary" type="Reset">Reset</button>
                    </form>

                  </div>
                </div>
              </div>
						</div>

          </div>
        </div>
