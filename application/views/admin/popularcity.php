
 <div class="right_content">            
        
    <h2>Popular cities</h2> 
    <!-- <h2>Warning Box examples</h2>
      
     <div class="warning_box">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut.
     </div>
     <div class="valid_box">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut.
     </div>
     <div class="error_box">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut.
     </div>  
           
     <h2>Nice Form example</h2>-->
     
         <div class="form">
         <form action="<?php echo base_url();?>admin_main/ranking/updatepopularcity" method="post" class="niceform" name="addnewUser" id="addnewUser">
         
                <fieldset>
                    <dl>
                        <dt><label for="email">City 1:</label></dt>
                        <dd><input type="text" name="city1" id="city1" size="54"  required   value="<?php echo $list->cityname;?>"/></dd>
                    </dl>
                    <dl>
                        <dt><label for="password">City 2:</label></dt>
                        <dd><input type="text" name="city2" id="city2" size="54" required value="<?php echo $list->city2;?>"/></dd>
                    </dl>
                      <dl>
                        <dt><label for="Login Name">City 3:</label></dt>
                        <dd><input type="text" name="city3" id="city3" size="54" required value="<?php echo $list->city3;?>"/></dd>
                    </dl>
                      <dl>
                        <dt><label for="Email address">City 4:</label></dt>
                        <dd><input type="text" name="city4" id="city4" size="54" required value="<?php echo $list->city4;?>"/></dd>
                    </dl>
                      <dl>
                        <dt><label for="Skype ID">City 5:</label></dt>
                        <dd><input type="text" name="city5" id="city5" size="54" value="<?php echo $list->city5;?>" /></dd>
                    </dl>
                      
                    
                     <dl class="submit">
                    <input type="submit" name="submit" id="submit" value="Submit" />
                     </dl>
                     
                     
                    
                </fieldset>
                
         </form>
         </div>  
      
     
     </div><!-- end of right content-->
            
                    
  </div>   <!--end of center content -->               
                    
                    
    
    
    <div class="clear"></div>
    </div> <!--end of main content-->