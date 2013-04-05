
 <div class="right_content">            
        
    <h2>Email Template List</h2> 
	<a class="bt_blue" href="<?php echo base_url();?>admin_main/email/addnewemailtemplate">
		<span class="bt_blue_lft"></span><strong>Add New Email template</strong><span class="bt_blue_r"></span>
	</a>
	<div style="clear:both"></div>
	<h4 style="color:#F00; text-align:center"><?php echo $this->session->flashdata('msg')?></h4>
<table id="rounded-corner" summary="2007 Major IT Companies' Profit">
    <thead>
    	<tr>
        	<th scope="col" class="rounded-company"></th>
            <th scope="col" class="rounded">Template ID </th>
            <th scope="col" class="rounded">Email Name</th>
            <th scope="col" class="rounded">Title</th>
			<th scope="col" class="rounded-q4">Edit</th>
        </tr>
    </thead>
       <!-- <tfoot>
    	<tr>
        	<td colspan="6" class="rounded-foot-left"><em>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut.</em></td>
        	<td class="rounded-foot-right">&nbsp;</td>

        </tr>
    </tfoot>-->
    <tbody>
     <?php foreach($mails as $result ) { 
	 
	 ?>
    	<tr>
        	<td>&nbsp;</td>
            <td><?php echo $result->id;?></td>
            <td><?php echo $result->email_name;?></td>
			<td><?php echo $result->title;?></td>
            <td><a href="<?php echo base_url();?>admin_main/email/edit_template/<?php echo $result->id; ?>"><img src="<?php echo base_url();?>theme/admin-images/user_edit.png" alt="" title="" border="0" /></a></td>
        </tr>
        
    	 <?php } ?>  
        
    </tbody>
</table>
     
     </div><!-- end of right content-->
            
                    
  </div>   <!--end of center content -->               
                    
                    
    
    
    <div class="clear"></div>
    </div> <!--end of main content-->