<div class="content">
          <!-- START PAGE COVER -->
          <div class=" container-fluid   container-fixed-lg">
						<!-- START BREADCRUMB -->
						<ul class="breadcrumb p-l-0">
              <li class="breadcrumb-item"><a href="#">Home</a>
              </li>
              <li class="breadcrumb-item active">All Categories
              </li>
							<li class="breadcrumb-item active"><?php echo $category['name']; ?>
              </li>
            </ul>
            <!-- END BREADCRUMB -->
            <?php //var_dump($category); ?>
            <h3 class="page-title"><?php echo $category['name']; ?></h3></br>
          </div>
          <div class=" container-fluid   container-fixed-lg">
						<div class="row">
								<div class="col-xs-12 col-lg-2 col-md-3">Category Description: </div>
								<div class="col-xs-12 col-lg-10 col-md-9"><?php echo $category['description']; ?></div>
						</div>
          </div>
        </div>
