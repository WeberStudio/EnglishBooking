<!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>-->
<script src="<?php echo base_url();?>theme/uploadfiles/jquery.uploadify.min.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>theme/uploadfiles/uploadify.css">
	<script type="text/javascript">
		<?php $timestamp = time();?>
		$(function() {
			$('#file_upload').uploadify({
				'formData'     : {
					'timestamp' : '<?php echo $timestamp;?>',
					'token'     : '<?php echo md5('unique_salt' . $timestamp);?>',
					'cid':'<?php echo $this->session->userdata('customer_id');?>'
				},
				'swf'      : '<?php echo base_url();?>theme/uploadfiles/uploadify.swf',
				'uploader' : '<?php echo base_url();?>user/client_documents/uploaddocuments'
			});
		});
	</script>
    
    <?php 
	
		$result = $this->college_documents_model->get_upload_files();
	?>
            <div class="page_detail">
						<div class="headig">Documents</div>
					<div class="line_c"></div>
					<div class="c_data">
						<!--<div class="c_address">
							<strong>Address:</strong>
						</div>
						<div class="line_c"></div>
						<div class="c_email">
							<strong>Email:</strong>
						</div>
						<div class="line_c"></div>
						<div class="c_email">
							<h1>City Information</h1>
							<div class="edit_button"><input type="submit" name="submit" value="Go Back" /></div>
						</div>
						<div class="line_c"></div>
						<div class="u_adr">
							<h2>Name of University</h2>
							<i>Location</i>
						</div>
						<div class="line_c"></div>-->
					</div>
					<div class="clr"></div>
					<div class="fl">
                    <?php foreach($result as $val) { ?>
						<div class="course_info_td">
							<a href="<?php echo base_url();?>uploadfiles/collegedocuments/<?php echo $val->filename;?>" target="_blank"><img src="<?php echo base_url();?>/theme/user-images/pdf.jpg" /><br />
							<?php echo $val->filename;?></a><br /><br />
							<a href="<?php echo base_url();?>user/client_documents/del_clientdoc/<?php echo $val->id; ?>">Delete</a>
						</div>
						<?php   } ?>
					</div>
					<div class="clr"></div>
					
						<table cellpadding="0" class="c_form" style="margin:10px;" cellspacing="5">
							<form name="college_detail" method="post">
                           <!-- <tr>
								<td>Name</td>
								<td><input type="text" name="txtname"  id="txtname" required/></td>
							</tr>-->
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
						<!--</form>-->
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
    