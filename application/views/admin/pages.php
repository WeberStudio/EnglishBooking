
 <div class="right_content">            
        
    <h2>Admin Users List</h2> 
          	<?php
				echo $this->session->flashdata('msg');
			?>						
          
                    
<table id="rounded-corner" summary="2007 Major IT Companies' Profit">
    <thead>
    	<tr>
        	<th scope="col" class="rounded-company"></th>
            <th scope="col" class="rounded">Title </th>
            <th scope="col" class="rounded">Description</th>
			<th scope="col" class="rounded">Position</th>
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
     <?php foreach($pages as $page ) { 
	 $description = substr(html_entity_decode($page->description),0,100);
	 
	 ?>
    	<tr>
        	<td>&nbsp;</td>
            <td><?php echo $page->title;?></td>
            <td><?php echo $page->meta_description; //$description;?></td>
			<td><?php echo $page->position;?></td>
            <td><a href="<?php echo base_url();?>admin_main/addpages/EditPage/<?php echo $page->id; ?>"><img src="<?php echo base_url();?>theme/admin-images/user_edit.png" alt="" title="" border="0" /></a></td>
            <td>
				<?php if($page->id >=3){ ?>
					<a href="<?php echo base_url();?>admin_main/addpages/Pagedelete/<?php echo $page->id; ?>" class="ask"><img src="<?php echo base_url();?>theme/admin-images/trash.png" alt="" title="" border="0" /></a>
				<?php } ?>
			</td>
        </tr>
        
    	 <?php } ?>  
        
    </tbody>
</table>
     
     </div><!-- end of right content-->
            
                    
  </div>   <!--end of center content -->               
                    
                    
    
    
    <div class="clear"></div>
    </div> <!--end of main content-->