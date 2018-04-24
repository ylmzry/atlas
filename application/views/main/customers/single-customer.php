<div class="content">
          <!-- START PAGE COVER -->
          <div class=" container-fluid   container-fixed-lg">
						<!-- START BREADCRUMB -->
						<ul class="breadcrumb p-l-0">
              <li class="breadcrumb-item"><a href="#">Home</a>
              </li>
              <li class="breadcrumb-item active">Customers
              </li>
							<li class="breadcrumb-item active"><?php echo $customer['Company']; ?>
              </li>
            </ul>
            <!-- END BREADCRUMB -->

            <h3 class="page-title"><?php echo $customer['Company']; ?></h3>
          </div>
          <div class=" container-fluid   container-fixed-lg">
						<div class="row">
								<div class="col-xs-12 col-lg-2 col-md-3">Name</div>
								<div class="col-xs-12 col-lg-10 col-md-9"><?php echo $customer['Name']; ?></div>
						</div>
						<div class="row">
								<div class="col-xs-12 col-lg-2 col-md-3">Surname</div>
								<div class="col-xs-12 col-lg-10 col-md-9"><?php echo $customer['Surname']; ?></div>
						</div>
            <div class="row">
								<div class="col-xs-12 col-lg-2 col-md-3">E-Mail</div>
								<div class="col-xs-12 col-lg-10 col-md-9"><?php echo $customer['Email']; ?></div>
						</div>
            <div class="row">
								<div class="col-xs-12 col-lg-2 col-md-3">Tel</div>
								<div class="col-xs-12 col-lg-10 col-md-9"><?php echo $customer['Tel']; ?></div>
						</div>
            <div class="row">
								<div class="col-xs-12 col-lg-2 col-md-3">Address Line 1</div>
								<div class="col-xs-12 col-lg-10 col-md-9"><?php echo $customer['Address']; ?></div>
						</div>
            <div class="row">
								<div class="col-xs-12 col-lg-2 col-md-3">Address Line 2</div>
								<div class="col-xs-12 col-lg-10 col-md-9"><?php echo $customer['Address2']; ?></div>
						</div>
            <div class="row">
                <div class="col-xs-12 col-lg-2 col-md-3">Address Line 3</div>
                <div class="col-xs-12 col-lg-10 col-md-9"><?php echo $customer['Address3']; ?></div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-lg-2 col-md-3">Registration Date</div>
                <div class="col-xs-12 col-lg-10 col-md-9"><?php echo $customer['RegistrationDate']; ?></div>
            </div>
          </div>
        </div>
