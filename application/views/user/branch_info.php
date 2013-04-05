<?php 
  $collegeinfo =  $this->my_model->collegeinfo($course_data->college_id);
  $courcetestmonials =  $this->my_model->gettestimonials($course_data->id);
  $samelocationcourses = $this->my_model->getcoursessamelocation($course_data->address,$course_data->id);
  ?>
<script>
    $(function() {
		  //$("#demo img[title]").tooltip();
        $(".demo").tooltip({
            position: {
                my: "center bottom-20",
                at: "center top",
                using: function( position, feedback ) {
                    $( this ).css( position );
                    $( "<div>" )
                        .addClass( "arrow" )
                        .addClass( feedback.vertical )
                        .addClass( feedback.horizontal )
                        .appendTo( this );
                }
            }
        });
    });
</script>

    <script language="javascript" type="text/javascript">

            $(function() {
                $(".webwidget_tab").webwidget_tab({
                    window_padding: '10',
                    head_text_color: '#0099FF',
                    head_current_text_color: '#666'
                });
            });
			
			(function(a){
				a.fn.webwidget_tab=function(p){
					var p=p||{};
					var s_w_p=p&&p.window_padding?p.window_padding:"5";
					var s_h_t_c=p&&p.head_text_color?p.head_text_color:"blue";
					var s_h_c_t_c=p&&p.head_current_text_color?p.head_current_text_color:"black";
					var dom=a(this);
					s_w_p += "px";
					
					if(dom.find("ul").length==0||dom.find("li").length==0){
						dom.append("Require content");
						return null;
					}
					begin();
					function begin(){
						dom.children(".tabBody").children("ul").children("li").children("p").css("padding",s_w_p);
						dom.children(".tabContainer").children(".tabHead").children("li").children("a").css("color",s_h_t_c);
						dom.children(".tabBody").children("ul").children("li").hide();
						dom.children(".tabBody").children("ul").children("li").eq(0).show();
						dom.children(".tabContainer").children(".tabHead").children("li").children("a").click(function(){
							var current = dom.children(".tabContainer").children(".tabHead").children("li").index($(this).parent());
							dom.children(".tabContainer").children(".tabHead").children("li").children("a").css("color",s_h_t_c);
							dom.children(".tabContainer").children(".tabHead").children("li").removeClass("currentBtn")
							dom.children(".tabContainer").children(".tabHead").children("li").eq(current).children("a").css("color",s_h_c_t_c);
							dom.children(".tabContainer").children(".tabHead").children("li").eq(current).addClass("currentBtn");
							dom.children(".tabBody").children("ul").children("li").hide();
							dom.children(".tabBody").children("ul").children("li").eq(current).show();
						});
					}
				}
			})(jQuery);
			
			/*=========== Toggle ============*/			
			jQuery(document).ready(function() {
				$("#tog").hide();
				$('#clickme').click(function () {
					$('#tog').slideToggle("slow");
				});
			});
                        $("#slideshow > div:gt(0)").hide();

			setInterval(function() { 
			  $('#slideshow > div:first')
				.fadeOut(1000)
				.next()
				.fadeIn(1000)
				.end()
				.appendTo('#slideshow');
			},  3000);
        </script>
		
