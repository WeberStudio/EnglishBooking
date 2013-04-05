<?php $categories = $this->my_model->getcatehories();?>
<script>
    function getweeks(){
        //var d1 = $('#datepicker').val();
       // var d2 = $('#datepicker2').val();
        var d1 = $('#endcourcedatestart').datepicker('getDate');
        var d2 = $('#endcourcedateend').datepicker('getDate');
      diff = Math.floor((d2.getTime() - d1.getTime()) / 86400000); // ms per day
     diff = Math.floor(diff/7);
      $('#duration').val(diff);
}
</script>
				<div class="page_detail">
					<div class="headig">Add Courses</div>
					<div class="line_c"></div>
<!--					<div class="c_data">
						<div class="c_address">
							<strong>Address:</strong>
						</div>
						<div class="line_c"></div>
						<div class="c_email">
							<strong>Email:</strong>
						</div>
						<div class="line_c"></div>
					</div>
-->					<div class="clr"></div>
					<form name="college_detail" id="college_detail" method="post" action="<?php echo base_url();?>user/courses_detail/savecource" enctype="multipart/form-data">
                    <input type="hidden" name="branchid" id="branchid" value="<?php echo $branchid;?>"  />
					<table cellpadding="0" class="c_form" cellspacing="5">
						<tr><td colspan="2" height="20"></td></tr>
						<tr>
							<td colspan="2"><h3>Adding New Course</h3></td>
						</tr>
                        <tr>
							<td width="150"> College</td>
							<td>
								<?php echo $this->cource->getcollegename();?>
							</td>
						</tr>
						<tr>
							<td width="150"> Branch</td>
							<td>
								<?php echo str_replace('%20',' ',$branchname);?>
							</td>
						</tr>
						<tr>
							<td>Category </td>
							<td><select name="category" required>
									<option value="">SELECT</option>
                                                                        <?php foreach($categories as $cat){ ?>
                                                     <option value="<?php echo $cat->id;?>"><?php echo $cat->name;?></option>
                                                            <?php  } ?>
                                                            </select></td>
						</tr>
						<tr>
							<td>Course Name  </td>
							<td><input type="text" name="txtCn"  id="txtCn" required /></td>
						</tr>
						<!--<tr>
							<td>Address  </td>
							<td><input type="text" name="txtAddress"  id="txtAddress" required /></td>
						</tr>-->
						<tR><td height="10" colspan="2"></td></tR>
						<tr>
							<td colspan="2">
							<table cellpadding="0" class="course_form" cellspacing="0">
								<tr>
									<td colspan="2">Offer Price</td>
									<td colspan="2">Agent Commission(%)</td>
								<!--	<td>English booking offered Price</td>-->
								</tr>
								<tr>
									<td><input type="text" name="Offer_price"  id="Offer_price" /></td>
									<td width="10"></td>
									<td><input type="text" name="ag_commession"  id="ag_commession" /></td>
									<td width="10"></td>
									<!--<td><input type="text" name="Offer" /></td>-->
								</tr>
							</table>
							</td>
						</tr>
						<tr>
							<td>Course Requirement Documents</td>
							<td><input type="file" name="document"  id="document"/></td>
						</tr>
						<tr>
							<td colspan="2">
							<table cellpadding="0" class="course_form" cellspacing="0">
								<tr>
									<td colspan="2">Duration/ No. of weeks  </td>
									<td colspan="2">Start Date</td>
									<td>End Date</td>
								</tr>
								<tr>
									<td><input type="text" name="duration"  id="duration" required /></td>
									<td width="10"></td>
									<td><input type="text" name="endcourcedatestart"  id="endcourcedatestart" /></td>
									<td width="10"></td>
									<td><input type="text" name="endcourcedateend" id="endcourcedateend" onchange="getweeks()"/></td>
								</tr>
							</table>
							</td>
						</tr>
						<tr>
							<td>Session / Season</td>
							<td><input type="text" name="txtsession"  id="txtsession"/></td>
						</tr>
						<tr>
							<td>Image</td>
							<td><input type="file" name="file" required /></td>
						</tr>
						<tr>
							<td>Description</td>
							<td><textarea name="description" id="description"></textarea></td>
						</tr>
						<tr><td colspan="2" height="10"></td></tr>
						<tr>
							<td colspan="2" align="right"><input type="submit" name="Submit" value="Add Course" /></td>
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