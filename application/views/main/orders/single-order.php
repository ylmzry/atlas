<div class="content">
          <!-- START PAGE COVER -->
          <div class=" container-fluid   container-fixed-lg">
						<!-- START BREADCRUMB -->
						<ul class="breadcrumb p-l-0">
              <li class="breadcrumb-item"><a href="#">Home</a>
              </li>
              <li class="breadcrumb-item active">Order
              </li>
							<li class="breadcrumb-item active"><?php echo $order['OrderID']; ?>
              </li>
            </ul>
            <!-- END BREADCRUMB -->

            <h3 class="page-title"><?php echo $order['OrderID']; ?> for <?php echo $order['Company']; ?></h3>
          </div>
          <div class=" container-fluid   container-fixed-lg">

            <table class="table table-hover">
             <thead>
               <tr>
                 <th>Product</th>
                 <th>Quantity</th>
                 <th>Price</th>
                 <th>Action</th>
               </tr>
             </thead>
             <tbody>
             <?php  foreach ($orderdetail as $orderline) {
               echo "<tr>";
               echo "<td>" . $orderline['name'] . "</td>";
               echo "<td>" . $orderline['Quantity'] . "</td>";
               echo "<td>" . $orderline['TotalAmount'] . "</td>";
               /*echo "<td><a type='button' class='btn btn-success' href='" . site_url('order/deleteorderitem/'. $order['OrderID'] . '/' .  $orderline['OrderLineID']) . "' onclick=\"if (confirm('Are you sure you want to delete?')) return true; else return false;\"><i class='fa fa-trash-o'></i></a>
                         <a type='button' class='btn btn-success' href='" . site_url('order/editorderline/'. $orderline['OrderLineID']) . "'><i class='fa fa-pencil'></i></a></td>"; */
               echo "<td><a type='button' class='btn btn-success' href='" . site_url('order/deleteorderitem/'. $order['OrderID'] . '/' .  $orderline['OrderLineID']) . "' onclick=\"if (confirm('Are you sure you want to delete?')) return true; else return false;\"><i class='fa fa-trash-o'></i></a>
                       ";
               echo "</tr>";
             } ?>
           </tbody>
           </table>


          </div>
        </div>
