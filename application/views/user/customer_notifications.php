				<div class="page_detail">
					<div class="headig">Customer Alerts</div>
					<div class="line_c"></div>
					
					<div class="clr"></div>
					<table cellpadding="0" class="c_form" cellspacing="5">
					<?php foreach($list as $row) { ?>	
                                            <tr>
						<td><a href="<?php echo base_url();?>user/Customer_info/customer_notifaction_delete/<?php echo $row->id;?>"  target="_blank"><?php echo $row->text."   ".$row->datetime; ?> </a></td>
						</tr>
                                             <?php } ?>   
						
					</table>
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