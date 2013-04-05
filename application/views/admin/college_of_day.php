<script language="javascript">
	function onclickevent(val1,val2){  
      var value = val1;
             	 	
        	$.ajax({
                type: "GET",
                url: "<?php echo base_url();?>admin_main/ranking/college_of_day",
                data: {
                    'collegeID': value, 
                    'selecteddate':val2
                },
                dataType: "text",
                success: function(msg){
					
                 /* if (value==$(that).val()) {*/1
                    //Receiving the result of search here
                    $("#success_msg").html(msg);
                  /*  }*/                }
            });
		}
$(function() {
    $('.usedatepicker').live('click', function(){
        $(this).datepicker({showOn:'focus'});
    });
});
    </script>
 <div class="right_content">        
    <h2>College Registered Users List</h2> 
    <tabel><tr>
                <td>
                    <form name="s_form"  id="s_form" method="post" action="<?php echo base_url(); ?>admin_main/ranking/collegeofday">
                        <input type="text" size="54" value="" name="search" id="search" placeholder="Search By College Name"   required autocomplete="off"/>  <input type="submit"  value="Search" class="NFButton">
                    <form>
                    </td>
        </tr></tabel>
	<div style="clear:both"></div>
	<h4 id="success_msg" style="text-align:center; color:#F00;"></h4>
		<table id="rounded-corner" summary="2007 Major IT Companies' Profit">
			<thead>
				<tr>
					<th scope="col" class="rounded-company"></th>
					<th scope="col" class="rounded">College Name </th>
					<th scope="col" class="rounded">College Unique ID</th>
					<th scope="col" class="rounded">College Email ID</th>
					<th scope="col" class="rounded">College of the Day  Date</th>
				</tr>
			</thead>
			   <!-- <tfoot>
				<tr>
					<td colspan="6" class="rounded-foot-left"><em>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut.</em></td>
					<td class="rounded-foot-right">&nbsp;</td>
		
				</tr>
			</tfoot>-->
			<tbody>
			<form name="form" method="post">
			 <?php
			 	
				$index = 0; 
				 foreach($colleges as $result ) { 
				 $index ++;
			 ?>
				<tr>
					<td><?php echo $index;?></td>
					<td><a href="<?php echo base_url();?>admin_main/branches_detail/branches_detl/<?php echo $result->id; ?>"><?php echo $result->collegename;?></a></td>
					<td><?php echo $result->rand_id;?></td>
					<td><?php echo $result->useremail;?></td>
                                        <td align="center"><input type="text" size="20" value="<?php echo $this->rankings->getcollegeofdaydate($result->id); ?>" name="startdate_collegeofday" id="startdate_collegeofday<?php echo $result->id; ?>"  onchange="return onclickevent(<?php echo $result->id; ?>,this.value);" class="usedatepicker"/> 
                                            <!--<input type="radio" name="college_of_day" value="<?php echo $result->id; ?>" onclick="return onclickevent(<?php echo $result->id; ?>);"
						<?php if($day_college->colleg_id == $result->id) echo "checked";?> />--></td>
                                        
				</tr>
				 <?php } ?>  
				 </form>
			</tbody>
		</table>
     </div><!-- end of right content-->
  </div>   <!--end of center content -->                   
    <div class="clear"></div>
    </div> <!--end of main content-->