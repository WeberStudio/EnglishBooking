			<?php // echo $prev_url; die;?>
			<div class="c_top">
				<div class="headig">Student Dashboard</div>
			</div>
			<div style="float:left;">
				<div class="c_left">
					<img src="<?php echo base_url();?>/theme/user-images/p12.jpg" width="255" />
				</div>
				<div class="page_detail">
					<div class="headig">Recover your password</div>
					<div class="line_c"></div>
					<div class="clr"></div>
					<form method="post" action="<?php echo base_url();?>user/student_dashboard/get_password" name="cust_login" id="cust_login">
					<table cellpadding="0" class="c_form" cellspacing="5">
						<tr><td colspan="2" height="20"></td></tr>
						<tr>
							<td colspan="2"><h1>Enter Your Email</h1></td>
						</tr>
						<tr><td colspan="2" height="20"></td></tr>
						<tr>
							<td colspan="2" style="color:#F00" align="center">
							<?php
								echo $this->session->flashdata('msg');
							?>		
							</td>
						</tr>
						<tr>
						<input type="hidden" name="prev_url" value="<?php echo $previous;?>" />
							<td>Email / ID</td>
							<td><input type="text" name="txtEmail" id="txtEmail" placeholder="Enter Email address" required /></td>
						</tr>
						<tr><td colspan="2" height="10"></td></tr>
						<tr>
							<td colspan="2" align="center"><input type="submit" name="Submit" value="Submit" /></td>
							<!--<a href="<?php echo base_url();?>user/student_dashboard/student_board">Registration</a>-->
						</tr>
						<tr><td colspan="2" height="10"></td></tr>
					</table>
					</form>
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
