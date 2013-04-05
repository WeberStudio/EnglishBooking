 <div class="right_content">
    <h2>Baranche Report</h2> 
         <div class="form">
         <form action="<?php echo base_url();?>admin_main/reports/getbranchreport" method="post" class="niceform" enctype="multipart/form-data" name="addpages" id="addpages">
                
                <fieldset>
                    
					<table cellpadding="0" border="0" class="c_form" cellspacing="5">
						<tr>
                                                    <td>Colleges</td>
                                                    <td><select id="selectcollege" name="selectcollege">
                                                            <option value="0">Select College</option> 
                                                            <?php foreach($colleges as $college) { ?>
                                                            <option value="<?php echo $college->id; ?>"><?php echo $college->collegename; ?></option> 
                                                            <?php  } ?>
                                                        </select></td>
                                                </tr>
						<tr><td colspan="2" height="10"></td></tr>
						<tr>
							<td><input type="submit" name="Submit" value="Get Report" /></td>
						</tr>
						
					</table>
                </fieldset>
         </form>
         </div>  
     </div><!-- end of right content-->                    
  </div>   <!--end of center content -->               
    <div class="clear"></div>
    </div> <!--end of main content-->