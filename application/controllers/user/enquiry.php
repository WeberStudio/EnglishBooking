<?php
class Enquiry extends CI_Controller {

	 	// defult constructor 
	public function __construct()
    {
            parent::__construct();
            // Your own constructor code	
		//	$this->load->model('user/pages_model');
    }
	
	
	public function course_enquiry($id){
		$this->load->view('user/enquiry_popup');
	}
	// ============================		Student Enquiry	==========================
	public function student_enquiry_page(){
		$data['selected'] = 'student_enquiry';
		$this->load->view('user/header');
		$this->load->view('user/left_menu_students',$data);
		$this->load->view('user/enquiry_student');
		$this->load->view('user/footer');
	}
}
?>
