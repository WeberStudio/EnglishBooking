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
                url: "<?php echo base_url();?>admin_main/Colleges/searchcollege",
                data: {
                    'keywords1' : value
                },
                dataType: "text",
                success: function(msg){
					console.log(msg)
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
 <div class="right_content">            
        
    <h2>College Registered User's List</h2> 
      <tabel><tr>
                <td>
                    <form name="s_form"  id="s_form" method="post" action="<?php echo base_url(); ?>admin_main/Colleges/getList">
                        <input type="text" size="54" value="" name="search" id="search" placeholder="Search By College Name"   required autocomplete="off"/>  <input type="submit"  value="Search" class="NFButton">
                    <form>
                        <div id="srch_dv" class="srch_dv" style="display:none"></div>
                    </td>
        </tr></tabel>               
      <div style="clear:both"></div>              
<table id="rounded-corner" summary="2007 Major IT Companies' Profit">
    <thead>
    	<tr>
        	<th scope="col" class="rounded-company"></th>
            <th scope="col" class="rounded">College Name </th>
            <th scope="col" class="rounded">College Unique ID</th>
            <th scope="col" class="rounded">College Email ID</th>
            <th scope="col" class="rounded">College Password</th>
            <th scope="col" class="rounded">Edit</th>
            <th scope="col" class="rounded">Delete</th>
            <th scope="col" class="rounded-q4">View</th>
        </tr>
    </thead>
       <!-- <tfoot>
    	<tr>
        	<td colspan="6" class="rounded-foot-left"><em>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut.</em></td>
        	<td class="rounded-foot-right">&nbsp;</td>

        </tr>
    </tfoot>-->
    <tbody>
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
            <td><?php echo $result->password;?></td>
            <td><a href="<?php echo base_url();?>admin_main/colleges/editCollege/<?php echo $result->id; ?>"><img src="<?php echo base_url();?>theme/admin-images/user_edit.png" alt="" title="" border="0" /></a></td>
            <td><a href="<?php echo base_url();?>admin_main/colleges/deleteCollege/<?php echo $result->id; ?>" class="ask"><img src="<?php echo base_url();?>theme/admin-images/trash.png" alt="" title="" border="0" /></a></td>
            <td><a href="<?php echo base_url();?>admin_main/colleges/viewCollegeDetails/<?php echo $result->id; ?>" >Click Me!</a><?php 
            /*$atts = array(
              'width'      => '800',
              'height'     => '600',
              'scrollbars' => 'yes',
              'status'     => 'yes',
              'resizable'  => 'yes',
              'screenx'    => '0',
              'screeny'    => '0'
            );
            echo anchor_popup('admin_main/colleges/viewCollegeDetails/'.$result->id, 'Click Me!', $atts);*/?></td>
        </tr>
        
    	 <?php } ?>  
    </tbody>
</table>
     
     </div><!-- end of right content-->
            
                    
  </div>   <!--end of center content -->               
                    
                    
    
    
    <div class="clear"></div>
    </div> <!--end of main content-->