<div class="content">
          <!-- START PAGE COVER -->
          <div class=" container-fluid   container-fixed-lg">
            <ul class="breadcrumb p-l-0">
              <li class="breadcrumb-item"><a href="/">Home</a>
              </li>
              <li class="breadcrumb-item active">Products
              </li>
            </ul>
						<?php //var_dump($all_categories); ?>
            <!-- END BREADCRUMB -->
            <h3 class="page-title"><?php echo $page_title ?></h3>
          </div>
          <div class=" container-fluid   container-fixed-lg">
          	 <table class="table table-hover">
							<thead>
								<tr>
									<th>Name</th>
									<th>Description</th>
 			         </tr>
							</thead>
							<tbody>
							<?php foreach ($all_categories as $category) {
								echo "<tr>";

								echo "<td>" . $category['name'] . "</td>";
								echo "<td>" . $category['description'] . "</td>";
						    echo "<td>
                      <div class='btn-group'>
                          <a type='button' class='btn btn-success' href='" .
                          site_url('category/edit/'.$category['id']) . "'><i class='fa fa-pencil'></i></a>
                          <a type='button' class='btn btn-success' href='" .
                          site_url('category/delete/'.$category['id']) . "'><i class='fa fa-trash-o'></i></a>
                        </div>
                      </td>";
								echo "</tr>";
							} ?>
						</tbody>
						</table>
          </div>
        </div>
