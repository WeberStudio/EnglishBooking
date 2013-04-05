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
        
    <h2>Detail of <?php echo $course->courcename;?>
	</h2> 
	<div style="clear:both"></div>
	<h4 style="color:#F00; text-align:center"><?php echo $this->session->flashdata('msg')?></h4>
	<h4 id="success_msg" style="text-align:center; color:#F00;"></h4>

		<table cellpadding="0" width="500" align="center" cellspacing="0">
			<tr>
				<td>
				<table class="desc" cellpadding="10" cellspacing="0" border="0">
						<tr>
								<td width="150">Course Name</td>
								<td><?php echo $course->courcename;?></td>
						</tr>
						 <tr>
								<td>Address </td>
								<td><?php echo $course->address;?></td>
						</tr>
						 <tr>
								<td>Offer Price</td>
								<td><?php echo $course->offerprice;?></td>
						</tr>
						<tr>
								<td>Agent Commession(%)</td>
								<td><?php echo $course->agentcommesion;?></td>
						</tr>
						<tr>
								<td>English Offer Price</td>
								<td><?php echo $course->english_offer_price;?></td>
						</tr>
						<tr>
								<td>Duration/ No. of weeks</td>
								<td><?php echo $course->duration;?></td>
						</tr>
						<tr>
								<td>Start Date</td>
								<td><?php echo $course->startdate;?></td>
						</tr>
						<tr>
								<td>End Date</td>
								<td><?php echo $course->enddate;?></td>
						</tr>
						<tr>
								<td>Session / Season</td>
								<td><?php echo $course->session ;?></td>
						</tr>
				</table>		
				</td>
			</tr>
			<tr><td height="20"></td></tr>
			<tr>
				<td align="center"><a href="<?php echo base_url();?>admin_main/courses_detail/getCourseList/<?php echo $course->branch_id;?>" style="text-decoration:none;">
					<input type="button" value="Back" class="NFButton" /></a>
				</td>
			</tr>
		</table>
		
     </div><!-- end of right content-->                    
  </div>   <!--end of center content -->               
  <div class="clear"></div>
</div> <!--end of main content-->




