<div class="login-wrapper ">
      <!-- START Login Background Pic Wrapper-->
      <div class="bg-pic">
        <!-- START Background Pic-->
        <img src="<?php echo base_url(); ?>/template/pagesadmin/assets/img/demo/new-york-city-buildings-sunrise-morning-hd-wallpaper.jpg"
        data-src="<?php echo base_url(); ?>/template/pagesadmin/assets/img/demo/new-york-city-buildings-sunrise-morning-hd-wallpaper.jpg"
        data-src-retina="<?php echo base_url(); ?>/template/pagesadmin/assets/img/demo/new-york-city-buildings-sunrise-morning-hd-wallpaper.jpg" alt="" class="lazy">
        <!-- END Background Pic-->
        <!-- START Background Caption-->
        <div class="bg-caption pull-bottom sm-pull-bottom text-white p-l-20 m-b-20">
          <h2 class="semi-bold text-white">
				</h2>
          <p class="small">

          </p>
        </div>
        <!-- END Background Caption-->
      </div>
      <!-- END Login Background Pic Wrapper-->
      <!-- START Login Right Container-->
      <div class="login-container bg-white">
        <div class="p-l-50 m-l-20 p-r-50 m-r-20 p-t-50 m-t-30 sm-p-l-15 sm-p-r-15 sm-p-t-40">
          <img src="<?php echo base_url(); ?>/template/pagesadmin/assets/img/logo.png" alt="logo" data-src="<?php echo base_url(); ?>/template/pagesadmin/assets/img/logo.png" data-src-retina="<?php echo base_url(); ?>/template/pagesadmin/assets/img/logo_2x.png" width="78" height="22">

          <h1><?php echo lang('forgot_password_heading');?></h1>
          <p><?php echo sprintf(lang('forgot_password_subheading'), $identity_label);?></p>

          <?php if (isset($message) && $message != "") { ?>
            <div class="alert alert-info" role="alert">
              <button class="close" data-dismiss="alert"></button>
              <strong>Info: </strong><?php echo $message;?>
            </div>
          <?php } ?>
          <!--START FORM -->
        <?php echo form_open("auth/forgot_password");?>

          <div class="form-group form-group-default">
            <label for="identity"><?php echo (($type=='email') ? sprintf(lang('forgot_password_email_label'), $identity_label) : sprintf(lang('forgot_password_identity_label'), $identity_label));?></label>
            <div class="controls">
              <?php echo form_input($identity);?>
            </div>
          </div>

          <?php echo form_submit('submit', lang('forgot_password_submit_btn'));?>
          <?php echo form_close();?>

          
        </div>
      </div>

</div>
