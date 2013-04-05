<?php
class Sign_out extends CI_Controller {

	 	// defult constructor 
	public function __construct()
    {
            parent::__construct();
    }
	public function log_out(){
		$this->session->sess_destroy();
		redirect('/home/index');
		
	}
}
?>
