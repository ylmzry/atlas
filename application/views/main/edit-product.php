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
              <div class="card card-default">

                  <div class="card-header ">
                    <div class="card-title">
                      <?php echo $page_title; ?>

                      <?php var_dump($product['ProductID']); ?>
                    </div>
                  </div>

                  <div class="card-block">
                    <?php echo form_open('products/edit/' . $product['ProductID']); ?>
                      <div class="form-group form-group-default required ">
                        <label for="pname">Product Name</label>
                        <input type="text" class="form-control" required="" name="pname" value="<?php echo $product['Name']; ?>">
                      </div>
                      <div class="form-group form-group-default form-group-default-select2 required">
                        <label class="">Product Category</label>

                        <?php if(!empty($all_products_categories)) { ?>
                            <select class="full-width select2-hidden-accessible" data-placeholder="SELECT A PRODUCT CATEGORY" data-init-plugin="select2" tabindex="-1" aria-hidden="true" name="pcat">
                              <?php foreach ($all_products_categories as $category) {
                                  foreach ($category as $cat) {
                                    if ($cat==$product['Category']) {
                                      echo "<option value=" . $cat . " selected>" . $cat . "</option>";
                                    } else {
                                      echo "<option value=" . $cat . ">" . $cat . "</option>";
                                    }
                                  }
                              } ?>
                            </select>
                        <?php } ?>
                        </select>
                      </div>
                      <div class="form-group form-group-default required ">
                        <label>Product Price</label>
                        <input type="text" class="form-control" required="" name="pprice" value="<?php echo number_format($product['Price'],2); ?>">
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
