
 <div class="right_content">            
        
    <h2>Edit profile</h2> 
                    
  
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
         <form action="<?php echo base_url();?>admin_main/user/updateadminprofile" method="post" class="niceform" name="addnewUser" id="addnewUser">
         
                <fieldset>
                 <input type="hidden" name="hiddenUserID" id="hiddenUserID" value="<?php echo $hiddenuserID;?>"  />
                    <dl>
                        <dt><label for="email">Full Name:</label></dt>
                        <dd><input type="text" name="fullname" id="fullname" size="54"  required   value="<?php echo $user->user_name; ?>"/></dd>
                    </dl>
                    <dl>
                        <dt><label for="password">Password:</label></dt>
                        <dd><input type="text" name="password" id="password" size="54" required  value="<?php echo $user->user_password; ?>" /></dd>
                    </dl>
                      <dl>
                        <dt><label for="Login Name">Login Name:</label></dt>
                        <dd><input type="text" name="loginname" id="loginname" size="54" required  value="<?php echo $user->user_loginname; ?>"/></dd>
                    </dl>
                      <dl>
                        <dt><label for="Email address">Email address:</label></dt>
                        <dd><input type="emial" name="emailaddress" id="emailaddress" size="54" required  value="<?php echo $user->user_emailaddress; ?>" /></dd>
                    </dl>
                      <dl>
                        <dt><label for="Skype ID">Skype ID:</label></dt>
                        <dd><input type="text" name="skypeid" id="skypeid" size="54"  value="<?php echo $user->user_skypeid; ?>" /></dd>
                    </dl>
                      <dl>
                        <dt><label for="Address">Address:</label></dt>
                        <dd><input type="text" name="address" id="address" size="54"  value="<?php echo $user->user_address; ?>" /></dd>
                    </dl>
                      <dl>
                        <dt><label for="Primary  Contact NO">Primary  Contact NO:</label></dt>
                        <dd><input type="text" name="primerycontact" id="primerycontact" size="54" required value="<?php echo $user->user_contactno1; ?>" /></dd>
                    </dl>
                      <dl>
                        <dt><label for="Secondary Contact NO">Secondary Contact NO:</label></dt>
                        <dd><input type="text" name="secondarycontact" id="secondarycontact" size="54"  value="<?php echo $user->user_contactno2; ?>"/></dd>
                    </dl>
                      <dl>
                        <dt><label for="Office Contact no">Office Contact No:</label></dt>
                        <dd><input type="text" name="officecontact" id="officecontact" size="54"  value="<?php echo $user->user_officecontactno; ?>" /></dd>
                    </dl>
                    
                    
                     <dl class="submit">
                    <input type="submit" name="submit" id="submit" value="Update" />
                     </dl>
                     
                     
                    
                </fieldset>
                
         </form>
         </div>  
      
     
     </div><!-- end of right content-->
            
                    
  </div>   <!--end of center content -->               
                    
                    
    
    
    <div class="clear"></div>
    </div> <!--end of main content-->