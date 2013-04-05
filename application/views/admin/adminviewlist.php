
 <div class="right_content">            
        
    <h2>Admin Users List</h2> 
                    
                    
<table id="rounded-corner" summary="2007 Major IT Companies' Profit">
    <thead>
    	<tr>
        	<th scope="col" class="rounded-company"></th>
            <th scope="col" class="rounded">User Name </th>
            <th scope="col" class="rounded">User Login ID</th>
            <th scope="col" class="rounded">User Skype ID</th>
            <th scope="col" class="rounded">Primary Contact No</th>
            <th scope="col" class="rounded">Edit</th>
            <th scope="col" class="rounded-q4">Delete</th>
        </tr>
    </thead>
       <!-- <tfoot>
    	<tr>
        	<td colspan="6" class="rounded-foot-left"><em>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut.</em></td>
        	<td class="rounded-foot-right">&nbsp;</td>

        </tr>
    </tfoot>-->
    <tbody>
     <?php foreach($results as $result ) { 
	 
	 ?>
    	<tr>
        	<td>&nbsp;</td>
            <td><?php echo $result->user_name;?></td>
            <td><?php echo $result->user_loginname;?></td>
            <td><?php echo $result->user_skypeid;?></td>
            <td><?php echo $result->user_address;?></td>
			<?php if($result->user_id != '1') { ?>
            <td><a href="<?php echo base_url();?>admin_main/user/UserEdit/<?php echo $result->user_id; ?>"><img src="<?php echo base_url();?>theme/admin-images/user_edit.png" alt="" title="" border="0" /></a></td>
            <td><a href="<?php echo base_url();?>admin_main/user/Userdelete/<?php echo $result->user_id; ?>" class="ask"><img src="<?php echo base_url();?>theme/admin-images/trash.png" alt="" title="" border="0" /></a></td>
            <?php } else {
				echo "<td>&nbsp;</td><td>&nbsp;</td>";	
			}
			?>
        </tr>
        
    	 <?php } ?>  
        
    </tbody>
</table>
     
     </div><!-- end of right content-->
            
                    
  </div>   <!--end of center content -->               
                    
                    
    
    
    <div class="clear"></div>
    </div> <!--end of main content-->