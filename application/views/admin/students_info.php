 <script src="<?php echo base_url();?>theme/uploadfiles/jquery.uploadify.min.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>theme/uploadfiles/uploadify.css">
	<script type="text/javascript">
		<?php $timestamp = time();?>
		$(function() {
			$('#file_upload').uploadify({
				'formData'     : {
					'timestamp' : '<?php echo $timestamp;?>',
					'token'     : '<?php echo md5('unique_salt' . $timestamp);?>',
					'cid':'<?php echo $student->id;?>'
				},
				'swf'      : '<?php echo base_url();?>theme/uploadfiles/uploadify.swf',
				'uploader' : '<?php echo base_url();?>admin_main/students_info/uploaddocuments'
			});
		});
		
	function changeStatus(cid){
		//alert(cid);
      var popupval ="#files"+cid;
        if ($(popupval).is(":checked")) {
            val2 = '1';
        } else {
           val2 = '0'; 
        }

      var value = cid;
	   //alert(value);
          	
        	$.ajax({
                type: "GET",
                url: "<?php echo base_url();?>admin_main/students_info/file_status_update",
                data: {
                    'file_id': value,
                    'status':val2
                },
                dataType: "text",
                success: function(msg){
					//alert(msg);
                 /* if (value==$(that).val()) {*/1
                    //Receiving the result of search here
                    $("#success_msg").html(msg);
                  /*  }*/                }
            });
		}
	</script>
    
    <?php 
	
		$result = $this->student_info_model->get_upload_files();
	?>
	
 <div class="right_content">            
        
    <h2>Detail of <?php echo $student->four_name;?>
	</h2> 
	<div style="clear:both"></div>
	<h4 style="color:#F00; text-align:center"><?php echo $this->session->flashdata('msg')?></h4>
	<h4 id="success_msg" style="text-align:center; color:#F00;"></h4>
<style type="text/css">
	.desc{
		font-family:Arial, Helvetica, sans-serif;
		font-size:12px !important;
		background-color:#ecf8fd;
		color:#256c89 !important;
		width:100%;
	}
		h2{
		font-family:Arial, Helvetica, sans-serif;
		font-size:18px;
		color:#256c89;
	}
