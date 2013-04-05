			<script language="javascript">
				function checkSame() {
				   var passwordVal = $("input[name=password]").val();
				   var checkVal = $("input[name=c_password]").val();
				   if (passwordVal == checkVal) {
					 return true;
				   }
				   $('#msg').html('password Not matched');
				   return false;
				};
								function pass(){
					var textBox = document.getElementById("password");
					var textLength = textBox.value.length;
					if(textLength > 5)
					{
						//red
						textBox.style.backgroundColor = "#f0fff0";
						return(true);
					}
					else
					{
						//green
						textBox.style.backgroundColor = "#ffeeee";
						document.student_detail2.password.focus();
					//	return(true);
					}
				}
				function pass2(){
					var textBox = document.getElementById("c_password");
					var textLength = textBox.value.length;
					if(textLength > 5)
					{
						//red
						textBox.style.backgroundColor = "#f0fff0";
						return(true);
					}
					else
					{
						//green
						textBox.style.backgroundColor = "#ffeeee";
						document.student_detail2.c_password.focus();
					//	return(true);
					}
				}

			</script>				
				<div class="page_detail">
					<div class="headig">My Application Regsitration</div>
					<div style="float:right;">
						<h3>Step 6 of 6</h3>
					</div>
					<div class="clr"></div>
                                        <div id="msg"></div>
					<form method="post" action="<?php echo base_url();?>user/user_registration/page6_data" name="student_detail2" id="student_detail2">		<!---->
					<table cellpadding="0" class="c_form" cellspacing="5">
						<tr><td colspan="2"><h3>Login Information</h3></td></tr>
						<tr>
							<td>Email (user name)</td>
						</tr>
						<tr>
							<td><h3 align="center" style="color:#F00 !important;"><?php echo $this->session->flashdata('msg');?></h3></td>
						</tr>
						<tr>
							<td><input type="Email" name="email" id="email" required /></td>
						</tr>
						<tr>
							<td>Password</td>
						</tr>
						<tr>
							<td><input type="password" name="password" id="password" required onkeypress="return pass();" /></td>
						</tr>
						<tr>
							<td>Confirm Password</td>
						</tr>
						<tr>
							<td><input type="password" name="c_password" id="c_password" required onkeypress="return pass2();" /></td>
						</tr>
						<tr><td colspan="2" height="10"></td></tr>
						<tr>
							<td>
							<table width="100%">
								<tr>
									<td><a href="<?php echo base_url();?>user/user_registration/user_registration_page5_1"><input type="button" name="Submit" value="Previous" /></a></td>
									<td align="right"><input type="submit" name="Submit" value="Submit" align="right" onclick="return checkSame();"/></td>
								</tr>
							</table>
							</td>
							<!--<td align="right"><a href="<?php echo base_url();?>user/user_registration/user_registration_page5"><input type="button" name="Submit" value="Next" /></a></td>-->
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
