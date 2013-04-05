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
	
	
	
	
 <SCRIPT language=Javascript>
      <!--
      function isNumberKey(evt)
      {
         var charCode = (evt.which) ? evt.which : event.keyCode
         if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;
         return true;
      }
      //-->
   </SCRIPT>
<script>
    function check(val3){
        var test = '#s'+val3;
       $('#location').val($(test).text());
    }
    function uncheckAll(value) {
	$(".selsts").attr('checked', false);
        $('#'+value).attr('checked',true);
}
function getweeks(){
        //var d1 = $('#datepicker').val();
       // var d2 = $('#datepicker2').val();
        var d1 = $('#datepicker').datepicker('getDate');
        var d2 = $('#datepicker2').datepicker('getDate');
      diff = Math.floor((d2.getTime() - d1.getTime()) / 86400000); // ms per day
     diff = Math.floor(diff/7);
      $('#weeks').val(diff);
}
$(function () {
$('#location').keyup(function () {
      
        var that = this,
        value = $(this).val();
        

        if (value.length >= 2 ) {
        	$('#srch_dv').show();
        	$('#srch_dv').html('<div align="center" style="margin-top:30px;"><img src="images/loader-new.gif" /></div>');
      
        	 	
        	$.ajax({
                type: "GET",
                url: "<?php echo base_url();?>user/ajax/searchmulti",
                data: {
                    'keywords1' : value
                },
                dataType: "text",
                success: function(msg){
                    //we need to check if the value is the same
                    if (value==$(that).val()) {
                    //Receiving the result of search here
                    $("#srch_dv").html(msg);
                    }
                }
            });
        }
    });

});
    
    function search(val){
        //alert(val);
    }
     $(function() {
        $( "#datepicker" ).datepicker({
            showOn: "button",
            buttonImage: "<?php echo base_url();?>theme/user-images/calander_new.png",
            buttonImageOnly: true
        });
    });
     $(function() {
        $( "#datepicker2" ).datepicker({
            showOn: "button",
            buttonImage: "<?php echo base_url();?>theme/user-images/calander_new.png",
            buttonImageOnly: true
        });
    });
