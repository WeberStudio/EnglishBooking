				<div class="page_detail">
					<div class="headig">College Details</div>
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
					<form name="college_detail" id="college_detail" method="post" action="<?php echo base_url();?>user/college_details/edit_collegedetail" enctype="multipart/form-data">
					<table cellpadding="0" class="c_form" cellspacing="5">
						<tr>
							<td colspan="2" style="color:#F00;" align="center">
								<?php echo $this->session->flashdata('msg') ?>
							</td>
						</tr>
						<tr>
							<td width="150">Name</td>
						</tr>
						<tr>
							<td><input type="text" name="name" id="name" value="<?php echo $college->name; ?>" required /></td>
						</tr>
<!--						<tr>
							<td colspan="">Address</td>
						</tr>
						<tr>
							<td><input type="text" name="address" id="address" value="<?php echo $college->address; ?>" required /></td>
						</tr>
-->						<tr>
							<td colspan="2">
							<table cellpadding="0" cellspacing="0">
								<tr>
									<td>House No</td>
									<td width="20"></td>
									<td>House Name </td>
								</tr>
								<tr>
									<td><input type="text" name="house_no" id="house_no"  value="<?php echo $college->house_no; ?>" style="width:245px" /></td>
									<td width="20"></td>
									<td><input type="text" name="house_name" id="house_name"  value="<?php echo $college->house_name; ?>" style="width:245px" /></td>
								</tr>
								<tr>
									<td>Street</td> 
									<td width="20"></td>
									<td>Town</td>
								</tr>
								<tr>
									<td><input type="text" name="street" id="street"  value="<?php echo $college->street; ?>" style="width:245px" /></td>
									<td width="20"></td>
									<td><input type="text" name="town" id="town"  value="<?php echo $college->town; ?>" style="width:245px" /></td>
								</tr>
								<tr>
									<td>City</td>
									<td width="20"></td>
									<td>State / County</td>
								</tr>
								<tr>
									<td><input type="text" name="city" id="city" value="<?php echo $college->city; ?>" style="width:245px" required /></td>
									<td></td>
									<td><input type="text" name="state" id="state"  value="<?php echo $college->state; ?>" style="width:245px" /></td>
								</tr>
								<tr>
									<td colspan="3">Country</td>
								</tr>
								<tr>
									<td colspan="3">
										<select name="country" id="country" style="width:530px">
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
									<td colspan="4"><input type="text" name="post_code" id="inputPostcode" value="<?php echo $college->post_code; ?>" required /></td>
								</tr>
							</table>
							</td>
						</tr>
						<tr>
							<td>Phone</td>
						</tr>
						<tr>
							<td><input type="text" name="phone" id="phone" value="<?php echo $college->phone; ?>" required /></td>
						</tr>
						<tr>
							<td>Fax</td>
						</tr>
						<tr>
							<td><input type="text" name="fax" id="fax" value="<?php echo $college->fax; ?>" required /></td>
						</tr>
						<tr>
							<td>Email</td>
						</tr>
						<tr>
							<td><input type="email" name="email" id="email" value="<?php echo $college->email; ?>" required /></td>
						</tr>
						<tr>
							<td>Year of establishment </td>
						</tr>
						<tr>
							<td><input type="text" name="year_of_establish" value="<?php echo $college->year_of_establish; ?>" id="year_of_establish" required /></td>
						</tr>
						<tr>
							<td>No.of Branches</td>
						</tr>
						<tr>
							<td><input type="text" name="no_branches" id="no_branches" value="<?php echo $college->no_branches; ?>" required /></td>
						</tr>
						<tr height="40">
							<td colspan="2">HTS : Highly Trusted Status</td>
						</tr>
						<tr>
							<td colspan="2">
								<table cellpadding="0" cellspacing="0">
									<tr>
										<td width="30"><input type="radio" name="hts" value="ht" <?php if($college->hts == "ht") echo "checked";?> /></td>
										<td width="150">Highly Trusted</td>
										<td width="30"><input type="radio" name="hts" value="trusted" <?php if($college->hts == "trusted") echo "checked";?> /></td>
										<td width="100">Trusted</td>
										<td width="30"><input type="radio" name="hts" value="normal" <?php if($college->hts == "normal") echo "checked";?> /></td>
										<td width="100">Normal</td>
										<td width="30"><input type="radio" name="hts" value="na" <?php if($college->hts == "na") echo "checked";?> /></td>
										<td width="50">N / A</td>
									</tr>
								</table>
							</td>
						</tr>
						<tr>
							<td>Image</td>
						</tr>
						<tr>
							<td><input type="file" name="files" /></td>
						</tr>
						<tr>
							<td>Description</td>
						</tr>
						<tr>
							<td><textarea name="description" id="description"><?php echo $college->description; ?></textarea></td>
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
