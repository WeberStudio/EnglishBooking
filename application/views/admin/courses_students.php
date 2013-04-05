<?php 
//  $CI =& get_instance();
//  $CI->load->model('admin/colleges_model');
//  $collegeID = $CI->colleges_model->getcollegeid($course[0]->branch_id);
?>
<script language="javascript">
	function check_status(val,courseidorignal){
	  if ($('#course'+val).is(":checked")){	
			var checkvalue = '1';	
		} else {
			var checkvalue = '0';
		}	
        	$.ajax({
                type: "GET",
                url: "<?php echo base_url();?>admin_main/courses_students/upadtestudent",
                data: {
                    'CourseID': val,
					'Status': checkvalue,
                                        'courseidorignal':courseidorignal
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
        function updateprocess(value,id){
       
            $.ajax({
                    type: "GET",
                    url: "<?php echo base_url();?>admin_main/courses_students/updatecoursestatus",
                    data: {
                        'value': value,
                                            'id':id
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
        
    <h2>Courses of <?php // echo $course[0]->name;?>
	</h2> 
     <?php /*?><label><a href="<?php echo base_url();?>admin_main/colleges/getList">Colleges</a></label>&nbsp;-->&nbsp;<label><a href="<?php echo base_url();?>admin_main/branches_detail/branches_detl/<?php echo $collegeID;?>">Branches</a></label><?php */?>
	<div style="clear:both"></div>
	<h4 style="color:#F00; text-align:center"><?php echo $this->session->flashdata('msg')?></h4>
	<h4 id="success_msg" style="text-align:center; color:#F00;"></h4>
        <form name="cform" method="post" action="">            
		<table id="rounded-corner" summary="2007 Major IT Companies' Profit">
			<thead>
				<tr>
					<th scope="col" class="rounded-company"></th>
					<th scope="col" class="rounded">Student Name </th>
					<th scope="col" class="rounded">Email</th>
					<th scope="col" class="rounded">Phone</th>
					<th scope="col" class="rounded">Gender</th>
                                         <th scope="col" class="rounded">Process</th>
                                        <th scope="col" class="rounded">Status</th>
					<th scope="col" class="rounded">View</th>
					
				</tr>
			</thead>
			 
			<tbody>
			 <?php
				$index = 0; 
				 foreach($student as $result ) { 		 
				 $index ++;
			 ?>
				<tr>
					<td><?php echo $index;?></td>
					<td><?php echo $result->four_name;?></td>
					<td><?php echo $result->email;?></td>
					<td><?php echo $result->telephone ;?></td>
					<td><?php echo $result->gender;?></td>
                                        <td><select onchange="updateprocess(this.value,<?php echo $result->selected_courseid;?>)"><option value="1" <?php if($result->process == 1){ echo 'selected="selected"';}?>>process</option><option value="2" <?php if($result->process == 2){ echo 'selected="selected"';}?>>Canceled</option><option value="3" <?php if($result->process == 3){ echo 'selected="selected"';}?>>completed</option></select></td>
                                        <td><input type="checkbox" id="course<?php echo $result->id;?>" <?php if($result->showcustomer == 1 ) { ?> checked="checked" <?php } ?> onclick="return check_status(this.value,<?php echo $result->branch_id;?>)" value="<?php echo $result->id;?>" name="course"></td>
					<td><a href="<?php echo base_url();?>admin_main/courses_detail/course_popup/<?php echo $result->id;?>">Click Me</a>
						<?php 
					/*	$atts = array(
						  'width'      => '800',
						  'height'     => '600',
						  'scrollbars' => 'yes',
						  'status'     => 'yes',
						  'resizable'  => 'yes',
						  'screenx'    => '0',
						  'screeny'    => '0'
						);
						echo anchor_popup('admin_main/courses_detail/course_popup/'.$result->id, 'Click&nbsp;Me!', $atts);  */?>
					</td>
				</tr>
				
				 <?php } ?>  
			</tbody>
		</table>
     </form>
     </div><!-- end of right content-->                    
  </div>   <!--end of center content -->               
  <div class="clear"></div>
</div> <!--end of main content-->