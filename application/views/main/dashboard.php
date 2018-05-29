	<!-- START PAGE CONTENT WRAPPER -->
	<div class="page-content-wrapper ">
		<!-- START PAGE CONTENT -->
		<div class="content">
			<!-- START JUMBOTRON -->
			<div data-pages="parallax">
				<div class="container-fluid p-l-25 p-r-25 sm-p-l-0 sm-p-r-0">
					<div class="inner">
						<!-- START BREADCRUMB -->
						<ol class="breadcrumb sm-p-b-5">
							<li class="breadcrumb-item"><a href="#">Home</a></li>
							<li class="breadcrumb-item active">Dashboard</li>
						</ol>
					</div>
				</div>
			</div>

		 <?php
		 if (!$this->ion_auth->logged_in()) {	redirect('auth/login');	} ?>
      <!-- END JUMBOTRON -->
			<!-- START CONTAINER FLUID -->
			<div class="container-fluid p-l-25 p-r-25 p-t-0 p-b-25 sm-padding-10" style="display: none">
				<!-- START ROW -->
				<div class="row">
					<div class="col-lg-3 col-sm-6  d-flex flex-column">

						<!-- START WIDGET widget_weekly_sales_card-->
						<div class="card no-border widget-loader-bar m-b-10">
							<div class="container-xs-height full-height">
								<div class="row-xs-height">
									<div class="col-xs-height col-top">
										<div class="card-header  top-left top-right">
											<div class="card-title">
												<span class="font-montserrat fs-11 all-caps">Page Visits <i class="fa fa-chevron-right"></i>
														</span>
											</div>
											<div class="card-controls">
												<ul>
													<li><a href="#" class="portlet-refresh text-black" data-toggle="refresh"><i class="portlet-icon portlet-icon-refresh"></i></a>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<div class="row-xs-height">
									<div class="col-xs-height col-top">
										<div class="p-l-20 p-t-50 p-b-40 p-r-20">
											<h3 class="no-margin p-b-5">423</h3>
											<span class="small hint-text pull-left">22% higher</span>
											<span class="pull-right small text-danger">$23,000</span>
										</div>
									</div>
								</div>
								<div class="row-xs-height">
									<div class="col-xs-height col-bottom">
										<div class="progress progress-small m-b-0">
											<!-- START BOOTSTRAP PROGRESS (http://getbootstrap.com/components/#progress) -->
											<div class="progress-bar progress-bar-danger" style="width:15%"></div>
											<!-- END BOOTSTRAP PROGRESS -->
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- END WIDGET -->
						<!-- START WIDGET widget_weekly_sales_card-->
						<div class="card no-border widget-loader-bar m-b-10">
							<div class="container-xs-height full-height">
								<div class="row-xs-height">
									<div class="col-xs-height col-top">
										<div class="card-header  top-left top-right">
											<div class="card-title">
												<span class="font-montserrat fs-11 all-caps">Page Visits <i class="fa fa-chevron-right"></i>
														</span>
											</div>
											<div class="card-controls">
												<ul>
													<li><a href="#" class="portlet-refresh text-black" data-toggle="refresh"><i class="portlet-icon portlet-icon-refresh"></i></a>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<div class="row-xs-height">
									<div class="col-xs-height col-top">
										<div class="p-l-20 p-t-50 p-b-40 p-r-20">
											<h3 class="no-margin p-b-5">423</h3>
											<span class="small hint-text pull-left">22% higher</span>
											<span class="pull-right small text-danger">$23,000</span>
										</div>
									</div>
								</div>
								<div class="row-xs-height">
									<div class="col-xs-height col-bottom">
										<div class="progress progress-small m-b-0">
											<!-- START BOOTSTRAP PROGRESS (http://getbootstrap.com/components/#progress) -->
											<div class="progress-bar progress-bar-danger" style="width:15%"></div>
											<!-- END BOOTSTRAP PROGRESS -->
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- END WIDGET -->
						<!-- START WIDGET widget_weekly_sales_card-->
						<div class="card no-border widget-loader-bar m-b-10">
							<div class="container-xs-height full-height">
								<div class="row-xs-height">
									<div class="col-xs-height col-top">
										<div class="card-header  top-left top-right">
											<div class="card-title">
												<span class="font-montserrat fs-11 all-caps">Page Visits <i class="fa fa-chevron-right"></i>
														</span>
											</div>
											<div class="card-controls">
												<ul>
													<li><a href="#" class="portlet-refresh text-black" data-toggle="refresh"><i class="portlet-icon portlet-icon-refresh"></i></a>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<div class="row-xs-height">
									<div class="col-xs-height col-top">
										<div class="p-l-20 p-t-50 p-b-40 p-r-20">
											<h3 class="no-margin p-b-5">423</h3>
											<span class="small hint-text pull-left">22% higher</span>
											<span class="pull-right small text-danger">$23,000</span>
										</div>
									</div>
								</div>
								<div class="row-xs-height">
									<div class="col-xs-height col-bottom">
										<div class="progress progress-small m-b-0">
											<!-- START BOOTSTRAP PROGRESS (http://getbootstrap.com/components/#progress) -->
											<div class="progress-bar progress-bar-danger" style="width:15%"></div>
											<!-- END BOOTSTRAP PROGRESS -->
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- END WIDGET -->
						<!-- START WIDGET widget_weekly_sales_card-->
						<div class="card no-border widget-loader-bar m-b-10">
							<div class="container-xs-height full-height">
								<div class="row-xs-height">
									<div class="col-xs-height col-top">
										<div class="card-header  top-left top-right">
											<div class="card-title">
												<span class="font-montserrat fs-11 all-caps">Page Visits <i class="fa fa-chevron-right"></i>
														</span>
											</div>
											<div class="card-controls">
												<ul>
													<li><a href="#" class="portlet-refresh text-black" data-toggle="refresh"><i class="portlet-icon portlet-icon-refresh"></i></a>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<div class="row-xs-height">
									<div class="col-xs-height col-top">
										<div class="p-l-20 p-t-50 p-b-40 p-r-20">
											<h3 class="no-margin p-b-5">423</h3>
											<span class="small hint-text pull-left">22% higher</span>
											<span class="pull-right small text-danger">$23,000</span>
										</div>
									</div>
								</div>
								<div class="row-xs-height">
									<div class="col-xs-height col-bottom">
										<div class="progress progress-small m-b-0">
											<!-- START BOOTSTRAP PROGRESS (http://getbootstrap.com/components/#progress) -->
											<div class="progress-bar progress-bar-danger" style="width:15%"></div>
											<!-- END BOOTSTRAP PROGRESS -->
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- END WIDGET -->
					</div>


				</div>
				<!-- END ROW -->
				<!-- START ROW -->
				<div class="row">
					<div class="col-lg-4 md-m-b-10">

					</div>
					<div class="col-lg-8 sm-m-t-10">

					</div>
				</div>
				<!-- END ROW -->
			</div>
			<!-- END CONTAINER FLUID -->
		</div>
		<!-- END PAGE CONTENT -->
		<!-- START COPYRIGHT -->
		<!-- START CONTAINER FLUID -->
		<!-- START CONTAINER FLUID -->
		<div class=" container-fluid  container-fixed-lg footer">
			<div class="copyright sm-text-center">
				<p class="small no-margin pull-left sm-pull-reset">
					<span class="hint-text">Copyright &copy; 2017 </span>
					<span class="font-montserrat">REVOX</span>.
					<span class="hint-text">All rights reserved. </span>
					<span class="sm-block"><a href="#" class="m-l-10 m-r-10">Terms of use</a> <span class="muted">|</span> <a href="#" class="m-l-10">Privacy Policy</a></span>
				</p>
				<p class="small no-margin pull-right sm-pull-reset">
					Hand-crafted <span class="hint-text">&amp; made with Love</span>
				</p>
				<div class="clearfix"></div>
			</div>
		</div>
		<!-- END COPYRIGHT -->
	</div>
	<!-- END PAGE CONTENT WRAPPER -->
</div>
<!-- END PAGE CONTAINER -->
