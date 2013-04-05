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
					<form name="college_detail" id="college_detail" method="post" action="<?php echo base_url();?>user/college_details/add_newcollege" enctype="multipart/form-data">
					<table cellpadding="0" class="c_form" cellspacing="5">
						<tr>
							<td colspan="2" style="color:#F00;">
								<?php echo $this->session->flashdata('msg') ?>
							</td>
						</tr>
						<tr>
							<td width="150">Name</td>
						</tr>
						<tr>
							<td><input type="text" name="name" id="name" required /></td>
						</tr>
						<tr>
							<td>City</td>
						</tr>
						<tr>
							<td><input type="text" name="city" id="city" required /></td>
						</tr>
						<tr>
							<td>Postal Code</td>
						</tr>
						<tr>
							<td><input type="text" name="post_code" id="post_code" required /></td>
						</tr>
						<tr>
							<td>Address</td>
						</tr>
						<tr>
							<td><input type="text" name="address" id="address" required /></td>
						</tr>
						<tr>
							<td colspan="2">
							<table cellpadding="0" cellspacing="0">
								<tr>
									<td>House Name </td>
									<td width="20"></td>
									<td>House No</td>
								</tr>
								<tr>
									<td><input type="text" name="house_name" style="width:245px" /></td>
									<td width="20"></td>
									<td><input type="text" name="house_no" style="width:245px" /></td>
								</tr>
								<tr>
									<td>Street</td> 
									<td width="20"></td>
									<td>Town</td>
								</tr>
								<tr>
									<td><input type="text" name="street" style="width:245px" /></td>
									<td width="20"></td>
									<td><input type="text" name="town" style="width:245px" /></td>
								</tr>
								<tr>
									<td>City</td>
									<td width="20"></td>
									<td>State / County</td>
								</tr>
								<tr>
									<td><input type="text" name="city" style="width:245px" /></td>
									<td></td>
									<td><input type="text" name="state" style="width:245px" /></td>
								</tr>
								<tr>
									<td>Country</td>
								</tr>
								<tr>
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
									<td colspan="4"><input type="text" name="post_code" /></td>
								</tr>
							</table>
							</td>
						</tr>
						<tr>
							<td>Phone</td>
						</tr>
						<tr>
							<td><input type="text" name="phone" id="phone" required /></td>
						</tr>
						<tr>
							<td>Fax</td>
						</tr>
						<tr>
							<td><input type="text" name="fax" id="fax" required /></td>
						</tr>
						<tr>
							<td>Email</td>
						</tr>
						<tr>
							<td><input type="email" name="email" id="email" required /></td>
						</tr>
						<tr>
							<td>Year of establishment </td>
						</tr>
						<tr>
							<td><input type="text" name="year_of_establish" id="year_of_establish" required /></td>
						</tr>
						<tr>
							<td>No.of Branches</td>
						</tr>
						<tr>
							<td><input type="text" name="no_branches" id="no_branches" required /></td>
						</tr>
						<tr height="40">
							<td colspan="2">HTS : Highly Trusted Status</td>
						</tr>
						<tr>
							<td colspan="2">
								<table cellpadding="0" cellspacing="0">
									<tr>
										<td width="30"><input type="radio" name="hts" value="ht" /></td>
										<td width="150">Highly Trusted</td>
										<td width="30"><input type="radio" name="hts" value="trusted" /></td>
										<td width="100">Trusted</td>
										<td width="30"><input type="radio" name="hts" value="normal" /></td>
										<td width="100">Normal</td>
										<td width="30"><input type="radio" name="hts" value="na" /></td>
										<td width="50">N / A</td>
									</tr>
								</table>
							</td>
						</tr>
						<tr>
							<td>Image</td>
						</tr>
						<tr>
							<td><input type="file" name="files" required /></td>
						</tr>
						<tr>
							<td>Description</td>
						</tr>
						<tr>
							<td><textarea name="description" id="description"></textarea></td>
						</tr>
						<tr><td colspan="2" height="10"></td></tr>
						<tr>
							<td colspan="2" align="right"><input type="submit" name="Submit" value="Submit" /></td>
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
