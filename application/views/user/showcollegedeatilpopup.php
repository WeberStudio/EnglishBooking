<link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url();?>theme/admin-css/niceforms-default.css" />
<link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url();?>theme/admin-css/jquery-ui-git.css" />
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
<table cellpadding="0" width="500" align="center" cellspacing="2">
	<tr>
		<td>
		<table id="rounded-corner" class="desc" border="1" cellpadding="10" cellspacing="0">
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
		<table id="rounded-corner" class="desc" border="1" cellpadding="10" cellspacing="0">
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
		<table id="rounded-corner" class="desc" border="1" cellpadding="10" cellspacing="0">
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
						<td>Year of establishment </td>
						<td><?php echo $result_all->year_of_establish ;?></td>
				</tr>    
				<tr>
						<td>No.of Branches</td>
						<td><?php echo $result_all->no_branches;?></td>
				</tr>    
		</table>
		</td>
	</tr>
</table>
