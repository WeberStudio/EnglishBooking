
 <div class="right_content">            
        
    <h2>Add New Email Template</h2> 
         <div class="form">
         <form action="<?php echo base_url();?>admin_main/email/savenewemailtemplate" method="post" class="niceform" name="addpages" id="addpages">
         
                <fieldset>
				<table cellpadding="0" border="0" cellspacing="0">
					<tbody>
					<tr>
						<td colspan="2" align="center">
							<?php
								echo $this->session->flashdata('msg');
							?>						
						</td>
					</tr>
					<tr>
						<td><label for="Title">Email For:</label></td>
						<td><input type="text" name="email_name" id="email_name" size="54"  required  /></td>
					</tr>
					<tr>
						<td><label for="Meta Keyword">Email label:</label></td>
						<td><input type="text" name="email_label" id="email_label" size="54" required /></td>
					</tr>
					<tr>
						<td><label for="Meta Description">Email Title:</label></td>
                        <td><input type="text" name="title" id="title" size="54" required /></td>
					</tr>
                    <tr>
						<td><label for="Meta Description">Email variables:<br>(Input Variable like this [[name]]  and comma secreted)</label></td>
						<td><textarea type="text" name="email_variables" id="metadescription"  required  rows="5" cols="36"></textarea></td>
					</tr>
					<tr>
						<td colspan="2"><label for="Login Name">Email Description:</label></td>
					</tr>
					<tr>
						<td colspan="2" height="420" valign="top">
						<textarea type="text" name="description" id="description"  ></textarea>
                         <script type="text/javascript">
							//<![CDATA[
		
						CKEDITOR.replace( 'description',
							{
								fullPage : true,
								extraPlugins : 'docprops'
							});
							//]]>
						</script>
						</td>
					</tr>
					<tr>
						<td colspan="2" align="center"> <input type="submit" name="submit" id="submit" value="Submit" /></td>
					</tr>
					</tbody>
				</table>
                </fieldset>
                
         </form>
         </div>  
      
     
     </div><!-- end of right content-->
            
                    
  </div>   <!--end of center content -->               
    <div class="clear"></div>
    </div> <!--end of main content-->