<!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>-->
<script src="<?php echo base_url();?>theme/uploadfiles/jquery.uploadify.min.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>theme/uploadfiles/uploadify.css">    
    <?php 
	
		$result = $this->student_documents_model->get_upload_files();
	?>
            <div class="page_detail">
						<div class="headig">Documents by College</div>
					<div class="line_c"></div>
					<div class="c_data">
					</div>
					<div class="clr"></div>
					<div class="fl">
                    <?php foreach($student_documents as $val) { ?>
						<div class="course_info_td">
							<a href="<?php echo base_url();?>uploadfiles/student_documents/<?php echo $val->filename;?>" target="_blank"><img src="<?php echo base_url();?>/theme/user-images/pdf.jpg" /><br />
							<?php echo substr($val->filename,10);?></a><br /><br />
						</div>
						<?php   } ?>
					</div>
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
    