<?php 
$collegepopular = $this->home_modle->popularimages(); 
$socialmedia = $this->home_modle->socialmedia();
?>
<!--===================		Carasol	========================-->
<script language="javascript" src="http://baijs.nl/tinycarousel/js/jquery.tinycarousel.js"></script>
<style type="text/css">
	#slider1 { height: 1%; overflow:hidden; padding: 0 0 10px;   }
	#slider1 .viewport { float: left; width: 190px; height: 130px; overflow: hidden; position: relative; }
	#slider1 .viewport img{ float:left; height: 70px; overflow: hidden;}
	#slider1 .buttons { background:url("../images/buttons.png") no-repeat scroll 0 0 transparent; display: block; margin: 30px 10px 0 0; background-position: 0 -38px; text-indent: -999em; float: left; width: 39px; height: 37px; overflow: hidden; position: relative; }
	#slider1 .next { background-position: 0 0; margin: 30px 0 0 10px;  }
	#slider1 .disable { visibility: hidden; }
	#slider1 .overview { list-style: none; position: absolute; padding: 0; margin: 0; width: 240px; left: 0 top: 0; }
	#slider1 .overview li{ float: left; margin: 0 20px 0 0; padding: 1px; height: 121px; border: 0px solid #dcdcdc; width: 236px;}
</style>
	<script type="text/javascript">
		$(document).ready(function(){
			$('#slider1').tinycarousel({ pager: true, interval: true , intervaltime: 5000  });	
		});
	</script>	





<script type="text/javascript">

function mycarousel_initCallback(carousel)
{
    // Disable autoscrolling if the user clicks the prev or next button.
    carousel.buttonNext.bind('click', function() {
        carousel.startAuto(0);
    });

    carousel.buttonPrev.bind('click', function() {
        carousel.startAuto(0);
    });

    // Pause autoscrolling if the user moves with the cursor over the clip.
    carousel.clip.hover(function() {
        carousel.stopAuto();
    }, function() {
        carousel.startAuto();
    });
};

jQuery(document).ready(function() {
    jQuery('#mycarousel').jcarousel({
        auto: 2,
        wrap: 'last',
        initCallback: mycarousel_initCallback
    });
});

</script>
<div class="bb100">
		<div class="book_plac">
			<div style="width:100%;" align="center">
			<form name="subscribe" id="subscribe" method="post" action="<?php echo base_url();?>user/newsletter/subscribe">
			<table cellpadding="0" class="subs" width="920" align="center" cellspacing="5">
				<tr>
					<td><i>News letter subscription</i></td>
					<td><input type="email" name="email" required placeholder="Enter Email Address for News Letter" /></td>
					<td><input type="submit" name="subscribe" value="Submit&nbsp;" /></td>
				</tr>
			</table>
			</form>
			</div>
		</div>
	</div>
	<div class="w922">
            <!--<script type="text/javascript">
		// Initialize the plugin with no custom options
		$(document).ready(function () {
			// None of the options are set
			$("div#makeMeScrollable").smoothDivScroll({
				autoScrollingMode: "onStart"
			});
		});
	</script>-->
        <style type="text/css">

		#makeMeScrollable
		{
			width:100%;
			height: 164px;
			position: relative;
		}
		
		/* Replace the last selector for the type of element you have in
		   your scroller. If you have div's use #makeMeScrollable div.scrollableArea div,
		   if you have links use #makeMeScrollable div.scrollableArea a and so on. */
		#makeMeScrollable div.scrollableArea img
		{
			position: relative;
			float: left;
			margin: 0;
			padding: 0;
			/* If you don't want the images in the scroller to be selectable, try the following
			   block of code. It's just a nice feature that prevent the images from
			   accidentally becoming selected/inverted when the user interacts with the scroller. */
			-webkit-user-select: none;
			-khtml-user-select: none;
			-moz-user-select: none;
			-o-user-select: none;
			user-select: none;
		}
	</style>
		<div class="fl" style="width:100%;">
			<div class="pd_bg2" >
				<h1>Popular Colleges</h1><br />
                                            <div id="wrap">
  
