				<div class="page_detail">
					<div class="headig">Welcome "Customer"</div>
					<div class="clr"></div>
					<br /><br />
					<div class="clr"></div>
					<h3>Notifications</h3>
					<div class="not_msg_link">
					<?php foreach($list as $row) { ?>	
						<a href="<?php echo base_url();?>user/Customer_info/customer_notifaction_delete/<?php echo $row->id;?>"><?php echo $row->text."   ".$row->datetime; ?> </a>
					<?php } ?>	
						
					</div>
					<div class="nf_box">
						<h3>Total Notifications</h3>
						<h1><?php echo $totalnoti;?></h1>
					</div>
				</div>
			</div>
		</div>
	</div>