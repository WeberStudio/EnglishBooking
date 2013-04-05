<style type="text/css">
	.desc{
		font-family:Arial, Helvetica, sans-serif;
		font-size:12px !important;
		background-color:#ecf8fd;
		color:#256c89 !important;
		width:100%;
	}
</style>
<script language="javascript">
	function changeStatus(cid){
			
		//alert(cid);
      var popupval ="#files"+cid;
        if ($(popupval).is(":checked")) {
            val2 = '1';
        } else {
           val2 = '0'; 
        }

      var value = cid;
	   // alert(value);
        	$.ajax({
                type: "GET",
                url: "<?php echo base_url();?>admin_main/messages/message_status_update",
                data: {
                    'id': value,
                    'status':val2
                },
                dataType: "text",
                success: function(msg){
				//	alert(msg);
                 /* if (value==$(that).val()) {*/1
                    //Receiving the result of search here
                    $("#success_msg").html(msg);
                  /*  }*/                }
            });
		}

	function adminStatus(cid){
			
		//alert(cid);
      var studentval ="#student"+cid;
        if ($(studentval).is(":checked")) {
            student = '1';
        } else {
           student = '0'; 
        }
		
      var courseval ="#course"+cid;
        if ($(courseval).is(":checked")) {
            course = '1';
        } else {
           course = '0'; 
        }
      var value = cid;
	   // alert(value);
        	$.ajax({
                type: "GET",
                url: "<?php echo base_url();?>admin_main/messages/admin_status_update",
                data: {
                    'id': value,
                    'student_status':student,
					'course_status':course
                },
                dataType: "text",
                success: function(msg){
					alert(msg);
                 /* if (value==$(that).val()) {*/1
                    //Receiving the result of search here
                    $("#success_msg").html(msg);
                  /*  }*/                
				  }
            });
		}
</script>
 <div class="right_content">            
        
    <h2>Messages of <?php echo $student_chat[0]->student_name;?></h2> 
	<div style="clear:both"></div>
	<div id="success_msg"></div>
	<form name="customer_info" id="customer_info" method="post" action="<?php echo base_url();?>admin_main/messages/send_message">
	<table cellpadding="0" class="c_form" style="border:1px solid #CCC;" cellspacing="5">
		<tr><td colspan="2" height="10"></td></tr>
		<?php
			foreach($student_chat as $result){
				if($result->admin_name != ""){
					$name = $result->admin_name;
				}else if($result->student_name != ""){
					$name = $result->student_name;
				}else if($result->student_name != "0"){
					$name = "College";
				}
		?>
		<tr>
			<input type="hidden" name="student_id" value="<?php echo $result->student_id;?>" />
			<td width="500"><h3><?php echo $name;?></h3>
				<h5 style="float:right; text-align:right">
				<?php
				if($result->admin_name != ""){
				?>
					Show Student 
					<input type="checkbox" name="check" id="student<?php echo $result->id;?>" onclick="return adminStatus(<?php echo $result->id;?>)" <?php if($result->student_status == 1) echo "checked";?> />
					&nbsp;&nbsp;&nbsp;
					Show College
					<input type="checkbox" name="check" id="course<?php echo $result->id;?>" onclick="return adminStatus(<?php echo $result->id;?>)" <?php if($result->course_status == 1) echo "checked";?> />
				<?php } else{ ?>
					<input type="checkbox" name="check" id="files<?php echo $result->id;?>" onclick="return changeStatus(<?php echo $result->id;?>)" <?php if($result->status == 1) echo "checked";?> />
				<?php } ?>
				</h5>
			</td>							
		</tr>
		<tr>
			<td style="text-align:justify;"><?php echo $result->message;?></td>
		</tr>
		<?php } ?>
		<tr>
			<td><b>Message</b></td>
		</tr>
		<tr>
			<td align="center"><textarea name="message" id="message" style="width:480px; border:1px solid #699;" required ></textarea></td>
		</tr>
		<tr>
			<td colspan="2" align="right"><input type="submit" name="Submit" class="NFButton" value="Submit" /></td>
		</tr>
	</table>
	</form>
     </div><!-- end of right content-->
            
                    
  </div>   <!--end of center content -->               
                    
                    
    
    
    <div class="clear"></div>
    </div> <!--end of main content-->