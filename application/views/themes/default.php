<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <meta content="" name="description" />
    <meta content="" name="author" />
    <title><?php echo $title; ?></title>
    <?php
    		 foreach($css as $file){
    		 	echo "\n\t\t";
    			?><link rel="stylesheet" href="<?php echo $file; ?>" type="text/css" /><?php
    		 } echo "\n\t";
    ?>
    <?php
    		if(!empty($meta))
    			foreach($meta as $name=>$content){
    				echo "\n\t\t";
    				?><meta name="<?php echo $name; ?>" content="<?php echo is_array($content) ? implode(", ", $content) : $content; ?>" /><?php
    		 }
    	?>
    <link rel="apple-touch-icon" href="pages/ico/60.png">
    <link rel="apple-touch-icon" sizes="76x76" href="pages/ico/76.png">
    <link rel="apple-touch-icon" sizes="120x120" href="pages/ico/120.png">
    <link rel="apple-touch-icon" sizes="152x152" href="pages/ico/152.png">
    <link rel="icon" type="image/x-icon" href="favicon.ico" />
</head>

 <body class="fixed-header menu-pin">

 <?php echo $this->load->get_section('sidebar'); ?>
 <?php echo $this->load->get_section('header'); ?>

  <!-- START PAGE-CONTAINER -->
  <div class="page-container ">
    <div class="page-content-wrapper content-builder active full-height" id="plainContent">
				<!-- Content Start -->
				<?php echo $output;?>
				<!-- Content End -->
    </div>
    <?php echo $this->load->get_section('quickview'); ?>
    <?php echo $this->load->get_section('overlay'); ?>
    <!-- BEGIN VENDOR JS -->
  </div>
    <?php
      foreach($js as $file){
        echo "\n\t\t";
      	 ?><script src="<?php echo $file; ?>"></script><?php
      	} echo "\n\t";
    ?>
    </body>
  </html>
