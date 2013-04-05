					
				<div class="page_detail">
					<div class="headig">My Application Regsitration</div>
					<div style="float:right;">
						<h3>Step 4 of 5</h3>
					</div>
					<div class="clr"></div>
					<form method="post" action="<?php echo base_url();?>user/user_registration/page5_data_1" name="student_detail2" id="student_detail2">		<!---->
					<table cellpadding="0" class="c_form" cellspacing="5">
						<tr><td colspan="2"><h3>Accommodation</h3></td></tr>
						<tr><td colspan="2"><h4>What type of Accommodation you require</h4></td></tr>
						<tr><td colspan="2" height="20"></td></tr>
						<tr>
							<td width="50%" valign="top">
							<table>
								<tr>
									<td width="30"><input type="radio" name="accomodation" id="accomodation" value="no_accomodation" /></td>
									<td>No Accommodation</td>
								</tr>
								<tr>
									<td ><input type="radio" name="accomodation" id="accomodation" value="standard_homestay" /></td>
									<td>Standard Home stay</td>
								</tr>
								<tr>
									<td><input type="radio" name="accomodation" id="accomodation" value="de_lux_homestay" /></td>
									<td>De Lux Home stay</td>
								</tr>
								<tr>
									<td><input type="radio" name="accomodation" id="accomodation" value="executive_homestay" /></td>
									<td>Executive Home stay</td>
								</tr>
								<tr>
									<td><input type="radio" name="accomodation" id="accomodation" value="guest_house" /></td>
									<td>Guest House</td>
								</tr>
							</table>
							</td>
							<td>
							<table>
								<tr>
									<td width="30"><input type="radio" name="accomodation" id="accomodation" value="hotel" /></td>
									<td>Hotel</td>
								</tr>
								<tr>
									<td ><input type="radio" name="accomodation" id="accomodation" value="other" /></td>
									<td>Other</td>
								</tr>
								<tr>
									<td colspan="2"><textarea name="accomodation_info" id="accomodation_info" style="width:365px;" title="Information about your accomodation"></textarea></td>
								</tr>
							</table>
							</td>
						</tr>
						<tr><td colspan="2" height="10"></td></tr>
						<tr>
							<td><a href="<?php echo base_url();?>user/user_registration/user_registration_page4_1"><input type="button" name="Submit" value="Previous" /></a></td>
							<td align="right"><input type="submit" name="Submit" value="Next"  title="Click for next step" /></td>
							
							<!--<td align="right"><a href="<?php echo base_url();?>user/user_registration/user_registration_page6"><input type="button" name="Submit" value="Next" /></a></td>-->
						</tr>
						<tr><td colspan="2" height="10"></td></tr>
					</table>
					</form>
				</div>
			</div>
<!--			<div class="spn">
				<strong>Special Notes:</strong>
				<p>
					Please fill all the fields and carry on to the next step.
				</p>
			</div>
-->		</div>
	</div>
