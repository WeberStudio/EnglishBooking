<?php
class User_registration extends CI_Controller {

	 	// defult constructor 
	public function __construct()
    {
            parent::__construct();
            // Your own constructor code	
			$this->load->model('user/student_registration_model');
    }
		
	public function user_registration_detail($course_id, $branch_id, $offerprice){
		$studentdata = array(
			   'course_id'  	=> $course_id,
			   'branch_id'     	=> $branch_id,
			   'offerprice'		=> $offerprice,
		   );
		$this->session->set_userdata($studentdata);
		
		$this->load->view('user/header');
		$this->load->view('user/course_of_day');
		$this->load->view('user/college_of_day');
		$this->load->view('user/user_registration_detail');
		$this->load->view('user/colleges');
		$this->load->view('user/footer');
	}
	
	public function user_registration_page2(){
		$this->load->view('user/header');
		$this->load->view('user/course_of_day');
		$this->load->view('user/college_of_day');
		$data['countries'] = $this->student_registration_model->get_countries();
		$this->load->view('user/user_registration_page2',$data);
		$this->load->view('user/colleges');
		$this->load->view('user/footer');
	}
	public function page2_data(){
		$studentdata = array(
                   'family_name'  	=> $this->input->post('family_name'),
                   'four_name'     	=> $this->input->post('fore_name'),
				   'date_of_birth'	=> $this->input->post('year')."-".$this->input->post('month')."-".$this->input->post('day'),
				   'gender'			=> $this->input->post('gender'),
				   'nationality'	=> $this->input->post('nationality'),
				   'address'		=> $this->input->post('address'),
				   
				   'house_name'		=> $this->input->post('house_name'),
				   'house_no'		=> $this->input->post('house_no'),
				   'street'			=> $this->input->post('town'),
				   'city'			=> $this->input->post('city'),
				   'state'			=> $this->input->post('state'),
				   'country'		=> $this->input->post('country'),
				   'post_code'		=> $this->input->post('post_code'),
				   
				   'telephone'		=> $this->input->post('telephone'),
				   'fax'			=> $this->input->post('fax'),
        	);
		$this->session->set_userdata($studentdata);
		redirect('/user/user_registration/user_registration_page3');
	}

	public function user_registration_page3(){
		$this->load->view('user/header');
		$this->load->view('user/course_of_day');
		$this->load->view('user/college_of_day');
		$this->load->view('user/user_registration_page3');
		$this->load->view('user/colleges');
		$this->load->view('user/footer');
	}

	public function page3_data(){
		$studentdata = array(
                   'illness'  	=> $this->input->post('illness'),
                   'smoke'     	=> $this->input->post('smoke'),
				   'other_info'	=> $this->input->post('other_info'),
               );
		$this->session->set_userdata($studentdata);
		redirect('/user/user_registration/user_registration_page4');
	}

	public function user_registration_page4(){
		$this->load->view('user/header');
		$this->load->view('user/course_of_day');
		$this->load->view('user/college_of_day');
		$this->load->view('user/user_registration_page4');
		$this->load->view('user/colleges');
		$this->load->view('user/footer');
	}
	
	public function page4_data(){
		$studentdata = array(
                   'english_level' 	=> $this->input->post('english_level'),
                   'other_info2'    => $this->input->post('other_info2'),
				   'ocopation'		=> $this->input->post('ocopation'),
				   'college_name'	=> $this->input->post('college_name'),
               );
		$this->session->set_userdata($studentdata);
		redirect('/user/user_registration/user_registration_page5');
	}
	
	public function user_registration_page5(){
		$this->load->view('user/header');
		$this->load->view('user/course_of_day');
		$this->load->view('user/college_of_day');
		$this->load->view('user/user_registration_page5');
		$this->load->view('user/colleges');
		$this->load->view('user/footer');
	}
	
	public function page5_data(){
		$studentdata = array(
                   'accomodation' 		=> $this->input->post('accomodation'),
                   'accomodation_info'  => $this->input->post('accomodation_info'),
               );
		$this->session->set_userdata($studentdata);
		redirect('/user/user_registration/user_registration_page6');
	}

	public function user_registration_page6(){
		$this->load->view('user/header');
		$this->load->view('user/course_of_day');
		$this->load->view('user/college_of_day');
		$this->load->view('user/user_registration_page6');
		$this->load->view('user/colleges');
		$this->load->view('user/footer');
	}
	
