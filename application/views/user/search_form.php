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
	width:300px;
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
	cursor: pointer; 
}  
.defaultIcon
{
background-image: url(<?php echo base_url();?>uploadfiles/course_images/thumbs/arow1.png) !important;
margin-top:-9px;
}
.selectedIcon
{
background-image: url(<?php echo base_url();?>uploadfiles/course_images/thumbs/arow2.png) !important;
margin-top:-9px;
}
#accordion p{
	float:left;
	height:67px;
}
.acc_txt{
	float:left; 
	margin:-6px 0 10px 29px; 
	width:391px;
	height:auto;
	border-radius:0px;
	font-size:12px;;
}
#accordion h3{
	border:0px;
	background:none;
	float:left;
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
$( "#accordion" ).accordion({
		});
	$("#drop_arrow_main1").click(function() {
	//alert("Handler for .click() called.");
	//alert($('#drop_arrow1').attr('src'));
	if($('#drop_arrow1').attr('src') != undefined)
	{
			var imgpath1 = $('#drop_arrow1').attr('src');
				imgpath1 = imgpath1.split('theme')
			if(imgpath1[1] == '/user-images/up_arrow.png')
			{
				$('#drop_arrow1').attr('src', imgpath1[0]+'theme/user-images/down_arrow.png')
				$('#drop_arrow2').attr('src', imgpath1[0]+'theme/user-images/up_arrow.png')
				//alert("test")
			}
	}
	//alert($('#drop_arrow2').attr('src'));
});        
$("#drop_arrow_main2").click(function() {
	//alert("Handler for .click() called.");
	if($('#drop_arrow2').attr('src') != undefined)
	{
			var imgpath1 = $('#drop_arrow2').attr('src');
				imgpath1 = imgpath1.split('theme')
				
			if(imgpath1[1] == '/user-images/up_arrow.png')
			{
				$('#drop_arrow1').attr('src', imgpath1[0]+'theme/user-images/up_arrow.png')
				$('#drop_arrow2').attr('src', imgpath1[0]+'theme/user-images/down_arrow.png')
				//alert("test")
			}
	}
	//alert($('#drop_arrow2').attr('src'));
});              
/*$('#location').keyup(function () {
      
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
*/
});
    
    function search(val){
        //alert(val);
    }
     $(function() {
        $( "#datepicker" ).datepicker({
            showOn: "button",
            buttonImage: "theme/user-images/calender_new.png",
            buttonImageOnly: true
        });
		
		
		
    });
     $(function() {
        $( "#datepicker2" ).datepicker({
            showOn: "button",
            buttonImage: "theme/user-images/calender_new.png",
            buttonImageOnly: true
        });
		
		
    });
</script>



<!--<script src="http://code.jquery.com/jquery-1.9.1.js"></script>-->



<script>
  $(document).ready(function() {
    $("input#location").autocomplete({
    source: [
							<?php
						$i = 1;
							$categories = $this->my_model->search2();
						  foreach($categories as $cat ){
						if($i == 4 ){
							
						  echo  '';
						  
						  $i = 1;
						}
						?>
						"<?php echo $cat->courcename;?> - <?php echo $cat->college_name;?> - <?php echo $cat->city;?>",
						<?php } ?>

	]
});
  });
  </script>




