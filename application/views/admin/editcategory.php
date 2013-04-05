 <div class="right_content">            
    <h2>Edit category </h2> 
         <div class="form">
         <form action="<?php echo base_url();?>admin_main/colleges/updatecategory" method="post" class="niceform" name="addpages" id="addpages">         
                <fieldset>
				<table cellpadding="0" border="0" cellspacing="5">
					<input type="hidden" name="id" value="id" value="<?php echo $category->id;?>" />
                                    <tr>
                                        <td width="120"><label for="College Name">category Name:</label></td>
                                        <td><input type="text" name="name" id="name" size="54"  required   value="<?php echo $category->name;?>" /></td>
                                    </tr>

                                    <tr>
                                        <td><label for=" Password">category Status:</label></td>
                                        <td><input type="checkbox" name="status" id="status" <?php  if($category->status == 1 ) { echo 'checked="checked"'; }?> /></td>
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