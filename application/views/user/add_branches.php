	<script>
   $(document).ready(function(){
    $('#addanother').click(function() {
        $(document.createElement('tr')).html('<td width="30">Nationality<input type="text" name="txtName[]" width="30" style="width:322px;" required /></td><td width="10"></td><td width="30">Percentage(%)<input type="text" name="txtpersentage[]" width="30" style="width:322px;" required /></td>').appendTo('#addmore');
    });
});

</script>
				<div class="page_detail">
					<div class="headig">Branches</div>
					<div class="line_c"></div>
<!--					<div class="c_data">
						<div class="c_address">
							<strong>Address:</strong>
						</div>
						<div class="line_c"></div>
						<div class="c_email">
							<strong>Email:</strong>
						</div>
						<div class="line_c"></div>
					</div>
-->					<div class="clr"></div>
					<form name="branches" id="branches" method="post" action="<?php echo base_url();?>user/branches_detail/add_newbranch" enctype="multipart/form-data">
					<table cellpadding="0" class="c_form" cellspacing="5">
						<tr>
							<td colspan="2"><h1>Add a new Branch</h1></td>
						</tr>
						<tr>
							<td width="150">Name</td>
						</tr>
						<tr>
							<td><input type="text" name="name" id="name" required /></td>
						</tr>
						<tr>
							<td>City</td>
						</tr>
						<tr>
							<td><input type="text" name="city" id="city" required /></td>
						</tr>
						<tr>
							<td>Postal Code</td>
						</tr>
						<tr>
							<td><input type="text" name="post_code" id="post_code" required /></td>
						</tr>
						<tr>
							<td>Address</td>
						</tr>
						<tr>
							<td><input type="text" name="address" id="address" required /></td>
						</tr>
						<tr>
							<td>Phone</td>
						</tr>
						<tr>
							<td><input type="text" name="phone" id="phone" required /></td>
						</tr>
						<tr>
							<td>Fax</td>
						</tr>
						<tr>
							<td><input type="text" name="fax" id="fax" required /></td>
						</tr>
						<tr>
							<td>Email</td>
						</tr>
						<tr>
							<td><input type="email" name="email" id="email" required /></td>
						</tr>
						<tr>
							<td>Year of establishment</td>
						</tr>
						<tr>
							<td><input type="text" name="year_of_establish" id="year_of_establish" required /></td>
						</tr>
						<tr><td><div class="line_c"></div></td></tr>
						<tr>
							<td><h3>Tourist Information</h3></td>
						</tr>
						<tr>
							<td>Image</td>
						</tr>
						<tr>
							<td><input type="file" name="touristimage" id="touristimage"  /></td>
						</tr>
						<tr>
							<td>File</td>
						</tr>
						<tr>
							<td><input type="file" name="touristfile" id="touristfile"  /></td>
						</tr>
						<tr>
							<td>Short Description </td>
						</tr>
						<tr>
							<td> <textarea id="touristshortdes" name="touristshortdes" rows="5" cols="50" ></textarea></td>
						</tr>
						<tr><td><div class="line_c"></div></td></tr>
						<tr>
							<td><h3>Bus Information</h3></td>
						</tr>
						<tr>
							<td>Image</td>
						</tr>
						<tr>
							<td><input type="file" name="Busimage" id="Busimage"  /></td>
						</tr>
						<tr>
							<td>File</td>
						</tr>
						<tr>
							<td><input type="file" name="Busfile" id="Busfile"  /></td>
						</tr>
						<tr>
							<td>Short Description </td>
						</tr>
						<tr>
							<td> <textarea id="Busshortdes" name="Busshortdes" rows="5" cols="50" ></textarea></td>
						</tr>
						<tr><td><div class="line_c"></div></td></tr>
						<tr>
							<td><h3>Stores Information</h3></td>
						</tr>
						<tr>
							<td>Image</td>
						</tr>
						<tr>
							<td><input type="file" name="Storesimage" id="Storesimage"  /></td>
						</tr>
						<tr>
							<td>File</td>
						</tr>
						<tr>
							<td><input type="file" name="Storesfile" id="Storesfile"  /></td>
						</tr>
						<tr>
							<td>Short Description </td>
						</tr>
						<tr>
							<td> <textarea id="Storesshortdes" name="Storesshortdes" rows="5" cols="50" ></textarea></td>
						</tr>
						<tr><td><div class="line_c"></div></td></tr>
						<tr>
							<td><h3>Restaurants Information</h3></td>
						</tr>
						<tr>
							<td>Image</td>
						</tr>
						<tr>
							<td><input type="file" name="Restaurantsimage" id="Restaurantsimage"  /></td>
						</tr>
						<tr>
							<td>File</td>
						</tr>
						<tr>
							<td><input type="file" name="Restaurantsfile" id="Restaurantsfile"  /></td>
						</tr>
						<tr>
							<td>Short Description </td>
						</tr>
						<tr>
							<td> <textarea id="Restaurantsshortdes" name="Restaurantsshortdes" rows="5" cols="50" ></textarea></td>
						</tr>
						<tr><td><div class="line_c"></div></td></tr>
						<tr>
							<td><h3>Airport Information</h3></td>
						</tr>
						<tr>
							<td>Image</td>
						</tr>
						<tr>
							<td><input type="file" name="Airportimage" id="Airportimage"  /></td>
						</tr>
						<tr>
							<td>File</td>
						</tr>
						<tr>
							<td><input type="file" name="Airportfile" id="Airportfile"  /></td>
						</tr>
						<tr>
							<td>Short Description </td>
						</tr>
						<tr>
							<td> <textarea id="Airportshortdes" name="Airportshortdes" rows="5" cols="50" ></textarea></td>
						</tr>
						<tr><td colspan="2" height="10"></td></tr>
						<tr><td><div class="line_c"></div></td></tr>
						<tr>
							<td colspan="2"><h3>Accommodation</h3></td>
						</tr>
						<tr><td colspan="2" height="20"></td></tr>
						<tr>
							<td colspan="2">
								<table cellpadding="0" cellspacing="0">
									<tr>
										<td width="30"><input type="checkbox" name="host_family" value="host_family" /></td>
										<td width="150">Host Family</td>
										<td width="30"><input type="checkbox" name="private" value="private" /></td>
										<td width="100">Private</td>
										<td width="30"><input type="checkbox" name="college" value="college" /></td>
										<td width="100">College</td>
										<td width="30"><input type="checkbox" name="hotels" value="hotels" /></td>
										<td width="50">Hotels</td>
									</tr>
								</table>
							</td>
						</tr>
						<tr>
							<td>Image</td>
						</tr>
						<tr>
							<td><input type="file" name="file" required /></td>
						</tr>
						<tr>
							<td>Description</td>
						</tr>
						<tr>
							<td><textarea name="description" id="description"></textarea></td>
						</tr>
						<tr><td colspan="2" height="20"></td></tr>
						<tr>
							<td colspan="2"><h1>Diversity Rates / Nationality state</h1></td>
						</tr>
						<tr>
							<td colspan="2">
							<table cellpadding="0" cellspacing="0"  id="addmore">
								<tr>
									<td width="30">
										Nationality
										<input type="text" name="txtName[]" width="30" style="width:252px;" required />
									</td>
									<td width="10"></td>
									<td width="30">
										Percentage(%)
										<input type="text" name="txtpersentage[]" width="30" style="width:252px;" required />
									</td>
								</tr>
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
									<td align="right" width="332"><input type="reset" value="Cancel" /></td>
									<td width="20"></td>
									<td><input type="submit" name="Submit" value="Submit" /></td>
								</tr>
							</table>
							</td>
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