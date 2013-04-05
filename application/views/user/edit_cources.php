<?php error_reporting(0); ?>
<?php $categories = $this->my_model->getcatehories();?>
<script>
   $(document).ready(function(){
    $('#addanother').click(function() {
        $(document.createElement('tr')).html('<td width="30">Testimonials<input type="hidden" name="diver_id[]" value="0" /><input type="text" name="txtName[]" width="30" style="width:322px;" required /></td><td width="10"></td><td width="30">By name<input type="text" name="txtpersentage[]" width="30" style="width:322px;" required /></td>').appendTo('#addmore');
    });
});

</script>
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
					<div class="headig">Branches</div>
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
					<form name="college_detail" id="college_detail" method="post" action="<?php echo base_url();?>user/courses_detail/Edit_Cource" enctype="multipart/form-data">
					<table cellpadding="0" class="c_form" cellspacing="5">
						<tr><td colspan="2" height="20"></td></tr>
						<tr>
							<td colspan="2"><h3>Editing Course <?php echo $course->courcename;?></h3></td>
						</tr>
						<tr>
							<td colspan="2" align="center" style="color:#F00;"><?php echo $this->session->flashdata('msg')?></td>
						</tr>
						<tr>
							<input type="hidden" name="course_ID" value="<?php echo $course->id;?>" />
							<td>Category </td>
							<td><select name="category" required>
									<option value="">SELECT</option>
                                                                         <?php foreach($categories as $cat){ ?>
                                                     <option value="<?php echo $cat->id;?>"<?php if($course->category == $cat->id){ echo "selected='selected'";} ?>><?php echo $cat->name;?></option>
                                                            <?php  } ?>
								</select></td>
						</tr>
						<tr>
							<td>Course Name  </td>
							<td><input type="text" name="txtCn"  id="txtCn" required value="<?php echo $course->courcename;?>" /></td>
						</tr>
						<!--<tr>
							<td>Address  </td>
							<td><input type="text" name="txtAddress"  id="txtAddress" value="<?php echo $course->address;?>" required /></td>
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
									<td><input type="text" name="Offer_price"  id="Offer_price" value="<?php echo $course->offerprice;?>" /></td>
									<td width="10"></td>
									<td><input type="text" name="ag_commession"  id="ag_commession" value="<?php echo $course->agentcommesion;?>" /></td>
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
									<td><input type="text" name="duration"  id="duration" value="<?php echo $course->duration;?>" required /></td>
									<td width="10"></td>
									<td><input type="text" name="endcourcedatestart"  id="endcourcedatestart" value="<?php echo $course->startdate;?>" /></td>
									<td width="10"></td>
									<td><input type="text" name="endcourcedateend" id="endcourcedateend" value="<?php echo $course->enddate;?>"  onchange="getweeks()"/></td>
								</tr>
							</table>
							</td>
						</tr>
						<tr>
							<td>Session / Season</td>
							<td><input type="text" name="txtsession"  id="txtsession" value="<?php echo $course->session;?>" /></td>
						</tr>
                                                <tr>
							<td>Image</td>
							<td><input type="file" name="file" required /></td>
						</tr>
						<tr>
							<td>Description</td>
							<td><textarea name="description" id="description"><?php echo $course->description;?></textarea></td>
						</tr>
                                                <tr>
							<td colspan="2">
							<table cellpadding="0" cellspacing="0"  id="addmore">
							<?php 
								foreach ($testimonials as $testi){
							?>
								<tr>
								<input type="hidden" name="diver_id[]" value="<?php echo $testi->id;?>" />
									<td width="30">
										Testimonials
										<input type="text" name="txtName[]" value="<?php echo $testi->value;?>" width="30" style="width:322px;" required />
									</td>
									<td width="10"></td>
									<td width="30">
										By Name
										<input type="text" name="txtpersentage[]" value="<?php echo $testi->name;?>" width="30" style="width:322px;" required />
									</td>
								</tr>
								<?php } ?>
								<tr><td colspan="4" height="10"></td></tr>
								
							</table>
							</td>
						</tr>
						<tr><td colspan="2" height="10"></td></tr>
                                                <tr>
							<td colspan="2">
							<table cellpadding="0" cellspacing="0">
                                                            <tr><td width="30">Testimonials<input type="hidden" name="diver_id[]" value="0" /><input type="text" name="txtName[]" width="30" style="width:322px;" required /></td><td width="10"></td><td width="30">By name<input type="text" name="txtpersentage[]" width="30" style="width:322px;" required /></td></tr>
                           		 <tr>
									<td colspan="3" align="right"><input type="button" name="addanother" value="Add Another"  id="addanother"/></td>
								</tr>
                                <tr><td colspan="3">&nbsp;</td></tr>
								
							</table>
							</td>
						</tr>
						<tr>
							<td colspan="2" align="right"><input type="submit" name="Submit" value="Update Course" /></td>
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