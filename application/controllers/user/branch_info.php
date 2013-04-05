<?php
class Branch_info extends CI_Controller {

	 	// defult constructor 
	public function __construct()
    {
            parent::__construct();
            // Your own constructor code	
			$this->load->model('user/branch_info_model');
    }
	
	public function branch_information($course_id)
	{
		$this->load->view('user/header');
		$data['popularcourses'] = $this->branch_info_model->popularcourses();
		$data['course_data'] = $this->branch_info_model->get_branch_info($course_id);
		$this->load->view('user/branch_info',$data);
		$this->load->view('user/footer');
	}
	public function book_now($course_id, $branch_id, $offerprice)
	{
		if($this->session->userdata('student_id') >= "1"){
			$course_list = $this->branch_info_model->selected_course_list($course_id);
			if ($course_list != "0"){
				$this->session->set_flashdata('msg', 'You have already Select a course. And you can select <br>Only one Course at a Time');
				redirect('/user/branch_info/branch_information/'.$course_id);
			}else{
				$this->load->view('user/header');
				//$data['course_data'] = $this->branch_info_model->add_course_list($course_id, $branch_id, $offerprice);
			//	$this->load->view('user/branch_info',$data);
			//	$this->load->view('user/footer');
				//$this->session->set_flashdata('msg','Your information has been sucssfully updated');
				redirect('/user/booking_info/getInfo/'.$course_id.'/'.$branch_id.'/'.$offerprice);
			//	redirect('/user/selected_course/get_selected_course_list');
			}
		}else{
			redirect("user/student_login/students_login");
		}
	}
	
	public function branch_data($branch_id,$breadcrumbid){
		$data['bredcrumid'] = $breadcrumbid;
		$this->load->view('user/header');
		$data['branch_data'] = $this->branch_info_model->get_branch_data($branch_id);
		$this->load->view('user/branch_data', $data);
		$this->load->view('user/colleges');
		$this->load->view('user/footer');
	}

}
?>
