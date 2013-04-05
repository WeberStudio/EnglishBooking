
 <div class="right_content">            
        
    <h2>Welcome To Admin Dashboard</h2> 
                    
    <div><?php echo $total;?></div>              
    <div>
            <?php 
                foreach ($list as $row) {
            ?>
        <a href="<?php echo base_url();?>admin/getnotifaction/<?php echo $row->id;?>" ><?php echo $row->text;?></a><br/> 
        <?php }?>
    </div>
    <div><?php echo $this->pagination->create_links();?></div>
     
     </div><!-- end of right content-->
            
                    
  </div>   <!--end of center content -->               
                    
                    
    
    
    <div class="clear"></div>
    </div> <!--end of main content-->