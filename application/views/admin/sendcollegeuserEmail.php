
 <div class="right_content">            
        
    <h2>College Registerd User Detail</h2> 
         <div class="form">
         <form action="<?php echo base_url();?>admin_main/colleges/sendemail" method="post" class="niceform" name="addpages" id="addpages">
         
                <fieldset>
				<table cellpadding="0" border="0" cellspacing="0">
					<input type="hidden" name="useremail" id="useremail" value="<?php echo $registeredUser->useremail;?>"  />
                    <input type="hidden" name="userpassword" id="userpassword" value="<?php echo $registeredUser->password;?>"  />
                    <input type="hidden" name="uniqeid" id="uniqeid" value="<?php echo $registeredUser->rand_id;?>"  />
					<tr>
						<td><label for="College Name">College name:</label></td>
						<td><?php echo $registeredUser->collegename;?></td>
					</tr>
                    <tr>
						<td><label for="Email Address">Client Email:</label></td>
						<td><?php echo $registeredUser->useremail;?></td>
					</tr>
					<tr>
						<td><label for=" Password">Client Password:</label></td>
						<td><?php echo $registeredUser->password;?></td>
					</tr>
					<tr>
						<td><label for=" Password">Client Unique ID:</label></td>
						<td><?php echo $registeredUser->rand_id;?></td>
					</tr>
						<tr><td>&nbsp;</td><td>&nbsp;</td></tr>
                        <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
                        <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
					<tr>
						<td  align="center"> <input type="submit" name="submit" id="submit" value="Send Email" /></td>
                        <td  align="center">&nbsp;&nbsp;&nbsp;<a href="<?php echo base_url();?>admin_main/colleges/getList" style="text-decoration: none"><input type="button" name="submit" id="submit" value="Return To College list" /></a></td>
					</tr>
				</table>
                </fieldset>
                
         </form>
         </div>  
      
     
     </div><!-- end of right content-->
            
                    
  </div>   <!--end of center content -->               
                    
                    
    
    
    <div class="clear"></div>
    </div> <!--end of main content-->