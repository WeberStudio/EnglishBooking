
 <div class="right_content">            
        
    <h2>Add New Pages</h2> 
         <div class="form">
         <form action="<?php echo base_url();?>admin_main/addpages/savepage" method="post" class="niceform" name="addpages" id="addpages">
         
                <fieldset>
				<table cellpadding="0" border="0" cellspacing="0">
					<tr>
						<td colspan="2" align="center">
							<?php
								echo $this->session->flashdata('msg');
							?>						
						</td>
					</tr>
					<tr>
						<td><label for="Title">Title:</label></td>
						<td><input type="text" name="title" id="title" size="54"  required  /></td>
					</tr>
					<tr>
						<td><label for="Meta Keyword">Meta Keyword:</label></td>
						<td><input type="text" name="metakeyword" id="metakeyword" size="54" required /></td>
					</tr>
					<tr>
						<td><label for="Meta Description">Meta Description:</label></td>
						<td><textarea type="text" name="metadescription" id="metadescription" size="54" required ></textarea></td>
					</tr>
                                        <tr>
						<td><label for="Meta Description">URL:</label></td>
						<td><input type="text" name="url" id="url" size="54" required ></td>
					</tr>
					<tr>
						<td><label for="Position">Position:</label></td>
						<td>
							<select name="position" required>
								<option value="">---Select Position---</option>
								<option value="top">Top</option>
								<option value="bottom">Bottom</option>
							</select>
						</td>
					</tr>
					<tr>
						<td colspan="2"><label for="Login Name">Description:</label></td>
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
				</table>
                </fieldset>
                
         </form>
         </div>  
      
     
     </div><!-- end of right content-->
            
                    
  </div>   <!--end of center content -->               
                    
                    
    
    
    <div class="clear"></div>
    </div> <!--end of main content-->