<?php
class Selected_course extends CI_Controller {

	 	// defult constructor 
	public function __construct()
    {
            parent::__construct();
            // Your own constructor code	
			$this->load->model('user/selected_course_model');
		/* check whether login or not */
    }
	
	public function get_selected_course_list()
	{
		$data['selected'] = 'Course_list';
		$this->load->view('user/header');
		$this->load->view('user/left_menu_students',$data);
		$data['course_list'] = $this->selected_course_model->get_selected_course();
		$this->load->view('user/selected_course',$data);
		$this->load->view('user/footer');
	}
}
?>
