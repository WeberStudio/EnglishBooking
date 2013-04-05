				<script language="javascript">
					jQuery(document).ready(function() {
						$("#tog").hide();
						$('#clickme').click(function () {
							$('#tog').slideToggle("slow");
						});
					});
				</script>
				<div class="page_detail">
					<div class="headig">Registered courses</div>
					<!--<div class="line_c"></div>-->
					<div class="clr"></div>
					<form name="customer_info" id="customer_info" method="post" action="<?php echo base_url();?>user/student_dashboard/add_studentinfo">
					<table cellpadding="0" class="c_form" cellspacing="5">
						<tr>
							<td>
							<table cellpadding="0" style="border:1px solid #eaeaea;" width="695" cellspacing="0">
								<tr style="font-weight:bold;">
									<td></td>
									<td>Course Name</td>
									<td>Status</td>
									<td></td>
									<td>View Course Details</td>
								</tr>
								<?php
									$index = 0; 
									foreach($course_list as $result){ 
									$index++;
									if($index % 2 == 0){
										$class = "cc2";
									}else{
										$class = "cc1";
									}
									$process = $result->process;	
									if($process == 1){
										$process = "In Process";
									}else if($process == 2){
										$process = "Canceled";
									}else if($process == 3){
										$process = "Completed";
									}
								?>
								<tr class="<?php echo "cc1";?>">
									<td width="20" align="center"><?php echo $index;?></td>
									<td width="330">
										<?php echo $result->name;?>
									</td>
									<td width="200">Status <?php echo $process;?></td>
									<td></td>
									<td><a href="#" id="clickme">View details</a></td>
									<?php /*?><td><a href="<?php echo base_url();?>user/branch_info/branch_information/<?php echo $result->course_id;?>">View details</a></td><?php */?>
								</tr>
								<tr>
									<td colspan="6">
									<div style="display:" id="tog">
									<table cellpadding="10" width="680" style="text-align:left;" cellspacing="0">
										<tr>
											<td width="60%">Course Name</td>
											<td width="50"></td>
											<td><?php echo $result->courcename;?></td>
										</tr>
										<tr>
											<td width="60%">College Name</td>
											<td width="50"></td>
											<td><?php echo $result->college_name;?></td>
										</tr>
										<tr>
											<td width="60%">Actual price</td>
											<td width="50"></td>
											<td><?php echo $result->offerprice;?> USD</td>
										</tr>
										<tr>
											<td width="60%">Price we offer</td>
											<td width="50"></td>
											<td><?php echo $result->english_offer_price;?> USD</td>
										</tr>
										<tr>
											<td width="60%">Start Date</td>
											<td width="50"></td>
											<td><?php echo $result->startdate;?></td>
										</tr>
										<tr>
											<td width="60%">End Date</td>
											<td width="50"></td>
											<td><?php echo $result->enddate;?></td>
										</tr>
										<tr>
											<td width="60%">No of Weeks</td>
											<td width="50"></td>
											<td><?php echo $result->duration;?></td>
										</tr>
										<tr>
											<td width="60%">Session</td>
											<td width="50"></td>
											<td><?php echo $result->session;?></td>
										</tr>
									</table>
									</div>
									</td>
								</tr>
							<?php } ?>
							</table>
							</td>
						</tr>

						<tr>
							<td>
							</td>
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