<script type="text/javascript">var switchTo5x=false;</script>
<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
<script type="text/javascript">stLight.options({publisher: "e4aacdb0-91e6-4902-846c-f4257161445e", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>	


        <style>
            #slideshow { 
    height: 240px; 
    width: 380px;
    
}

#slideshow > div { 
 
}
        </style>
			<div style="float:left;">
				<div class="p_left">
					<div class="pg_detail">
						<img alt=" " width="220px" src="<?php echo base_url();?>uploadfiles/collegeimages/<?php echo $collegeinfo->image;?>" />
					</div>
					<h1>Popular Courses </h1>
					<?php
						foreach($popularcourses as $popular){
					?>
					
					<div class="pg_detail">
						<a href="<?php echo base_url();?>user/branch_info/branch_information/<?php echo $popular->Course_ID;?>">
							<img alt=" " src="<?php echo base_url();?>uploadfiles/course_images/thumbs/<?php echo $popular->image;?>" width="70" />
							<i><?php echo substr($popular->courcename,0,20);?></i>
							<p><?php echo substr($popular->description,0,50);?></p>
						</a>
					</div>
					<div class="pg_line"></div>
					<?php } ?>
					<h1><span class="cd_p">Course</span> Location</h1>
					<div class="pg_detail" id="map" style="width: 230px; height: 300px; float: left;">
						<!--<img alt=" " src="<?php echo base_url();?>/theme/user-images/gm.jpg"  />
                    	<img width="220" src="http://maps.googleapis.com/maps/api/staticmap?center=&zoom=11&size=200x200&sensor=false">-->
					</div>
						<!--=====================		Google map 	=========================-->
							 <script type="text/javascript"> 
								debugger;
								 var directionsService = new google.maps.DirectionsService();
								 var directionsDisplay = new google.maps.DirectionsRenderer();
							
								 var map = new google.maps.Map(document.getElementById('map'), {
								   //zoom:20,
								   mapTypeId: google.maps.MapTypeId.TERRAIN
								 });
							
								 directionsDisplay.setMap(map);
							
								 var request = {
								   origin: '<?php echo $course_data->address;?>', 
								   destination: '<?php echo $course_data->address;?>',
								   travelMode: google.maps.DirectionsTravelMode.DRIVING
								 };
							
								 directionsService.route(request, function(response, status) {
								   if (status == google.maps.DirectionsStatus.OK) {
									 directionsDisplay.setDirections(response);
								   }
								 });
							   </script> 

				
				</div>
				<div class="page_detail">
					<div style="float:left; margin-top:20px;">
                                    <a href="<?php echo base_url();?>">Home</a>--><a href="<?php echo base_url();?>user/search_result/search">Search Results</a>
					</div>
					<div style="float:right">
						<div class="sdc" style="width:300px; margin-top:-23px;">
							<table>
								<tr>
									<td class="sdc_detail">
										<a href="javascript:openLiveHelp(1)"><img src="<?php echo base_url();?>/theme/user-images/lc.jpg" /><br />Live chat</a>
									</td>
									<td class="sdc_detail">
										<!--<a href="mailto:husnain.weber@gmail.com"><img src="<?php echo base_url();?>/theme/user-images/eq.jpg" /><br /></a>-->
										<?php 
											$atts = array(
											  'width'      => '700',
											  'height'     => '500',
											  'scrollbars' => 'yes',
											  'status'     => 'yes',
											  'resizable'  => 'yes',
											  'screenx'    => '0',
											  'screeny'    => '0'
											);
											echo anchor_popup('user/enquiry/course_enquiry/'.$course_data->id, '<img src="../../../theme/user-images/eq.jpg" style="margin-left:10px;" /><br>Enquiry', $atts);?>
										
									</td>
									<td class="sdc_detail">
										<a href="#" title="<?php echo $course_data->phone;?>" class="demo"><img src="<?php echo base_url();?>/theme/user-images/call.jpg" /><br />
										Call Us</a>
									</td>
									<td class="sdc_detail">
										<!--<a href="#" class="demo"><img src="<?php echo base_url();?>/theme/user-images/share.jpg" /><br />Share</a>-->
										<div style="float:left; width:20px; height:6px;"></div><div class="clr"></div>
										<span class='st_sharethis_large' displayText='ShareThis'></span><br /><a>Share</a>
									</td>
								</tr>
							</table>
						</div>
					</div>
					<div class="clr"></div>
					<!--	*****************************	Error Message	******************************		-->
					
					<h3 align="center" style="color:#F00;"><?php echo $this->session->flashdata('msg');?></h3>
					<?php
					//	echo print_r($course_data);
					?>
					<div class="headig" style="margin-top:20px;"><?php echo $course_data->courcename;?></div>
					<div style="float:right;">
					</div>
					<div class="page_desc" style="text-align:left;">
						<div style="float:left;">
							<div style="float:left; text-align:center; width:100px;">
								<a href="<?php echo base_url();?>uploadfiles/needcourcedc/<?php echo $course_data->courcerequirmentdoc;?>" target="_blank">
									<img style="box-shadow:none;" src="<?php echo base_url();?>/theme/user-images/pdf.jpg" /><br />
									Course Details
								</a>
							</div>
							<div class="page_desc_sml">
								<p><?php echo preg_replace('/\s+?(\S+)?$/',"", substr($course_data->description, 0, 200)); //echo substr($course_data->description,0,220);?>...</p>
							</div>
						</div>
							<div class="clr"></div>
							<div class="line_cd"></div>
							<div id="clickme"><a href="#" >View Description</a></div>
							<div id="tog">                   
                            	<p><?php $string = strlen($course_data->description)-1; echo preg_replace('/\s+?(\S+)?$/',"", substr($course_data->description,190,$string));?></p>
								<!--<div style="float:left;">
									<div style="float:left;">
										<h1>Location:</h1>
									</div>
									<div style="float:left;">
										<strong><?php echo $course_data->city;?></strong> &nbsp;&nbsp;|&nbsp;&nbsp;<?php echo $course_data->address;?>
									</div>
								</div>
								<div class="clr"></div>
									<img src="<?php echo base_url();?>uploadfiles/collegeimages/<?php echo $collegeinfo->image;?>" style="box-shadow:none; margin-left:-5px;" />
								<p>
									<?php echo $collegeinfo->description;?>
								</p>
								<div class="cnn">
									<h3>College Name</h3>&nbsp;&nbsp; Name of the College
									<a href="#">View college detail</a>
								</div>
								<div class="cnn">
									<h3>Branch Name</h3>&nbsp;&nbsp; Name of the Branch
									<a href="#">View branch detail</a>
								</div>-->
						</div>
					</div>
                    		<div>
								<div class="fl_t">
									<div style="float:left; ">
										<h1>Location:</h1>
									</div>
									<div class="loc_s">
										<strong><?php echo $course_data->city;?></strong>&nbsp;&nbsp;|&nbsp;&nbsp;<?php echo $course_data->address;?>
									</div>
								</div>
								<div class="clr"></div>
								<p>
									<?php echo $collegeinfo->description;?>
								</p>
								<div class="cnn">
									<h3>College Name</h3>&nbsp;&nbsp; <?php echo $course_data->college_name;?>
									<a href="<?php echo base_url();?>user/pages/college_data/<?php echo $course_data->college_id;?>/<?php echo $course_data->id;?>">View college detail</a>
								</div>
								<div class="cnn">
									<h3>Branch Name</h3>&nbsp;&nbsp; <?php echo $course_data->branch_name;?>
									<a href="<?php echo base_url();?>user/branch_info/branch_data/<?php echo $course_data->Branch_ID;?>/<?php echo $course_data->id;?>">View branch detail</a>
								</div>
						</div>
					<div class="line_c"></div>
						<div class="dc_bn">
							<div style="float:left;">
								<h4>No. of booked courses : <?php echo $this->my_model->getbookedcourses($course_data->id);?></h4>
							</div>
							<div class="deals5" style="float:right;">
							<?php 
								if($this->session->userdata('student_id') != ""){
							?>
								<a href="<?php echo base_url();?>user/branch_info/book_now/<?php echo $course_data->id;?>/<?php echo $course_data->Branch_ID;?>/<?php echo $course_data->offerprice;?>" >Book Now</a>
							<?php }else{ ?>
								<a href="<?php echo base_url();?>user/user_registration/user_registration_detail/<?php echo $course_data->id;?>/<?php echo $course_data->Branch_ID;?>/<?php echo $course_data->offerprice;?>" >Book Now</a>
								<?php }?>
								
							</div>
						</div>
					<div class="line_c"></div>
					<div style="float:left;">
						<!-- ======================		Tabs Syatem 	======================= -->
						<div class="webwidget_tab" id="webwidget_tab">
							<div class="cty">
								<h1>City:</h1> <p>Name of the City</p>
								<span><h1>City Information</h1></span>
							</div>
							<div class="clr"></div>
							
							<div class="tabContainer">
								<ul class="tabHead">
									<li class="currentBtn"><a href="javascript:;">Info</a></li>
									<li><a href="javascript:;">Tourist</a></li>
									<li><a href="javascript:;">Bus</a></li>
									<li><a href="javascript:;">Stores</a></li>
									<li><a href="javascript:;">Restaurants</a></li>
									<li><a href="javascript:;">Airport</a></li>
								</ul>
							</div>
							<div class="tabBody">
								<ul>
									<li class="tabCot">
										<div style="float:left; padding:10px;">
											<h4>Branch Information</h4>
											<div style="float:left; margin:">
												<img alt=" " src="<?php echo base_url();?>/uploadfiles/branches_images/<?php echo $course_data->image;?>" width="220" /><br />
												
											</div>
											<div class="desc_tab">
												<p><?php echo $course_data->description;?></p>
											</div>
										</div>
									</li>
									<li class="tabCot">
										<div style="float:left; padding:10px;">
											<h4>Tourist Information</h4>
											<div style="float:left; margin:">
												<img alt=" " src="<?php echo base_url();?>/uploadfiles/branches_images/<?php echo $course_data->touristimage;?>"  /><br />
                                                                                                <?php if(!empty($course_data->touristfile)){?>
												<a href="<?php echo base_url();?>uploadfiles/info_files/<?php echo $course_data->touristfile;?>" target="_blank">Tourist File</a><?php }?>
											</div>
											<div class="desc_tab">
												<p><?php echo $course_data->touristshortdes;?></p>
											</div>
										</div>
									</li>
									<li class="tabCot">
										<div style="float:left; padding:10px;">
											<h4>Bus Stand Information</h4>
											<div style="float:left; margin:">
												<img alt=" " src="<?php echo base_url();?>/uploadfiles/branches_images/<?php echo $course_data->Busimage;?>"  /><br />
                                                                                                 <?php if(!empty($course_data->Busfile)){?>
												<a href="<?php echo base_url();?>uploadfiles/info_files/<?php echo $course_data->Busfile;?>" target="_blank">Bus Stand File</a><?php }?>
											</div>
											<div class="desc_tab">
												<p><?php echo $course_data->Busshortdes;?></p>
											</div>
										</div>
									</li>
									<li class="tabCot">
										<div style="float:left; padding:10px;">
											<h4>Stores Information</h4>
											<div style="float:left; margin:">
												<img alt=" " src="<?php echo base_url();?>/uploadfiles/branches_images/<?php echo $course_data->Storesimage;?>"  /><br />
                                                                                                <?php if(!empty($course_data->Storesfile)){?>
												<a href="<?php echo base_url();?>uploadfiles/info_files/<?php echo $course_data->Storesfile;?>" target="_blank">Stores File</a><?php }?>
											</div>
											<div class="desc_tab">
												<p><?php echo $course_data->Storesshortdes;?> </p>
											</div>
										</div>
									</li>
									<li class="tabCot">
										<div style="float:left; padding:10px;">
											<h4>Restaurant Information</h4>
											<div style="float:left; margin:">
												<img alt=" " src="<?php echo base_url();?>/uploadfiles/branches_images/<?php echo $course_data->Restaurantsimage;?>"  /><br />
                                                                                                <?php if(!empty($course_data->Restaurantsfile)){?>
												<a href="<?php echo base_url();?>uploadfiles/info_files/<?php echo $course_data->Restaurantsfile;?>" target="_blank">Restaurant File</a><?php }?>
											</div>
											<div class="desc_tab">
												<p><?php echo $course_data->Restaurantsshortdes;?> </p>
											</div>
										</div>
									</li>
									<li class="tabCot">
										<div style="float:left; padding:10px;">
											<h4>Airpot Information</h4>
											<div style="float:left; margin:">
												<img alt=" " src="<?php echo base_url();?>/uploadfiles/branches_images/<?php echo $course_data->Airportimage;?>"  /><br />
                                                                                                 <?php if(!empty($course_data->Airportfile)){?>
												<a href="<?php echo base_url();?>uploadfiles/info_files/<?php echo $course_data->Airportfile;?>" target="_blank">Airpot File</a><?php } ?>
											</div>
											<div class="desc_tab">
												<p><?php echo $course_data->Airportshortdes;?></p>
											</div>
										</div>
									</li>
								</ul>
								<div style="clear:both"></div>
							</div>
							<div class="modBottom">
								<span class="modABL">&nbsp;</span><span class="modABR">&nbsp;</span>
							</div>
						</div>
							<!-- ======================		End Tabs Syatem 	======================= -->
					</div>
				</div>
				<div class="bb"></div>
				<div style="float:left;">
                                    
					<div style="float:left">
						<h1>Course Testimonials</h1>
					   <marquee  behavior="scroll" direction="up" style="float:left; width:380px;" scrollamount="2" onmouseout="this.start()" onmouseover="this.stop()">
							<?php                                                   
							foreach($courcetestmonials as $testmonials) { ?>
									<div class="name_bg">
									<p><?php echo $testmonials->value;?></p>
									<h3 style="margin:0px 0 0 0px; padding:0px;" align="right"><?php echo $testmonials->name;?></h3>
									</div>
							<?php  } ?>
							 
					   </marquee>
					</div>
					<div style="float:left; margin-left:20px;">
						<h1>Other courses at the same location</h1>
                                                <?php foreach ($samelocationcourses as $courses){ ?>
                                                <a href="<?php echo base_url();?>user/branch_info/branch_information/<?php echo $courses->id;?>" ><div class="pg_detail">
							<img width="70"  height="73" src="<?php echo base_url();?>/uploadfiles/course_images/thumbs/<?php echo $courses->image;?>" alt=" ">
							<i><?php echo $courses->courcename;?></i>
                                                        <p><?php echo substr($courses->description,0,30)?> </p>
                                                    </div></a>
						<?php  } ?>
					</div>
				</div>
			</div>
		</div>
	</div>
