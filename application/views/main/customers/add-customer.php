<div class="content">
          <!-- START PAGE COVER -->
          <div class=" container-fluid   container-fixed-lg">
						<!-- START BREADCRUMB -->
						<ul class="breadcrumb p-l-0">
              <li class="breadcrumb-item"><a href="#">Home</a>
              </li>
              <li class="breadcrumb-item active">Customers
              </li>
							<li class="breadcrumb-item active"><?php echo $page_title; ?>
              </li>
            </ul>
            <!-- END BREADCRUMB -->
            <h3 class="page-title"><?php echo $page_title; ?></h3>
          </div>
          <div class=" container-fluid container-fixed-lg">
						<div class="row">
              <div class="col-md-6 col-sm-12">
              <div class="card card-default">

                  <div class="card-header ">
                    <div class="card-title">
                      <?php echo $page_title; ?>

                    </div>
                  </div>
                 
                  <div class="card-block">
                    <?php echo form_open('customers/add'); ?>
                    <?php // <form class="" role="form" action=""> ?>
                      <div class="form-group form-group-default required ">
                        <label for="company">Company Name</label>
                        <input type="text" class="form-control" required="" name="company">
                      </div>
                      <div class="form-group form-group-default required ">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" required="" name="name">
                      </div>
                      <div class="form-group form-group-default required ">
                        <label for=surname>Surname</label>
                        <input type="text" class="form-control" required="" name="surname">
                      </div>
                      <div class="form-group form-group-default required ">
                        <label for=email>E-Mail</label>
                        <input type="email" class="form-control" required="" name="email">
                      </div>
                      <div class="form-group form-group-default">
                        <label for=tel>Tel</label>
                        <input type="text" class="form-control" required="" name="tel">
                      </div>
                      <div class="form-group form-group-default">
                        <label for=fax>Fax</label>
                        <input type="text" class="form-control" required="" name="fax">
                      </div>
                      <div class="form-group form-group-default">
                        <label for=address>Address</label>
                        <input type="address" class="form-control" required="" name="address">
                      </div>
                      <div class="form-group form-group-default">
                        <label for=address2>Address Line 2</label>
                        <input type="address" class="form-control" required="" name="address2">
                      </div>
                      <div class="form-group form-group-default">
                        <label for=address3>Address Line 3</label>
                        <input type="address" class="form-control" required="" name="address3">
                      </div>
                      <div class="form-group form-group-default">
                        <label for="logo">LOGO</label>
                        <input type="file" class="form-control form-control-file" id="logo" name="logo">
                      </div>

                      <button class="btn btn-primary" type="submit">Add Customer</button>
                      <button class="btn btn-secondary" type="Reset">Reset</button>
                    </form>

                  </div>
                </div>
              </div>
						</div>

          </div>
        </div>
