 <div class="right_content">
    <h2>Add New Course in <?php  echo $branchname;?></h2> 
         <div class="form">
         <form action="<?php echo base_url();?>admin_main/courses_detail/savecource" method="post" class="niceform" enctype="multipart/form-data" name="addpages" id="addpages">
                <fieldset>
					<table cellpadding="0" border="0" class="c_form" cellspacing="5">
						<input type="hidden" name="branchid" id="branchid" value="<?php echo $branchid;?>"  />
						<tr>
							<td>Category<span style="color:#F00;">*</span></td>
							<td><select name="category" required>
									<option value="">SELECT</option>
                                    <option value="1">Intensive English</option>
                                    <option value="2">General English </option>
                                    <option value="3">IELTS</option>
                                    <option value="4">1 - 2 -1 English</option>
                                    <option value="5">Business English</option>
								</select></td>
						</tr>
						<tr>
							<td>Course Name <span style="color:#F00;">*</span></td>
							<td><input type="text" name="txtCn"  id="txtCn" required /></td>
						</tr>
						<tr>
							<td>Address <span style="color:#F00;">*</span></td>
							<td><input type="text" name="txtAddress"  id="txtAddress" required /></td>
						</tr>
						<tR><td height="10" colspan="2"></td></tR>
						<tr>
							<td colspan="2">
							<table cellpadding="0" class="course_form" cellspacing="0">
								<tr>
									<td colspan="2">Offer Price</td>
									<td colspan="2">Agent Commession(%)</td>
									<td colspan="2">English Offer Peice</td>
								<!--	<td>English booking offered Price</td>-->
								</tr>
								<tr>
									<td><input type="text" name="Offer_price"  id="Offer_price" /></td>
									<td width="10"></td>
									<td><input type="text" name="ag_commession"  id="ag_commession"/></td>
									<td width="10"></td>
									<td><input type="text" name="english_offer_price"  id="english_offer_price"/></td>
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
									<td><input type="text" name="duration"  id="duration" required /></td>
									<td width="10"></td>
									<td><input type="text" name="endcourcedatestart"  id="endcourcedatestart" /></td>
									<td width="10"></td>
									<td><input type="text" name="endcourcedateend" id="endcourcedateend" /></td>
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
							<td colspan="2" align="right"><a href="<?php echo base_url();?>admin_main/courses_detail/getCourseList/<?php echo $branchid;?>"><input type="button" value="Cancel" /></a>&nbsp;&nbsp;&nbsp;
							<input type="submit" name="Submit" value="Add Course" /></td>
						</tr>
						
					</table>
                </fieldset>
         </form>
         </div>  
     </div><!-- end of right content-->                    
  </div>   <!--end of center content -->               
    <div class="clear"></div>
    </div> <!--end of main content-->