	<script src="<?php echo base_url();?>theme/uploadfiles/jquery.uploadify.min.js" type="text/javascript"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>theme/uploadfiles/uploadify.css">
		<script type="text/javascript">
			<?php $timestamp = time();?>
			$(function() {
				var sid = document.college_detail.student_id.value;
				$('#file_upload').uploadify({
					'formData'     : {
						'timestamp' : '<?php echo $timestamp;?>',
						'token'     : '<?php echo md5('unique_salt' . $timestamp);?>',
						'customer_id':'<?php echo $this->session->userdata('customer_id');?>',
						'student_id': sid
					},
					'swf'      : '<?php echo base_url();?>theme/uploadfiles/uploadify.swf',
					'uploader' : '<?php echo base_url();?>user/student_view/uploaddocuments'
				});
			});
		</script>
				
				<div class="page_detail">
					<div class="headig">Detail of <?php echo $profile->family_name; ?></div>
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
							<td>Student Family Name</td>
							<td><?php echo $profile->family_name;?></td>
						</tr>
						<tr>
							<td>Student Name</td>
							<td><?php echo $profile->four_name;?></td>
						</tr>
						<tr>
							<td>Date of Birth</td>
							<td><?php echo $profile->date_of_birth;?></td>
						</tr>
						<tr>
							<td>Email</td>
							<td><?php echo $profile->email;?></td>
						</tr>
						<tr>
							<td>Gander</td>
							<td><?php echo $profile->gender;?></td>
						</tr>
						<tr>
							<td>Nationality</td>
							<td><?php echo $profile->nationality;?></td>
						</tr>
						<tr>
							<td>Address</td>
							<td><?php echo $profile->address;?></td>
						</tr>
						<tr>
							<td>Phone</td>
							<td><?php echo $profile->telephone;?></td>
						</tr>
						<tr>
							<td>Fax</td>
							<td><?php echo $profile->fax;?></td>
						</tr>
                                            
					</table>
					<div class="clr"></div>
						<div class="c_data">
						<br/><br>
							<h3>Student Documents</h3>
							<br/><br>
							<table>
								<tr>
								<?php 
									$a = 1;
									foreach ($studentdocuments as $doc) {
										if($a == 3) {
											echo "</tr><tr>";
											$a = 1;
										}
										?>
								
									<td>
										<div class="course_info_td"><a href="<?php echo base_url();?>uploadfiles/student_documents/<?php echo $doc->filename; ?>" target="_blank"><img src="http://192.168.1.100/jamshaid/CodeIgniter/theme/admin-images/pdf.jpg"><br /><?php echo substr($doc->filename,10); ?></a></div>
										
									</td>
									
								 <?php $a++; } ?>   
								</tr>
							</table>
					<div class="clr"></div>    
						<div class="c_data">
						<br/><br>
								<h3>Admin Documents</h3>
								<br /><br />
							<table>
								<tr>
								<?php 
									$a = 1;
									foreach ($admindocuments as $doc) {
										if($a == 3) {
											echo "</tr><tr>";
											$a = 1;
										}
										?>
								
									<td>
										<div class="course_info_td"><a href="<?php echo base_url();?>uploadfiles/student_documents/<?php echo $doc->filename; ?>" target="_blank">
											<img src="http://192.168.1.100/jamshaid/CodeIgniter/theme/admin-images/pdf.jpg"><br /><?php echo substr($doc->filename,10); ?></a>
										</div>
									</td>
									
								 <?php $a++; } ?>   
								</tr>
							</table> 
				</div>
			</div>
			
					<div class="clr"></div>    
						<div class="c_data">
						<br/><br>
								<h3>My Documents</h3>
								<br /><br />
							<table>
								<tr>
								<?php 
									$a = 1;
									foreach ($my_documents as $doc) {
										if($a == 3) {
											echo "</tr><tr>";
											$a = 1;
										}
										?>
								
									<td>
										<div class="course_info_td"><a href="<?php echo base_url();?>uploadfiles/student_documents/<?php echo $doc->filename; ?>" target="_blank">
											<img src="http://192.168.1.100/jamshaid/CodeIgniter/theme/admin-images/pdf.jpg"><br /><?php echo substr($doc->filename,10); ?></a><br /><br />
											<a href="<?php echo base_url();?>user/student_view/del_student_doc/<?php echo $doc->id; ?>/<?php echo $profile->id;?>">Delete</a>
										</div>
									</td>
									
								 <?php $a++; } ?>   
								</tr>
							</table> 
							
				</div>
					<div class="clr"></div>
					
						<table cellpadding="0" class="c_form" style="margin:10px;" cellspacing="5">
							<form name="college_detail" method="post">
                           <!-- <tr>
								<td>Name</td>
								<td><input type="text" name="txtname"  id="txtname" required/></td>
							</tr>-->
							<input type="hidden" name="student_id" value="<?php echo $profile->id;?>" />
							<tr>
								<td>Select File</td>
								<td><!--<input type="file" name="txtfile" style=" height:40px;"  id="txtfile"/>-->
                                
                            <div id="queue"></div>
                            <input id="file_upload" name="file_upload" type="file" multiple="true">
                            </form>
                                </td>
							</tr>
							<tr><td height="10" colspan="2"></td></tr>
							<!--<tr>
								<td align="center" colspan="2"><input type="submit" name="Submit" value="Submit" /></td>
							</tr>-->
							<tr><td height="20" colspan="2"></td></tr>
						</table>

				</div>
			
			
			<div class="spn">
				<strong>Special Notes:</strong>
				<p>
					Please fill all the fields and carry on to the next step.
				</p>
			</div>
		</div>
	</div>
</div>