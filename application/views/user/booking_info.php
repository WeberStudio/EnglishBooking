		<div style="float:left;">
<!--				<div class="p_left">
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
					<h1><span class="cd_p">Corse</span> of the Day</h1>
					<div class="pg_detail">
						<img alt=" " src="<?php echo base_url();?>/theme/user-images/p5.jpg"  />
						<p>Some description about
							this destination
						</p>
					</div>
				</div>
-->				<div class="page_detail">
					<div class="headig">My Booking Information</div>
					<div class="line_c"></div>
					<h3 align="center" style="color:#F00;"><?php echo $this->session->flashdata('msg');?></h3>
					<div class="page_desc">
						<table cellpadding="0" width="680" style="text-align:left;" cellspacing="0">
							<tr>
								<td width="60%">Course Name</td>
								<td width="50"></td>
								<td><?php echo $course->courcename;?></td>
							</tr>
							<tr>
								<td width="60%">College Name</td>
								<td width="50"></td>
								<td><?php echo $course->college_name;?></td>
							</tr>
							<tr>
								<td width="60%">Price</td>
								<td width="50"></td>
								<td><?php echo $course->offerprice;?> USD</td>
							</tr>
							<tr>
								<td width="60%">Offer Price</td>
								<td width="50"></td>
								<td><?php echo $course->english_offer_price;?> USD</td>
							</tr>
							<tr>
								<td width="60%">Start Date</td>
								<td width="50"></td>
								<td><?php echo $course->startdate;?></td>
							</tr>
							<tr>
								<td width="60%">End Date</td>
								<td width="50"></td>
								<td><?php echo $course->enddate;?></td>
							</tr>
							<tr>
								<td width="60%">No of Weeks</td>
								<td width="50"></td>
								<td><?php echo $course->duration;?></td>
							</tr>
							<tr>
								<td width="60%">Session</td>
								<td width="50"></td>
								<td><?php echo $course->session;?></td>
							</tr>
						</table>
						<div class="line_c"></div>
						<div style="float:right;">
							<a href="<?php echo base_url();?>user/student_dashboard/student_dashboard_main"><input type="button" name="Cancel" value="Cancel" /></a>
							<a href="<?php echo base_url();?>user/booking_info/saveCourse/<?php echo $course->id;?>/<?php echo $course->branch_id;?>/<?php echo $course->english_offer_price;?>">
								<input type="button" name="Continue" value="Confirm" />
							</a>
						</div>
					</div>					
				</div>
			</div>
		</div>
	</div>