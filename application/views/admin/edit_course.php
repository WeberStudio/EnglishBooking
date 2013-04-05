 <div class="right_content">
    <h2>Edit Course <?php  echo $course->courcename;?></h2> 
		<div style="clear:both"></div>
		<h4 style="color:#F00; text-align:center"><?php echo $this->session->flashdata('msg')?></h4>
         <div class="form">
         <form action="<?php echo base_url();?>admin_main/courses_detail/Edit_Cource" method="post" class="niceform" enctype="multipart/form-data" name="addpages" id="addpages">
                <fieldset>
					<table cellpadding="0" border="0" class="c_form" cellspacing="5">
						<tr>
							<input type="hidden" name="course_ID" value="<?php echo $course->id;?>" />
							<td>Category<span style="color:#F00;">*</span></td>
							<td><select name="category" required>
									<option value="">SELECT</option>
                                    <option value="1" <?php if($course->category == '1') echo "selected";?>>Intensive English</option>
                                    <option value="2" <?php if($course->category == '2') echo "selected";?>>General English </option>
                                    <option value="3" <?php if($course->category == '3') echo "selected";?>>IELTS</option>
                                    <option value="4" <?php if($course->category == '4') echo "selected";?>>1 - 2 -1 English</option>
                                    <option value="5" <?php if($course->category == '5') echo "selected";?>>Business English</option>
								</select></td>
						</tr>
						<tr>
							<td>Course Name <span style="color:#F00;">*</span></td>
							<td><input type="text" name="txtCn"  id="txtCn" required value="<?php echo $course->courcename;?>" /></td>
						</tr>
						<tr>
							<td>Address <span style="color:#F00;">*</span></td>
							<td><input type="text" name="txtAddress"  id="txtAddress" value="<?php echo $course->address;?>" required /></td>
						</tr>
						<tR><td height="10" colspan="2"></td></tR>
						<tr>
							<td colspan="2">
							<table cellpadding="0" class="course_form" cellspacing="0">
								<tr>
									<td colspan="2">Offer Price</td>
									<td colspan="2">Agent commission(%)</td>
									<td colspan="2">English Offer (%)</td>
								<!--	<td>English booking offered Price</td>-->
								</tr>
								<tr>
									<td><input type="text" name="Offer_price"  id="Offer_price" value="<?php echo $course->offerprice;?>" /></td>
									<td width="10"></td>
									<td><input type="text" name="ag_commession"  id="ag_commession" value="<?php echo $course->agentcommesion;?>" /></td>
									<td width="10"></td>
									<td><input type="text" name="english_offer_price"  id="english_offer_price" value="<?php echo $course->english_offer_price;?>" /></td>
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
									<td colspan="2">Duration/ No. of weeks <span style="color:#F00;">*</span></td>
									<td colspan="2">Start Date</td>
									<td>End Date</td>
								</tr>
								<tr>
									<td><input type="text" name="duration"  id="duration" value="<?php echo $course->duration;?>" required /></td>
									<td width="10"></td>
									<td><input type="text" name="endcourcedatestart"  id="endcourcedatestart" value="<?php echo $course->startdate;?>" /></td>
									<td width="10"></td>
									<td><input type="text" name="endcourcedateend" id="endcourcedateend" value="<?php echo $course->enddate;?>" /></td>
								</tr>
							</table>
							</td>
						</tr>
						<tr>
							<td>Session / Season</td>
							<td><input type="text" name="txtsession"  id="txtsession" value="<?php echo $course->session;?>" /></td>
						</tr>
						<tr>
							<td>Description</td>
							<td><textarea name="description" id="description"><?php echo $course->description;?></textarea></td>
						</tr>
						<tr><td colspan="2" height="10"></td></tr>
						<tr>
							<td colspan="2" align="right"><input type="submit" name="Submit" value="Update Course" /></td>
						</tr>
					</table>
                </fieldset>
         </form>
         </div>  
     </div><!-- end of right content-->                    
  </div>   <!--end of center content -->               
    <div class="clear"></div>
    </div> <!--end of main content-->