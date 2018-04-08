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

          <h1><?php echo lang('edit_user_heading');?></h1>
          <p><?php echo lang('edit_user_subheading');?></p>

          <?php if (isset($message) && $message != "") { ?>
            <div class="alert alert-info" role="alert">
              <button class="close" data-dismiss="alert"></button>
              <strong>Info: </strong><?php echo $message;?>
            </div>
          <?php } ?>
          <!--START FORM -->
         <?php echo form_open(uri_string());?>

          <div class="form-group form-group-default">
            <label><?php echo lang('edit_user_fname_label', 'first_name');?></label>
            <div class="controls">
              <?php echo form_input($first_name);?>
            </div>
          </div>

          <div class="form-group form-group-default">
            <label><?php echo lang('edit_user_lname_label', 'last_name');?></label>
            <div class="controls">
              <?php echo form_input($last_name);?>
            </div>
          </div>

          <div class="form-group form-group-default">
            <label><?php echo lang('edit_user_company_label', 'company');?></label>
            <div class="controls">
              <?php echo form_input($company);?>
            </div>
          </div>

          <div class="form-group form-group-default">
            <label><?php echo lang('edit_user_phone_label', 'phone');?></label>
            <div class="controls">
              <?php echo form_input($phone);?>
            </div>
          </div>

          <div class="form-group form-group-default">
            <label><?php echo lang('edit_user_password_label', 'password');?></label>
            <div class="controls">
              <?php echo form_input($password);?>
            </div>
          </div>

          <div class="form-group form-group-default">
            <label><?php echo lang('edit_user_password_confirm_label', 'password_confirm');?></label>
            <div class="controls">
              <?php echo form_input($password_confirm);?>
            </div>
          </div>

          <?php if ($this->ion_auth->is_admin()): ?>

              <h3><?php echo lang('edit_user_groups_heading');?></h3>
              <?php foreach ($groups as $group):?>
                  <label class="checkbox">
                  <?php
                      $gID=$group['id'];
                      $checked = null;
                      $item = null;
                      foreach($currentGroups as $grp) {
                          if ($gID == $grp->id) {
                              $checked= ' checked="checked"';
                          break;
                          }
                      }
                  ?>
                  <input type="checkbox" name="groups[]" value="<?php echo $group['id'];?>"<?php echo $checked;?>>
                  <?php echo htmlspecialchars($group['name'],ENT_QUOTES,'UTF-8');?>
                  </label>
              <?php endforeach?>

          <?php endif ?>

          <?php echo form_hidden('id', $user->id);?>
          <?php echo form_hidden($csrf); ?>

          <?php echo form_submit('submit', lang('edit_user_submit_btn'));?>
          <?php echo form_close();?>

        </div>
      </div>

</div>
