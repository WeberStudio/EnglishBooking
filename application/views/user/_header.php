<?php

error_reporting(0);
@ini_set(‘display_errors’, 0);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>English Booking</title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>theme/user-css/style.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>theme/user-css/smoothDivScroll.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>theme/user-css/jquery-ui.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>theme/user-css/prettyPhoto.css" />
<script language="javascript" src="<?php echo base_url();?>theme/user-js/jquery-1.6.1.js"></script>
<script language="javascript" src="<?php echo base_url();?>theme/user-js/jquery-ui.js"></script>
<script language="javascript" src="<?php echo base_url();?>theme/user-js/gmaps.js"></script>
<script language="javascript" src="<?php echo base_url();?>theme/user-js/custom-validation.js"></script>
<script language="javascript" src="<?php echo base_url();?>theme/user-js/jquery.customcode.js"></script>
<script language="javascript" src="<?php echo base_url();?>theme/user-css/jquery.validate.js"></script>
<script src="<?php echo base_url();?>theme/user-js/jquery.mousewheel.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>theme/user-js/jquery.kinetic.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>theme/user-js/jquery.smoothdivscroll-1.3-min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>theme/user-js/jquery.prettyPhoto.js" type="text/javascript"></script>



<script language="javascript">
function googleTranslateElementInit() {
new google.translate.TranslateElement({
pageLanguage: 'en',
includedLanguages: 'en,de,fr,nl,hi,it,es,ru,pl,tr,da,', //enter the language codes obtained from step 1 and delete this comment
gaTrack: true,
layout: google.translate.TranslateElement.InlineLayout.SIMPLE
}, 'google_translate_element');
}
</script><script src="//translate.google.com/translate_a/element.js?
cb=googleTranslateElementInit"></script>
<script>
    $(function() {
        $( "#endcourcedatestart" ).datepicker();
	$( "#endcourcedateend" ).datepicker();
        $( "#searchdate" ).datepicker();
    });
    </script>
<script type="text/javascript" charset="utf-8">
			$(document).ready(function(){
				$("#area").prettyPhoto();	
			});
			</script>
