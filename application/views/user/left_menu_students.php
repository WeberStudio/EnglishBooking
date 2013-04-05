				<div class="c_top">
				<div class="headig">Student Dashboard / My English Booking</div>
				<!--<div class="edit_button"><a href="<?php echo base_url();?>/user/student_dashboard/student_dashboard_main"><input type="button" name="submit" value="Dash Board" /></a></div>-->
			</div>
			<div style="float:left;">
				<div class="c_left">
				<img src="<?php echo base_url();?>/theme/user-images/p12.jpg" width="255" />
					<div class="lft_menu">
						<ul>
							<li <?php  if($selected == 'Course_list'){ echo "class='selected'";}?>><a href="<?php echo base_url();?>user/selected_course/get_selected_course_list">Registered courses</a></li>
							<!--<li <?php  if($selected == 'student_dashboard'){ echo "class='selected'";}?>><a href="<?php echo base_url();?>user/student_dashboard/get_student_profile">Profile</a></li>-->
							<li <?php  if($selected == 'admin_documents'){ echo "class='selected'";}?>><a href="<?php echo base_url();?>user/student_documents/admin_documents/">Documents by College</a></li>
							<li <?php  if($selected == 'documents'){ echo "class='selected'";}?>><a href="<?php echo base_url();?>user/student_documents/documents/">My documents</a></li>
							<li <?php  if($selected == 'student_enquiry'){ echo "class='selected'";}?>><a href="<?php echo base_url();?>user/enquiry/student_enquiry_page/">Your Query</a></li>
							<li <?php  if($selected == 'Admin_messages'){ echo "class='selected'";}?>><a href="<?php echo base_url();?>user/admin_messages/get_admin_messages/">Messages by College</a></li>
						</ul>
					</div>
				</div>
