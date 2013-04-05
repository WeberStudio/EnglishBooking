			<script language="javascript">
				function check(val3){
						var test = '#s'+val3;
					   $('#location').val($(test).text());
					}
					function uncheckAll(value) {
					$(".selsts").attr('checked', false);
						$('#'+value).attr('checked',true);
				}
				function CheckValue(){
					if(document.student_detail4.english_level.value == ""){
						alert("Please Select one value");
					}
				}
			</script>
			<?php // echo $prev_url; die;?>
<!--			<div class="c_top">
				<div class="headig">Student Dashboard</div>
			</div>
			<div style="float:left;">
			
				<div class="p_left">
					<h1>Popular Destinations </h1>
					<div class="pg_detail">
						<img alt=" " src="<?php echo base_url();?>/theme/user-images/p2.jpg" width="70" />
						<i>Title</i>
						<p>Some description about
							this destination
						</p>
					</div>
					<div class="pg_line"></div>
					<div class="pg_detail">
						<img alt=" " src="<?php echo base_url();?>/theme/user-images/p2.jpg" width="70" />
						<i>Title</i>
						<p>Some description about
							this destination
						</p>
					</div>
				</div>
-->				
				<div class="page_detail">
					<div class="headig">My Application Regsitration</div>
					<div style="float:right;">
						<h3>Step 4 of 6</h3>
					</div>
					<div class="clr"></div>
					<form method="post" action="<?php echo base_url();?>user/user_registration/page4_data" name="student_detail4" id="student_detail2">		<!---->
					<table cellpadding="0" class="c_form" cellspacing="5">
						<!--<tr><td colspan="2"><h3>Your English</h3></td></tr>-->
						<tr><td colspan="2"><h4>What is your English language proficiency level?</h4></td></tr>
						<tr><td colspan="2" height="20"></td></tr>
						<tr>
							<td colspan="2">
							<table>
								<tr>
									<td width="30"><input type="radio" value="beginner" name="english_level" id="english_level" onclick="uncheckAll(this.id)" class="selsts" /></td>
									<td>Beginner</td>
								</tr>
								<tr>
									<td ><input type="radio" value="elementry" name="english_level" id="english_level2" onclick="uncheckAll(this.id)" class="selsts" /></td>
									<td>Elementary</td>
								</tr>
								<tr>
									<td><input type="radio" value="intermediate" name="english_level" id="english_level3" onclick="uncheckAll(this.id)" class="selsts" /></td>
									<td>Intermediate</td>
								</tr>
								<tr>
									<td><input type="radio" value="advance" name="english_level" id="english_level4" onclick="uncheckAll(this.id)" class="selsts" /></td>
									<td>Advance</td>
								</tr>
								<tr>
									<td><input type="radio" value="proficient" name="english_level" id="english_level5" onclick="uncheckAll(this.id)" class="selsts" /></td>
									<td>Proficient</td>
								</tr>
							</table>
							</td>
						</tr>
						<tr>
							<td colspan="2">Other information you feel may be important.</td>
						</tr>
						<tr>
							<td colspan="2"><textarea name="other_info2" id="other_info2" style="width:665px;" required title="Information about yourself" ></textarea></td>
						</tr>
						<tr>
							<td colspan="2">
							<table cellpadding="0" cellspacing="0">
								<tr>
									<td>Your occupation/profession?</td>
									<td width="4"></td>
									<td>Company/ organization name</td>
								</tr>
								<tr>
									<td><input type="text" name="ocopation" style="width:327px;" id="ocopation" required /></td>
									<td></td>
									<td><input type="text" name="college_name" style="width:327px;" id="college_name" required /></td>
								</tr>
							</table>
							</td>
						</tr>
						<tr><td colspan="2" height="10"></td></tr>
						<tr>
							<td><a href="<?php echo base_url();?>user/user_registration/user_registration_page3_1"><input type="button" name="Submit" value="Previous" /></a></td>
							<td align="right"><input type="submit" name="Submit" value="Next" onclick="return CheckValue();"  title="Click for next step" /></td>
							
							<!--<td align="right"><a href="<?php echo base_url();?>user/user_registration/user_registration_page5"><input type="button" name="Submit" value="Next" /></a></td>-->
						</tr>
						<tr><td colspan="2" height="10"></td></tr>
					</table>
					</form>
				</div>
			</div>
<!--			<div class="spn">
				<strong>Special Notes:</strong>
				<p>
					Please fill all the fields and carry on to the next step.
				</p>
			</div>
-->		</div>
	</div>