</script>			
    <style>
    .ui-tooltip, .arrow:after {
      /*  background:#c9c9c9;	*/
        border: 2px solid white;
		background-color: #f3f3f3; background: url(images/linear_bg_2.png); 
		background-repeat: repeat-x; /* Safari 4-5, Chrome 1-9 */ 
		background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#c9c9c9), to(#2F2727)); /* Safari 5.1, Chrome 10+ */ 
		background: -webkit-linear-gradient(top, #f3f3f3, #c9c9c9); /* Firefox 3.6+ */ 
		background: -moz-linear-gradient(top, #f3f3f3, #c9c9c9); /* IE 10 */ 
		background: -ms-linear-gradient(top, #f3f3f3, #c9c9c9); /* Opera 11.10+ */ 
		background: -o-linear-gradient(top, #f3f3f3, #c9c9c9);
    }
    .ui-tooltip {
        padding: 10px 20px;
        color: #000;
        border-radius: 10px;
        font:14px "Helvetica Neue", Sans-Serif;
        text-transform: uppercase;
        box-shadow: 0 0 7px white;
    }
    .arrow {
        width: 70px;
        height: 16px;
        overflow: hidden;
        position: absolute;
        left: 50%;
        margin-left: -35px;
        bottom: -16px;
    }
    .arrow.top {
        top: -16px;
        bottom: auto;
    }
    .arrow.left {
        left: 20%;
    }
    .arrow:after {
        content: "";
        position: absolute;
        left: 20px;
        top: -20px;
        width: 25px;
        height: 25px;
        box-shadow: 6px 5px 9px -9px white;
        -webkit-transform: rotate(45deg);
        -moz-transform: rotate(45deg);
        -ms-transform: rotate(45deg);
        -o-transform: rotate(45deg);
        tranform: rotate(45deg);
    }
    .arrow.top:after {
        bottom: -20px;
        top: auto;
    }
    </style>
			<div style="float:left;">
            
            
            <div id="ads">
          <?php
            $this->load->view('user/course_of_day');
			$this->load->view('user/college_of_day');
            ?>
            </div>
            
            
            
				<div class="c_left">
				<!--<img src="http://maps.googleapis.com/maps/api/staticmap?center=london,uk&zoom=11&size=200x200&sensor=false">-->
					<div class="filter_bg" style="min-height:500px;">
						<form name="s_form"  id="s_form" method="post" action="<?php echo base_url(); ?>user/search_result/search">
						
							<div class="f_heading">
								<span ><h3>Search Courses</h3></span>
							</div>
							<div class="flf">
								<div class="clr"></div>
								<table cellpadding="0" border="0" class="search_form" width="220" cellspacing="5">
									<tr>
										<td><strong>Location</strong></td>
									</tr>
									<tr>
										<td>
											<input type="text" name="location"  id="location" placeholder="Search Cource, Location, College"    required autocomplete="off" />  <!--   onkeyup="search(this.value);" value="Search Cource BY Location & BY College Name" autocomplete="off" onblur="if(this.value==''){this.value='Search Cource BY Location & BY College Name';}" onclick="this.value='';"		-->
											<div id="srch_dv" class="srch_dv2" style="display:none; margin-top:0px !important; text-align:left !important; position:absolute; z-index:50;"></div>
										</td>
									</tr>
									<tr>
										<td>
										<table cellpadding="0" cellspacing="0">
											<tr><td colspan="9" height="15"></td></tr>
											<tr><td colspan="9"><strong>Course Name</strong></td></tr>
											<tr>
												<td></td>
													<?php
													$getmax =  $this->my_model->getmaxcourseprice();
													$getmin =  $this->my_model->getmincourseprice();
													$endcourceprice =  $getmax['max(offerprice)'];
													$startcourceprice = $getmin['MIN(offerprice)'];
													$i = 0;
														$categories = $this->my_model->getcatehories();
													  foreach($categories as $cat ){
													if($i == 1 ){
														
													  echo  '</tr><tr><td colspan="8" height="10"></td></tr><tr><td></td>';
													  
													  $i = 0;
													}
													?>
												<td><input type="checkbox" name="category[]" value="<?php echo  $cat->id;?>" id="category[]"  class="selsts"/></td>
												<td style="color:#11507c;"><?php echo $cat->name; ?>&nbsp;&nbsp;</td>
												<td width="5"></td>
												<?php $i ++; } ?>
											</tr>
										</table>
										</td>
									</tr>
									<tr>
										<td>
										<table cellpadding="0" cellspacing="5">
											<tr><td colspan="6" height="3"></td></tr>
											<tr>
												<td colspan="1"><strong>Start Date</strong></td>
											</tr>
											<tr class="date_img">
												<td><input type="text" name="searchdate" style="width:100px !important;" id="datepicker" /></td>
											</tr>
											<tr>
												<td><strong>End Date</strong></td>
											</tr>
											<tr class="date_img">
												<td><input type="text" name="enddate" style="width:100px !important;" id="datepicker2"  onchange="getweeks()"/></td>
											</tr>
											<tr>
												<td><strong>No of Weeks</strong></td>
											</tr>
											<tr>
												<td><input type="text" name="weeks"  id="weeks" style="width:120px !important; color:#fff; background:#5989aa;" onkeypress="return isNumberKey(event)"/></td>
											</tr>
										</table>
										</td>
									</tr>
								</table>
							</div>
							<div style="margin-left:35px;">
								<strong>Weekly Price Guide</strong>
							</div>
							<div class="flf">
								<table cellpadding="0" class="search_form" cellspacing="5">
									<tr>
										<td>
											<select name="amountrange">
												<option value="0">Select</option>
												<?php $i = $startcourceprice ;while($i<=$endcourceprice ){?>
												<option value="<?php echo $i;?>,<?php echo $i+50;?>"><?php echo $i;?>&pound;-<?php echo $i+50;?>&pound;</option>
												<?php $i = $i + 51;}?>
											</select>
										</td>
									</tr>
									<tr><td height="10"></td></tr>
									<tr>
										<td><input type="submit" name="Submit" value="Search"  /></td>
									</tr>
									<tr><td colspan="2" height="10"></td></tr>
								</table>
							</div>
								
					</form>
					</div>
				</div>
                
			</div>
            
            <div class="page_detail" style="margin-top:0px;">
                <a href="<?php echo base_url();?>">Home</a><br/><br />
					<?php if($msg == 1){?>
					<div class="headig">No Result Found in <?php echo str_replace("%20","",$city);?></div><br><br><br>
					<div class="headig">Other Results</div>
					<?php }  else { ?>
                                        <div class="headig"><?php echo $count;?> Courses found in <?php echo $city;?></div><br/><br/><br/>	
						<div class="headig">Search Result</div>
                    <?php } ?> 
					<div class="line_c"></div>
					<?php 
					$i = 1;
					foreach($list as $result) { ?>
					<div class="fl">
						<div class="sd">
							<div class="s_img">
								<a href="<?php echo base_url();?>user/branch_info/branch_information/<?php echo $result->id;?>"><img src="<?php echo base_url();?>/uploadfiles/course_images/<?php echo $result->image;?>" width="120" alt="<?php echo $result->courcename;?>" title="<?php echo $result->courcename;?>"  height="120"/></a>
							</div>
							<div class="sd_desc">
								<a href="<?php echo base_url();?>user/branch_info/branch_information/<?php echo $result->id;?>"><h2><?php echo $result->courcename;?>  </h2></a>
								<p><?php echo substr($result->description,0,150);?> ...</p>
							</div>
							<div class="sdc">
							<table>
								<tr>
								<?php 
									if($result->courcerequirmentdoc != "")
									{?>
									<td class="sdc_detail" valign="middle" align="center">
										<a href="<?php echo base_url();?>/uploadfiles/needcourcedc/<?php echo $result->courcerequirmentdoc;?>" target="_blank"><img src="<?php echo base_url();?>/theme/user-images/pdf.jpg" style="margin-left:20px;" /><br />
										Course&nbsp;Detail</a>
									</td>
									<?php } ?>
									<td class="sdc_detail" align="center">
										<a href="javascript:openLiveHelp(1)"><img src="<?php echo base_url();?>/theme/user-images/lc.jpg" style="margin-left:10px;" /><br />Live chat</a>
									</td>
									<td class="sdc_detail">
										<!--<a href="mailto:husnain.weber@gmail.com"><img src="<?php echo base_url();?>/theme/user-images/eq.jpg" style="margin-left:5px;" /><br /></a>-->
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
											echo anchor_popup('user/enquiry/course_enquiry/'.$result->id, '<img src="../../../theme/user-images/eq.jpg" style="margin-left:10px;" /><br>Enquiry', $atts);?>
										
									</td>
									<td class="sdc_detail">
										<a href="#" title="03336917963" class="demo"><img src="<?php echo base_url();?>/theme/user-images/call.jpg" style="margin-left:5px;" /><br />
										Call Us</a>
									</td>
								</tr>
							</table>
							</div>
						</div>
						<div class="deals">
							
                            
                            Actual Price <br /><div id="our-price-here">
							<h2 style="text-align:center"><?php if($this->session->userdata('currencyTo')!=""){echo $this->session->userdata('currencyTo');}else{echo "GBP";} ?>  <?php  echo $this->my_model->currencyconvert($result->offerprice);?></h2>
							<br /><br />
                            </div>
						
                        	Price we offer<br />
							
							<div id="our-price-here" class="our-price">
							<?php 
								$percentage = $result->english_offer_price / 100 * $result->offerprice;
								$actualprice = $result->offerprice - $percentage;
							?>
                            
							<div class="deals2"><h1><?php if($this->session->userdata('currencyTo')!=""){echo $this->session->userdata('currencyTo');}else{echo "GBP";} ?> <?php  echo $this->my_model->currencyconvert($actualprice);?></h1></div></div>
							<span class="book5"><a href="<?php echo base_url();?>user/branch_info/branch_information/<?php echo $result->id;?>" title="Proceed Neext for Booking">Booknow</a></span>
						</div>
					</div>
					<div class="line_c"></div>
					<?php $i++;}?>
					
					<div class="clr"></div>
					</div>
				</div>
            
			<div class="spn">
				<strong>Special Notes:</strong>
				<p>
					Please fill all the fields and carry on to the next step.
				</p>
			</div>
		</div>
	</div>