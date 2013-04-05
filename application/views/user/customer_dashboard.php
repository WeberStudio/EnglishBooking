				<div class="page_detail">
					<div class="headig">Customer Details</div>
					<div class="line_c"></div>
					<!--<div class="c_data">
						<div class="c_address">
							<strong>Address:</strong>
						</div>
						<div class="line_c"></div>
						<div class="c_email">
							<strong>Email:</strong>
						</div>
						<div class="line_c"></div>
					</div>-->
					<div class="clr"></div>
					<form name="customer_info" id="customer_info" method="post" action="<?php echo base_url();?>user/customer_dashboard/add_custinfo">
					<table cellpadding="0" class="c_form" cellspacing="5">
						<tr>
							<td width="150">Name </td>
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
							<td>Phone </td>
						</tr>
						<tr>
							<td><input type="text"  name="phone" id="phone" onkeypress="return numbersonly(event)" required /></td>
						</tr>
						<tr>
							<td>Mobile </td>
						</tr>
						<tr>
							<td><input type="text" name="mobile" id="mobile" onkeypress="return numbersonly(event)" required /></td>
						</tr>
						<tr>
							<td>Fax</td>
						</tr>
						<tr>
							<td><input type="text" name="fax" id="fax" onkeypress="return numbersonly(event)" /></td>
						</tr>
						<tr>
							<td>Skype</td>
						</tr>
						<tr>
							<td><input type="text" name="skype" id="skype" /></td>
						</tr>
						<tr>
							<td>County </td>
						</tr>
						<tr>
							<td><input type="text" name="county"  id="county" required /></td>
						</tr>
						<tr>
							<td>City </td>
						</tr>
						<tr>
							<td><input type="text" name="city" id="city" required /></td>
						</tr>
						<tr>
							<td>Gender </td>
						</tr>
						<tr>
							<td><input type="text" name="gender" id="gender" required /></td>
						</tr>
						<tr><td colspan="2" height="10"></td></tr>
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