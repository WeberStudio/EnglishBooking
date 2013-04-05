<script language="javascript">
function onclickevent(val1){
            
      var popupval ="#pop_"+val1;
        if ($(popupval).is(":checked")) {
            val2 = '1';
        } else {
           val2 = '0'; 
        }
        
       // alert(val2);
        //exit;
      var value = val1;
             	 	
        	$.ajax({
                type: "GET",
                url: "<?php echo base_url();?>admin_main/ranking/populercourses_update",
                data: {
                    'courseid': value,
                    'status':val2
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
//       $(function() {
//        $( "#startdate_courseofday" ).datepicker();
//
//    });         
</script>
 <div class="right_content">        
    <h2>College Registered User's List</h2> 
     <tabel><tr>
                <td>
                    <form name="s_form"  id="s_form" method="post" action="<?php echo base_url(); ?>admin_main/ranking/populercourses">
                        <input type="text" size="54" value="" name="search" id="search" placeholder="Search By Course Name"   required autocomplete="off"/>  <input type="submit"  value="Search" class="NFButton">
                    <form>
                    </td>
        </tr></tabel>
	<div style="clear:both"></div>
	<h4 id="success_msg" style="text-align:center; color:#F00;"></h4>
<table id="rounded-corner" summary="2007 Major IT Companies' Profit">
    <thead>
    	<tr>
        	<th scope="col" class="rounded-company"></th>
            <th scope="col" class="rounded">Course Name </th>
            <th scope="col" class="rounded">College of the Day</th>
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
         /*print_r($course[0]); 
         echo $course[0]->id;*/
		$index = 0;
		foreach ($course_list as $course_res){
			$index ++;
                        
                      
	?>
    	<tr>
        	<td><?php echo $index;?></td>
            <td><?php echo $course_res->courcename;?></td>
            <td align="center">  <input type="checkbox" name="stauscheck" id="pop_<?php echo $course_res->id; ?>" onclick="return onclickevent(<?php echo $course_res->id; ?>);" <?php if($this->rankings->getcheckedcourse($course_res->id)=='1'){ echo "checked='checked'";}?>> 
                <!--<input type="radio" name="college_of_day" value="1" onclick="return onclickevent(1);" <?php if($course->course_id == $course_res->id) echo "checked";?>  />--></td>
        </tr>
		<?php } ?>
		
	 </form>
    </tbody>
</table>
     
     </div><!-- end of right content-->
  </div>   <!--end of center content -->                   
    <div class="clear"></div>
    </div> <!--end of main content-->