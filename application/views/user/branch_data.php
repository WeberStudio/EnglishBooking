		<div style="float:left;">
				<div class="p_left">
				<div style="float:left; margin:20px;">
					<img alt=" " src="<?php echo base_url();?>/uploadfiles/branches_images/<?php echo $branch_data->image;?>" width="210" />
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
					<h1><?php echo $branch_data->name;?></h1>
						<div class="c_detl">
<!--						
						<img alt=" " src="<?php echo base_url();?>/theme/user-images/p2.jpg" width="50" />
						<img alt=" " src="<?php echo base_url();?>/theme/user-images/p2.jpg" width="50" />
						<img alt=" " src="<?php echo base_url();?>/theme/user-images/p2.jpg" width="50" />

-->							<div class="c_detl">
								
								<p>
									<?php echo $branch_data->description;?>
								</p>
								<table cellpadding="0" cellspacing="0" class="colg_det">
									<tr>
										<td width="200">City</td>
										<td width="280"></td>
										<td width="200"><?php echo $branch_data->city;?></td>
									</tr>
									<tr>
										<td>Address</td>
										<td></td>
										<td><?php echo $branch_data->address;?></td>
									</tr>

									<tr>
										<td>Phone</td>
										<td></td>
										<td><?php echo $branch_data->phone;?></td>
									</tr>
									<tr>
										<td>Fax</td>
										<td></td>
										<td><?php echo $branch_data->fax;?></td>
									</tr>
									<tr>
										<td>Email</td>
										<td></td>
										<td><?php echo $branch_data->email;?></td>
									</tr>
                                                                        <tr>
										<td>View Course</td>
										<td></td>
                                                                                <td><a href="<?php echo base_url();?>user/search_result/getsearchbranchcourse/<?php echo $branch_data->id;?>">View course</a></td>
									</tr>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>