<?php  $count = 0; $results = $this->my_model->getshowhidebluebar(); if($results['0']->value == 1){ $count++; } else if($results['1']->value == 1){$count++;}

$homepagetext = $this->my_model->gethomedate();
$popularcity = $this->my_model->getpopularcities();
?>
		</div>
	</div>
	<div class="bb100">
		<div class="book_plac">
			<?php if($results['0']->value == 1) { ?><i>Number of College's <?php echo $this->my_model->gettotalcolleges();?></i><?php } if($count == 2){?>&nbsp;&nbsp;/&nbsp;&nbsp;<?php } if($results['1']->value == 1) {?>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<i>Number of booked Courses <?php echo $this->my_model->gettotalcources();?></i><?php } ?>
		</div>
	</div>	
	<div class="w922">
		<div class="fl" style="margin:20px 0 0 0;">
			<div class="pd_bg">
				
                <h1>Popular cities</h1>
                
                <ul>
                	<li>
                    <a href="<?php echo base_url(); ?>user/search_result/search/<?php echo $popularcity->cityname;?>"><?php echo $popularcity->cityname;?></a>
                    </li>
                    
                    <li>
                    <a href="<?php echo base_url(); ?>user/search_result/search/<?php echo $popularcity->city2;?>"><?php echo $popularcity->city2;?></a>
                    </li>
                    
                    <li>
                    <a href="<?php echo base_url(); ?>user/search_result/search/<?php echo $popularcity->city3;?>"><?php echo $popularcity->city3;?></a>
                    </li>
                    
                    <li>
                    <a href="<?php echo base_url(); ?>user/search_result/search/<?php echo $popularcity->city4;?>"><?php echo $popularcity->city4;?></a>
                    </li>
                    
                    <li>
                    <a href="<?php echo base_url(); ?>user/search_result/search/<?php echo $popularcity->city5;?>"><?php echo $popularcity->city5;?></a>
                    </li>
                    
                </ul>
					
				
			</div>
			<div class="pd_bg">
				<h1>How it works</h1>
				<div class="pd_detail">
					<a href="http://vimeo.com/7874398&width=700" rel="area" id="area" title="Vimeo video"><img alt=" " src="<?php echo base_url();?>/theme/user-images/p4.jpg" width="280" /></a>
				</div>
			</div>
			<div class="pd_bg">
				<h1>Why use our services?</h1>
				<div class="pd_detail">
					<?php echo $homepagetext->value;?>
				</div>
			</div>
            <div class="pd_bg2 clr" >
                <h1>Twitter</h1>
                <div class="pd_detail">
							<script src="http://widgets.twimg.com/j/2/widget.js"></script>
							<script>
								new TWTR.Widget({
								  version: 2,
								  type: 'profile',
								  rpp: 2,
								  interval: 6000,
								  width: 287,
								  height: 85,
								  
								  theme: {
									shell: {
									  background: '#fff',
									  color: '#0095da',
									  
									},
									tweets: {
									  background: '#fff',
									}
								  },
								  features: {
									scrollbar: false,
									loop: false,
									live: true,
									hashtags: false,
									timestamp: false,
									avatars: false,
									behavior: 'all'
								  }
								}).render().setUser('ganasal').start();
							</script>
					</div>
                </div>
                <div class="pd_bg2">
					<h1>Students from all over <br />the world</h1>
					<img alt=" " src="<?php echo base_url();?>/theme/user-images/world.jpg" width="250" class="world-class" />
                    <span style="float:right; margin-top:35px;"><a href="<?php echo base_url();?>user/pages/college_lists">College List</a><!--<a href="#" target="_blank">View all posts</a>--></span>
				</div>
                <div class="pd_bg2">
                <h1>Blog</h1>
                    <div class="pd_detail">
                            <?php 
								  $newsBlogResult = $this->my_model->blog();
								  foreach($newsBlogResult as $newsBlogRes){?>
								 <a href="blog/?p=<?php echo $newsBlogRes->ID; ?>" target="_blank"><p><?php echo substr($newsBlogRes->post_content,0,100);?> </p>		
								 </a><a href="blog/?p=<?php echo $newsBlogRes->ID; ?>" target="_blank"><?php echo $newsBlogRes->post_date;?></a>
                            <div class="pd_line"></div>		
                                                <?php } ?>
                            <span style="margin-top:3px;"><a href="blog" target="_blank">View all posts</a></span>
                    </div>
				<span class="msg">
					<?php
						echo $this->session->flashdata('msg');
					?>
				</span>
                </div>
			</div>
		</div>
	</div>
	