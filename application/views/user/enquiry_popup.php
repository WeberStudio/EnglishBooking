<link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url();?>theme/user-css/style.css" />
<style type="text/css">
	.desc{
		font-family:Arial, Helvetica, sans-serif;
		font-size:12px !important;
		color:#256c89 !important;
		width:100%;
	}
</style>
<table cellpadding="0" width="500" align="center" cellspacing="0">
	<tr>
		<td>
		<form id="enqiury_form" name="enqiury_form" method="post" autocomplete="off">
			<table class="c_form" cellpadding="10" cellspacing="0" border="0">
					<tr><td colspan="2" height="20"></td></tr>
					<tr>
						<td colspan="2" align="center">Enquiry For Course</td>
					</tr>
					<tr>
						<td width="150">Name</td>
						<td><input type="text" name="name" id="name" required /></td>
					</tr>
					 <tr>
						<td>Email </td>
						<td><input type="email" name="email" id="email" required /></td>
					</tr>
					 <tr>
						<td>Phone</td>
						<td><input type="text" name="phone" id="phone" /></td>
					</tr>
					<tr>
						<td>Message</td>
						<td><textarea name="message" id="message" required ></textarea></td>
					</tr>
					<tr>
						<td align="center" colspan="2"><input type="submit" name="Submit" value="SEND" /></td>
					</tr>
			</table>	
		</form>	
		</td>
	</tr>
</table>
