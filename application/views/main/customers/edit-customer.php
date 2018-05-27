<div class="content">
          <!-- START PAGE COVER -->
          <div class=" container-fluid   container-fixed-lg">
                        <!-- START BREADCRUMB -->
                        <ul class="breadcrumb p-l-0">
              <li class="breadcrumb-item"><a href="#">Home</a>
              </li>
              <li class="breadcrumb-item active">Products
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
                      <h4><?php echo $customer['Company']; ?></h4>
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

                    <?php echo form_open('customers/edit/' . $customer['CustomerID']); ?>

                      <div class="form-group form-group-default required ">
                        <label for="company">Company Name</label>
                        <input type="text" class="form-control" required="" name="company" value="<?php echo $customer['Company']; ?>">
                      </div>
                      <div class="form-group form-group-default required ">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" required="" name="name" value="<?php echo $customer['Name']; ?>">
                      </div>
                      <div class="form-group form-group-default required ">
                        <label for=surname>Surname</label>
                        <input type="text" class="form-control" required="" name="surname" value="<?php echo $customer['Surname']; ?>">
                      </div>
                      <div class="form-group form-group-default required ">
                        <label for=email>E-Mail</label>
                        <input type="email" class="form-control" required="" name="email" value="<?php echo $customer['Email']; ?>">
                      </div>
                      <div class="form-group form-group-default">
                        <label for=tel>Tel</label>
                        <input type="text" class="form-control" name="tel" value="<?php echo $customer['Tel']; ?>">
                      </div>
                      <div class="form-group form-group-default">
                        <label for=fax>Fax</label>
                        <input type="text" class="form-control" name="fax" value="<?php echo $customer['Fax']; ?>">
                      </div>
                      <div class="form-group form-group-default">
                        <label for=address>Address</label>
                        <input type="address" class="form-control" name="address" value="<?php echo $customer['Address']; ?>">
                      </div>
                      <div class="form-group form-group-default">
                        <label for=address2>Address Line 2</label>
                        <input type="address" class="form-control" name="address2" value="<?php echo $customer['Address2']; ?>">
                      </div>
                      <div class="form-group form-group-default">
                        <label for=address3>Address Line 3</label>
                        <input type="address" class="form-control" name="address3" value="<?php echo $customer['Address3']; ?>">
                      </div>
                    
                      <button class="btn btn-primary" type="submit">Save Changes</button>
                      <button class="btn btn-secondary">Return to Product</button>
                    </form>

                  </div>
                </div>
              </div>
                        </div>

          </div>
        </div>
