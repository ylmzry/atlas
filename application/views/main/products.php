<div class="content">
          <!-- START PAGE COVER -->
          <div class=" container-fluid   container-fixed-lg">
            <ul class="breadcrumb p-l-0">
              <li class="breadcrumb-item"><a href="/">Home</a>
              </li>
              <li class="breadcrumb-item active">Products
              </li>
            </ul>

            <!-- END BREADCRUMB -->
            <h3 class="page-title">Products</h3>
          </div>
          <div class=" container-fluid   container-fixed-lg">
          	 <table class="table table-hover">
							<thead>
								<tr>
									<th>#</th>
									<th>Product Name</th>
									<th>Product CategoryID</th>
									<th>Product Price</th>
                  <th>Action</th>
								</tr>
							</thead>
							<tbody>
							<?php foreach ($all_products as $product) {
								echo "<tr>";
								echo "<td>" . $product['id'] . "</td>";
								echo "<td>" . $product['name'] . "</td>";
								echo "<td>" . $product['category_id'] . "</td>";
								echo "<td>EUR " . number_format($product['price'],2) . "</td>";
                echo "<td>
                      <div class='btn-group'>
                          <button type='button' class='btn btn-success'><i class='fa fa-save'></i></button>
                          <a type='button' class='btn btn-success' href='" .
                          site_url('products/edit/'.$product['id']) . "'><i class='fa fa-pencil'></i></a>
                          <a type='button' class='btn btn-success' href='" .
                          site_url('products/delete/'.$product['id']) . "'><i class='fa fa-trash-o'></i></a>
                        </div>
                      </td>";
								echo "</tr>";
							} ?>
						</tbody>
						</table>
          </div>
        </div>
