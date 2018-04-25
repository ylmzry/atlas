<div class="content">
          <!-- START PAGE COVER -->
          <div class=" container-fluid   container-fixed-lg">
            <ul class="breadcrumb p-l-0">
              <li class="breadcrumb-item"><a href="/">Home</a>
              </li>
              <li class="breadcrumb-item active">Products
              </li>
            </ul>
						<?php //var_dump($all_products); ?>
            <!-- END BREADCRUMB -->
            <h3 class="page-title">Products</h3>
          </div>
          <div class=" container-fluid   container-fixed-lg">
          	 <table class="table table-hover">
							<thead>
								<tr>

									<th>Name</th>
									<th>Category</th>
									<th>Price</th>
                  <th></th>
								</tr>
							</thead>
							<tbody>
							<?php foreach ($all_products as $product) {
								echo "<tr>";

								echo "<td>" . $product['p_name'] . "</td>";
								echo "<td>" . $product['cat_name'] . "</td>";
								echo "<td>EUR " . number_format($product['price'],2) . "</td>";
                echo "<td>
                      <div class='btn-group'>
												<a type='button' class='btn btn-success' href='" .
												site_url('products/view/'.$product['p_id']) . "'><i class='fa fa-eye'></i></a>
                          <a type='button' class='btn btn-success' href='" .
                          site_url('products/edit/'.$product['p_id']) . "'><i class='fa fa-pencil'></i></a>
                          <a type='button' class='btn btn-success' href='" .
                          site_url('products/delete/'.$product['p_id']) . "' onclick=\"if (confirm('Are you sure you want to delete?')) return true; else return false;\"><i class='fa fa-trash-o'></i></a>
                        </div>
                      </td>";
								echo "</tr>";
							} ?>
						</tbody>
						</table>
          </div>
        </div>
