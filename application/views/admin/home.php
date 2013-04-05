
 <div class="right_content">            
        
    <h2>Welcome To Admin Dashboard</h2> 
                    
    <a class="bt_blue">
        <span class="bt_blue_lft"></span><strong><?php echo $total;?></strong><span class="bt_blue_r"></span>
    </a>  
    
    
    <table id="rounded-corner">
    <tbody>
      <?php 
      foreach ($list as $row) {
            ?>
        <tr>
            <td>&nbsp;</td>
            <td> <a href="<?php echo base_url();?>admin/getnotifaction/<?php echo $row->id;?>" ><?php echo $row->text;?></a></td>
        </tr>
        
         <?php } ?>  
        
    </tbody>
</table>
    
    
    <div><?php echo $this->pagination->create_links();?></div>
     
     </div><!-- end of right content-->
            
                    
  </div>   <!--end of center content -->               
                    
                    
    
    
    <div class="clear"></div>
    </div> <!--end of main content-->