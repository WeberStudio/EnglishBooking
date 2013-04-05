<style type="text/css">
	.desc{
		font-family:Arial, Helvetica, sans-serif;
		font-size:12px !important;
		background-color:#ecf8fd;
		color:#256c89 !important;
		width:100%;
	}
		h2{
		font-family:Arial, Helvetica, sans-serif;
		font-size:18px;
		color:#256c89;
	}
</style>
 <div class="right_content">            
        
    <h2>Detail of <?php echo $result->collegename;?>
	</h2> 
	<div style="clear:both"></div>
	<h4 style="color:#F00; text-align:center"><?php echo $this->session->flashdata('msg')?></h4>
	<h4 id="success_msg" style="text-align:center; color:#F00;"></h4>
		<table cellpadding="0" width="500" align="center" cellspacing="2">
			<tr>
				<td>
				<table id="rounded-corner" class="desc" border="0" cellpadding="10" cellspacing="0">
						<tr>
								<td width="150">College Name</td>
								<td><?php echo $result->collegename;?></td>
							
						</tr>
						 <tr>
								<td>College random ID</td>
								<td><?php echo $result->rand_id;?></td>
							
						</tr>
						 <tr>
								<td>College Email</td>
								<td><?php echo $result->useremail;?></td>
							
						</tr>
						   <tr>
								<td>College Password</td>
								<td><?php echo $result->password;?></td>
							
						</tr>    
				</table>		
				</td>
			</tr>
			<tr>
				<td><h2>Personal Details</h2></td>
			</tr>
			<tr>
				<td>
				<table id="rounded-corner" class="desc" border="0" cellpadding="10" cellspacing="0">
						<tr>
								<td width="150">Name</td>
								<td><?php  echo $cust_info->name;?></td>
						</tr>
						 <tr>
								<td>Email</td>
								<td><?php echo $cust_info->email;?></td>
						</tr>
						<tr>
								<td>Phone</td>
								<td><?php  echo $cust_info->phone;?></td>
						</tr>
						<tr>
								<td>Mobile</td>
								<td><?php  echo $cust_info->mobile;?></td>
						</tr>    
						<tr>
								<td>Fax</td>
								<td><?php  echo $cust_info->fax;?></td>
						</tr>    
						<tr>
								<td>Skype</td>
								<td><?php  echo $cust_info->skype;?></td>
						</tr>    
						<tr>
								<td>County</td>
								<td><?php  echo $cust_info->county;?></td>
						</tr>    
						<tr>
								<td>City</td>
								<td><?php  echo $cust_info->city;?></td>
						</tr>    
						<tr>
								<td>Gender</td>
								<td><?php  echo $cust_info->gender;?></td>
						</tr>    
				</table>		
				</td>
			</tr>
			<tr>
				<td><h2>College Details</h2></td>
			</tr>
			<tr>
				<td>
				<table id="rounded-corner" class="desc" border="0" cellpadding="10" cellspacing="0">
						<tr>
								<td width="150">Name</td>
								<td><?php echo $result_all->name;?></td>
						</tr>    
						<tr>
								<td>City</td>
								<td><?php echo $result_all->city;?></td>
						</tr>    
						<tr>
								<td>Postal Code</td>
								<td><?php echo $result_all->post_code;?></td>
						</tr>    
						<tr>
								<td>Address</td>
								<td><?php echo $result_all->address;?></td>
						</tr>    
						<tr>
								<td>Phone</td>
								<td><?php echo $result_all->phone;?></td>
						</tr>    
						<tr>
								<td>Fax</td>
								<td><?php echo $result_all->fax;?></td>
						</tr>    
						<tr>
								<td>Email</td>
								<td><?php echo $result_all->email;?></td>
						</tr>    
						<tr>
								<td>Year of Establosh</td>
								<td><?php echo $result_all->year_of_establish ;?></td>
						</tr>    
						<tr>
								<td>No.of Branches</td>
								<td><?php echo $result_all->no_branches;?></td>
						</tr>    
				</table>
				</td>
			</tr>
			<tr><td height="20" colspan="5"></td></tr>
			<tr>
				<td colspan="5" align="center"><a href="<?php echo base_url();?>admin_main/colleges/getList" style="text-decoration:none;"><input  class="NFButton" type="button" value="Back" /></a></td>
			</tr>
		</table>
     </div><!-- end of right content-->                    
  </div>   <!--end of center content -->               
  <div class="clear"></div>
</div> <!--end of main content-->