<?php
class Student_dashboard extends CI_Controller {

	 	// defult constructor 
	public function __construct()
    {
            parent::__construct();
            // Your own constructor code	
			$this->load->model('user/student_dashboard_model');
		/* check whether login or not */
    }
	public function student_board()
	{
		$data['selected'] = 'customer_dashboard';
	//	$result = $this->customer_dashboard_model->check_personal_info();
		$this->load->view('user/header');
	//	$this->load->view('user/left_menu_students',$data);
/*		if($result == 1){
			$result = $this->customer_dashboard_model->get_personal_info();
			$data['cust_info'] = $this->customer_dashboard_model->get_personal_info();
			$this->load->view('user/edit_student_dashboard',$data);
		} else {
*/			$this->load->view('user/student_dashboard');	
	//	}
		
		$this->load->view('user/footer');
	}
	public function add_studentinfo()
	{
		$data['family_name']	= $this->input->post('family_name');
		$data['four_name']	 	= $this->input->post('four_name');
		$data['date_of_birth'] 	= $this->input->post('date_of_birth');
		$data['gender']	 		= $this->input->post('gender');
		$data['nationality']	= $this->input->post('nationality');
		$data['address']	 	= $this->input->post('address');
		$data['email']	 		= $this->input->post('email');
		$data['telephone']	 	= $this->input->post('telephone');
		$data['fax']	 		= $this->input->post('fax');
		$data['ref_id']	 		= $this->input->post('ref_id');
		$data['password']	 	= $this->input->post('password');
		$this->student_dashboard_model->addStudent_info($data);
		$this->session->set_flashdata('msg', 'Your information has been successfully updated');
			 redirect('/user/student_login/students_login/');
	}
	
	public function get_student_profile()
	{
		$data['selected'] = 'student_dashboard';
	//	$result = $this->customer_dashboard_model->check_personal_info();
		$this->load->view('user/header');
		$this->load->view('user/left_menu_students',$data);
		// $result = $this->student_dashboard_model->get_personal_info();
		$data['student_info'] = $this->student_dashboard_model->get_student_info();
		$this->load->view('user/edit_student_profile',$data);
	//	}
		
		$this->load->view('user/footer');
	}
	public function edit_student_info()
	{
		$data['family_name']	= $this->input->post('family_name');
		$data['four_name']	 	= $this->input->post('four_name');
		$data['date_of_birth'] 	= $this->input->post('date_of_birth');
		$data['gender']	 		= $this->input->post('gender');
		$data['nationality']	= $this->input->post('nationality');
		$data['address']	 	= $this->input->post('address');
		$data['email']	 		= $this->input->post('email');
		$data['telephone']	 	= $this->input->post('telephone');
		$data['fax']	 		= $this->input->post('fax');
		$data['ref_id']	 		= $this->input->post('ref_id');
		$this->student_dashboard_model->editStudent_info($data);
		$this->session->set_flashdata('msg', 'Your information has been sucssfully updated');
			 redirect('/user/student_dashboard/get_student_profile');
	}
	
	public function student_dashboard_main()
	{
		$result =   $this->db->query("SELECT id FROM eb_student_notifaction WHERE  student_id = '".$this->session->userdata('student_id')."' and status = 1  ORDER BY id desc ");
		$data['total'] = $result->num_rows();
		$data['selected'] = "none";

                
                $data['student_info'] = $this->student_dashboard_model->get_student_info();
		$this->load->view('user/header');
		$this->load->view('user/left_menu_students');
		$this->load->view('user/student_dashboard_main',$data);	
		$this->load->view('user/footer');
	}
        public function student_notifaction_delete($id){
          $url  = $this->student_dashboard_model->get_notifaction_url($id);
          $this->student_dashboard_model->delete_student_notifaction($id);
          redirect($url);
        }
        public function view_all_notifaction($offset = 0 ){
                $per_page = 5;
                $counti = $per_page + $offset;
                $offset1 = $offset.",".$counti;
                $result =   $this->db->query("SELECT id,text,datetime FROM eb_student_notifaction WHERE  student_id = '".$this->session->userdata('student_id')."' and status = 1 ORDER BY id desc  ");
				$data['total'] = $result->num_rows();
                $result =   $this->db->query("SELECT id,text,datetime FROM eb_student_notifaction WHERE  student_id = '".$this->session->userdata('student_id')."' and status = 1 ORDER BY id desc limit ".$offset1."");
				$data['list'] = $result->result();
				$data['selected'] = "none";
                $config['base_url'] = base_url().'user/Student_dashboard/view_all_notifaction';
                $config['total_rows'] = $data['total'];
                $config['per_page'] = 5;
                $config['num_links']=9;
                $config['uri_segment'] =4;
                $this->pagination->initialize($config); 
                
			$this->load->view('user/header');
			$this->load->view('user/left_menu_students');
			$this->load->view('user/view_all_notifaction',$data);	
			$this->load->view('user/footer');
        }
		
	public function forget_password()
	{
		$this->load->view('user/header');
		$this->load->view('user/forget_password');
		$this->load->view('user/footer');
	}
	
	public function get_password(){
		$data['email']	 	= $this->input->post('txtEmail');
		$pass  = $this->student_dashboard_model->get_student_password($data);
		redirect($url);
	}
	
	public function recover_password($id)
	{
		$data['student_id'] = $id;
		$this->load->view('user/header');
		$this->load->view('user/recover_password', $data);
		$this->load->view('user/footer');
	}
	
	public function change_password($data){
		
		$hiddenid = $this->input->post('hiddenid');
		$reset = substr($hiddenid,3);
		$data['password']	 	= $this->input->post('password');
		$data['id'] = $reset;
		$pass  = $this->student_dashboard_model->new_password($data);
		if($pass == 1){
			$this->session->set_flashdata('msg', 'Your information has been successfully updated');
			redirect('/user/student_dashboard/recover_password/',$hiddenid);
		}else{
			$this->session->set_flashdata('msg', 'Your information has not been successfully updated');
			redirect('/user/student_dashboard/recover_password/',$hiddenid);
		}
	}
	
}
?>
