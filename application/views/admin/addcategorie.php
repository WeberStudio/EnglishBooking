 <div class="right_content">            
    <h2>Add category </h2> 
         <div class="form">
         <form action="<?php echo base_url();?>admin_main/colleges/savecategory" method="post" class="niceform" name="addpages" id="addpages">         
                <fieldset>
				<table cellpadding="0" border="0" cellspacing="5">
					
                                    <tr>
                                        <td width="120"><label for="College Name">category Name:</label></td>
                                        <td><input type="text" name="name" id="name" size="54"  required   /></td>
                                    </tr>

                                    <tr>
                                        <td><label for=" Password">category Status:</label></td>
                                        <td><input type="checkbox" name="status" id="status"  /></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" align="center"> <input type="submit" name="submit" id="submit" value="Save" /></td>
                                    </tr>
				</table>
                </fieldset>
         </form>
         </div>  
     </div><!-- end of right content-->                    
  </div>   <!--end of center content -->               
  <div class="clear"></div>
</div> <!--end of main content-->