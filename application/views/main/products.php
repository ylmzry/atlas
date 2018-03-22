<div class="content-wrapper">
	<h3 class="page-heading mb-4"><?php echo $page_title ?></h3>
	<div class="row">
		<div class="col-lg-12">
		<div class="card">
      <div class="card-body">

                  <table class="table table-hover">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Product Name</th>
                        <th>Product Category</th>
                        <th>Product Price</th>
                      </tr>
                    </thead>
										<tbody>
										<?php foreach ($all_products as $product) {
											echo "<tr>";
											echo "<td>" . $product['ProductID'] . "</td>";
											echo "<td>" . $product['Name'] . "</td>";
											echo "<td>" . $product['Category'] . "</td>";
											echo "<td>EUR " . number_format($product['Price'],2) . "</td>";
											echo "</tr>";
										} ?>
                  </tbody>
                  </table>

        </div>
      </div>
		</div>
	</div>
</div>
