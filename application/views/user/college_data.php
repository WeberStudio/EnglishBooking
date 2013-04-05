<?php 
?>

<div style="float:left;">
				<div class="p_left">
				<div style="float:left; margin:20px;">
					<img alt=" " src="<?php echo base_url();?>uploadfiles/collegeimages/<?php echo $college_data->image;?>" width="210" />
				</div>
					 <?php
            $this->load->view('user/course_of_day');
			$this->load->view('user/college_of_day');
            ?>
				</div>
				<div class="page_detail">
                                    <?php if(!empty($bredcrumid)) { ?>
                                    <a href="<?php echo base_url();?>">Home</a>--><a href="<?php echo base_url();?>user/search_result/search">Search</a>--><a href="<?php echo base_url();?>user/branch_info/branch_information/<?php echo $bredcrumid;?>">Course</a>
                                    <?php } ?>
                                    <div class="page_desc" style="text-align:left;">
					<div class="clr"></div>
					<h1><?php echo $college_data->collegename;?></h1>
						
						<div class="c_detl">
<!--						
						<img alt=" " src="<?php echo base_url();?>/theme/user-images/p2.jpg" width="50" />
						<img alt=" " src="<?php echo base_url();?>/theme/user-images/p2.jpg" width="50" />
						<img alt=" " src="<?php echo base_url();?>/theme/user-images/p2.jpg" width="50" />
-->							
							<div class="c_detl">	
								<p>
									<?php echo $college_data->description;?>
								</p>
								<table cellpadding="0" cellspacing="0" class="colg_det">
									<tr><td colspan="3" height="20"></td></tr>
									<tr>
										<td>Number of Branches</td>
										<td><?php echo $branches;?></td>
										<td><h3><a href="<?php echo base_url();?>user/pages/branch_lists/<?php echo $college_id;?>">View Details</a></h3></td>
									</tr>
									<tr>
										<td width="200">City</td>
										<td width="280"></td>
										<td width="200"><?php echo $college_data->city;?></td>
									</tr>
									<tr>
										<td>Address</td>
										<td></td>
										<td><?php echo $college_data->address;?></td>
									</tr>
									<tr>
										<td>Phone</td>
										<td></td>
										<td><?php echo $college_data->phone;?></td>
									</tr>
									<tr>
										<td>Fax</td>
										<td></td>
										<td><?php echo $college_data->fax;?></td>
									</tr>
									<tr>
										<td>Email</td>
										<td></td>
										<td><?php echo $college_data->email;?></td>
									</tr>
									<tr>
										<td>Year of establish</td>
										<td></td>
										<td><?php echo $college_data->year_of_establish;?></td>
									</tr>
									<tr>
										<td>HTS :Highly Trusted Status</td>
										<td></td>
										<td style="text-transform:capitalize;"><?php 
												$hts = $college_data->hts;
												if($hts == "ht"){
													$hts = "Highly trusted";
												}else if($hts == "na"){
													$hts = "N/A";
												}else{
													$hts = $hts;
												}
												echo $hts;
											?>
										</td>
									</tr>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>