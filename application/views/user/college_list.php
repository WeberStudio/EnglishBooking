		<div style="float:left;">
				<div class="p_left">
					 <?php
            $this->load->view('user/course_of_day');
			$this->load->view('user/college_of_day');
            ?>
				</div>
				<div class="page_detail">
				
				<?php 
					foreach($college_list as $colleges){
				?>
					<div class="page_desc" style="text-align:left;">
						<div class="clr"></div>
						
						<div class="c_detl">
							<div style="float:left; width:140px; height:80px; margin-right:10px; overflow:hidden;">
								<img alt=" " src="<?php echo base_url();?>uploadfiles/collegeimages/thumbs/<?php echo $colleges->image;?>" style="margin:2px;" width="110" />
							</div>
							<h3><?php echo $colleges->collegename;?></h3>
							<p>
								<?php echo substr($colleges->description,0 , 300);?> ...
							</p>
							<div class="line_c"></div>
								<div class="c_detals">
									<a href="<?php echo base_url();?>user/pages/college_data/<?php echo $colleges->id;?>">View Details</a>
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