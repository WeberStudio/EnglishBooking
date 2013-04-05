<script language="javascript">
	function onclickevent(val1,selecteddate){ 
      value = val1;
             	 	
        	$.ajax({
                type: "GET",
                url: "<?php echo base_url();?>admin_main/ranking/save_course_of_day",
                data: {
                    'courseID': value, 
                    'selecteddate':selecteddate
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
    <h2>College Registered Users List</h2> 
     <tabel><tr>
                <td>
                    <form name="s_form"  id="s_form" method="post" action="<?php echo base_url(); ?>admin_main/ranking/courseofday">
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
            <td align="center"><input type="text" size="20" value="<?php echo $this->rankings->getcourseofdaydate($course_res->id); ?>" name="startdate_courseofday" id="startdate_courseofday<?php echo $course_res->id;?>"   class="usedatepicker" onchange="return onclickevent(<?php echo $course_res->id;?>,this.value);"/> 
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