 <div class="right_content">            
    <h2>Add Email Address</h2> 
         <div class="form">
         <form action="<?php echo base_url();?>admin_main/email/updateemailaddress" method="post" class="niceform" name="addpages" id="addpages" enctype="multipart/form-data">         
                <fieldset>
                    <input type="hidden" name="emailid" id="emailid" value="<?php echo $email->id;?>"  />
				<table cellpadding="0" border="0" cellspacing="5">
					<tr>
						<td colspan="2" align="center">
							<?php
								echo $this->session->flashdata('msg');
							?>						
						</td>
					</tr>
                    <tr>
						<td width="120"><label for="College Name">Title:</label></td>
						<td><input type="text" name="title" id="title" size="54"  required   value="<?php echo $email->title;?>" /></td>
					</tr>
					<tr>
						<td><label for="Email Address">Email address:</label></td>
						<td><input type="eamil" name="email" id="email"   required  size="54"  value="<?php echo $email->emailaddress;?>"/></td>
					</tr>
					
                    
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