			<?php // echo $prev_url; die;?>
			<script language="javascript">
				function checkSame() {
				   var passwordVal = $("input[name=password]").val();
				   var checkVal = $("input[name=r_password]").val();
				   if (passwordVal == checkVal) {
					 return true;
				   }
				   $('#msg').html('password Not matched');
				   return false;
				};
			</script>
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
					<form method="post" action="<?php echo base_url();?>user/student_dashboard/change_password" name="cust_login" id="cust_login">
					<table cellpadding="0" class="c_form" cellspacing="5">
						<tr><td colspan="2" height="20"></td></tr>
						<tr>
							<td colspan="2"><h1>Enter New Password</h1></td>
						</tr>
						<tr><td colspan="2" height="20"></td></tr>
						<tr>
							<td colspan="2" style="color:#F00" align="center" id="msg">
							<?php
								echo $this->session->flashdata('msg');
							?>		
							</td>
						</tr>
						<tr>
						<input type="hidden" name="hiddenid" value="<?php echo $student_id;?>" />
							<td>Password</td>
							<td><input type="password" name="password" id="password" value="" required /></td>
						</tr>
						<tr>
							<td>Password Again</td>
							<td><input type="password" name="r_password" id="r_password" required /></td>
						</tr>
						<tr><td colspan="2" height="10"></td></tr>
						<tr>
							<td colspan="2" align="center"><input type="submit" name="Submit" value="Submit" onclick="return checkSame();" /></td>
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
