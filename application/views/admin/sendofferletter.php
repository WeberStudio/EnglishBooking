<script>
function toggleChecked(status) {
$(".checkbox").each( function() {
$(this).attr("checked",status);
})
}
function checked(status){
   alert('dssdsd'); 
}
</script>
 <div class="right_content">            
        
    <h2>Send Offer letter Email</h2> 
 
<table id="rounded-corner" summary="2007 Major IT Companies' Profit">
    <tbody>
        <tr>
            <td></td>
            <td>Check all <input type="checkbox" name="checked" id="checked" class="checkbox" onclick="toggleChecked(this.value)"></td>
            
        </tr>
        <form id="sendemail" name="sendemail" class="niceform" method="post" action="<?php echo base_url();?>admin_main/sendemail/sendofferletter">
     <tr>
         <td>News Letter Email addresses</td>
         <td><div>
                 <?php foreach($emaillist as $email){?>
                 <input type="checkbox" class="checkbox" name="subscribe[]" id="subscribe[]"   value="<?php echo $email->email;?>"/><?php echo $email->email;?><br>
             <?php }?>
             </div></td>
         
         
     </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="" id="" value="Send email"></td>
            
        </tr>
    </tbody> </form>
</table>
    
     </div><!-- end of right content-->
            
                    
  </div>   <!--end of center content -->               
                    
                    
    
    
    <div class="clear"></div>
    </div> <!--end of main content-->