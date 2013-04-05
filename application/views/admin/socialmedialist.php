
 <div class="right_content">            
        
    <h2>Social Media List</h2> 
            <a class="bt_blue" href="<?php echo base_url();?>admin_main/social/addnewsocialmedia"><span class="bt_blue_lft"></span><strong>Add New  Social media</strong><span class="bt_blue_r"></span></a>                             
                    
<table id="rounded-corner" summary="2007 Major IT Companies' Profit">
    <thead>
    	<tr>
        	<th scope="col" class="rounded-company"></th>
            <th scope="col" class="rounded">ID </th>
            <th scope="col" class="rounded">Title</th>
            <th scope="col" class="rounded">URL</th>
            <th scope="col" class="rounded">Icon</th>
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
     <?php foreach($list as $result ) { 
	 
	 ?>
    	<tr>
        	<td>&nbsp;</td>
            <td><?php echo $result->id;?></td>
            <td><?php echo $result->title;?></td>
            <td><?php echo $result->url;?></td>
            <td><img src="<?php echo base_url();?>uploadfiles/scoialicone/<?php echo $result->image;?>" alt="No image"  /></td>
			
            <td><a href="<?php echo base_url();?>admin_main/social/editsocialmedia/<?php echo $result->id; ?>"><img src="<?php echo base_url();?>theme/admin-images/user_edit.png" alt="" title="" border="0" /></a></td>
            <td><a href="<?php echo base_url();?>admin_main/social/deletesocialmedia/<?php echo $result->id; ?>" class="ask"><img src="<?php echo base_url();?>theme/admin-images/trash.png" alt="" title="" border="0" /></a></td>
        </tr>
        
    	 <?php } ?>  
        
    </tbody>
</table>
     
     </div><!-- end of right content-->
            
                    
  </div>   <!--end of center content -->               
                    
                    
    
    
    <div class="clear"></div>
    </div> <!--end of main content-->