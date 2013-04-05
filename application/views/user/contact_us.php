		<div style="float:left;">
				<div class="p_left">
					<h1>Popular Destinations </h1>
					<div class="pg_detail">
						<img alt=" " src="<?php echo base_url();?>/theme/user-images/p2.jpg" width="70" />
						<i>Title</i>
						<p>Some description about
							this destination
						</p>
					</div>
					<div class="pg_line"></div>
					<div class="pg_detail">
						<img alt=" " src="<?php echo base_url();?>/theme/user-images/p2.jpg" width="70" />
						<i>Title</i>
						<p>Some description about
							this destination
						</p>
					</div>
					<h1><span class="cd_p">Course</span> of the Day</h1>
					<div class="pg_detail">
						<img alt=" " src="<?php echo base_url();?>/theme/user-images/p5.jpg"  />
						<p>Some description about
							this destination
						</p>
					</div>
				</div>
				<div class="page_detail">
					<div class="headig">Contact Us</div>
					<div class="page_desc">
					<div style="float:left;">
						<?php echo html_entity_decode($contact->description);?>
					</div>
					<div class="clr"></div>
					<form name="contact_form" id="contact_form" method="post" action="<?php echo base_url();?>user/pages/send_contact_email">
					<table cellpadding="0" class="c_form" cellspacing="5">
						<tr>
							<td colspan="2" align="center" style="color:#F00;"><?php echo $this->session->flashdata('Success');?></td>
						</tr>
						<tr>
							<td width="150">Name<span style="color:#F00;">*</span></td>
							<td><input type="text" name="name" id="name" required /></td>
						</tr>
						<tr>
							<td>Email<span style="color:#F00;">*</span></td>
							<td><input type="email" name="email" id="email" required /></td>
						</tr>
						<tr>
							<td>Phone</td>
							<td><input type="text"  name="phone" id="phone" /></td>
						</tr>
						<tr>
							<td>Message<span style="color:#F00;">*</span></td>
							<td><textarea name="message" required></textarea></td>
						</tr>
						<tr><td colspan="2" height="10"></td></tr>
						<tr>
							<td colspan="2" align="right"><input type="submit" name="Submit" value="Submit" /></td>
						</tr>
					</table>
					</form>
					</div>
				</div>
			</div>
		</div>
	</div>