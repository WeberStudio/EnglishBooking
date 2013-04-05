<?php
class Admin_messages extends CI_Controller {

	 	// defult constructor 
	public function __construct()
    {
            parent::__construct();
            // Your own constructor code	
			$this->load->model('user/admin_messages_model');
		/* check whether login or not */
		if(!$this->session->userdata('student_id')){
		//redriect('/user/customer_login/college_documents_model');
		}
    }
	public function get_admin_messages(){
		$data['selected'] = 'Admin_messages';
		$this->load->view('user/header');
		$this->load->view('user/left_menu_students',$data);
		$data['student_chat'] = $this->admin_messages_model->get_student_messages();
		$data['student_data'] = $this->admin_messages_model->get_student_data();
		$this->load->view('user/admin_messages',$data);		
		$this->load->view('user/footer');
	}
	public function send_message()
	{
		$data['course_id'] = $this->input->post('Course_id');
		$data['message'] = $this->input->post('message');
		$this->admin_messages_model->submit_messages($data);
		redirect('/user/admin_messages/get_admin_messages');
	}
}
?>
