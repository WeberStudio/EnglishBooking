				<div class="c_top">
				<div class="headig">Customer Dashboard</div>
<!--				<div class="edit_button"><a href="<?php echo base_url();?>/user/customer_info/customer_main"><input type="button" name="submit" value="Dash Board" /></a></div>
-->			</div>
			<div style="float:left;">
				<div class="c_left">
				<img src="<?php echo base_url();?>/theme/user-images/p3.jpg" width="255" />
					<div class="lft_menu">
						<ul>
							<li <?php if($selected == 'customer_dashboard'){ echo "class='selected'";}?>><a href="<?php echo base_url();?>user/customer_dashboard/customer_board">Personal Details</a></li>
							<li <?php if($selected == 'c_detail'){ echo "class='selected'";}?>><a href="<?php echo base_url();?>user/college_details/college_detl">College Details</a></li>
							<li <?php if($selected == 'branches'){ echo "class='selected'";}?>><a href="<?php echo base_url();?>user/branches_detail/branches_detl">Branches</a></li>
							<li <?php if($selected == 'courses'){ echo "class='selected'";}?>><a href="<?php echo base_url();?>user/courses_detail/courses_detl">Courses</a></li>
							<li <?php if($selected == 'documents'){ echo "class='selected'";}?>><a href="<?php echo base_url();?>user/client_documents/documents">Documents</a></li>
							<li <?php if($selected == 'getstudents'){ echo "class='selected'";}?>><a href="<?php echo base_url();?>user/courses_detail/getstudents">Students</a></li>
							<!--<li <?php if($selected == 'collegeinformation'){ echo "class='selected'";}?>><a href="<?php echo base_url();?>user/customer_dashboard/collegeinformation">College Informations</a></li>-->
						</ul>
					</div>
				</div>
