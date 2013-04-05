<script>
   $(function () {
   $('#location').keyup(function () {
      
        var that = this,
        value = $(this).val();
        

        if (value.length >= 2 ) {
        	$('#srch_dv').show();
        	$('#srch_dv').html('<div align="center" style="margin-top:30px;"><img src="images/loader-new.gif" /></div>');
      
        	 	
        	$.ajax({
                type: "GET",
                url: "<?php echo base_url();?>admin_main/students_list/searchstent",
                data: {
                    'keywords1' : value
                },
                dataType: "text",
                success: function(msg){
                    //we need to check if the value is the same
                    if (value==$(that).val()) {
                    //Receiving the result of search here
                    $("#srch_dv").html(msg);
                    }
                }
            });
        }
    });

});
</script>
 <div class="right_content">            
        
    <h2>Registered Studetnts List</h2> 
     <tabel><tr>
                <td>
                    <form name="s_form"  id="s_form" method="post" action="<?php echo base_url(); ?>admin_main/students_list/Get_student_list/">
                        <input type="text" size="54" value="" name="location" id="location" placeholder="Search By Student Name"   required autocomplete="off"/>  <input type="submit"  value="Search" class="NFButton">
                         <div id="srch_dv" class="srch_dv" style="display:none"></div>
                        <form>
                    </td>
        </tr></tabel>               
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
					<th scope="col" class="rounded">Messages</th>
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
					<td><?php //echo $index;echo 
                                        $result->id;?></td>
					<td><?php echo $result->four_name;?></td>
					<td><?php echo $result->email;?></td>
					<td><?php echo $result->telephone ;?></td>
					<td><?php echo $result->gender;?></td>
					<td align="center"><a href="<?php echo base_url();?>admin_main/messages/get_student_messages/<?php echo $result->id;?>"><img src="<?php echo base_url();?>theme/admin-images/comment.png" alt="" title="" border="0" /></a></td>
					<td><a href="<?php echo base_url();?>admin_main/students_info/get_student_info/<?php echo $result->id;?>">Click&nbsp;Me</a></td>
				</tr>
				
				 <?php } ?>  
			</tbody>
		</table>
     </form>
        <?php echo $this->pagination->create_links();?>
     </div><!-- end of right content-->                    
  </div>   <!--end of center content -->               
  <div class="clear"></div>
</div> <!--end of main content-->