<script>
$(document).ready(function(){
    $('#addanother').click(function() {
        $(document.createElement('tr')).html('<td><input type="text" name="txtName[]" width="30" style="width:150px;" required /></td><td width="10"></td><td ><input type="text" name="txtpersentage[]" width="30" style="width:150px;" required /></td>').appendTo('#addmore');
    });
});
</script>
 <div class="right_content">
    <h2>Edit Beanch <?php echo $branch->name;?></h2> 
	<div style="clear:both"></div>
	<h4 style="color:#F00; text-align:center"><?php echo $this->session->flashdata('msg')?></h4>
         <div class="form">
         <form action="<?php echo base_url();?>admin_main/branches_detail/Edit_Branch" method="post" class="niceform" name="addpages" id="addpages" enctype="multipart/form-data">
                <fieldset>
					<table cellpadding="0" class="c_form" cellspacing="5">
						<tr>
							<td width="150">Name</td>
							<input type="hidden" name="branch_id" value="<?php echo $branch->id;?>" />
							<input type="hidden" name="college_id" value="<?php echo $branch->college_id;?>" />
							<td><input type="text" name="name" id="name" value="<?php echo $branch->name;?>" required /></td>
						</tr>
						<tr>
							<td>City</td>
							<td><input type="text" name="city" id="city" value="<?php echo $branch->city;?>" required /></td>
						</tr>
						<tr>
							<td>Postal Code</td>
							<td><input type="text" name="post_code" id="post_code" value="<?php echo $branch->post_code;?>" required /></td>
						</tr>
						<tr>
							<td>Address</td>
							<td><input type="text" name="address" id="address" value="<?php echo $branch->address;?>" required /></td>
						</tr>
						<tr>
							<td>Phone</td>
							<td><input type="text" name="phone" id="phone" value="<?php echo $branch->phone;?>" required /></td>
						</tr>
						<tr>
							<td>Fax</td>
							<td><input type="text" name="fax" id="fax" value="<?php echo $branch->fax;?>" required /></td>
						</tr>
						<tr>
							<td>Email</td>
							<td><input type="email" name="email" id="email" value="<?php echo $branch->email;?>" required /></td>
						</tr>
						<tr>
							<td>Year of Establosh</td>
							<td><input type="text" name="year_of_establish" id="year_of_establish" value="<?php echo $branch->year_of_establish;?>" required /></td>
						</tr>
						<!--<tr>
							<td>Traffic Info</td>
							<td><textarea name="traffic_info" id="traffic_info"><?php echo $branch->traffic_info;?></textarea></td>
						</tr>
						<tr>
							<td>Intertainment Info</td>
							<td><textarea name="intertainment_info" id="intertainment_info"><?php echo $branch->intertainment_info;?></textarea></td>
						</tr>
						<tr>
							<td>Weather Info</td>
							<td><textarea name="weather_info" id="weather_info"><?php echo $branch->weather_info;?></textarea></td>
						</tr>-->
						<tr><td colspan="2" height="20"></td></tr>
						<tr>
							<td colspan="2">Accommodation</td>
						</tr>
						<tr><td colspan="2" height="20"></td></tr>
						<tr>
							<td colspan="2">
								<table cellpadding="0" cellspacing="0">
								<?php
									$accomodation =  explode(",", $branch->accommodation);
								?>
									<tr>
										<td width="30"><input type="checkbox" name="host_family" value="host_family" <?php if($accomodation[0] == "host_family") echo "checked";?> /></td>
										<td width="150">Host Family</td>
										<td width="30"><input type="checkbox" name="private" value="private" <?php if($accomodation[1] == "private") echo "checked";?> /></td>
										<td width="100">Private</td>
										<td width="30"><input type="checkbox" name="college" value="college" <?php if($accomodation[2] == "college") echo "checked";?> /></td>
										<td width="100">College</td>
										<td width="30"><input type="checkbox" name="hotels" value="hotels" <?php if($accomodation[3] == "hotels") echo "checked";?> /></td>
										<td width="50">Hotels</td>
									</tr>
								</table>
							</td>
						</tr>
						<tr>
							<td>Image</td>
							<td><input type="file" name="file" /></td>
						</tr>
						<tr>
							<td>Description</td>
							<td><textarea name="description" id="description"><?php echo $branch->description;?></textarea></td>
						</tr>
						<tr><td colspan="2" height="20"></td></tr>
						<tr>
							<td colspan="2"><h2>Diversity Rates / Nationality Stats</h2></td>
						</tr>
						<tr>
							<td colspan="2">
							<table cellpadding="0" cellspacing="0"  id="addmore">
								<tr>
									<td>Nattionality</td>
									<td width="10"></td>
									<td>Persentage</td>
								</tr>
							<?php 
								foreach ($Diversity as $Diversityres){
							?>
								<tr>
								<input type="hidden" name="diver_id[]" value="<?php echo $Diversityres->id;?>" />
									<td>
										<input type="text" name="txtName[]" value="<?php echo $Diversityres->nationality;?>" width="30" style="width:150px;" required />
									</td>
									<td width="10"></td>
									<td>
										<input type="text" name="txtpersentage[]" value="<?php echo $Diversityres->persentage;?>" width="30" style="width:150px;" required />
									</td>
								</tr>
								<?php } ?>
								<tr><td colspan="4" height="10"></td></tr>
								
							</table>
							</td>
						</tr>
						<tr><td colspan="2" height="10"></td></tr>
						<tr>
							<td colspan="2">
							<table cellpadding="0" cellspacing="0">
                           		 <tr>
									<td colspan="3" align="right"><input type="button" name="addanother" value="Add Another"  id="addanother"/></td>
								</tr>
                                <tr><td colspan="3">&nbsp;</td></tr>
								<tr>
									<td align="right" width="332"><a href="<?php echo base_url();?>admin_main/branches_detail/branches_detl/<?php echo $branch->college_id;?>"><input type="button" value="Cancel" /></a></td>
									<td width="20"></td>
									<td><input type="submit" name="Submit" value="Submit" /></td>
								</tr>
							</table>
							</td>
						</tr>
					</table>
                </fieldset>
         </form>
         </div>  
     </div><!-- end of right content-->                    
  </div>   <!--end of center content -->               
    <div class="clear"></div>
    </div> <!--end of main content-->