<script>
$(function() {
var availableTags = [
						<?php
						$getmax =  $this->my_model->getmaxcourseprice();
						$getmin =  $this->my_model->getmincourseprice();
						$endcourceprice =  $getmax['max(offerprice)'];
						$startcourceprice = $getmin['MIN(offerprice)'];
						$i = 1;
							$categories = $this->my_model->getcatehories();
						  foreach($categories as $cat ){
						if($i == 4 ){
							
						  echo  '';
						  
						  $i = 1;
						}
						?>
						"<?php echo $cat->name; ?>",
						<?php } ?>
];
$( "#" ).autocomplete({
source: availableTags
});
});
</script>

			
<div class="float-left">
				
                
                <div class="sform_bg">
                
                <form name="s_form"  id="s_form" method="post" action="<?php echo base_url(); ?>user/search_result/search">
                
                <div class="white-spot-label-bg"></div>
                <div class="search-main-heading"><h1>Search Courses</h1></div>
                
                
                <div id="main-search-area">
                    <div class="linef"></div>
                    
                    <div id="search-form">
                    
                        <div class="form-labels">Location</div>
                        
                        <input type="text" name="location" class="search_form_maintext"  id="location" placeholder="Search course by Location / by College Name" required autocomplete="off" title="Search e.g Course Name, College Name or Location" />  
                        <div id="srch_dv" class="srch_dv" style="display:none"></div>
                      
                    </div>
                    
                    
                    <div id="course-cat-section">
                   		
                        <div class="form-labels">Course Name</div>
                        
                        <ul>
                        
						<?php
						$getmax =  $this->my_model->getmaxcourseprice();
						$getmin =  $this->my_model->getmincourseprice();
						$endcourceprice =  $getmax['max(offerprice)'];
						$startcourceprice = $getmin['MIN(offerprice)'];
						$i = 1;
							$categories = $this->my_model->getcatehories();
						  foreach($categories as $cat ){
						if($i == 4 ){
							
						  echo  '';
						  
						  $i = 1;
						}
						?>
                        <li>
                        <input type="checkbox" name="category[]" value="<?php echo  $cat->id;?>" id="category[]"  class="selsts" title="Select your English language course category"/>
                        <div style="margin:1px 0 0 3px; float:left;" title="Select your English language course category"><?php echo $cat->name; ?></div></li>
										
						<?php $i ++; } ?>
                        
                        </ul>
                        
                    </div>
                    <div id="date-picker-section">
                        <ul>
                            <li title="Select your course starting date "><div class="form-labels">Start Date</div>
                            <input type="text" name="searchdate" id="datepicker" onchange="getweeks() " />
                            </li>
                            
                            <li title="Select your course ending date "><div class="form-labels">End Date</div>
                            <input type="text" name="enddate" id="datepicker2"  onchange="getweeks() " />
                            </li>
                            
                            <li title="Auto-Calculated no. of weeks " ><div class="form-labels">No. of Weeks</div>
                            <input type="text" name="weeks"  id="weeks" onkeypress="return isNumberKey(event)"  style="color:#fff; background:#5989aa; text-align:center; width:90px !important;"  />
                            </li>
                        
                        </ul>
                    
                    </div>
                    
                    
                    
                    <div class="float-left" id="price-guide">
                    
                    	<div class="form-labels">Weekly Price Guide</div>
                        <div class="background-select-moz">
                        <select name="amountrange" class="select-class-new" title="Select your price">
                       	<option value="0" class="select-option">Select</option>
                            <?php $i = $startcourceprice ;while($i<=$endcourceprice ){?>
                                <option value="<?php echo $i;?>,<?php echo $i+50;?>" class="select-option"><?php echo $i;?>&pound;-<?php echo $i+50;?>&pound;</option>
                            <?php $i = $i + 51;}?>
                       
                        </select>
						</div>
                        <input type="submit" name="Submit" value="Search" title="Click and Search Colleges and courses" /></td>
                        
                    
                    </div>
                    
                </div>
               
                </form>
                
                </div>
                
                
        <div class="acordion_bg_cls">
			<div id="accordion" >
				<?php if($collegeshowhide['1']->value == 1) { ?>
				<h3>
				<div class="cdh_bg" id="drop_arrow_main1">
					<div class="cd_img">
						<img alt=" " src="<?php echo base_url();?>uploadfiles/course_images/thumbs/<?php echo $gettingcourceofday->image;?>" />
					</div>
					<div class="cd_h">
						<?php echo $collegeshowhide['1']->text;?>
					</div>
					<div style="float:right; margin:40px 20px 0 0;">
						<img id="drop_arrow1" src="<?php echo base_url();?>theme/user-images/down_arrow.png" />
					</div>
                  
                    
                    
				</div>
				</h3>
				<div class="acc_txt">
					<p>
						<h1><a href="<?php echo base_url();?>user/branch_info/branch_information/<?php echo $gettingcourceofday->id;?>" target="_blank"><?php echo $gettingcourceofday->courcename;?></a></h1><br>
						<?php echo substr($gettingcourceofday->description,0,200);?>
					</p>
				</div>  
				<?php }
				if($collegeshowhide['0']->value == 1) { ?>
					<h3>
					<div class="cdh_bg" id="drop_arrow_main2">
						<div class="cd_img">
						<table cellpadding="0" cellspacing="0">
							<tr>
								<td valign="middle" width="100" height="75">
									<img alt=" " src="<?php echo base_url();?>uploadfiles/collegeimages/thumbs/<?php echo $gettingcollegeofday->image;?>" title="<?php echo $gettingcollegeofday->name;?>" />
								</td>
							</tr>
						</table>
						</div>
						<div class="cd_h">
							<?php echo $collegeshowhide['0']->text;?>
						</div>
							<div style="float:right; margin:40px 20px 0 0;">
								<img id="drop_arrow2" src="<?php echo base_url();?>theme/user-images/up_arrow.png" />
							</div>

					</div></h3>
					<div class="acc_txt">
						<p>
							<h1><a href="<?php echo base_url();?>user/pages/college_data/<?php echo  $gettingcollegeofday->cid;?>" target="_blank"><?php echo $gettingcollegeofday->name;?></a></h1></br>
							<?php echo substr($gettingcollegeofday->description,0,200);?>
						</p>
					</div>
                    
                    
                    
            <?php }?>
			</div>
		</div>
	</div>
