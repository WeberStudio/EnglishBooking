 <div class="right_content">            
    <h2>Add Social media</h2> 
         <div class="form">
         <form action="<?php echo base_url();?>admin_main/social/updatesocialmedia" method="post" class="niceform" name="addpages" id="addpages" enctype="multipart/form-data">         
                <fieldset>
                   <input type="hidden" name="hiddenid" id="hiddenid" value="<?php echo $getedit->id; ?>"  />
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
						<td><input type="text" name="title" id="title" size="54"  required   value="<?php echo $getedit->title;?>" /></td>
					</tr>
					<tr>
						<td><label for="Email Address">Icon:</label></td>
						<td><input type="file" name="icone" id="icone"     value="Select icone" /><img src="<?php echo base_url();?>uploadfiles/scoialicone/<?php echo $getedit->image;?>" alt="No image"  /></td>
					</tr>
					<tr>
						<td><label for=" Password">URL:</label></td>
						<td><input type="text" name="url" id="url" size="54" required  value="<?php echo $getedit->url;?>"/></td>
					</tr>
                    
						<td colspan="2" align="center"> <input type="submit" name="submit" id="submit" value="Upadte " /></td>
					</tr>
				</table>
                </fieldset>
         </form>
         </div>  
     </div><!-- end of right content-->                    
  </div>   <!--end of center content -->               
  <div class="clear"></div>
</div> <!--end of main content-->