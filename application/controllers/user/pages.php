<?php
class Pages extends CI_Controller {

	 	// defult constructor 
	public function __construct()
    {
            parent::__construct();
            // Your own constructor code	
			$this->load->model('user/pages_model');
    }
	
	public function getpages($pageID){
		
		$data['pages'] = $this->pages_model->getpages($pageID);
		$this->load->view('user/header');
		$this->load->view('user/pages',$data);
		$this->load->view('user/colleges');
		$this->load->view('user/footer');
		
	}
	
	public function subscribe(){
		$this->load->view('user/header');
		$this->load->view('user/subscribe');
		$this->load->view('user/footer');
	}
	
	public function save_subscribe_email(){
		$data['email']	 	= $this->input->post('email');
		$this->pages_model->add_subscribe_email($data);
		$this->session->set_flashdata('msg', 'Your Email has been sucssfully Submitted');
		redirect('/user/pages/subscribe/');	
	}
	
	public function contact_us(){
		$this->load->view('user/header');
		$data['contact'] = $this->pages_model->get_contact_info();
		$this->load->view('user/contact_us',$data);
		$this->load->view('user/colleges');
		$this->load->view('user/footer');
	}
	public function sendcontactemail(){
                $this->email->from('your@example.com', 'Your Name');
                $this->email->to('someone@example.com');
                $this->email->subject('Email Test');
                $this->email->message('Testing the email class.');

                $this->email->send();
                $this->contact_us();        
        }
		
	public function college_lists(){
		$this->load->view('user/header');
		$data['college_list'] = $this->pages_model->get_college_list();
		$this->load->view('user/college_list',$data);
		$this->load->view('user/colleges');
		$this->load->view('user/footer');
	}
	
	public function college_data($college_id,$breadcrumbid){
		$this->load->view('user/header');
                $data['bredcrumid'] = $breadcrumbid;
		$data['college_id'] = $college_id;
		$data['college_data'] = $this->pages_model->get_college_data($college_id);
		$data['branches'] = $this->pages_model->get_college_branches($college_id);
		$this->load->view('user/college_data', $data);
		$this->load->view('user/colleges');
		$this->load->view('user/footer');
	}

	public function college_details_view(){
		$this->load->view('user/header');
		$this->load->view('user/college_details_view');
		$this->load->view('user/colleges');
		$this->load->view('user/footer');
	}
	
	//	**************************** branch list against specfic college
	
	public function branch_lists($college_id){	
		$this->load->view('user/header');
		$data['branch_list'] = $this->pages_model->get_branch_list($college_id);
		$this->load->view('user/branch_list',$data);
		$this->load->view('user/colleges');
		$this->load->view('user/footer');
	}
		
	public function send_contact_email()
	{
		$data['name'] 			= $this->input->post('name');
		$data['email'] 			= $this->input->post('email');
		$data['phone'] 			= $this->input->post('phone');
		$data['namessageme'] 	= $this->input->post('message');
		$cont_msg = $this->pages_model->send_contact_mail($data);
		if($cont_msg == 1){
			$this->session->set_flashdata('Success', 'Your message has been successfuly receive');
			redirect("/user/pages/contact_us");
		}
	}	
}
?>
