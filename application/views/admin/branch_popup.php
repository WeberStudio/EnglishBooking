<style type="text/css">
	.desc{
		font-family:Arial, Helvetica, sans-serif;
		font-size:12px !important;
		background-color:#ecf8fd;
		color:#256c89 !important;
		width:100%;
	}
</style>
 <div class="right_content">            
        
    <h2>Detail of <?php echo $branch->name;?></h2> 
	<div style="clear:both"></div>

<table cellpadding="0" width="500" align="center" cellspacing="0">
	<tr>
		<td>
		<table class="desc" cellpadding="10" cellspacing="0" border="1">
				<tr>
						<td width="150">Branch Name</td>
						<td><?php echo $branch->name;?></td>
				</tr>
				 <tr>
						<td>Branch city</td>
						<td><?php echo $branch->city;?></td>
				</tr>
				 <tr>
						<td>Post Code</td>
						<td><?php echo $branch->post_code;?></td>
				</tr>
				<tr>
						<td>Address</td>
						<td><?php echo $branch->address;?></td>
				</tr>
				<tr>
						<td>Phone</td>
						<td><?php echo $branch->phone;?></td>
				</tr>
				<tr>
						<td>Fax</td>
						<td><?php echo $branch->fax;?></td>
				</tr>
				<tr>
						<td>Email</td>
						<td><?php echo $branch->email;?></td>
				</tr>
				<tr>
						<td>Year of Establosh</td>
						<td><?php echo $branch->year_of_establish;?></td>
				</tr>
				<tr>
						<td>Traffic Info</td>
						<td><?php echo $branch->traffic_info ;?></td>
				</tr>
				<tr>
						<td>Intertainment Info</td>
						<td><?php echo $branch->intertainment_info;?></td>
				</tr>
				<tr>
						<td>Weather Info</td>
						<td><?php echo $branch->weather_info;?></td>
				</tr>
				<tr>
						<td>Accommodation</td>
						<td><?php echo $branch->accommodation;?></td>
				</tr>
		</table>		
		</td>
	</tr>
	<tr><td height="20"></td></tr>
	<tr>
		<td><a href="<?php echo base_url();?>admin_main/branches_detail/branches_detl/<?php echo $branch->college_id;?>" style="text-decoration:none;">
			<input type="button" value="Back" class="NFButton" /></a>
		</td>
	</tr>
</table>
     </div><!-- end of right content-->
            
                    
  </div>   <!--end of center content -->               
                    
                    
    
    
    <div class="clear"></div>
    </div> <!--end of main content-->