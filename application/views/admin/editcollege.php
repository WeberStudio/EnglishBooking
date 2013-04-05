 <div class="right_content">            
    <h2>Edit College <?php echo $colleges->collegename;?></h2> 
         <div class="form">
		 <table cellpadding="0" cellspacing="0">
		 	<tr>
				<td>
				 <form action="<?php echo base_url();?>admin_main/colleges/Edit_College" method="post" class="niceform" name="addpages" id="addpages">         
						<fieldset>
						<table cellpadding="0" border="0" cellspacing="5">
							<tr>
								<td colspan="2" align="center">
									<?php
										echo $this->session->flashdata('msg');
									?>						
								</td>
							</tr>
							<tr>
							<input type="hidden" name="college_id" value="<?php echo $colleges->id;?>" />
								<td width="120"><label for="College Name">College Name:</label></td>
								<td><input type="text" name="cname" id="cname" size="54" value="<?php echo $colleges->collegename;?>"  required  /></td>
							</tr>
							<tr>
								<td><label for="Email Address">Email Address:</label></td>
								<td><input type="email" name="uname" id="uname" size="54" value="<?php echo $colleges->useremail;?>" required  /></td>
							</tr>
							<tr>
								<td><label for=" Password">Password:</label></td>
								<td><input type="text" name="password" id="password" size="54" value="<?php echo $colleges->password;?>" required /></td>
							</tr>
							<tr>
								<td><label for=" Password">Status:</label></td>
								<td><input type="checkbox" name="status" id="status" <?php if($colleges->status == 1) echo "checked";?> /></td>
							</tr>
							<tr>
								<td colspan="2" align="center"> <input type="submit" name="submit" id="submit" value="Update" /></td>
							</tr>
						</table>
						</fieldset>
					</form>
				</td>
			</tr>
			
			<tr>
				<td height="50"><h2>Personal Details</h2></td>
			</tr>
			
			<tr>
				<td>
		 		<form name="customer_info" class="niceform" id="customer_info" method="post" action="<?php echo base_url();?>admin_main/colleges/edit_custinfo">
					<table cellpadding="0" cellspacing="5">
						<tr>
							<td colspan="2" align="center" style="color:#F00;">
							<?php echo $this->session->flashdata('msg2');?>		
							</td>
						</tr>
						<tr>
							<td width="150">Name<span style="color:#F00;">*</span></td>
							<input type="hidden" name="c_id" value="<?php  echo $cust_info->cid;?>" />
							<input type="hidden" name="id" value="<?php  echo $cust_info->id;?>" />
							<td><input type="text" name="name" id="name" size="54" required value="<?php  echo $cust_info->name;?>" /></td>
						</tr>
						<tr>
							<td>Email<span style="color:#F00;">*</span></td>
							<td><input type="email" name="email" id="email" size="54" required value="<?php  echo $cust_info->email;?>" /></td>
						</tr>
						<tr>
							<td>Phone<span style="color:#F00;">*</span></td>
							<td><input type="text"  name="phone" id="phone" size="54" required value="<?php  echo $cust_info->phone;?>" /></td>
						</tr>
						<tr>
							<td>Mobile<span style="color:#F00;">*</span></td>
							<td><input type="text" name="mobile" id="mobile" size="54" required value="<?php  echo $cust_info->mobile;?>" /></td>
						</tr>
						<tr>
							<td>Fax</td>
							<td><input type="text" name="fax" id="fax" size="54" value="<?php  echo $cust_info->fax;?>" /></td>
						</tr>
						<tr>
							<td>Skype</td>
							<td><input type="text" name="skype" id="skype" size="54" value="<?php  echo $cust_info->skype;?>" /></td>
						</tr>
						<tr>
							<td>County<span style="color:#F00;">*</span></td>
							<td><input type="text" name="county"  id="county" size="54" required value="<?php  echo $cust_info->county;?>" /></td>
						</tr>
						<tr>
							<td>City<span style="color:#F00;">*</span></td>
							<td><input type="text" name="city" id="city" required size="54" value="<?php  echo $cust_info->city;?>" /></td>
						</tr>
						<tr>
							<td>Gender<span style="color:#F00;">*</span></td>
							<td><input type="text" name="gender" id="gender" required size="54" value="<?php  echo $cust_info->gender;?>" /></td>
						</tr>
						<tr><td colspan="2" height="10"></td></tr>
						<tr>
							<td colspan="2" align="center"><input type="submit" name="Submit" value="Update" /></td>
						</tr>
					</table>
					</form>
				</td>
			</tr>
			<tr>
				<td height="50"><h2>College Details</h2></td>
			</tr>
			
			<tr>
				<td>
					<form name="college_detail" id="college_detail"  class="niceform" method="post" action="<?php echo base_url();?>admin_main/colleges/edit_collegedetail" enctype="multipart/form-data">
					<table cellpadding="0" border="0" cellspacing="5">
						<tr>
							<td colspan="2" style="color:#F00;" align="center">
								<?php echo $this->session->flashdata('msg3') ?>
							</td>
						</tr>
						<tr>
							<input type="hidden" name="id" id="id" size="54" value="<?php echo $college->id; ?>" required />
							<input type="hidden" name="cid" id="cid" size="54" value="<?php echo $college->cid; ?>" required />
							<td width="150">Name</td>
							<td><input type="text" name="name" id="name" size="54" value="<?php echo $college->name; ?>" required /></td>
						</tr>
						<tr>
							<td>City</td>
							<td><input type="text" name="city" id="city" size="54" value="<?php echo $college->city; ?>" required /></td>
						</tr>
						<tr>
							<td>Postal Code</td>
							<td><input type="text" name="post_code" id="post_code" size="54" value="<?php echo $college->post_code; ?>" required /></td>
						</tr>
						<tr>
							<td>Address</td>
							<td><input type="text" name="address" id="address" size="54" value="<?php echo $college->address; ?>" required /></td>
						</tr>
						<tr>
							<td>Phone</td>
							<td><input type="text" name="phone" id="phone" size="54" value="<?php echo $college->phone; ?>" required /></td>
						</tr>
						<tr>
							<td>Fax</td>
							<td><input type="text" name="fax" id="fax" size="54" value="<?php echo $college->fax; ?>" required /></td>
						</tr>
						<tr>
							<td>Email</td>
							<td><input type="email" name="email" id="email" size="54" value="<?php echo $college->email; ?>" required /></td>
						</tr>
						<tr>
							<td>Year of Establosh</td>
							<td><input type="text" name="year_of_establish" size="54" value="<?php echo $college->year_of_establish; ?>" id="year_of_establish" required /></td>
						</tr>
						<tr>
							<td>No.of Branches</td>
							<td><input type="text" name="no_branches" id="no_branches" size="54" value="<?php echo $college->no_branches; ?>" required /></td>
						</tr>
						<tr height="40">
							<td colspan="2">HTS : Heighly Trusted Status</td>
						</tr>
						<tr>
							<td colspan="2">
								<table cellpadding="0" border="0" cellspacing="0">
									<tr valign="top">
										<td width="30"><input type="radio" name="hts" value="ht" <?php if($college->hts == "ht") echo "checked";?> /></td>
										<td width="150">Heighly Trusted</td>
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
							<td><input type="file" name="file" /></td>
						</tr>
						<tr>
							<td>Description</td>
							<td><textarea name="description" id="description"><?php  echo $college->description;?></textarea></td>
						</tr>
						<tr><td colspan="2" height="10"></td></tr>
						<tr>
							<td colspan="2" align="center"><input type="submit" name="Submit" value="Update" /></td>
						</tr>
					</table>
					</form>
				</td>
			</tr>
		 </table>

         </div>  
     </div><!-- end of right content-->                    
  </div>   <!--end of center content -->               
  <div class="clear"></div>
</div> <!--end of main content-->