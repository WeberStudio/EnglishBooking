				<div class="page_detail">
					<div class="headig"><h1>Personal Information</h1></div>
					<!--<div class="line_c"></div>-->
					<div class="clr"></div>
					<form name="customer_info" id="customer_info" method="post" action="<?php echo base_url();?>user/student_dashboard/edit_student_info">
					<table cellpadding="0" class="c_form" cellspacing="5">
						<tr>
							<td colspan="2" align="center" style="color:#F00;">
							<?php echo $this->session->flashdata('msg');?>		
							</td>
						</tr>
						<tr>
							<td width="150">Family Name(s)<span style="color:#F00;">*</span></td>
							<td><input type="text" name="family_name" id="family_name" value="<?php echo $student_info->family_name;?>" required /></td>
						</tr>
						<tr>
							<td>Forename <span style="color:#F00;">*</span></td>
							<td><input type="text" name="four_name" id="four_name" value="<?php echo $student_info->four_name;?>" required /></td>
						</tr>
						<tr>
						<tr>
							<td colspan="2">
							<table cellpadding="0" cellspacing="0">
								<tr>
									<td>Date of Birth (Day /Month/Year)<span style="color:#F00;">*</span></td>
									<td width="10"></td>
									<td><input type="text"  name="date_of_birth" id="data_of_birth" width="100" style="width:200px;" value="<?php echo $student_info->date_of_birth;?>" required /></td>
									<td width="10"></td>
									<td>Gender<span style="color:#F00;">*</span></td>
									<td width="10"></td>
									<td>Male</td>
									<td><input type="radio" name="gender" value="male" <?php if($student_info->gender == "male") echo "checked";?> required /></td>
									<td width="20"></td>
									<td>Female</td>
									<td><input type="radio" name="gender" value="female" <?php if($student_info->gender == "female") echo "checked";?> required /></td>
								</tr>
							</table>
							</td>
						<tr>
							<td>Nationality<span style="color:#F00;">*</span></td>
							<td><input type="text" name="nationality" id="nationality" value="<?php echo $student_info->nationality;?>" required /></td>
						</tr>
						<tr>
							<td>Address (post)</td>
							<td><input type="text" name="address" id="address" value="<?php echo $student_info->address;?>" /></td>
						</tr>
						<tr>
							<td>e-mail address</td>
							<td><input type="email" name="email" id="email" value="<?php echo $student_info->email;?>" /></td>
						</tr>
						<tr>
							<td colspan="2">
							<table cellpadding="0" cellspacing="0">
								<tr>
									<td>Telephone no. <small>(inc. national and regional prefix)</small><span style="color:#F00;">*</span></td>
									<td width="10"></td>
									<td><input type="text" name="telephone" style="width:366px;" id="telephone" value="<?php echo $student_info->telephone;?>" required /></td>
								</tr>
							</table>
							</td>
						</tr>
						<tr>
							<td colspan="2">
							<table cellpadding="0" cellspacing="0">
								<tr>
									<td>Fax no. <small>(inc. national and regional prefix)</small><span style="color:#F00;">*</span></td>
									<td width="10"></td>
									<td><input type="text" name="fax" style="width:410px;" id="fax" value="<?php echo $student_info->fax;?>" required /></td>
								</tr>
							</table>
							</td>
						</tr>
						<tr>
							<td>Refid<span style="color:#F00;">*</span></td>
							<td><input type="text" name="ref_id"  id="ref_id" value="<?php echo $student_info->ref_id;?>" required /></td>
						</tr>
						<tr><td colspan="2" height="10"></td></tr>
						<tr>
							<td colspan="2" align="right"><input type="submit" name="Submit"  value="Submit" /></td>
						</tr>
					</table>
					</form>
				</div>
			</div>
			<div class="spn">
				<strong>Special Notes:</strong>
				<p>
					Please fill all the fields and carry on to the next step.
				</p>
			</div>
		</div>
	</div>