<?php
class Customer_info extends CI_Controller {

	 	// defult constructor 
	public function __construct()
    {
            parent::__construct();
            // Your own constructor code	
			//$this->load->model('user/customer_login_model');
		/* check whether login or not */
		if(!$this->session->userdata('customer_id')){
			redriect('user/customer_login/customers_login');
		}
    }
	public function customer_main()
	{
		  $result =   $this->db->query("SELECT * FROM customernotifaction WHERE  collegeid = '".$this->session->userdata('customer_id')."' and status = 1 ORDER BY id desc ");
                $data['totalnoti'] = $result->num_rows();
                $data['list'] = $result->result();
		$data['selected'] = "none";
		$this->load->view('user/header');
		$this->load->view('user/left_menu',$data);
		$this->load->view('user/customer_dashboard_main');
		$this->load->view('user/colleges');
		$this->load->view('user/footer');
	}
	public function customer_notifaction($offset = 0 ){
                $per_page = 5;
                $counti = $per_page + $offset;
                $offset1 = $offset.",".$counti;
		$result =   $this->db->query("SELECT * FROM customernotifaction WHERE  collegeid = '".$this->session->userdata('customer_id')."' and status = 1 ORDER BY id desc ");    	
		$data['total'] = $result->num_rows();
                $result =   $this->db->query("SELECT * FROM customernotifaction WHERE  collegeid = '".$this->session->userdata('customer_id')."' and status = 1 ORDER BY id desc limit ".$offset1."");    	
		$data['list'] = $result->result();
		$data['selected'] = "none";
                
                $config['base_url'] = base_url().'user/customer_info/customer_main';
                $config['total_rows'] = $data['total'];
                $config['per_page'] = 5;
                $config['num_links']=9;
                $config['uri_segment'] =4;
                $this->pagination->initialize($config); 
                
		$this->load->view('user/header');
		$this->load->view('user/left_menu',$data);
		$this->load->view('user/customer_notifications',$data);
		$this->load->view('user/footer');
        }
     public function customer_notifaction_delete($id){
          $url  = $this->get_notifaction_url($id);
          $this->delete_student_notifaction($id);
          redirect($url);
        }
     public function delete_student_notifaction($id){
        $Query = "UPDATE  customernotifaction SET
			status 	= '0'
			WHERE id = ".$id;
			$this->db->query($Query);
            return 1;
    }
    public function get_notifaction_url($id){
        $query = $this->db->query("SELECT url FROM  customernotifaction WHERE id = '".$id."'");
        $result = $query->row();
	return $result->url;
    }
}
?>
