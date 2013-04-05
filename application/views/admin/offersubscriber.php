
 <div class="right_content">            
        
    <h2>Offer letter subscriber  List</h2> 
            <a class="bt_blue" href="<?php echo base_url();?>admin_main/letter/getofferletter"><span class="bt_blue_lft"></span><strong>Download Offer letter CSV</strong><span class="bt_blue_r"></span></a>                             
                    
<table id="rounded-corner" summary="2007 Major IT Companies' Profit">
    <thead>
    	<tr>
        	<th scope="col" class="rounded-company"></th>
            <th scope="col" class="rounded">ID </th>
            <th scope="col" class="rounded-q4">email</th>
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
            <td><?php echo $result->email;?></td>
        </tr>
        
    	 <?php } ?>  
        
    </tbody>
</table>
     
     </div><!-- end of right content-->
            
                    
  </div>   <!--end of center content -->               
                    
                    
    
    
    <div class="clear"></div>
    </div> <!--end of main content-->