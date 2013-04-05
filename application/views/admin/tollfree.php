 <div class="right_content">            
    <h2>Toll Free Number</h2> 
         <div class="form">
		 <table cellpadding="0" cellspacing="0">
		 	<tr>
				<td>
				 <form action="<?php echo base_url();?>admin_main/ranking/editTollfree" method="post" class="niceform" name="addpages" id="addpages">         
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
							<input type="hidden" name="college_id" value="<?php echo $returnresult->id;?>" />
								<td width="120"><label for="College Name">Toll Free Number:</label></td>
								<td><input type="text" name="tollfree" id="tollfree" size="54" value="<?php echo $returnresult->val;?>"  required  /></td>
							</tr>
                                                        <tr>
                                                                <td><input type="submit" name="Submit" value="Update"  /></td>
							</tr>
							
						</table>
						</fieldset>
					</form>
				</td>
			</tr>
			
			
			
		 </table>

         </div>  
     </div><!-- end of right content-->                    
  </div>   <!--end of center content -->               
  <div class="clear"></div>
</div> <!--end of main content-->