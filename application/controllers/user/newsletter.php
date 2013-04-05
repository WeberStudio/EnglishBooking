<?php
class Newsletter extends CI_Controller {
	/**
	 * Admin Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/admin
	 *	- or -  
	 * 		http://example.com/admin/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/admin/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	 	// defult constructor 
	public function __construct()
    {
            parent::__construct();
            // Your own constructor code	
			$this->load->model('user/newsletters');
    }
	
	// contollers are created below this line 
	public function subscribe()
	{	
		if($_POST['subscribe']){
		$Message = "Email has been successfully send";
		$email = $this->input->post('email');
		$data = array('email' => $email,);	
		$this->newsletters->InsertNewsletter($data);	
		$this->session->set_flashdata('msg', 'Email has been successfully send');
		redirect('home');
		$Message= $Message;
	
		}
		else{
		$this->session->set_flashdata('msg', 'Email has not been send Pleafe try again');
		redirect('home');
		}
	}
        public function invitefriend(){
            	$email = $this->input->post('email');
				$returnResult = $this->newsletters->send_friend($data);
				if($returnResult = 1){
					$this->session->set_flashdata('success', 'Your Invitation has been send');
                	redirect('home');
				}
        }

}
?>
