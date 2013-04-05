<!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>-->
<script src="<?php echo base_url();?>theme/uploadfiles/jquery.uploadify.min.js" type="text/javascript"></script>
<!--<script type="text/javascript" src="<?php echo base_url();?>theme/user-js/ajaxupload.3.5.js" ></script>-->
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>theme/uploadfiles/uploadify.css">
	<script type="text/javascript">
		<?php $timestamp = time();?>
		$(function() {
			$('#file_upload').uploadify({
				'formData'     : {
					'timestamp' : '<?php echo $timestamp;?>',
					'token'     : '<?php echo md5('unique_salt' . $timestamp);?>',
					'cid':'<?php echo $this->session->userdata('student_id');?>'
				},
				'swf'      : '<?php echo base_url();?>theme/uploadfiles/uploadify.swf',
				'uploader' : '<?php echo base_url();?>user/student_documents/uploaddocuments'
			});
		});
	</script>
    <script type="text/javascript">
		$(function(){
				var btnUpload=$('#upload');
				var status=$('#status');
				new AjaxUpload(btnUpload, {
					action: 'upload-file.php',
					
					onSubmit: function(file, ext){
						 if (! (ext && /^(jpg|png|jpeg|gif)$/.test(ext))){ 
							// extension is not allowed 
							status.text('Only JPG, PNG or GIF files are allowed');
							return false;
						}
						status.text('Uploading...');
					},
					onComplete: function(file, response){
						//On completion clear the status
						status.text('');
						//Add uploaded file to list
						if(response==="success"){
							$('<li></li>').appendTo('#files').html('<img src="./uploads/'+file+'" alt="" /><br />'+file).addClass('success');
						} else{
							$('<li></li>').appendTo('#files').text(file).addClass('error');
						}
					}
				});
			});	
	</script>
    <?php 
		$result = $this->student_documents_model->get_upload_files();
	?>
            <div class="page_detail">
						<div class="headig">Documents</div>
					<div class="line_c"></div>
					<div class="c_data">
					</div>
					<div class="clr"></div>
					<div class="fl">
                    <?php foreach($student_documents as $val) { ?>
						<div class="course_info_td">
							<a href="<?php echo base_url();?>uploadfiles/student_documents/<?php echo $val->filename;?>" target="_blank"><img src="<?php echo base_url();?>/theme/user-images/pdf.jpg" /><br />
							<?php echo substr($val->filename,10);?></a><br /><br />
							<a href="<?php echo base_url();?>user/student_documents/del_student_doc/<?php echo $val->id; ?>">Delete</a>
						</div>
						<?php   } ?>
					</div>
					<div class="clr"></div>
					
						<table cellpadding="0" class="c_form" style="margin:10px;" cellspacing="5">
							<form name="college_detail" method="post">
							<tr>
								<td>Select File</td>
								<td>
									<div id="queue"></div>
									<input id="file_upload" name="file_upload" type="file" multiple="true">
									</form>
                                </td>
							</tr>
							<tr><td height="10" colspan="2"></td></tr>
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
    