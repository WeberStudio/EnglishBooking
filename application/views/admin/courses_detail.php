<?php 
  $CI =& get_instance();
  $CI->load->model('admin/colleges_model');
  $collegeID = $CI->colleges_model->getcollegeid($course[0]->branch_id);
?>
<script language="javascript">
	function check_status(val){
	  if ($('#course'+val).is(":checked")){	
			var checkvalue = '1';	
		} else {
			var checkvalue = '0';
		}	
        	$.ajax({
                type: "GET",
                url: "<?php echo base_url();?>admin_main/courses_detail/courceStatus",
                data: {
                    'CourseID': val,
					'Status': checkvalue
                },
                dataType: "text",
                success: function(msg){
					$("#success_msg").fadeIn('slow', function() {
        				$("#success_msg").html(msg);// Animation complete
     				 });
					$("#success_msg").fadeOut(5000);
                                
				}
            });
	}
</script>
 <div class="right_content">            
        
    <h2>Courses of <?php echo $course[0]->name;?>
		<a class="bt_blue" href="<?php echo base_url();?>admin_main/courses_detail/addcource/<?php echo $course[0]->branch_id;?>/<?php echo $course[0]->name;?>"><span class="bt_blue_lft"></span><strong>Add New Course</strong><span class="bt_blue_r"></span></a>
	</h2> 
     <label><a href="<?php echo base_url();?>admin_main/colleges/getList">Colleges</a></label>&nbsp;-->&nbsp;<label><a href="<?php echo base_url();?>admin_main/branches_detail/branches_detl/<?php echo $collegeID;?>">Branches</a></label>
	<div style="clear:both"></div>
	<h4 style="color:#F00; text-align:center"><?php echo $this->session->flashdata('msg')?></h4>
	<h4 id="success_msg" style="text-align:center; color:#F00;"></h4>
        <form name="cform" method="post" action="">            
		<table id="rounded-corner" summary="2007 Major IT Companies' Profit">
			<thead>
				<tr>
					<th scope="col" class="rounded-company"></th>
					<th scope="col" class="rounded">Course Name </th>
					<th scope="col" class="rounded">Duration</th>
					<th scope="col" class="rounded">Start Date</th>
					<th scope="col" class="rounded">Offer Price</th>
					<th scope="col" class="rounded">Status</th>
					<th scope="col" class="rounded">Edit</th>
					<th scope="col" class="rounded">Delete</th>
					<th scope="col" class="rounded">View</th>
					<th scope="col" class="rounded-q4">Students</th>
					
				</tr>
			</thead>
			 
			<tbody>
			 <?php
				$index = 0; 
				 foreach($course as $result ) { 		 
				 $index ++;
			 ?>
				<tr>
					<td><?php echo $index;?></td>
					<td><?php echo $result->courcename;?></td>
					<td><?php echo $result->duration;?></td>
					<td><?php echo $result->startdate;?></td>
					<td><?php echo $result->offerprice;?></td>
					<td><input type="checkbox" name="course" value="1" 
						onclick="return check_status(<?php echo $result->id;?>)" <?php if($result->status == '1') echo "checked='checked'";?> id="course<?php echo $result->id;?>" />
					</td>
					<td><a href="<?php echo base_url();?>admin_main/courses_detail/editcourse/<?php echo $result->id;?>"><img src="<?php echo base_url();?>theme/admin-images/user_edit.png" alt="" title="" border="0" /></a></td>
					<td><a href="<?php echo base_url();?>admin_main/courses_detail/deletecource/<?php echo $result->id;?>/<?php echo $course[0]->branch_id;?>" class="ask"><img src="<?php echo base_url();?>theme/admin-images/trash.png" alt="" title="" border="0" /></a></td>
					<td><a href="<?php echo base_url();?>admin_main/courses_detail/course_popup/<?php echo $result->id;?>">Click&nbsp;Me</a>
					</td>
					<td><a href="<?php echo base_url();?>admin_main/courses_students/course_student/<?php echo $result->id;?>" title="View registered students of this course"><img src="<?php echo base_url();?>theme/admin-images/rs.png" alt="" title="" border="0" /></a></td>
				</tr>
				
				 <?php } ?>  
			</tbody>
		</table>
     </form>
     </div><!-- end of right content-->                    
  </div>   <!--end of center content -->               
  <div class="clear"></div>
</div> <!--end of main content-->