<?php /*?>  <ul id="mycarousel" class="jcarousel-skin-tango" style="width:200px; overflow:hidden;">
      <?php foreach($collegepopular as $popular) {  ?>
    <li style="width:190px; height:130px; overflow:hidden;"><a href="<?php echo base_url();?>user/pages/college_data/<?php echo $popular->cid;?>"><img alt=" " src="<?php echo base_url();?>uploadfiles/collegeimages/<?php echo $popular->image;?>" width ="190" /></a>
						
                        	<a href="<?php echo base_url();?>user/pages/college_data/<?php echo $popular->cid;?>"><h3 class="college-name-desc"><?php echo $popular->name;?></h3></a></li>
    <?php } ?>
  </ul>
<?php */?>
						<div id="slider1">
							<div class="viewport">

								<ul class="overview" style="width:200px; overflow:hidden;">
									  <?php foreach($collegepopular as $popular) {  ?>
									<li style="width:190px; height:130px; overflow:hidden;"><a href="<?php echo base_url();?>user/pages/college_data/<?php echo $popular->cid;?>"><img alt=" " src="<?php echo base_url();?>uploadfiles/collegeimages/<?php echo $popular->image;?>" width ="190" /></a>
														
									<a href="<?php echo base_url();?>user/pages/college_data/<?php echo $popular->cid;?>" ><h3 class="college-name-desc" style="float:left; margin-top:20px;"><?php echo $popular->name;?></h3></a></li>
									<?php } ?>
								  </ul>
								  </div>
								 </div>
						</div>
                                
				<!--<div id="makeMeScrollable">
					<?php foreach($collegepopular as $popular) {  ?>
                    
                    	<div id="scrollable-popular-imgs">
							<a href="<?php echo base_url();?>user/pages/college_data/<?php echo $popular->id;?>"><img alt=" " src="<?php echo base_url();?>uploadfiles/collegeimages/<?php echo $popular->image;?>" width ="287" height="100" /></a>
						
                        	<a href="<?php echo base_url();?>user/pages/college_data/<?php echo $popular->id;?>"><h1 class="college-name-desc"><?php echo $popular->name;?></h1></a>
                        </div>
					<?php } ?>
				</div>-->
			</div>
            
            
			<div class="pd_bg_social">
				<h1>Follow Us</h1>
				 <ul>
					 <?php 
					   $tr = 0;
					foreach($socialmedia as $social){ 
						if($tr%3 == 0){
							echo "</tr><tr>";
						}
						?>
                    <li>
					<a href="<?php echo $social->url;?>" target="_blank"><img alt="<?php echo $social->title;?>" src="<?php echo base_url();?>uploadfiles/scoialicone/<?php echo $social->image?>" /></a></td>
					<?php $tr ++; }?>
                    </li>
                    
				</ul>
			</div>
            
            
			<div class="pd_bg2">
				<h1>Refer to a friend</h1>
				<div class="rf">
                	<form method="post" action="<?php echo base_url();?>user/newsletter/invitefriend" name="refer" id="refer">
						<span style="color:#fff;"><?php echo $this->session->flashdata('success');?></span>
						<input type="email" name="email" id="email" required placeholder="Enter Email Address" />
						<input type="submit" name="subscribe" value="Submit" />
                	</form>
				</div>
			</div>
            
            
            
		</div>
	</div>
	<div class="line_bot"></div>
	<div class="w922">
		<div class="desc">
			<b>Disclaimer.</b> THE DATA, INFORMATION, ARTICLES, MONOGRAPHS AND OTHER MATERIAL (THE "MATERIAL") FROM OR THROUGH 
			THE SITE ARE PROVIDED "AS-IS," "AS AVAILABLE," AND ALL WARRANTIES, EXPRESS OR IMPLIED, ARE DISCLAIMED (INCLUDING BUT NOT 
			LIMITED TO THE DISCLAIMER OF ANY IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE). THE MATERIAL 
			MAY CONTAIN BUGS, VIRUSES, ERRORS OR OTHER PROBLEMS OR LIMITATIONS. III AND ITS AFFILIATES HAVE NO LIABILITY WHATSOEVER FOR 
			A USER'S USE OF ANY MATERIAL IN PARTICULAR, BUT NOT AS A LIMITATION THEREOF, III AND ITS AFFILIATES ARE NOT LIABLE FOR ANY 
			INDIRECT, SPECIAL, INCIDENTAL, OR CONSEQUENTIAL DAMAGES (INCLUDING DAMAGES FOR LOSS OF BUSINESS, LOSS OF PROFITS, LITIGATION, 
			OR THE LIKE), WHETHER BASED ON BREACH OF CONTRACT, BREACH OF WARRANTY, TORT (INCLUDING NEGLIGENCE), PRODUCT LIABILITY OR 
			OTHERWISE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGES. THE NEGATION OF DAMAGES SET FORTH ABOVE IS A FUNDAMENTAL ELEMENT 
			OF THE BASIS OF THE BARGAIN BETWEEN III AND USER. THIS SITE AND THE MATERIAL WOULD NOT BE PROVIDED WITHOUT SUCH LIMITATIONS. 
		</div>
	</div>