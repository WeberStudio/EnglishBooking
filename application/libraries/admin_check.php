<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_Check
{
	   
	var $obj;
		var $area;

		public function __construct()
		{   
			$obj =& get_instance(); 
			$obj->load->library('session');    
			$obj->load->helper('url'); 
			
		}
	
	function is_logged_in($admin)
	{
		
		if(!empty($admin))
		{
			//print_r($admin);exit;
			//checks if session user_info is set
			if(!empty($admin['admin_id']) && !empty($admin['admin_name']))
			{
				//go to login controller
				return true;
			}
		}
		
		redirect('/admin/index');
		
		
	}
	
	
}