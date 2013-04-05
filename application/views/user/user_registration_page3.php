			<?php // echo $prev_url; die;?>
<!--			<div class="c_top">
				<div class="headig">Student Dashboard</div>
			</div>
			<div style="float:left;">
			
				<div class="p_left">
					<h1>Popular Destinations </h1>
					<div class="pg_detail">
						<img alt=" " src="<?php echo base_url();?>/theme/user-images/p2.jpg" width="70" />
						<i>Title</i>
						<p>Some description about
							this destination
						</p>
					</div>
					<div class="pg_line"></div>
					<div class="pg_detail">
						<img alt=" " src="<?php echo base_url();?>/theme/user-images/p2.jpg" width="70" />
						<i>Title</i>
						<p>Some description about
							this destination
						</p>
					</div>
				</div>
-->				
				<div class="page_detail">
					<div class="headig">My Application Regsitration</div>
					<div style="float:right;">
						<h3>Step 3 of 6</h3>
					</div>
					<div class="clr"></div>
					<form method="post" action="<?php echo base_url();?>user/user_registration/page3_data" name="student_detail2" id="student_detail2">		<!---->
					<table cellpadding="0" class="c_form" cellspacing="5">
						<tr><td colspan="2" height="20"></td></tr>
						<tr>
							<td colspan="2" style="color:#F00" align="center">
							<?php
								echo $this->session->flashdata('invalid');
							?>		
							</td>
						</tr>
						<tr>
							<td colspan="2">Do you have any illness, allergy or need a special diet?</td>
						</tr>
						<tr>
							<td colspan="2"><textarea name="illness" id="illness" style="width:660px;" required title="Allergy or need a special diet" ></textarea></td>
						</tr>
						<tr>
							<td colspan="2">Do you smoke ?</td>
						</tr>
						<tr>
							<td width="100"><input type="radio" name="smoke" id="smoke" /> Yes</td>
							<td><input type="radio" name="smoke" id="smoke" /> No</td>
						</tr>
						<tr>
							<td colspan="2">any other information about yourself that may be important</td>
						</tr>
						<tr>
							<td colspan="2"><textarea name="other_info" id="other_info" style="width:660px;" required title="Information about yourself" ></textarea></td>
						</tr>
						<tr><td colspan="2" height="10"></td></tr>
						<tr>
							<td><a href="<?php echo base_url();?>user/user_registration/user_registration_page2"><input type="button" name="Submit" value="Previous" /></a></td>
							<td align="right"><input type="submit" name="Submit" value="Next" title="Click for next step" /></td>
							
							<!--<td align="right"><a href="<?php echo base_url();?>user/user_registration/user_registration_page4"><input type="button" name="Submit" value="Next" /></a></td>-->
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
