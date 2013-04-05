<?php
class customer_student_messages extends CI_Controller {

	 	// defult constructor 
	public function __construct()
    {
            parent::__construct();
            // Your own constructor code	
			$this->load->model('user/customer_student_messages_model');
		/* check whether login or not */
		if(!$this->session->userdata('student_id')){
		//redriect('/user/customer_login/college_documents_model');
		}
    }
	public function get_messages($student_id, $course_id)
	{
		$data['selected'] = 'getstudents';
		$this->load->view('user/header');
		$this->load->view('user/left_menu',$data);
		$data['course_id'] = $course_id;
		$data['student_chat'] = $this->customer_student_messages_model->get_student_messages($student_id,$course_id);
		$this->load->view('user/customer_student_messages',$data);		
		$this->load->view('user/footer');
	}
	public function send_message()
	{
		$data['student_id'] = $this->input->post('student_id');
		$data['course_id'] = $this->input->post('course_id');
		$data['message'] = $this->input->post('message');
		$this->customer_student_messages_model->submit_messages($data);
		redirect('/user/customer_student_messages/get_messages/'.$data['student_id'].'/'.$data['course_id']);
	}
}
?>
