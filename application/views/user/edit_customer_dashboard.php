				<div class="page_detail">
					<div class="headig">Customer Details</div>
					<div class="line_c"></div>
					<!--<div class="c_data">
						<div class="c_address">
							<strong>Address:</strong>
						</div>
						<div class="line_c"></div>
						<div class="c_email">
							<strong>Email:</strong>
						</div>
						<div class="line_c"></div>
					</div>-->
					<div class="clr"></div>
					<form name="customer_info" id="customer_info" method="post" action="<?php echo base_url();?>user/customer_dashboard/edit_custinfo">
					<table cellpadding="0" class="c_form" cellspacing="5">
						<tr>
							<td colspan="2" align="center" style="color:#F00;">
							<?php echo $this->session->flashdata('msg');?>		
							</td>
						</tr>
						<tr>
							<td width="150">Name </td>
						</tr>
						<tr>
							<td><input type="text" name="name" id="name" required value="<?php  echo $cust_info->name;?>" /></td>
						</tr>
						<tr>
							<td>Email </td>
						</tr>
						<tr>
							<td><input type="email" name="email" id="email" required value="<?php  echo $cust_info->email;?>" /></td>
						</tr>
						<tr>
							<td>Phone </td>
						</tr>
						<tr>
							<td><input type="text"  name="phone" id="phone" required value="<?php  echo $cust_info->phone;?>" /></td>
						</tr>
						<tr>
							<td>Mobile </td>
						</tr>
						<tr>
							<td><input type="text" name="mobile" id="mobile" required value="<?php  echo $cust_info->mobile;?>" /></td>
						</tr>
						<tr>
							<td>Fax</td>
						</tr>
						<tr>
							<td><input type="text" name="fax" id="fax" value="<?php  echo $cust_info->fax;?>" /></td>
						</tr>
						<tr>
							<td>Skype</td>
						</tr>
						<tr>
							<td><input type="text" name="skype" id="skype" value="<?php  echo $cust_info->skype;?>" /></td>
						</tr>
						<tr>
							<td>City </td>
						</tr>
						<tr>
							<td><input type="text" name="city" id="city" required value="<?php  echo $cust_info->city;?>" /></td>
						</tr>
						<tr>
							<td>Country</td>
						</tr>
						<tr>
							<td>
								<select name="county" id="county">
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
							<td>Gender </td>
						</tr>
						<tr>
							<td><input type="text" name="gender" id="gender" required value="<?php  echo $cust_info->gender;?>" /></td>
						</tr>
						<tr><td colspan="2" height="10"></td></tr>
						<tr>
							<td colspan="2" align="right"><input type="submit" name="Submit" value="Update" /></td>
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