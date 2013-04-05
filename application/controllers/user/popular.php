<?php
class Popular extends CI_Controller {

	 	// defult constructor 
	public function __construct()
    {
            parent::__construct();
            // Your own constructor code	
			$this->load->model('user/popular_model');
    }
	
	public function course_of_day(){	
		$data['course'] = $this->popular_model->getcoursegeofday();
		
		$this->load->view('user/course_of_day',$data);
	}
	
	public function college_of_day(){
		$data['college'] = $this->popular_model->getcollegeofday();
		$this->load->view('user/college_of_day',$data);
	}

}
?>
