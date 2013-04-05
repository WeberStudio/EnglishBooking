 <div class="right_content">            
    <h2>Add Colleges</h2> 
         <div class="form">
         <form action="<?php echo base_url();?>admin_main/colleges/savecollege" method="post" class="niceform" name="addpages" id="addpages">         
                <fieldset>
				<table cellpadding="0" border="0" cellspacing="5">
					<tr>
						<td colspan="2" align="center">
							<?php
								echo $this->session->flashdata('msg');
							?>						
						</td>
					</tr>
                    <tr>
						<td width="120"><label for="College Name">College Name:</label></td>
						<td><input type="text" name="cname" id="cname" size="54"  required   /></td>
					</tr>
					<tr>
						<td><label for="Email Address">Email Address:</label></td>
						<td><input type="email" name="uname" id="uname" size="54"  required  /></td>
					</tr>
					<tr>
						<td><label for=" Password">Password:</label></td>
						<td><input type="text" name="password" id="password" size="54" required /></td>
					</tr>
                    <tr>
						<td><label for=" Password">Status:</label></td>
						<td><input type="checkbox" name="status" id="status"  /></td>
					</tr>
					<tr>
						<td colspan="2" align="center"> <input type="submit" name="submit" id="submit" value="Submit" /></td>
					</tr>
				</table>
                </fieldset>
         </form>
         </div>  
     </div><!-- end of right content-->                    
  </div>   <!--end of center content -->               
  <div class="clear"></div>
</div> <!--end of main content-->