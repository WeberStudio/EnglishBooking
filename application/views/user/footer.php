	<?php 
		$result = $this->my_model->getfootorpage();
	?>
    <div class="footer">
		<div class="fm">
			<div class="footer_menu">
				<ul>
<!--					<li><a href="#">English (US)</a></li>
					<li><a href="#">Español</a></li>
					<li><a href="#">Português (Brasil)</a></li>
					<li><a href="#">Français (France)</a></li>
					<li><a href="#">Deutsch</a></li>
					<li><a href="#">Italiano  </a></li>
-->				
				</ul>
			</div>
			<div class="clr"></div>
			<div class="footer_bot">
				English Booking <?php echo date('Y');?>
				<?php if($this->session->userdata('session_status') >= 1){ 
				}else{?> 
				- <a href="<?php echo base_url();?>user/customer_login/customers_login">College login</a> -
				<?php } ?> 
                <?php foreach($result as $pages) {?>
               	 <a href="<?php echo base_url()."page-".$pages->url;?>"><?php echo $pages->title;?></a> - 
                <?php }?>
				<a href="<?php echo base_url()."user/pages/contact_us/";?>">Contact Us</a>
				
			<!--	<a href="<?php echo base_url();?>user/booking_info/getInfo">Booking Info</a> - 
				<a href="<?php echo base_url();?>user/pages/college_lists">College List</a> - 
				<a href="<?php echo base_url();?>user/pages/college_data">College Data</a>
				<a href="#">Badges</a> - 
				<a href="#">People </a> - 
				<a href="#">Pages </a> - 
				<a href="#">Apps </a> - 
				<a href="#">Games</a> - 
				<a href="#">Music</a> - 
				<a href="#">About</a>-->
			</div>
		</div>
	</div>
</div>

<style>
		.goog-te-banner-frame{
				display:none;
				
		}
		.goog-te-gadget-simple {
			background-color: #FFFFFF;
			border-color: #9B9B9B #D5D5D5 #E8E8E8;
			border-style: none;
			border-width: 0;
			cursor: pointer;
			display: inline-block;
			font-size: 10pt;
			padding-bottom: 0;
			padding-top: 0;
		}
		
</style>
<!--	***************************************************************************************************************************


															POWERED BY
											Web art and tecnhology (www.weber.com)
											
																TEAM
											Design by 
											
											Mr Haroon Malik Senior Graphic Designer		[haroon.weber@gmail.com]
											Mr Sajid Iqbal Graphic Designer				[sajid.weber@gmail.com]
											
											Developed by 
											
											Mr Jamshaid Asif - SSE(Senior Software Engineer)
											Mr Muhammad Husnain Ahmad - SE (Software Engineer)	[husnain.weber@gmail.com]
											


******************************************************************************************************************************	-->

</body>

</html>