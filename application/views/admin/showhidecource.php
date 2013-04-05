<script language="javascript">
function onclickevent(val1){
     var status = 0;       
      var value = val1;
           if(value== 1){
                if ($('#collegeCheckbox').is(":checked")){
                  status = 1;
                } else {
                  status = 0;   
                }
           } else if(value==2){
              if ($('#courseCheckbox').is(":checked")){
                  status = 1;
                } else {
                  status = 0;   
                }
           }
             	 	
        	$.ajax({
                type: "GET",
                url: "<?php echo base_url();?>admin_main/ranking/updateshowhide",
                data: {
                    'id': value,
                    'value':status
                },
                dataType: "text",
                success: function(msg){
		  $("#success_msg").html(msg);
                }
            });
		}
  function onchnageit(val1 , val2){
  
  $.ajax({
                type: "GET",
                url: "<?php echo base_url();?>admin_main/ranking/updateshowhidetextname",
                data: {
                    'id': val1,
                    'value':val2
                },
                dataType: "text",
                success: function(msg){
		  $("#success_msg").html(msg);
                }
            });
  }              
                        
</script>
 <div class="right_content">        
    <h2>Show/hide  College / Course</h2> 
    
	<div style="clear:both"></div>
	<h4 id="success_msg" style="text-align:center; color:#F00;"></h4>
<table id="rounded-corner" summary="2007 Major IT Companies' Profit">
    <thead>
    	<tr>
            <th scope="col" class="rounded">Index </th>
            <th scope="col" class="rounded">Check box Show / hide</th>
        </tr>
    </thead>
    <tbody>
	<form name="form" method="post">
    	<tr>
            <td><input type="text" name="" id="" value="<?php echo $list['0']->text;?>"  onchange="onchnageit('1',this.value)" size="54"></td>
            <td align="center">  <input type="checkbox" name="collegeCheckbox" id="collegeCheckbox" onclick="return onclickevent('1');"  <?php if($list['0']->value == 1) { echo 'checked="checked"';} ?>> 
               
        </tr>
	<tr>
            <td><input type="text" name="" id="" value="<?php echo $list['1']->text;?>"  onchange="onchnageit('2',this.value)" size="54"></td>
            <td align="center">  <input type="checkbox" name="courseCheckbox" id="courseCheckbox" onclick="return onclickevent('2');" <?php if($list['1']->value == 1) { echo 'checked="checked"';} ?>> 
               
        </tr>	
	 </form>
    </tbody>
</table>
     
     </div><!-- end of right content-->
  </div>   <!--end of center content -->                   
    <div class="clear"></div>
    </div> <!--end of main content-->