<div class="content-wrapper">
	<h3 class="page-heading mb-4"><?php echo $product['Name'] ?></h3>
	<div class="row">
		<div class="col-lg-8">
			<div class="card">
      	<div class="card-body">
					<div class="row">
							<div class="col-xs-12 col-lg-2 col-md-3">Product Name</div>
							<div class="col-xs-12 col-lg-10 col-md-9"><?php echo $product['Name']; ?></div>
					</div>
					<div class="row">
							<div class="col-xs-12 col-lg-2 col-md-3">Product Category</div>
							<div class="col-xs-12 col-lg-10 col-md-9"><?php echo $product['Category']; ?></div>
					</div>
					<div class="row">
							<div class="col-xs-12 col-lg-2 col-md-3">Product Price</div>
							<div class="col-xs-12 col-lg-10 col-md-9"><?php echo $product['Price']; ?></div>
					</div>
				</div>
      </div>
		</div>
	</div>
</div>
