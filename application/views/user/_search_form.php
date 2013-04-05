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
	 padding-right: 1em;
}  
#accordion p{
	float:left;
}
.acc_txt{
	float:left; margin:-6px 0 10px 29px; width:390px;
	height:213px;
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
					
						<table cellpadding="0" class="search_form" width="420" cellspacing="5">
							<tr>
								<td>Location</td>
							</tr>
							<tr>
								<td>
									<input type="text" name="location"  id="location" placeholder="Search Cource BY Location & BY College Name"    required autocomplete="off" />  <!--   onkeyup="search(this.value);" value="Search Cource BY Location & BY College Name" autocomplete="off" onblur="if(this.value==''){this.value='Search Cource BY Location & BY College Name';}" onclick="this.value='';"		-->
									<div id="srch_dv" class="srch_dv" style="display:none"></div>
								</td>
							</tr>
							<tr>
								<td>
								<table cellpadding="0" cellspacing="0">
									<tr><td colspan="9" height="15"></td></tr>
									<tr>
										<td width="100">Course Name</td>
										<td></td>
										<td><input type="checkbox" name="category" value="1" id="category1" onClick="uncheckAll(this.id)" class="selsts"/></td>
										<td>Intensive English&nbsp;&nbsp;<img alt=" " src="<?php echo base_url();?>/theme/user-images/bullet.jpg" /></td>
										<td width="5"></td>
										<td><input type="checkbox" name="category" value="2" id="category2" class="selsts" onClick="uncheckAll(this.id)"/></td>
										<td>General English&nbsp;&nbsp;<img alt=" " src="<?php echo base_url();?>/theme/user-images/bullet.jpg" /></td>
										<td></td>
									</tr>
									<tr><td colspan="8" height="20"></td></tr>
									<tr>
										<td></td>
										<td></td>
										<td><input type="checkbox" name="category" value="3" id="category3" class="selsts" onClick="uncheckAll(this.id)"/></td>
										<td>IELTS&nbsp;<img alt=" " src="<?php echo base_url();?>/theme/user-images/bullet.jpg" /></td>
										<td width="5"></td>
										<td><input type="checkbox" name="category" value="4" id="category4" class="selsts" onClick="uncheckAll(this.id)"/></td>
										<td>1 - 2 -1 English&nbsp;&nbsp;<img alt=" " src="<?php echo base_url();?>/theme/user-images/bullet.jpg" /></td>
									</tr>
									<tr><td colspan="8" height="20"></td></tr>
									<tr>
										<td></td>
										<td></td>
										<td><input type="checkbox" name="category" value="5" id="category5" class="selsts" onClick="uncheckAll(this.id)"/></td>
										<td>Business English&nbsp;<img alt=" " src="<?php echo base_url();?>/theme/user-images/bullet.jpg" /></td>
										<td width="5"></td>
										<td></td>
										<td></td>
									</tr>
									
								</table>
								</td>
							</tr>
							<tr>
								<td>
								<table cellpadding="0" cellspacing="5">
									<tr><td colspan="6" height="5"></td></tr>
									<tr>
										<td>Start Date</td>
										<td><input type="text" name="searchdate" style="width:100px !important;" id="datepicker" /></td>
<!--										<td><img src="<?php echo base_url();?>/theme/user-images/calander.jpg" /></td>-->
										<td width="13"></td>
										<td>No of Weeks</td>
										<td><input type="text" name="sdate" style="width:80px !important;" onkeypress="return isNumberKey(event)"/></td>
									</tr>
								</table>
								</td>
							</tr>
						</table>
						<div class="linef"></div>
					</div>
					<div class="f_heading">
						<span>Price Guide</span>
					</div>
					<div class="clr"></div>
					<div class="flf">
						<table cellpadding="0" class="search_form" cellspacing="5">
							<tr>
								<td>
									<select name="ciyt">
										<option value="0">Select</option>
										<option value="1">0&pound;-50&pound;</option>
                                                                                <option value="1">51&pound;-100&pound;</option>
                                                                                <option value="1">101&pound;-150&pound;</option>
                                                                                <option value="1">151&pound;-200&pound;</option>
                                                                                <option value="1">201&pound;-250&pound;</option>
                                                                                <option value="1">251&pound;-300&pound;</option>
                                                                                <option value="1">301&pound;-350&pound;</option>
                                                                                <option value="1">351&pound;-400&pound;</option>
                                                                                <option value="1">401&pound;-450&pound;</option>
                                                                                <option value="1">451&pound;-500&pound;</option>
									</select>
								</td>
								<td><input type="submit" name="Submit" value="Search" /></td>
							</tr>
							<tr><td colspan="2" height="10"></td></tr>
						</table>
					</div>
					</form>
				</div>
        <div style="float:left; width:480px; margin-left:-8px; height:432px; overflow:hidden;">
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
