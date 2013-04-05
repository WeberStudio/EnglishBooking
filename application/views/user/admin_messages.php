				<div class="page_detail">
					<div class="headig" style="margin-bottom:20px;">Messages by College</div>
					<!--<div class="line_c"></div>-->
					<div class="clr"></div>
					<form name="customer_info" id="customer_info" method="post" action="<?php echo base_url();?>user/admin_messages/send_message">
					<table cellpadding="0" class="c_form" style="border:1px solid #CCC;" cellspacing="5">
						<tr><td colspan="2" height="10"></td></tr>
						<?php
							foreach($student_chat as $result){
								if($result->admin_name != ""){
									$name = "Admin";
								}else if($result->student_name != ""){
									$name = $result->student_name;
								}else if($result->student_name != "0"){
									$name = "Admin";
								}
						?>
						<tr>
							<td width="500"><h3><?php echo $name;?></h3></td>							
						</tr>
						<tr>
							<td style="text-align:justify;"><?php echo $result->message;?></td>
						</tr>
						<?php } ?>
						<tr>
							<td><b>Message</b></td>
						</tr>
						<input type="hidden" name="Course_id" value="<?php echo $student_data->course_id; ?>" />
						<tr>
							<td><textarea name="message" id="message" required ></textarea></td>
						</tr>
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

