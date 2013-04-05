				<div class="page_detail">
					<div class="headig">My Application Regsitration</div>
					<div style="float:right;">
						<h3>Step 2 of 6</h3>
					</div>
					<div class="clr"></div>
					<form method="post" action="<?php echo base_url();?>user/user_registration/page2_data" name="student_detail2" id="student_detail2">		<!---->
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
							<td>
							<table cellpadding="0" cellspacing="0">
								<tr>
									<td>First Name</td>
									<td width="4"></td>
									<td>Last Name</td>
								</tr>
								<tr>
									<td><input type="text" name="family_name" id="family_name" style="width:257px;" placeholder="First Name" required title="Enter your name" /></td>
									<td></td>
									<td><input type="text" name="fore_name" id="fore_name" placeholder="Last Name" style="width:257px;" required title="Enter your name" /></td>
								</tr>
							</table>
							</td>
						<tr>
							<td>
							<table width="535" cellpadding="0" cellspacing="0">
								<tr>
									<td>Date of birth (Y/M/D)</td>
									<td width="20"></td>
									<td>&nbsp;&nbsp;Gender</td>
								</tr>
								<tr>
									<td>
										<select name="year" style="width:100px" required>
										<option value="">Select Year</option>
											<?php
												
												for($y = 1970; $y <= date("Y"); $y++){
												?>
											<option value="<?php echo $y;?>"><?php echo $y;?></option>
											<?php } ?>
										</select>
										&nbsp;&nbsp;
										<select name="month" style="width:120px" required>
										<option value="">Select Month</option>
											<?php
												
												for($y = 1; $y <= 12; $y++){
												?>
											<option value="<?php echo $y;?>"><?php echo $y;?></option>
											<?php } ?>
										</select>
										&nbsp;&nbsp;
										<select name="day" style="width:100px" required>
											<option value="">Select Day</option>
											<?php
												
												for($y = 1; $y <= 31; $y++){
												?>
											<option value="<?php echo $y;?>"><?php echo $y;?></option>
											<?php } ?>
										</select>
									</td>
									<td></td>
									<td align="right">
										<select name="gender" style="width:120px;" required>
											<option value="">Select</option>
											<option value="Male">Male</option>
											<option value="Female">Female</option>
											<option value="Other">Other</option>
										</select>
									</td>
								</tr>
							</table>

								<!--<input type="text" name="date_of_birth" id="date_of_birth" placeholder="Date of birth" required />-->
							</td>
						</tr>
						<tr>
							<td>Nationality</td>
						</tr>
						<tr>
							<td><input type="text" name="nationality" id="nationality" placeholder="Nationality" required /></td>
						</tr>
<!--						<tr>
							<td>Address</td>
						</tr>
						<tr>
							<td><input type="text" name="address" id="address" placeholder="Address" required /></td>
						</tr>
-->						<tr>
							<td colspan="2">
							<table cellpadding="0" cellspacing="0">
								<tr>
									<td>House Name </td>
									<td width="20"></td>
									<td>House No</td>
								</tr>
								<tr>
									<td><input type="text" name="house_name" style="width:245px" title="House Name" /></td>
									<td width="20"></td>
									<td><input type="text" name="house_no" style="width:245px" title="House No" /></td>
								</tr>
								<tr>
									<td>Street</td> 
									<td width="20"></td>
									<td>Town</td>
								</tr>
								<tr>
									<td><input type="text" name="street" style="width:245px" title="Street" /></td>
									<td width="20"></td>
									<td><input type="text" name="town" style="width:245px" title="Town" /></td>
								</tr>
								<tr>
									<td>City</td>
									<td width="20"></td>
									<td>State / County</td>
								</tr>
								<tr>
									<td><input type="text" name="city" style="width:245px" title="City" /></td>
									<td></td>
									<td><input type="text" name="state" style="width:245px" title="Country" /></td>
								</tr>
								<tr>
									<td>Nationality</td>
									<td width="20"></td>
									<td>Country</td>
								</tr>
								<tr>
									<td>
										<select name="nationality" id="nationality" style="width:245px">
										<?php 
											$Country1 = $cust_info->county;
											foreach($countries as $country){
											$Country2 = $country->printable_name;
										?>
										<option value="<?php echo $country->printable_name;?>" <?php if($cust_info->county == $country->printable_name) echo "SELECTED";?>><?php echo $country->printable_name;?></option>
											<?php } ?>
										</select>
									</td>
									<td></td>
									<td>
										<select name="country" id="country" style="width:245px">
										<?php 
											$Country1 = $cust_info->county;
											foreach($countries as $country){
											$Country2 = $country->printable_name;
										?>
										<option value="<?php echo $country->printable_name;?>" <?php if($cust_info->county == $country->printable_name) echo "SELECTED";?>><?php echo $country->printable_name;?></option>
											<?php } ?>
										</select>

									</td>
								</tr>
								<tr>
									<td>Post Code</td>
								</tr>
								<tr>
									<td colspan="4"><input type="text" name="post_code" title="Post Code" /></td>
								</tr>
								
							</table>
							</td>
						</tr>
						<tr>
							<td>
							<table cellpadding="0" cellspacing="0">
								<tr>
									<td>Telephone #</td>
									<td width="4"></td>
									<td>Fax #</td>
								</tr>
								<tr>
									<td><input type="text" name="telephone" title="Telephone" id="telephone" style="width:257px;" placeholder="Enter Telephone" required onkeypress="return numbersonly(event)" /></td>
									<td></td>
									<td><input type="text" name="fax" id="fax" title="Fax" placeholder="Enter Fax" style="width:257px;" required onkeypress="return numbersonly(event)" /></td>
								</tr>
							</table>
							</td>
						</tr>
						<tr><td colspan="2" height="10"></td></tr>
						<tr>
							<td align="right"><input type="submit" name="Submit" value="Next" title="Click for next step" /></td>
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
