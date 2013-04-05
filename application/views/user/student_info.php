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
						<td width="150">Student Family Name</td>
						<td><?php echo $result->family_name;?></td>
					
				</tr>
				 <tr>
						<td>Student Name</td>
						<td><?php echo $result->four_name;?></td>
					
				</tr>
				 <tr>
						<td>Date of Birth</td>
						<td><?php echo $result->date_of_birth;?></td>
					
				</tr>
				   <tr>
						<td>Email</td>
						<td><?php echo $result->email;?></td>
					
				</tr>    
				<tr>
						<td width="150">Gander</td>
						<td><?php  echo $cust_info->gender;?></td>
				</tr>
				 <tr>
						<td>Nationality</td>
						<td><?php echo $cust_info->nationality;?></td>
				</tr>
				<tr>
						<td>Address </td>
						<td><?php  echo $cust_info->address ;?></td>
				</tr>
				<tr>
						<td>Phone</td>
						<td><?php  echo $cust_info->telephone;?></td>
				</tr>    
				<tr>
						<td>Fax</td>
						<td><?php  echo $cust_info->fax;?></td>
				</tr>    
				<tr>
						<td>Ref id</td>
						<td><?php  echo $cust_info->ref_id;?></td>
				</tr>    
		</table>		
		</td>
	</tr>
</table>
