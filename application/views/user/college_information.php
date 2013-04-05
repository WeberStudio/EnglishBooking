<div class="page_detail">
					<div class="headig">College General Information</div>
					<div class="line_c"></div>
					<div class="clr"></div>
					<form name="customer_info" id="customer_info" method="post" action="<?php echo base_url();?>user/customer_dashboard/addcollegeinformation" enctype="multipart/form-data">
					<table cellpadding="0" class="c_form" cellspacing="5">
						<tr>
							<td>Tourist Information</td>
						</tr>
                                                <tr>
							<td>Image</td>
							<td><input type="file" name="touristimage" id="touristimage"  /></td>
						</tr>
						<tr>
							<td>File</td>
							<td><input type="file" name="touristfile" id="touristfile"  /></td>
						</tr>
						<tr>
							<td>Short Description </td>
							<td> <textarea id="touristshortdes" name="touristshortdes" rows="5" cols="50" ><?php echo $info->touristshortdes;?></textarea></td>
						</tr>
						
                                                <tr>
							<td>Bus Information</td>
						</tr>
                                                <tr>
							<td>Image</td>
							<td><input type="file" name="Busimage" id="Busimage"  /></td>
						</tr>
						<tr>
							<td>File</td>
							<td><input type="file" name="Busfile" id="Busfile"  /></td>
						</tr>
						<tr>
							<td>Short Description </td>
							<td> <textarea id="Busshortdes" name="Busshortdes" rows="5" cols="50" ><?php echo $info->touristshortdes;?></textarea></td>
						</tr>
						
                                                <tr>
							<td>Stores Information</td>
						</tr>
                                                <tr>
							<td>Image</td>
							<td><input type="file" name="Storesimage" id="Storesimage"  /></td>
						</tr>
						<tr>
							<td>File</td>
							<td><input type="file" name="Storesfile" id="Storesfile"  /></td>
						</tr>
						<tr>
							<td>Short Description </td>
							<td> <textarea id="Storesshortdes" name="Storesshortdes" rows="5" cols="50" ><?php echo $info->Storesshortdes;?></textarea></td>
						</tr>
						
                                                <tr>
							<td>Restaurants Information</td>
						</tr>
                                                <tr>
							<td>Image</td>
							<td><input type="file" name="Restaurantsimage" id="Restaurantsimage"  /></td>
						</tr>
						<tr>
							<td>File</td>
							<td><input type="file" name="Restaurantsfile" id="Restaurantsfile"  /></td>
						</tr>
						<tr>
							<td>Short Description </td>
							<td> <textarea id="Restaurantsshortdes" name="Restaurantsshortdes" rows="5" cols="50" ><?php echo $info->Restaurantsshortdes;?></textarea></td>
						</tr>
						
                                                <tr>
							<td>Airport Information</td>
						</tr>
                                                <tr>
							<td>Image</td>
							<td><input type="file" name="Airportimage" id="Airportimage"  /></td>
						</tr>
						<tr>
							<td>File</td>
							<td><input type="file" name="Airportfile" id="Airportfile"  /></td>
						</tr>
						<tr>
							<td>Short Description </td>
							<td> <textarea id="Airportshortdes" name="Airportshortdes" rows="5" cols="50" ><?php echo $info->Airportshortdes;?></textarea></td>
						</tr>
						
						<tr><td colspan="2" height="10"></td></tr>
						<tr>
							<td colspan="2" align="right"><input type="submit" name="Submit" value="Submit" /></td>
						</tr>
					</table>
					</form>
				</div>
			</div>
			<div class="spn">
				<strong>Special Notes:</strong>
				<p>
					Please fill all the fields and carry on to the next step.
				</p>
			</div>
		</div>
	</div>