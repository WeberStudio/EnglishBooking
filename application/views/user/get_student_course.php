				<div class="page_detail">
					<div class="headig">Course Students</div>
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
					<table cellpadding="0" class="b_detail" cellspacing="0">
						<!--<tr>
							<td colspan="5" align="right"><a href="#">Add New Branch</a></td>
						</tr>-->
						<tr><Td colspan="5" height="5"></Td></tr>
						<tr>
							<td class="td_bord">
							<table cellpadding="0" width="100%" border="0" cellspacing="0">
								<?php 
									$i = 1;
								foreach($courcelist as $result ) { 
								?>
                                
                                	 <tr <?php if($i%2 != '0'){ echo 'class="cell1"';} else { echo 'class="cell2"';} ?> >
									<td width="20" ></td>
									<td><?php echo $result->courcename;?></td>
                                    <td align="right"><a href="<?php echo base_url();?>user/courses_detail/students/<?php echo $result->id; ?>">Students</a></td>
 
									<td width="20"></td>
								</tr>
                               
                                <?php $i++; } ?>
								
							</table>
							</td>
						</tr>
					</table>
					<div class="clr"></div>
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