</style>
<table cellpadding="0" border="0" width="500" align="center" cellspacing="2">
	<tr>
		<td>
		<table id="rounded-corner" class="desc" border="0" cellpadding="10" cellspacing="0">
				<tr>
						<td width="150">Student Family Name</td>
						<td><?php echo $student->family_name;?></td>
					
				</tr>
				 <tr>
						<td>Student Name</td>
						<td><?php echo $student->four_name;?></td>
					
				</tr>
				 <tr>
						<td>Date of Birth</td>
						<td><?php echo $student->date_of_birth;?></td>
					
				</tr>
				   <tr>
						<td>Email</td>
						<td><?php echo $student->email;?></td>
					
				</tr>    
				<tr>
						<td width="150">Gander</td>
						<td><?php  echo $student->gender;?></td>
				</tr>
				 <tr>
						<td>Nationality</td>
						<td><?php echo $student->nationality;?></td>
				</tr>
				<tr>
						<td>Address </td>
						<td><?php  echo $student->address ;?></td>
				</tr>
				<tr>
						<td>Phone</td>
						<td><?php  echo $student->telephone;?></td>
				</tr>    
				<tr>
						<td>Fax</td>
						<td><?php  echo $student->fax;?></td>
				</tr>    
				<tr>
						<td>Ref id</td>
						<td><?php  echo $student->ref_id;?></td>
				</tr>   
		</table>		
		</td>
	</tr>
	<tr>
		<td><h3>Student Documents</h3></td>
	</tr>
	<tr><td height="20"></td></tr>
	<tr><td height="20"><div id="success_msg"></div></td></tr>
	<tr>
		<td>
		<div style="float:left;">
			<?php 
				foreach($student_docs as $documents){
			?>
			<div style="float:left; border:1px solid #69C; padding:10px; width:90px; margin:10px;">
				<div style="float:left;"></div><a href="<?php echo base_url();?>uploadfiles/student_documents/<?php echo $documents->filename;?>" target="_blank"><img title="Check to show the College this file" src="<?php echo base_url();?>/theme/admin-images/pdf.jpg" /></a>
				<input type="checkbox" name="check" alt="Check this to show the College" id="files<?php echo $documents->id;?>" onclick="return changeStatus(<?php echo $documents->id;?>)" <?php if($documents->status == 1) echo "checked";?> /><br />
				<a href="<?php echo base_url();?>uploadfiles/student_documents/<?php echo $documents->filename;?>" target="_blank"><?php echo substr($documents->filename,10);?>
                                    <a href="<?php echo base_url();?>admin_main/students_info/delete_student_document/<?php echo $documents->id; ?>/<?php echo $student_id; ?>">Delete</a>
			</div>
			<?php } ?>
		</div>
		</td>
	</tr> 
	<tr>
		<td><h3>College Files</h3></td>
	</tr>
		<tr><td height="20"></td></tr>
	<tr>
		<td>
		<div style="float:left;">
			<?php 
				foreach($college_docs as $documents){
			?>
			<div style="float:left; border:1px solid #69C; padding:10px; width:90px; margin:10px;">
				<a href="<?php echo base_url();?>uploadfiles/student_documents/<?php echo $documents->filename;?>" target="_blank"><img title="Check to show the Student this file" src="<?php echo base_url();?>/theme/admin-images/pdf.jpg" /></a>
				<input type="checkbox" name="check" id="files<?php echo $documents->id;?>" onclick="return changeStatus(<?php echo $documents->id;?>)" <?php if($documents->status == 1) echo "checked";?> />
				<br /><a href="<?php echo base_url();?>uploadfiles/student_documents/<?php echo $documents->filename;?>" target="_blank"><?php echo substr($documents->filename,10);?></a><br />
                                <a href="<?php echo base_url();?>admin_main/students_info/delete_college_document/<?php echo $documents->id; ?>/<?php echo $student_id; ?>">Delete</a>
			</div>
			<?php } ?>
		</div>
		</td>
	</tr> 

	<tr>
		<td><h3>Admin Files</h3></td>
	</tr>
		<tr><td height="20"></td></tr>
	<tr>
		<td>
		<div style="float:left;">
			<?php 
				foreach($admin_docs as $documents){
			?>
			<div style="float:left; border:1px solid #69C; padding:10px; width:90px; margin:10px;">
				<a href="<?php echo base_url();?>uploadfiles/student_documents/<?php echo $documents->filename;?>" target="_blank"><img src="<?php echo base_url();?>/theme/admin-images/pdf.jpg" /></a>
				<input type="checkbox" name="check" id="files<?php echo $documents->id;?>" onclick="return changeStatus(<?php echo $documents->id;?>)" <?php if($documents->status == 1) echo "checked";?> />
				<br /><a href="<?php echo base_url();?>uploadfiles/student_documents/<?php echo $documents->filename;?>" target="_blank"><?php echo substr($documents->filename,10);?></a><br />
				<a href="<?php echo base_url();?>admin_main/students_info/delete_admin_doc/<?php echo $documents->id; ?>/<?php echo $student->id;?>">Delete</a>
			</div>
			<?php } ?>
		</div>
		</td>
	</tr> 

	<tr>
		<td>
		<table cellpadding="0" style="margin:10px;" cellspacing="5">
			<form name="student_document" method="post">
		   <!-- <tr>
				<td>Name</td>
				<td><input type="text" name="txtname"  id="txtname" required/></td>
			</tr>-->
			<tr>
				<td>Select File</td>
				<td><!--<input type="file" name="txtfile" style=" height:40px;"  id="txtfile"/>-->
					<div id="queue"></div>
					<input id="file_upload" name="file_upload" type="file" multiple="true">
				</td>
			</tr>
			</form>
		</table>
		</td>
	</tr>
</table>
     </div><!-- end of right content-->                    
  </div>   <!--end of center content -->               
  <div class="clear"></div>
</div> <!--end of main content-->