	public function page6_data(){
		$course_id 	= $this->session->userdata('course_id');
		$branch_id 	= $this->session->userdata('branch_id');
		$offerprice = $this->session->userdata('offerprice'); 
		
		$studentdata = array(
                   'email' 		=> $this->input->post('email'),
                   'password'  	=> $this->input->post('password'),
               );
		$this->session->set_userdata($studentdata);
		$Check_Result = $this->student_registration_model->check_email($studentdata);
		if($Check_Result != 0){
			$this->session->set_flashdata('msg', 'This Email has been already registered');
		//	header('location : user/user_registration/user_registration_page6_1');
			redirect('/user/user_registration/user_registration_page6');
		}
		$AddResult = $this->student_registration_model->addStudent_info($studentdata);
		if($AddResult == 1){
			$student_result = $this->student_registration_model->Student_session($studentdata);
			if($student_result == 1){
			//	redirect('/user/branch_info/branch_information/'.$this->session->userdata('course_id'));	
			//	$this->session->set_flashdata('msg','Your information has been sucssfully updated');
				redirect('/user/booking_info/getInfo/'.$course_id.'/'.$branch_id.'/'.$offerprice);
			}else{
				redirect('/user/student_login/students_login');
			}
		}
		redirect('/user/user_registration/user_registration_page6');
	}
        public function userregistration(){
                $this->load->view('user/header');
		$this->load->view('user/course_of_day');
		$this->load->view('user/college_of_day');
		$data['countries'] = $this->student_registration_model->get_countries();
		$this->load->view('user/user_registration_page2_1',$data);
		$this->load->view('user/colleges');
		$this->load->view('user/footer');
        }
        public function page2_data_1(){
		$studentdata = array(
                   'family_name'  	=> $this->input->post('family_name'),
                   'four_name'     	=> $this->input->post('fore_name'),
				   'date_of_birth'	=> $this->input->post('year')."-".$this->input->post('month')."-".$this->input->post('day'),
				   'gender'			=> $this->input->post('gender'),
				   'nationality'	=> $this->input->post('nationality'),
				   'address'		=> $this->input->post('address'),
				   
				   'house_name'		=> $this->input->post('house_name'),
				   'house_no'		=> $this->input->post('house_no'),
				   'street'			=> $this->input->post('town'),
				   'city'			=> $this->input->post('city'),
				   'state'			=> $this->input->post('state'),
				   'country'		=> $this->input->post('country'),
				   'post_code'		=> $this->input->post('post_code'),
				   
				   'telephone'		=> $this->input->post('telephone'),
				   'fax'			=> $this->input->post('fax'),
               );
			$this->session->set_userdata($studentdata);
			redirect('/user/user_registration/user_registration_page3_1');
	}
    public function user_registration_page3_1(){
		$this->load->view('user/header');
		$this->load->view('user/course_of_day');
		$this->load->view('user/college_of_day');
		$this->load->view('user/user_registration_page3_1');
		$this->load->view('user/colleges');
		$this->load->view('user/footer');
	}

        public function page3_data_1(){
		$studentdata = array(
                   'illness'  	=> $this->input->post('illness'),
                   'smoke'     	=> $this->input->post('smoke'),
				   'other_info'	=> $this->input->post('other_info'),
               );
		$this->session->set_userdata($studentdata);
		redirect('/user/user_registration/user_registration_page4_1');
	}
        public function user_registration_page4_1(){
		$this->load->view('user/header');
		$this->load->view('user/course_of_day');
		$this->load->view('user/college_of_day');
		$this->load->view('user/user_registration_page4_1');
		$this->load->view('user/colleges');
		$this->load->view('user/footer');
	}
        public function page4_data_1(){
		$studentdata = array(
                   'english_level' 	=> $this->input->post('english_level'),
                   'other_info2'    => $this->input->post('other_info2'),
				   'ocopation'		=> $this->input->post('ocopation'),
				   'college_name'	=> $this->input->post('college_name'),
               );
		$this->session->set_userdata($studentdata);
		redirect('/user/user_registration/user_registration_page5_1');
	}
	
	public function user_registration_page5_1(){
		$this->load->view('user/header');
		$this->load->view('user/course_of_day');
		$this->load->view('user/college_of_day');
		$this->load->view('user/user_registration_page5_1');
		$this->load->view('user/colleges');
		$this->load->view('user/footer');
	}
	
	public function page5_data_1(){
		$studentdata = array(
                   'accomodation' 		=> $this->input->post('accomodation'),
                   'accomodation_info'  => $this->input->post('accomodation_info'),
               );
		$this->session->set_userdata($studentdata);
		redirect('/user/user_registration/user_registration_page6_1');
	}

	public function user_registration_page6_1(){
		$this->load->view('user/header');
		$this->load->view('user/course_of_day');
		$this->load->view('user/college_of_day');
		$this->load->view('user/user_registration_page6_1');
		$this->load->view('user/colleges');
		$this->load->view('user/footer');
	}
	
	public function page6_data_1(){
		
		$studentdata = array(
                   'email' 		=> $this->input->post('email'),
                   'password'  	=> $this->input->post('password'),
               );
		$this->session->set_userdata($studentdata);
		$Check_Result = $this->student_registration_model->check_email($studentdata);
		if($Check_Result != 0){
			$this->session->set_flashdata('msg', 'This Email has been already registered');
		//	header('location : user/user_registration/user_registration_page6_1');
			redirect('/user/user_registration/user_registration_page6_1');
		}
		$AddResult = $this->student_registration_model->addStudent_info_1($studentdata);
		if($AddResult == 1){
			$student_result = $this->student_registration_model->Student_session_1($studentdata);
			if($student_result == 1){
				redirect('user/student_dashboard/student_dashboard_main');
			}else{
				redirect('/user/student_login/students_login');
			}
		}
		//redirect('/user/user_registration/user_registration_page6_1');
	}

}
?>
