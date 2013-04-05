			<?php 
	 			$course = $this->my_model->getcoursegeofday();	
			?>
			<div style="float:left; width:255px;">
				<div class="p_left">
					<h1>Course of the Day </h1>
					
					<?php
								//  ============================ 		Comes from Popular controllar
					?>
					<div class="pg_detail">
						<a href="<?php echo base_url();?>user/branch_info/branch_information/<?php echo $course->id;?>">
							<img alt=" " src="<?php echo base_url();?>uploadfiles/course_images/thumbs/<?php echo $course->image;?>" width="70" />
							<i><?php echo substr($course->courcename,0,15);?>...</i>
							<p><?php echo substr($course->description,0,50);?>...</p>
						</a>
					</div>
				</div>
				<div class="clr"></div>
