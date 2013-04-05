<?php
class Customer_login extends CI_Controller {

	 	// defult constructor 
	public function __construct()
    {
            parent::__construct();
			if(!$this->session->userdata('customer_id')){

			} else {
				redirect('/user/Customer_info/customer_main');
			}
            // Your own constructor code	
			$this->load->model('user/customer_login_model');
    }
	public function customers_login(){
		$this->load->view('user/header');
		$this->load->view('user/customer_login');
		$this->load->view('user/footer');
		
	}
	public function login(){
		$data['email'] = $this->input->post('txtEmail');
		$data['password'] = $this->input->post('password');
		$returnResult = $this->customer_login_model->CustomerLogin($data);
		
			if($returnResult == 1){
				redirect('/user/customer_info/customer_main');
			} else {
				$this->session->set_flashdata('invalid', 'Invalid Username or Password');
				 redirect('/user/customer_login/customers_login');
			}
		}
	
	public function customers_forget_password(){
		$this->load->view('user/header');
		$this->load->view('user/customer_forget_password');
		$this->load->view('user/footer');
		
	}
	
	public function get_password(){
		$data['email']	 	= $this->input->post('txtEmail');
		$pass  = $this->customer_login_model->get_customer_password($data);
		redirect($url);
	}
	
	
	public function recover_customer_password($id){
		$data['customer_id'] = $id;
		$this->load->view('user/header');
		$this->load->view('user/recover_customer_password',$data);
		$this->load->view('user/footer');
	}
	
	public function change_password($data){
		$hiddenid = $this->input->post('hiddenid');
		$reset = substr($hiddenid,3);
		$data['password']	 	= $this->input->post('password');
		$data['id'] = $reset;
		$pass  = $this->customer_login_model->new_password($data);
		if($pass == 1){
			$this->session->set_flashdata('msg', 'Your information has been successfully updated');
			redirect('/user/customer_login/recover_customer_password/'.$hiddenid);
		}else{
			$this->session->set_flashdata('msg', 'Your information has not been successfully updated');
			redirect('/user/customer_login/recover_customer_password/'.$hiddenid);
		}
	}

}
?>
