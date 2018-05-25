<div class="login-wrapper auth-wide">
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

					<h1><?php echo lang('index_heading');?></h1>
					<p><?php echo lang('index_subheading');?></p>

          <?php if (isset($message) && $message != "") { ?>
            <div class="alert alert-info" role="alert">
              <button class="close" data-dismiss="alert"></button>
              <strong>Info: </strong><?php echo $message;?>
            </div>
          <?php } ?>

					<table cellpadding=0 cellspacing=10 class="table table-hover">
						<tr>
							<th><?php echo lang('index_fname_th');?></th>
							<th><?php echo lang('index_lname_th');?></th>
							<th><?php echo lang('index_email_th');?></th>
							<th><?php echo lang('index_groups_th');?></th>
							<th><?php echo lang('index_status_th');?></th>
							<th><?php echo lang('index_action_th');?></th>
						</tr>
						<?php foreach ($users as $user):?>
							<tr>
					      <td><?php echo htmlspecialchars($user->first_name,ENT_QUOTES,'UTF-8');?></td>
					      <td><?php echo htmlspecialchars($user->last_name,ENT_QUOTES,'UTF-8');?></td>
					      <td><?php echo htmlspecialchars($user->email,ENT_QUOTES,'UTF-8');?></td>
								<td>
									<?php foreach ($user->groups as $group):?>
										<?php echo anchor("auth/edit_group/".$group->id, htmlspecialchars($group->name,ENT_QUOTES,'UTF-8')) ;?><br />
					        <?php endforeach?>
								</td>
								<td><?php echo ($user->active) ? anchor("auth/deactivate/".$user->id, lang('index_active_link')) : anchor("auth/activate/". $user->id, lang('index_inactive_link'));?></td>
								<td><?php echo anchor("auth/edit_user/".$user->id, 'Edit') ;?></td>
							</tr>
						<?php endforeach;?>
					</table>

					<p><?php echo anchor('auth/create_user', lang('index_create_user_link'))?> | <?php echo anchor('auth/create_group', lang('index_create_group_link'))?></p>


          <a href="<?php echo base_url() ?>index.php/auth/logout" class="clearfix bg-master-lighter dropdown-item">
            <span class="pull-left">Logout</span>
          </a>

        </div>
      </div>

</div>
