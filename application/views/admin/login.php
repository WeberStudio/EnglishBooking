<div id="main_container">

	<div class="header_login">
    <div class="logo"><a href="#"><img src="<?php echo base_url();?>theme/admin-images/logo.png" alt="" title="" border="0" /></a></div>
    
    </div>

     
         <div class="login_form">
         
         <h3>Admin Panel Login</h3>
         
         <a href="#" class="forgot_pass">Forgot password</a> 
         
         <form action="<?php  echo site_url('admin/login'); ?>" method="post" class="niceform">
         <?php echo validation_errors(); ?>
                <fieldset>
                    <dl>
                        <dt><label for="email">Username:</label></dt>
                        <dd><input type="text" autocomplete="off" name="username" id="username" size="54" /></dd>
                    </dl>
                    <dl>
                        <dt><label for="password">Password:</label></dt>
                        <dd><input type="password" name="password" id="password" size="54" autocomplete="off"/></dd>
                    </dl>
                    
                    <!--<dl>
                        <dt><label></label></dt>
                        <dd>
                    <input type="checkbox" name="interests" id="interests" value="" /><label class="check_label">Remember me</label>
                        </dd>
                    </dl>-->
                    
                     <dl class="submit">
                    <input type="submit" name="submit" id="submit" value="Enter" />
                     </dl>
                    
                </fieldset>
                
         </form>
         </div>
          
    <div class="footer_login">
    
    	<div class="left_footer_login">IN ADMIN PANEL | Powered by <a href="<?php echo base_url();?>">English Booking</a></div>
    	<div class="right_footer_login"><a href="<?php echo base_url();?>"><img src="images/indeziner_logo.gif" alt="" title="" border="0" /></a></div>
    
    </div>

</div>		
</body>
</html>