				
				
				<div class="page_detail">
					<div class="headig"><h1>Messages</h1></div>
					<!--<div class="line_c"></div>-->
					<div class="clr"></div>
					<form name="customer_info" id="customer_info" method="post" action="<?php echo base_url();?>user/customer_student_messages/send_message">
					<table cellpadding="0" class="c_form" style="border:1px solid #CCC;" cellspacing="5">
						<tr><td colspan="2" height="10"></td></tr>
						<?php
							foreach($student_chat as $result){
								$Student_id = $result->student_id;
								$Course_id = $result->course_id;
								if($result->admin_name != ""){
									$name = "Admin";
								}else if($result->student_name != ""){
									$name = $result->student_name;
								}else if($result->student_name != "0"){
									$name = "My Messages";
								}

						?>
						<tr>
							<input type="hidden" name="student_id" value="<?php echo $Student_id;?>" />
							<input type="hidden" name="course_id" value="<?php echo $course_id;?>" />
							<td width="500"><h3><?php echo $name;?></h3></td>							
						</tr>
						<tr>
							<td style="text-align:justify;"><?php echo $result->message;?></td>
						</tr>
						<?php } ?>
						<tr>
							<td><b>Message</b></td>
						</tr>
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

