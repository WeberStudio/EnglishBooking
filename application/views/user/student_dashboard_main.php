				<div class="page_detail">
					<div class="headig">Personal Information</div>
					<!--<div class="line_c"></div>-->
					<div class="clr"></div>
					<div class="headig">Welcome "Student"</div>
					<div class="clr"></div>
					<br /><br />
					<div class="clr"></div>
					
					<div class="not_msg_link">
					<table cellpadding="0" class="c_form" cellspacing="5">
						<tr>
							<td width="150">Family Name(s) </td>
							<td><?php echo $student_info->family_name;?></td>
						</tr>
						<tr>
							<td>Fore name </td>
							<td><?php echo $student_info->four_name;?></td>
						</tr>
						<tr>
						<tr>
							<td colspan="2">
							<table cellpadding="0" cellspacing="0">
								<tr>
									<td>Date of Birth (Day /Month/Year) </td>
									<td><?php echo $student_info->date_of_birth;?></td>
								</tr>
							</table>
							</td> </tr>
                                                <tr>
                                                    <td>Gender </td>
									<td>Male</td>
									<td><input type="radio" name="gender" value="male" <?php if($student_info->gender == "male") echo "checked";?>   disabled="disabled"/></td>
									<td>Female</td>
									<td><input type="radio" name="gender" value="female" <?php if($student_info->gender == "female") echo "checked";?> disabled="disabled" /></td>
                                                </tr>
						<tr>
							<td>Nationality </td>
							<td><?php echo $student_info->nationality;?></td>
						</tr>
						<tr>
							<td>Address (post)</td>
							<td><?php echo $student_info->address;?></td>
						</tr>
						<tr>
							<td>e-mail address</td>
							<td><?php echo $student_info->email;?></td>
						</tr>
						<tr>
							<td colspan="2">
							<table cellpadding="0" cellspacing="0">
								<tr>
									<td>Telephone no. <small>(inc. national and regional prefix)</small> </td>
									<td width="10"></td>
									<td><?php echo $student_info->telephone;?></td>
								</tr>
							</table>
							</td>
						</tr>
						<tr>
							<td colspan="2">
							<table cellpadding="0" cellspacing="0">
								<tr>
									<td>Fax no. <small>(inc. national and regional prefix)</small> </td>
									<td width="10"></td>
									<td><?php echo $student_info->fax;?></td>
								</tr>
							</table>
							</td>
						</tr>
					</table>
					
						
					</div>
					<div class="nf_box">
						<h3>Total Notifications</h3>
						<h1><a href="<?php echo base_url();?>user/student_dashboard/view_all_notifaction" ><?php echo $total;?></a></h1>
					</div>

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