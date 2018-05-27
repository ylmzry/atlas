<div class="content">
          <!-- START PAGE COVER -->
          <div class=" container-fluid   container-fixed-lg">
            <ul class="breadcrumb p-l-0">
              <li class="breadcrumb-item"><a href="/">Home</a>
              </li>
              <li class="breadcrumb-item active">Orders
              </li>
            </ul>

            <!-- END BREADCRUMB -->
            <h3 class="page-title">Orders</h3>
          </div>
          <div class=" container-fluid   container-fixed-lg">
          	 <table class="table table-hover">
							<thead>
								<tr>
                  <th>OrderID</th>
									<th>Customer Name</th>
								

									<th>Date</th>
                  <th></th>
								</tr>
							</thead>
							<tbody>
							<?php  foreach ($all_orders as $order) {
								echo "<tr>";
								echo "<td>" . $order['OrderID'] . "</td>";
								echo "<td>" . $order['Company'] . "</td>";


                echo "<td>" . $order['OrderDate'] . "</td>";
                echo "<td>
                      <div class='btn-group'>
												<a type='button' class='btn btn-success' href='" .
												site_url('order/view/'.$order['OrderID']) . "'><i class='fa fa-eye'></i></a>


                        </div>
                      </td>";
								echo "</tr>";
							} ?>
						</tbody>
						</table>
          </div>
        </div>
