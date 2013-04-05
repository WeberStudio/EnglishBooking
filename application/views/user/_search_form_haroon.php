<style>
 .srch_dv {
	background-color:white;
	color:#000000;
	height:223px;
	/*margin-left:227px;*/
	margin-top:2px;
	min-height:45px;
	position:absolute;
	visibility:visible;
	width:394px;
}
.srch_dv_main {
	height:190px;
	margin:28px 0 0 2px;
	overflow-x:hidden;
	overflow-y:scroll;
	width:516px;
	z-index:6;
}
.ui-accordion .ui-accordion-header{
	float:left;
	width:435px;
    position: inherit;
}  
#accordion p{
	float:left;
}
.acc_txt{
	float:left; margin:-6px 0 10px 29px; width:390px;
	height:150px;
	border-radius:0px;
}
#accordion h3{
	border:0px;
	background:none;
}
.cdh_bg{
	margin-top:-9px;
}
</style>
<script src="<?php echo base_url();?>theme/user-js/calendarDateInput.js" type="text/javascript"></script>
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
$( "#accordion" ).accordion();

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
            buttonImage: "theme/user-images/calander.jpg",
            buttonImageOnly: true
        });
    });
     $(function() {
        $( "#datepicker2" ).datepicker({
            showOn: "button",
            buttonImage: "theme/user-images/calander.jpg",
            buttonImageOnly: true
        });
    });
</script>			
<div style="float:left;">
				<div class="sform_bg">
					<form name="s_form"  id="s_form" method="post" action="<?php echo base_url(); ?>user/search_result/search">
					<div class="f_heading">
						<span>Search Courses</span>
					</div>
					<div class="flf">
						<div class="linef"></div>
						<div class="clr"></div>
						<table cellpadding="0" border="0" class="search_form" width="450" cellspacing="5">
							<tr>
								<td><strong>Location</strong></td>
							</tr>
							<tr>
								<td>
									<input type="text" name="location" class="search_form_maintext"  id="location" placeholder="Search Cource BY Location & BY College Name"    required autocomplete="off" />  <!--   onkeyup="search(this.value);" value="Search Cource BY Location & BY College Name" autocomplete="off" onblur="if(this.value==''){this.value='Search Cource BY Location & BY College Name';}" onclick="this.value='';"		-->
									<div id="srch_dv" class="srch_dv" style="display:none"></div>
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
										$i = 1;
											$categories = $this->my_model->getcatehories();
										  foreach($categories as $cat ){
										if($i == 4 ){
											
										  echo  '</tr><tr><td colspan="8" height="20"></td></tr><tr><td></td>';
										  
										  $i = 1;
										}
										?>
										<td><input type="checkbox" name="category[]" value="<?php echo  $cat->id;?>" id="category[]"  class="selsts"/></td>
										<td><?php echo $cat->name; ?>&nbsp;&nbsp;<img alt=" " src="<?php echo base_url();?>/theme/user-images/bullet.jpg" /></td>
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
										<td></td>
										<td><strong>End Date</strong></td>
										<td></td>
										<td><strong>No of Weeks</strong></td>
									</tr>
									<tr>
										<td><input type="text" name="searchdate" style="width:95px !important; margin-top:-5px;" id="datepicker" /></td>
										<td width="10"></td>
<!--										<td><img src="<?php echo base_url();?>/theme/user-images/calander.jpg" /></td>-->
										<td><input type="text" name="enddate" style="width:95px !important;" id="datepicker2"  onchange="getweeks()"/></td>
<!--										<td><img src="<?php echo base_url();?>/theme/user-images/calander.jpg" /></td>-->
										<td width="20"></td>
										<td><input type="text" name="weeks"  id="weeks" style="width:80px !important; color:#fff; background:#5989aa;" onkeypress="return isNumberKey(event)"/></td>
									</tr>
								</table>
								</td>
							</tr>
						</table>
					</div>
					<div class="flf" style="margin-left:30px;">
						<strong>Weekly Price Guide</strong>
					</div>
					<div class="clr"></div>
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
								<td width="20"></td>
								<td><input type="submit" name="Submit" value="Search" /></td>
							</tr>
							<tr><td colspan="2" height="10"></td></tr>
						</table>
					</div>
					</form>
				</div>
        <div class="acordion_bg_cls">
			<div id="accordion" >
				<?php if($collegeshowhide['1']->value == 1) { ?>
				<h3 style="border:0px; width:100%;">
				<div class="cdh_bg">
					<div class="cd_img">
						<img alt=" " src="<?php echo base_url();?>uploadfiles/course_images/thumbs/<?php echo $gettingcourceofday->image;?>" />
					</div>
					<div class="cd_h">
						<?php echo $collegeshowhide['1']->text;?>
					</div>
				</div>
				</h3>
				<div class="acc_txt">
					<p>
						<h1><?php echo $gettingcourceofday->courcename;?></h1><br>
						<?php echo substr($gettingcourceofday->description,0,350);?>
					</p>
				</div>  
				<?php }
				if($collegeshowhide['0']->value == 1) { ?>
					<h3>
					<div class="cdh_bg">
						<div class="cd_img">
							<img alt=" " src="<?php echo base_url();?>uploadfiles/collegeimages/thumbs/<?php echo $gettingcollegeofday->image;?>" />
						</div>
						<div class="cd_h">
							<?php echo $collegeshowhide['0']->text;?>
						</div>
					</div></h3>
					<div class="acc_txt">
						<p>
							<h1><?php echo $gettingcollegeofday->name;?></h1></br>
							<?php echo substr($gettingcollegeofday->description,0,350);?>
						</p>
					</div>
            <?php }?>
			</div>
		</div>
	</div>
