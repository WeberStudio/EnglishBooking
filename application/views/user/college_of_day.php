			<?php 
	 			$college = $this->my_model->getcollegeofday();	
			?>
				<div class="p_left">
					<h1>College of the Day </h1>
					
					<?php
								//  ============================ 		Comes from Popular controllar
					?>
					<div class="pg_detail">
						<a href="<?php echo base_url();?>user/pages/college_data/<?php echo $college->id;?>">
							<img alt=" " src="<?php echo base_url();?>uploadfiles/collegeimages/thumbs/<?php echo $college->image;?>" width="70" />
							<i><?php echo $college->name;?></i>
							<p><?php echo substr($college->description,0,50);?></p>
						</a>
					</div>
				</div>
			</div>
