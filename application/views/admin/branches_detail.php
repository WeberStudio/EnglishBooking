
 <div class="right_content">            
        
    <h2>Branches of <?php echo $branches[0]->collegename;?> College
		<a class="bt_blue" href="<?php echo base_url();?>admin_main/branches_detail/add_branch/<?php echo $branches[0]->CID;?>/<?php echo $branches[0]->collegename;?>"><span class="bt_blue_lft"></span><strong>Add New Branches</strong><span class="bt_blue_r"></span></a>
	</h2> 
     <label><a href="<?php echo base_url();?>admin_main/colleges/getList">Colleges</a></label>
	<div style="clear:both"></div>
         <tabel><tr>
                <td>
                    <form name="s_form"  id="s_form" method="post" action="<?php echo base_url(); ?>admin_main/branches_detail/branches_detl/<?php echo $branches[0]->CID;?>">
                        <input type="text" size="54" value="" name="search" id="search" placeholder="Search By Branch Name"   required autocomplete="off"/>  <input type="submit"  value="Search" class="NFButton">
                    <form>
                    </td>
        </tr></tabel>
	<div style="clear:both"></div>
	<h4 style="color:#F00; text-align:center"><?php echo $this->session->flashdata('msg')?></h4>
                    
                    
<table id="rounded-corner" summary="2007 Major IT Companies' Profit">
    <thead>
    	<tr>
        	<th scope="col" class="rounded-company"></th>
            <th scope="col" class="rounded">Branch Name </th>
            <th scope="col" class="rounded">City</th>
            <th scope="col" class="rounded">Email</th>
            <th scope="col" class="rounded">Phone</th>
            <th scope="col" class="rounded">Edit</th>
            <th scope="col" class="rounded">Delete</th>
             <th scope="col" class="rounded-q4">View</th>
        </tr>
    </thead>
       <!-- <tfoot>
    	<tr>
        	<td colspan="6" class="rounded-foot-left"><em>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut.</em></td>
        	<td class="rounded-foot-right">&nbsp;</td>

        </tr>
    </tfoot>-->
    <tbody>
     <?php
	 	$index = 0; 
		 foreach($branches as $result ) { 		 
		 $index ++;
	 ?>
    	<tr>
        	<td><?php echo $index;?></td>
            <td><a href="<?php echo base_url();?>admin_main/courses_detail/getCourseList/<?php echo $result->id; ?>" title="View course of this branch"><?php echo $result->name;?></a></td>
            <td><?php echo $result->city;?></td>
            <td><?php echo $result->email;?></td>
            <td><?php echo $result->phone;?></td>
            <td><a href="<?php echo base_url();?>admin_main/branches_detail/editBranch/<?php echo $result->id; ?>"><img src="<?php echo base_url();?>theme/admin-images/user_edit.png" alt="" title="" border="0" /></a></td>
            <td><a href="<?php echo base_url();?>admin_main/branches_detail/DeleteBranches/<?php echo $result->id; ?>/<?php echo $result->college_id; ?>" class="ask"><img src="<?php echo base_url();?>theme/admin-images/trash.png" alt="" title="" border="0" /></a></td>
            <td><a href="<?php echo base_url();?>admin_main/branches_detail/viewbranchDetails/<?php echo $result->id; ?>">Click Me</a></td>
        </tr>
        
    	 <?php } ?>  
    </tbody>
</table>
     
     </div><!-- end of right content-->
            
                    
  </div>   <!--end of center content -->               
                    
                    
    
    
    <div class="clear"></div>
    </div> <!--end of main content-->