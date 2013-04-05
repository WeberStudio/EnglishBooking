				<div class="page_detail">
					<div class="headig">Branches Details</div>
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
						<tr>
							<td colspan="5" align="right"><a href="<?php echo base_url();?>user/branches_detail/add_branch">Add New Branch</a></td>
						</tr>
						<tr><Td colspan="5" height="5"></Td></tr>
						<tr>
							<td class="td_bord">
							<table cellpadding="0" width="100%" border="0" cellspacing="0">
															<tr height="40" style="font-weight:bold;">
									<td></td>
									<td><strong>Branch Name</strong></td>
									<td align="center"><strong>View Details</strong></td>
									<td align="center"><strong>Add New Branch</strong></td>
								</tr>

								<?php 
									$i = 1;
								foreach($branches as $result ) { 
								?>
                                
                                	 <tr <?php if($i%2 != '0'){ echo 'class="cell1"';} else { echo 'class="cell2"';} ?> >
									<td width="20" ></td>
									<td><?php echo $result->name;?></td>
									<td align="center"><a href="<?php echo base_url();?>user/branches_detail/editBranch/<?php echo $result->id?>">Edit</a></td>
                                    <td align="center"><a href="javascript:if(confirm('Do you really want to delete?')){ window.location.href='<?php echo base_url();?>user/branches_detail/deletebranch/<?php echo $result->id?>'}">Delete</a></td>
									<td width="20"></td>
								</tr>
                               
                                <?php $i++; } ?>
                                <!--<tr class="cell1" >
									<td width="20" ></td>
									<td>Collge Name</td>
									<td align="right"><a href="#">Edit</a></td>
									<td width="20"></td>
								</tr>
								<tr class="cell2" >
									<td width="20" ></td>
									<td>Collge Name</td>
									<td align="right"><a href="#">Edit</a></td>
									<td width="20"></td>
								</tr>
								<tr class="cell1">
									<td width="20"></td>
									<td>Collge Name</td>
									<td align="right"><a href="#">Edit</a></td>
									<td width="20"></td>
								</tr>
								<tr class="cell2">
									<td width="20"></td>
									<td>Collge Name</td>
									<td align="right"><a href="#">Edit</a></td>
									<td width="20"></td>
								</tr>-->
							</table>
							</td>
						</tr>
					</table>
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