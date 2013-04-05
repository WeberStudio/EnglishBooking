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
					<h1><span class="cd_p">Course</span> of the Day</h1>
					<div class="pg_detail">
						<img alt=" " src="<?php echo base_url();?>/theme/user-images/p5.jpg"  />
						<p>Some description about
							this destination
						</p>
					</div>
				</div>
				<div class="page_detail">
					<div class="headig">Subscribe Offer</div>
					<div class="page_desc">
						<div class="book_plac">
							<div style="width:100%;" align="center">
							<form name="subscribe_offer" id="subscribe_offer" method="post" action="<?php echo base_url();?>user/pages/save_subscribe_email">
							<table cellpadding="0" class="subs" width="600" align="center" cellspacing="5">
								<tr>
									<td><h3><i>Subsciption Offer</i></h3></td>
								</tr>
								<tr>
									<td align="center" style="color:#F00; font-size:12px;"><?php echo $this->session->flashdata('msg')?></td>
								</tr>
								<tr>
									<td><input type="email" name="email" required placeholder="Enter Email Address" /></td>
								</tr>
								<tr><td height="20"></td></tr>
								<tr>
									<td align="center"><input type="submit" name="subscribe" value="Submit" /></td>
								</tr>
							</table>
							</form>
							</div>
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</div>