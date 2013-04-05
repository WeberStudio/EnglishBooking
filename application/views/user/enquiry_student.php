				<div class="page_detail">
					<div class="headig">What’s your query?</div>
					<!--<div class="line_c"></div>-->
					<div class="clr"></div>
					<form name="customer_info" id="customer_info" method="post" action="<?php echo base_url();?>user/student_dashboard/add_studentinfo">
					<table cellpadding="0" class="c_form" cellspacing="5">
						<tr><td colspan="2" height="10"></td></tr>
						<tr>
							<td width="150">Name</td>
						</tr>
						 <tr>
							<td><input type="text" name="name" id="name" required /></td>
						</tr>
						 <tr>
							<td>Email </td>
						</tr>
						 <tr>
							<td><input type="email" name="email" id="email" required /></td>
						</tr>
						<tr>
							<td>Message</td>
						</tr>
						 <tr>
							<td><textarea name="message" id="message" style="height:200px" required ></textarea></td>
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

