<?php
class Booking_info extends CI_Controller {

	 	// defult constructor 
	public function __construct()
    {
            parent::__construct();
            // Your own constructor code	
			$this->load->model('user/booking_info_model');
    }
	
	public function getInfo($course_id){
		$data['course'] = $this->booking_info_model->get_course_info($course_id);
		$this->load->view('user/header');
		 $this->load->view('user/course_of_day');
		 $this->load->view('user/college_of_day');
		$this->load->view('user/booking_info',$data);
		$this->load->view('user/colleges');
		$this->load->view('user/footer');
	}
	public function saveCourse($course_id, $branch_id, $offerprice){
		$book = $this->booking_info_model->add_course_list($course_id, $branch_id, $offerprice);
		if($book >= 1){
			$this->session->set_flashdata('msg','You have already select the course');
			redirect('/user/booking_info/getInfo/'.$course_id.'/'.$branch_id.'/'.$offerprice);
		}else{
			$this->session->set_flashdata('msg','Your information has been sucssfully updated');
			redirect('/user/selected_course/get_selected_course_list');
		}
	}
}
?>
