<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>IN ADMIN PANEL | Powered by English booking</title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>theme/admin-css/style.css" />
<script type="text/javascript" src="<?php echo base_url();?>theme/admin-js/clockp.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>theme/admin-js/clockh.js"></script> 
<script type="text/javascript" src="<?php echo base_url();?>theme/admin-js/jquery-1.6.1.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>theme/admin-js/ddaccordion.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>theme/third-party/ckeditor/ckeditor.js"></script>
<!--<script language="javascript" src="<?php echo base_url();?>theme/user-js/jquery-ui.js"></script>  -->
<!--<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>theme/user-css/jquery-ui.css" />-->
<script type="text/javascript">
ddaccordion.init({
	headerclass: "submenuheader", //Shared CSS class name of headers group
	contentclass: "submenu", //Shared CSS class name of contents group
	revealtype: "click", //Reveal content when user clicks or onmouseover the header? Valid value: "click", "clickgo", or "mouseover"
	mouseoverdelay: 200, //if revealtype="mouseover", set delay in milliseconds before header expands onMouseover
	collapseprev: true, //Collapse previous content (so only one open at any time)? true/false 
	defaultexpanded: [], //index of content(s) open by default [index1, index2, etc] [] denotes no content
	onemustopen: false, //Specify whether at least one header should be open always (so never all headers closed)
	animatedefault: false, //Should contents open by default be animated into view?
	persiststate: true, //persist state of opened contents within browser session?
	toggleclass: ["", ""], //Two CSS classes to be applied to the header when it's collapsed and expanded, respectively ["class1", "class2"]
	togglehtml: ["suffix", "<img src='<?php echo base_url();?>theme/admin-images/plus.gif' class='statusicon' />", "<img src='<?php echo base_url();?>theme/admin-images/minus.gif' class='statusicon' />"], //Additional HTML added to the header when it's collapsed and expanded, respectively  ["position", "html1", "html2"] (see docs)
	animatespeed: "fast", //speed of animation: integer in milliseconds (ie: 200), or keywords "fast", "normal", or "slow"
	oninit:function(headers, expandedindices){ //custom code to run when headers have initalized
		//do nothing
	},
	onopenclose:function(header, index, state, isuseractivated){ //custom code to run whenever a header is opened or closed
		//do nothing
	}
})
</script>

<script type="text/javascript" src="<?php echo base_url();?>theme/admin-js/jconfirmaction.jquery.js"></script>
<script type="text/javascript">
	
	$(document).ready(function() {
		$('.ask').jConfirmAction();
	});
	
</script>

<script language="javascript" type="text/javascript" src="<?php echo base_url();?>theme/admin-js/niceforms.js"></script>
<link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url();?>theme/admin-css/niceforms-default.css" />
<!--Jquery Validation code here -->
<link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url();?>theme/admin-css/jquery-ui-git.css" />

<script src="<?php echo base_url();?>theme/admin-js/jquery-ui-git.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>theme/admin-js/jquery.validate.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>theme/admin-js/custom-validation.js"></script>


<!---->
</head>
<body onclick="$('#srch_dv').hide();">
