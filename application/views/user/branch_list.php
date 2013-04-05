		<div style="float:left;">
				<div class="p_left">
					 <?php
            $this->load->view('user/course_of_day');
			$this->load->view('user/college_of_day');
            ?>
				</div>
				<div class="page_detail">
				
				<?php 
					foreach($branch_list as $branches){
				?>
					<div class="page_desc" style="text-align:left;">
						<div class="clr"></div>
						<div class="c_detl">
							<div style="float:left; width:140px; height:80px; margin-right:10px; overflow:hidden;">
								<img alt=" " src="<?php echo base_url();?>/uploadfiles/branches_images/<?php echo $branches->image;?>" style="margin:2px;" width="110" />
							</div>
							<h3><?php echo $branches->name;?></h3>
							<p>
								<?php echo substr($branches->description,0 , 300);?> ...
							</p>
							<div class="line_c"></div>
								<div class="c_detals">
									<a href="<?php echo base_url();?>user/branch_info/branch_data/<?php echo $branches->id;?>">View Details</a>
								</div>					
							<div class="line_c"></div>
						</div>
					</div>
					<?php } ?>
				</div>
			</div>
			
			<div class="bb"></div>
			<!--<div class="ex_f">
				<h1>Extra Facilities</h1>
				<p>&nbsp;</p>
					<img alt=" " src="<?php echo base_url();?>/theme/user-images/p8.jpg"  />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<img alt=" " src="<?php echo base_url();?>/theme/user-images/p9.jpg"  />
			</div>-->
		</div>
	</div>