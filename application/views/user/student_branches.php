<script>
   $(function () {
   $('#search').keyup(function () {
      
        var that = this,
        value = $(this).val();
        

        if (value.length >= 2 ) {
        	$('#srch_dv').show();
        	$('#srch_dv').html('<div align="center" style="margin-top:30px;"><img src="images/loader-new.gif" /></div>');
      
        	 	
        	$.ajax({
                type: "GET",
                url: "<?php echo base_url();?>user/Courses_detail/getstudentname",
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
function check(val3){
        var test = '#s'+val3;
       $('#search').val($(test).text());
    }
</script>
<div class="page_detail">
					<div class="headig">Course Details</div>
					<div class="line_c"></div>
                                         <tabel><tr>
                <td>
                    <form name="s_form"  id="s_form" method="post" action="<?php echo base_url(); ?>user/courses_detail/getstudents">
                        <input type="text" size="54" value="" name="search" id="search" placeholder="Search By Student  Name"   required autocomplete="off"/>  <input type="submit"  value="Search" class="NFButton">
                    <form>
                        <div id="srch_dv" class="srch_dv" style="display:none"></div>
                    </td>
        </tr></tabel> 
					<div class="clr"></div>
					<table cellpadding="0" class="b_detail" cellspacing="0">
						
						<tr><Td colspan="8" height="5"></Td></tr>
<!--								<tr style="font-weight:bold;">
									<td width="20"></td>
									<td width="150"><strong>Student Name</strong></td>
									<td width="140"><strong>Branch</strong></td>
									<td width="150"><strong>Course</strong></td>
									<td width="120" align="center"><strong>Messages</strong></td>
									<td width="120" align="center"><strong>Detail</strong></td>
									<td></td>
								</tr>
-->						<tr>
							<td class="td_bord" colspan="8">
							<table cellpadding="0" width="100%" border="0" cellspacing="0">
								<tr style="font-weight:bold; height:40px;">
									<td ></td>
									<td><strong>Student Name</strong></td>
									<td><strong>Branch</strong></td>
									<td><strong>Course</strong></td>
									<td width="120" align="center"><strong>Messages</strong></td>
									<td width="120" align="center"><strong>Detail</strong></td>
									<td></td>
								</tr>	
                                                                    <?php 
                                                                    //print_r($branches);
                                                                    if(!empty($branches)){
									$i = 1;
								foreach($branches as $result ) { 
								?>
                                
                                <tr <?php if($i%2 != '0'){ echo 'class="cell1"';} else { echo 'class="cell2"';} ?> >
									
<!--									<td><?php echo $result->name;?></td>
                                    <td align="right"><a href="<?php echo base_url();?>user/courses_detail/studentviewCource/<?php echo $result->name;?>/<?php echo $result->id;?>">Course</a></td>
                                    
									<td width="20"></td>
-->								
									<td width="20" ></td>
									<td width="180" style="text-transform:capitalize;"><?php echo $result->family_name;?></td>
									<td width="180"><?php echo $result->BranchName;?></td>
									<td width="180"><?php echo $result->courcename;?></td>
									<td width="120" align="center"><a href="<?php echo base_url();?>user/customer_student_messages/get_messages/<?php echo $result->id;?>/<?php echo $result->Course_ID;?>">Messages</a></td>
                                    <td align="center" width="120"><a href="<?php echo base_url();?>user/student_view/view_student/<?php echo $result->Student_profile_id;?>">View Detail</a></td>
									<td width="20"></td>
								</tr>
                               
                                <?php $i++; } }?>
								
							</table>
							</td>
						</tr>
					</table>
					<div class="clr"></div>
					<?php echo $this->pagination->create_links();?>
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