</head>
<body onclick="$('#srch_dv').hide();">
<?php $socialmedia = $this->home_modle->socialmedia(); ?>
<div class="w100">
	<div class="w922">
		<div class="header">
			<div class="logo">
				<a href="<?php echo base_url();?>"><img alt=" " src="<?php echo base_url();?>/theme/user-images/logo.png" /></a>
			</div>
			<div class="menu">
				<ul style="margin-top:3px; border-top:1px solid #CCC;">
					<?php if($this->session->userdata('student_id') >= 1){ ?>
						<li><a href="<?php echo base_url();?>user/student_dashboard/student_dashboard_main">Student Dashboard</a></li>
					<?php
						}else if ($this->session->userdata('customer_id') >= 1){?> 
						<li><a href="<?php echo base_url();?>user/customer_info/customer_main">Customer Dashboard</a></li>
					<?php }else{ ?>
							<li style=""><a href="<?php echo base_url();?>user/user_registration/userregistration">User registration</a></li>
					<?php } ?>
					<li><a href="<?php echo base_url();?>user/pages/subscribe">subscribe to offer</a></li>
					
                    <li style="background:url(<?php echo base_url();?>/theme/user-images/dropdown_bg.jpg)">
						<form method="post" action="<?php echo base_url();?>user/ajax/currency_session" name="currencyform" id="currencyform" class="currency_dropdown"  >  
						<select name="currencyTo" id="currencyTo" onchange="this.form.submit()" style="height:33px; padding-top:8px; border:1px solid #FFF; background:none; " >
						<option value="USD" <?php if( $this->session->userdata('currencyTo') == 'USD'){  echo 'selected="selected"';}  ?>>United States Dollars - USD</option>
						<option value="GBP" <?php if($this->session->userdata('currencyTo') == '' || $this->session->userdata('currencyTo') == 'GBP'){  echo 'selected="selected"';}  ?> >United Kingdom Pounds - GBP</option>
						<option value="CAD" <?php if( $this->session->userdata('currencyTo') == 'CAD'){  echo 'selected="selected"';}  ?>>Canada Dollars - CAD</option>
						<option value="AUD" <?php if( $this->session->userdata('currencyTo') == 'AUD'){  echo 'selected="selected"';}  ?>>Australia Dollars - AUD</option>
						<option value="JPY" <?php if( $this->session->userdata('currencyTo') == 'JPY'){  echo 'selected="selected"';}  ?>>Japan Yen - JPY</option>
						<option value="INR" <?php if( $this->session->userdata('currencyTo') == 'INR'){  echo 'selected="selected"';}  ?>>India Rupees - INR</option>
						<option value="NZD" <?php if( $this->session->userdata('currencyTo') == 'NZD'){  echo 'selected="selected"';}  ?>>New Zealand Dollars - NZD</option>
						<option value="CHF" <?php if( $this->session->userdata('currencyTo') == 'CHF'){  echo 'selected="selected"';}  ?>>Switzerland Francs - CHF</option>
						<option value="ZAR" <?php if( $this->session->userdata('currencyTo') == 'ZAR'){  echo 'selected="selected"';}  ?>>South Africa Rand - ZAR</option>
						<option value="DZD" <?php if( $this->session->userdata('currencyTo') == 'DZD'){  echo 'selected="selected"';}  ?>>Algeria Dinars - DZD</option>
						<option value="USD" <?php if( $this->session->userdata('currencyTo') == 'USD'){  echo 'selected="selected"';}  ?>>America (United States) Dollars - USD</option>
						<option value="ARS" <?php if( $this->session->userdata('currencyTo') == 'ARS'){  echo 'selected="selected"';}  ?>>Argentina Pesos - ARS</option>
						<option value="AUD" <?php if( $this->session->userdata('currencyTo') == 'AUD'){  echo 'selected="selected"';}  ?>>Australia Dollars - AUD</option>
						<option value="BHD" <?php if( $this->session->userdata('currencyTo') == 'BHD'){  echo 'selected="selected"';}  ?>>Bahrain Dinars - BHD</option>
						<option value="BRL" <?php if( $this->session->userdata('currencyTo') == 'BRL'){  echo 'selected="selected"';}  ?>>Brazil Reais - BRL</option>
						<option value="BGN" <?php if( $this->session->userdata('currencyTo') == 'BGN'){  echo 'selected="selected"';}  ?>>Bulgaria Leva - BGN</option>
						<option value="CAD" <?php if( $this->session->userdata('currencyTo') == 'CAD'){  echo 'selected="selected"';}  ?>>Canada Dollars - CAD</option>
						<option value="CLP" <?php if( $this->session->userdata('currencyTo') == 'CLP'){  echo 'selected="selected"';}  ?>>Chile Pesos - CLP</option>
						<option value="CNY" <?php if( $this->session->userdata('currencyTo') == 'CNY'){  echo 'selected="selected"';}  ?>>China Yuan Renminbi - CNY</option>
						<option value="CNY" <?php if( $this->session->userdata('currencyTo') == 'CNY'){  echo 'selected="selected"';}  ?>>RMB (China Yuan Renminbi) - CNY</option>
						<option value="COP" <?php if( $this->session->userdata('currencyTo') == 'COP'){  echo 'selected="selected"';}  ?>>Colombia Pesos - COP</option>
						<option value="CRC" <?php if( $this->session->userdata('currencyTo') == 'CRC'){  echo 'selected="selected"';}  ?>>Costa Rica Colones - CRC</option>
						<option value="HRK" <?php if( $this->session->userdata('currencyTo') == 'HRK'){  echo 'selected="selected"';}  ?>>Croatia Kuna - HRK</option>
						<option value="CZK" <?php if( $this->session->userdata('currencyTo') == 'CZK'){  echo 'selected="selected"';}  ?>>Czech Republic Koruny - CZK</option>
						<option value="DKK" <?php if( $this->session->userdata('currencyTo') == 'DKK'){  echo 'selected="selected"';}  ?>>Denmark Kroner - DKK</option>
						<option value="DOP" <?php if( $this->session->userdata('currencyTo') == 'DOP'){  echo 'selected="selected"';}  ?>>Dominican Republic Pesos - DOP</option>
						<option value="EGP" <?php if( $this->session->userdata('currencyTo') == 'EGP'){  echo 'selected="selected"';}  ?>> Egypt Pounds - EGP</option>
						<option value="EEK" <?php if( $this->session->userdata('currencyTo') == 'EEK'){  echo 'selected="selected"';}  ?>>Estonia Krooni - EEK</option>
						<option value="EUR" <?php if( $this->session->userdata('currencyTo') == 'EUR'){  echo 'selected="selected"';}  ?>>Euro - EUR</option>
						<option value="FJD" <?php if( $this->session->userdata('currencyTo') == 'FJD'){  echo 'selected="selected"';}  ?>>Fiji Dollars - FJD</option>
						<option value="HKD" <?php if( $this->session->userdata('currencyTo') == 'HKD'){  echo 'selected="selected"';}  ?>>Hong Kong Dollars - HKD</option>
						<option value="HUF" <?php if( $this->session->userdata('currencyTo') == 'HUF'){  echo 'selected="selected"';}  ?>>Hungary Forint - HUF</option>
						<option value="ISK" <?php if( $this->session->userdata('currencyTo') == 'ISK'){  echo 'selected="selected"';}  ?>>Iceland Kronur - ISK</option>
						<option value="INR" <?php if( $this->session->userdata('currencyTo') == 'INR'){  echo 'selected="selected"';}  ?>>India Rupees - INR</option>
						<option value="ILS" <?php if( $this->session->userdata('currencyTo') == 'ILS'){  echo 'selected="selected"';}  ?>>Israel New Shekels - ILS</option>
						<option value="JMD" <?php if( $this->session->userdata('currencyTo') == 'JMD'){  echo 'selected="selected"';}  ?>>Jamaica Dollars - JMD</option>
						<option value="JPY" <?php if( $this->session->userdata('currencyTo') == 'JPY'){  echo 'selected="selected"';}  ?>>Japan Yen - JPY</option>
						<option value="JOD" <?php if( $this->session->userdata('currencyTo') == 'JOD'){  echo 'selected="selected"';}  ?>>Jordan Dinars - JOD</option>
						<option value="KES" <?php if( $this->session->userdata('currencyTo') == 'KES'){  echo 'selected="selected"';}  ?>>Kenya Shillings - KES</option>
						<option value="KRW" <?php if( $this->session->userdata('currencyTo') == 'KRW'){  echo 'selected="selected"';}  ?>>Korea (South) Won - KRW</option>
						<option value="KWD" <?php if( $this->session->userdata('currencyTo') == 'KWD'){  echo 'selected="selected"';}  ?>>Kuwait Dinars - KWD</option>
						<option value="LBP" <?php if( $this->session->userdata('currencyTo') == 'LBP'){  echo 'selected="selected"';}  ?>>Lebanon Pounds - LBP</option>
						<option value="MYR" <?php if( $this->session->userdata('currencyTo') == 'MYR'){  echo 'selected="selected"';}  ?>>Malaysia Ringgits - MYR</option>
						<option value="MUR" <?php if( $this->session->userdata('currencyTo') == 'MUR'){  echo 'selected="selected"';}  ?>>Mauritius Rupees - MUR</option>
						<option value="MXN" <?php if( $this->session->userdata('currencyTo') == 'MXN'){  echo 'selected="selected"';}  ?>>Mexico Pesos - MXN</option>
						<option value="MAD" <?php if( $this->session->userdata('currencyTo') == 'MAD'){  echo 'selected="selected"';}  ?>>Morocco Dirhams - MAD</option>
						<option value="NZD" <?php if( $this->session->userdata('currencyTo') == 'NZD'){  echo 'selected="selected"';}  ?>>New Zealand Dollars - NZD</option>
						<option value="NOK" <?php if( $this->session->userdata('currencyTo') == 'NOK'){  echo 'selected="selected"';}  ?>>Norway Kroner - NOK</option>
						<option value="OMR" <?php if( $this->session->userdata('currencyTo') == 'OMR'){  echo 'selected="selected"';}  ?>>Oman Rials - OMR</option>
						<option value="PKR" <?php if( $this->session->userdata('currencyTo') == 'PKR'){  echo 'selected="selected"';}  ?>>Pakistan Rupees - PKR</option>
						<option value="PEN" <?php if( $this->session->userdata('currencyTo') == 'PEN'){  echo 'selected="selected"';}  ?>>Peru Nuevos Soles - PEN</option>
						<option value="PHP" <?php if( $this->session->userdata('currencyTo') == 'PHP'){  echo 'selected="selected"';}  ?>>Philippines Pesos - PHP</option>
						<option value="PLN" <?php if( $this->session->userdata('currencyTo') == 'PLN'){  echo 'selected="selected"';}  ?>>Poland Zlotych - PLN</option>
						<option value="QAR" <?php if( $this->session->userdata('currencyTo') == 'QAR'){  echo 'selected="selected"';}  ?>>Qatar Riyals - QAR</option>
						<option value="RON" <?php if( $this->session->userdata('currencyTo') == 'RON'){  echo 'selected="selected"';}  ?>>Romania New Lei - RON</option>
						<option value="RUB" <?php if( $this->session->userdata('currencyTo') == 'RUB'){  echo 'selected="selected"';}  ?>>Russia Rubles - RUB</option>
						<option value="SAR" <?php if( $this->session->userdata('currencyTo') == 'SAR'){  echo 'selected="selected"';}  ?>>Saudi Arabia Riyals - SAR</option>
						<option value="SGD" <?php if( $this->session->userdata('currencyTo') == 'SGD'){  echo 'selected="selected"';}  ?>>Singapore Dollars - SGD</option>
						<option value="SKK" <?php if( $this->session->userdata('currencyTo') == 'SKK'){  echo 'selected="selected"';}  ?>>Slovakia Koruny - SKK</option>
						<option value="ZAR" <?php if( $this->session->userdata('currencyTo') == 'ZAR'){  echo 'selected="selected"';}  ?>>South Africa Rand - ZAR</option>
						<option value="KRW" <?php if( $this->session->userdata('currencyTo') == 'KRW'){  echo 'selected="selected"';}  ?>>South Korea Won - KRW</option>
						<option value="LKR" <?php if( $this->session->userdata('currencyTo') == 'LKR'){  echo 'selected="selected"';}  ?>>Sri Lanka Rupees - LKR</option>
						<option value="SEK" <?php if( $this->session->userdata('currencyTo') == 'SEK'){  echo 'selected="selected"';}  ?>>Sweden Kronor - SEK</option>
						<option value="CHF" <?php if( $this->session->userdata('currencyTo') == 'CHF'){  echo 'selected="selected"';}  ?>>Switzerland Francs - CHF</option>
						<option value="TWD" <?php if( $this->session->userdata('currencyTo') == 'TWD'){  echo 'selected="selected"';}  ?>>Taiwan New Dollars - TWD</option>
						<option value="THB" <?php if( $this->session->userdata('currencyTo') == 'THB'){  echo 'selected="selected"';}  ?>>Thailand Baht - THB</option>
						<option value="TTD" <?php if( $this->session->userdata('currencyTo') == 'TTD'){  echo 'selected="selected"';}  ?>>Trinidad and Tobago Dollars - TTD</option>
						<option value="TND" <?php if( $this->session->userdata('currencyTo') == 'TND'){  echo 'selected="selected"';}  ?>>Tunisia Dinars - TND</option>
						<option value="TRY" <?php if( $this->session->userdata('currencyTo') == 'TRY'){  echo 'selected="selected"';}  ?>>Turkey Lira - TRY</option>
						<option value="AED" <?php if( $this->session->userdata('currencyTo') == 'AED'){  echo 'selected="selected"';}  ?>>United Arab Emirates Dirhams - AED</option>
						<option value="GBP" <?php if( $this->session->userdata('currencyTo') == 'GBP'){  echo 'selected="selected"';}  ?>>United Kingdom Pounds - GBP</option>
						<option value="USD" <?php if( $this->session->userdata('currencyTo') == 'USD'){  echo 'selected="selected"';}  ?>>United States Dollars - USD</option>
						<option value="VEB" <?php if( $this->session->userdata('currencyTo') == 'VEB'){  echo 'selected="selected"';}  ?>>Venezuela Bolivares - VEB</option>
						<option value="VND" <?php if( $this->session->userdata('currencyTo') == 'VND'){  echo 'selected="selected"';}  ?>>Vietnam Dong - VND</option>
						<option value="ZMK" <?php if( $this->session->userdata('currencyTo') == 'ZMK'){  echo 'selected="selected"';}  ?>>Zambia Kwacha - ZMK</option>
					  </select></form></li>
                      
                     
					<li style="margin-left:-35px; border-left:1px solid #EAEAEA;"><div id="google_translate_element"></div><!--<a href="#">Language</a><div class="flag"><img alt=" " src="<?php echo base_url();?>/theme/user-images/flage1.png" /><div class="lang">Eng</div></div>--></li>
				</ul>
			</div>
            
			<div class="sign">
				<?php if($this->session->userdata('session_status') >= 1){ ?> 
					<a href="<?php echo base_url();?>user/sign_out/log_out">Sign Out</a>
				<?php } else{?>
					Don't have an account yet? <a href="<?php echo base_url();?>user/user_registration/user_registration_detail">Register Now</a> or 
					<a href="<?php echo base_url();?>user/student_login/students_login">Sign in</a>
					<!--<a href="<?php echo base_url();?>user/customer_login/customers_login">My English Booking</a>-->
				<?php } ?>
				
			<!--======================================		Live chat script	-->
			
			<!--<div style="float:right; margin:-8px 0 0 5px;"><div id="craftysyntax_1"><script type="text/javascript" src="http://192.168.1.100/jamshaid/CodeIgniter/livechat/livehelp_js.php?eo=0&amp;department=1&amp;serversession=2&amp;pingtimes=10&amp;dynamic=Y&amp;creditline=W"></script></div></div>-->
			
			</div>
			<div class="clr"></div>
			<div style="float:right; margin-top:-10px;">
				<table cellpadding="0" cellspacing="0">
					<tr>
						<td>
							<div id="craftysyntax_1" style="display:none;"><script type="text/javascript" src="<?php echo base_url();?>livechat/livehelp_js.php?eo=0&amp;department=1&amp;serversession=2&amp;pingtimes=10&amp;dynamic=Y&amp;creditline=W"></script></div>
						</td>
					 <?php 
					   $tr = 0;
						foreach($socialmedia as $social){ 
						?>
						<td style="padding: 2px;"><a href="<?php echo $social->url;?>" target="_blank"><img alt="<?php echo $social->title;?>" width="30" src="<?php echo base_url();?>uploadfiles/scoialicone/<?php echo $social->image?>" /></a></td>
					<?php }?>
					<td width="15"></td>
						
					<td align="center" class="lc_a">
					<a href="javascript:openLiveHelp(1)"><img src="<?php echo base_url();?>/theme/user-images/lc2.jpg" /><br />Live chat</a></td>
					</tr>
				</table>

			</div>
			<div class="clr"></div>
			<div class="bb"></div>
