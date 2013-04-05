			<?php // echo $prev_url; die;?>
				<div class="page_detail">
					<div class="headig">Application Regsitration Process</div>
					<div style="float:right;">
						<h3>1 of 6 Pages</h3>
					</div>
					<div class="clr"></div>
					<p>
						Our online application process takes about 5 minutes.<br /><br />
						However, please note we will require a deposit once you have accepted an offer. <br />
						The deposit amount will depend on your Visa status.<br />
						<br />
						We look forward to welcoming you to your course!<br />
						<br />
						Click 'Next' to continue your application<br />
						<br />
						Alternatively you can:<br />
						<br />
							<a href="#"><h4>Make an enquiry.</h4></a><br />
							<a href="#"> <h4>Find out more about the application process.</h4></a>
					</p>
					<table cellpadding="0" width="675" class="c_form" cellspacing="5">
						<tr>
							<td colspan="2" align="right">
								<a href="<?php echo base_url();?>user/user_registration/user_registration_page2"><input type="button" name="Submit" value="Next" /></a>
							</td>
						</tr>
					</table>
					<div class="line_c"></div>
					<div>
						<h3>Continue with your existing login details</h3>
						<form method="post" action="<?php echo base_url();?>user/student_login/login_reg" name="cust_login" id="cust_login">
						<table cellpadding="0" class="c_form" cellspacing="5">
							<tr><td colspan="2" height="20"></td></tr>
							<tr>
								<td colspan="2" style="color:#F00" align="center">
								<?php
									echo $this->session->flashdata('invalid');
								?>		
								</td>
							</tr>
							<?php 
								$course_id 	= $this->session->userdata('course_id');
								$branch_id 	= $this->session->userdata('branch_id');
								$offerprice 	= $this->session->userdata('offerprice');
							?>
							<tr>
								<input type="hidden" name="course_id" value="<?php echo $course_id;?>" />
								<input type="hidden" name="branch_id" value="<?php echo $branch_id;?>" />
								<input type="hidden" name="offerprice" value="<?php echo $offerprice;?>" />
								<td>Email / ID</td>
								<td><input type="text" name="txtEmail" id="txtEmail" placeholder="Enter Email address" required /></td>
							</tr>
							<tr>
								<td>Password</td>
								<td><input type="password" name="password" id="password" placeholder="Enter your Password" required /></td>
							</tr>
							<tr><td colspan="2" height="10"></td></tr>
							<tr>
								<td colspan="2" align="center"><input type="submit" name="Submit" value="Submit" /></td>
							</tr>
							<tr><td colspan="2" height="10"></td></tr>
						</table>
						</form>

					</div>
				</div>
			</div>
<!--			<div class="spn">
				<strong>Special Notes:</strong>
				<p>
					Please fill all the fields and carry on to the next step.
				</p>
			</div>
-->		</div>
	</div>
