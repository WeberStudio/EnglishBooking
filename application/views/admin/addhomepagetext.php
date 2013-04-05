
 <div class="right_content">            
        
    <h2>Home page text</h2> 
         <div class="form">
         <form action="<?php echo base_url();?>admin_main/user/updatehomepagetext" method="post" class="niceform" name="addpages" id="addpages">  <fieldset>
				<table cellpadding="0" border="0" cellspacing="0">
					<tr>
						<td colspan="2" align="center">
							<?php
								echo $this->session->flashdata('msg');
							?>						
						</td>
					</tr>
					
					
					
                                       
					
					<tr>
						<td colspan="2"><label for="Login Name">Home Page Text:</label></td>
					</tr>
					<tr>
						<td colspan="2" height="420" valign="top">
						<textarea type="text" name="description" id="description"  ><?php echo $text->value;?></textarea>
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
						<td colspan="2" align="center"> <input type="submit" name="submit" id="submit" value="Update" /></td>
					</tr>
				</table>
                </fieldset>
                
         </form>
         </div>  
      
     
     </div><!-- end of right content-->
            
                    
  </div>   <!--end of center content -->               
                    
                    
    
    
    <div class="clear"></div>
    </div> <!--end of main content-->