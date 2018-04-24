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
            <h3 class="page-title">Customers</h3>
          </div>
          <div class=" container-fluid   container-fixed-lg">
          	 <table class="table table-hover">
							<thead>
								<tr>
									<th>Company</th>
									<th>E-Mail</th>
									<th>Tel</th>
                  <th>Address</th>
                  <th>Address</th>
								</tr>
							</thead>
							<tbody>
							<?php foreach ($all_customers as $customer) {
								echo "<tr>";

								echo "<td>" . $customer['Company'] . "</td>";
								echo "<td>" . $customer['Email'] . "</td>";
								echo "<td>" . $customer['Tel'] . "</td>";
                echo "<td>" . $customer['Address'] . "</td>";
                echo "<td>
                      <div class='btn-group'>
												<a type='button' class='btn btn-success' href='" .
												site_url('customers/view/'.$customer['CustomerID']) . "'><i class='fa fa-eye'></i></a>
                          <a type='button' class='btn btn-success' href='" .
                          site_url('customers/edit/'.$customer['CustomerID']) . "'><i class='fa fa-pencil'></i></a>
                          <a type='button' class='btn btn-success' href='" .
                          site_url('customers/delete/'.$customer['CustomerID']) . "'><i class='fa fa-trash-o'></i></a>
                        </div>
                      </td>";
								echo "</tr>";
							} ?>
						</tbody>
						</table>
          </div>
        </div>
