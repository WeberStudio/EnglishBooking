				<div class="page_detail">
					
					<div class="clr"></div>
					<br /><br />
					<div class="clr"></div>
					<h3>All Notifications</h3>
					<div class="not_msg_link">
					<?php foreach($list as $row) { ?>	
						<a href="<?php echo base_url();?>/user/student_dashboard/student_notifaction_delete/<?php echo $row->id;?>" ><?php echo $row->text."   ".$row->datetime; ?> </a>
					<?php } ?>	
						
					</div>
					<?php echo $this->pagination->create_links();?>

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