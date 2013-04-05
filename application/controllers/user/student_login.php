<?php
class Student_login extends CI_Controller {

	 	// defult constructor 
	public function __construct()
    {
            parent::__construct();
	/*		if(!$this->session->userdata('customer_id')){ 

			} else {
				redirect('/user/Customer_info/customer_main');
			}
      */      // Your own constructor code	
			$this->load->model('user/student_login_model');
    }
	public function students_login(){
		$prev_url['previous'] = $_SERVER['HTTP_REFERER'];
		$this->load->view('user/header');
		$this->load->view('user/student_login',$prev_url);
		$this->load->view('user/footer');
	}
	public function login(){
		$data['prev_url'] = $this->input->post('prev_url');
		$data['email'] = $this->input->post('txtEmail');
		$data['password'] = $this->input->post('password');
		$returnResult = $this->student_login_model->StudentLogin($data);
			if($returnResult == 1){
/*				if($data['prev_url'] != ""){
					redirect($data['prev_url']);
				}else{
					redirect('/user/student_dashboard/get_student_profile');		********************************************  		Goes to the Previous URL
				}
*/			
				redirect('/user/student_dashboard/student_dashboard_main');
			} else {
				$this->session->set_flashdata('invalid', 'Invalid Username or Password');
				redirect('/user/student_login/students_login');
			}
	}
	
	public function login_reg(){
		$data['prev_url'] 	= $this->input->post('prev_url');
		$data['email'] 		= $this->input->post('txtEmail');
		$data['course_id'] 	= $this->input->post('course_id');
		$data['branch_id'] 	= $this->input->post('branch_id');
		$data['offerprice'] = $this->input->post('offerprice');
		$data['password'] 	= $this->input->post('password');
		
		$returnResult = $this->student_login_model->StudentLogin($data);
			if($returnResult == 1){

			//	$this->session->set_flashdata('msg','Your information has been sucssfully updated');
				redirect('/user/booking_info/getInfo/'.$data['course_id'].'/'.$data['branch_id'].'/'.$data['offerprice']);
			} else {
				$this->session->set_flashdata('invalid', 'Invalid Username or Password');
				redirect('/user/student_login/students_login');
			}
	}

}
?>
