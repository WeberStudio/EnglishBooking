				<div class="page_detail">
					<div class="headig">Course Details</div>
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
								<tr height="40" style="font-weight:bold;">
									<td></td>
									<td><strong>Branch Name</strong></td>
									<td align="center"><strong>View Course Details</strong></td>
									<td align="center"><strong>Add New Course</strong></td>
								</tr>
								<?php 
									$i = 1;
								foreach($branches as $result ) { 
								?>
                                
                                	 <tr <?php if($i%2 != '0'){ echo 'class="cell1"';} else { echo 'class="cell2"';} ?> >
									<td width="20" ></td>
									<td><?php echo $result->name;?></td>
                                    <td align="center"><a href="<?php echo base_url();?>user/courses_detail/viewCource/<?php echo $result->name;?>/<?php echo $result->id;?>">View</a></td>
                                    <td align="center"><a href="<?php echo base_url();?>user/courses_detail/addcource/<?php echo $result->name;?>/<?php echo $result->id;?>">Add</a></td>
                                    
									<td width="20"></td>
								</tr>
                               
                                <?php $i++; } ?>
								
							</table>
							</td>
						</tr>
					</table>
					<div class="clr"></div>
					<!--<form name="college_detail" method="post" action="">
					<table cellpadding="0" class="c_form" cellspacing="5">
						<tr><td colspan="2" height="20"></td></tr>
						<tr>
							<td colspan="2"><h3>Adding New Course</h3></td>
						</tr>
						<tr>
							<td width="150">Select Branch</td>
							<td>
								<select name="branch">
									<option value="0">SELECT</option>
								</select>
							</td>
						</tr>
						<tr>
							<td>Category</td>
							<td><input type="text" name="txtC" /></td>
						</tr>
						<tr>
							<td>Course Name</td>
							<td><input type="text" name="txtCn" /></td>
						</tr>
						<tr>
							<td>Address</td>
							<td><input type="text" name="txtAddress" /></td>
						</tr>
						<tR><td height="10" colspan="2"></td></tR>
						<tr>
							<td colspan="2">
							<table cellpadding="0" class="course_form" cellspacing="0">
								<tr>
									<td colspan="2">Offer Price</td>
									<td colspan="2">Agent Commission(%)</td>
									<td>English booking offered Price</td>
								</tr>
								<tr>
									<td><input type="text" name="Offer_price" /></td>
									<td width="10"></td>
									<td><input type="text" name="ag_commession" /></td>
									<td width="10"></td>
									<td><input type="text" name="Offer" /></td>
								</tr>
							</table>
							</td>
						</tr>
						<tr>
							<td>Course Requirement Documents</td>
							<td><input type="file" name="document" /></td>
						</tr>
						<tr>
							<td colspan="2">
							<table cellpadding="0" class="course_form" cellspacing="0">
								<tr>
									<td colspan="2">Duration/ No. of weeks</td>
									<td colspan="2">Start Date</td>
									<td>End Date</td>
								</tr>
								<tr>
									<td><input type="text" name="duration" /></td>
									<td width="10"></td>
									<td><input type="text" name="SDate" /></td>
									<td width="10"></td>
									<td><input type="text" name="EDate" /></td>
								</tr>
							</table>
							</td>
						</tr>
						<tr>
							<td>Session / Season</td>
							<td><input type="text" name="txtAddress" /></td>
						</tr>
						<tr><td colspan="2" height="10"></td></tr>
						<tr>
							<td colspan="2" align="right"><input type="submit" name="Submit" value="Add Course" /></td>
						</tr>
					</table>
					</form>-->
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