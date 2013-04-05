
 <div class="right_content">            
        
    <h2>Categories  List</h2>   
      <div style="clear:both"></div>              
<table id="rounded-corner" summary="2007 Major IT Companies' Profit">
    <thead>
    	<tr>
            <th scope="col" class="rounded-company"></th>
            <th scope="col" class="rounded">category  id </th>
            <th scope="col" class="rounded">category name</th>
            <th scope="col" class="rounded">category Status</th>
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
     <?php
	 	$index = 0; 
		 foreach($categorie as $result ) { 
		 $index ++;
	 ?>
    	<tr>
        	<td></td>
            <td><?php echo $result->id; ?></td>
            <td><?php echo $result->name; ?></td>
            <td><?php echo $result->status; ?></td>
            <td><a href="<?php echo base_url();?>admin_main/colleges/editcategory/<?php echo $result->id; ?>">Edit</a></td>
        </tr>
        
    	 <?php } ?>  
    </tbody>
</table>
     
     </div><!-- end of right content-->
            
                    
  </div>   <!--end of center content -->               
                    
                    
    
    
    <div class="clear"></div>
    </div> <!--end of main content-->