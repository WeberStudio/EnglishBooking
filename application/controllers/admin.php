<?php
    class Admin extends CI_Controller {
        /**
        * Admin Page for this controller.
        *
        * Maps to the following URL
        * 		http://example.com/admin
        *	- or -  
        * 		http://example.com/admin/index
        *	- or -
        * Since this controller is set as the default controller in 
        * config/routes.php, it's displayed at http://example.com/
        *
        * So any other public methods not prefixed with an underscore will
        * map to /index.php/admin/<method_name>
        * @see http://codeigniter.com/user_guide/general/urls.html
        */
        // defult constructor 
        public function __construct()
        {
            parent::__construct();
            // Your own constructor code	
            $this->load->model('admin/login');
        }

        // contollers are created below this line 
        public function index($offset = 0)
        {

            /*
            Mian admin index page check it if user login already move to home page of admin otherwise move to Login page 
            */

            if($this->session->userdata('admin_id')!=''){
                $per_page = 15;
                $counti = $per_page + $offset;
                $offset1 = $offset.",".$counti;
                $data['list'] = $this->login->getnotifaction($offset1);
                $data['total'] = $this->login->getnotifaction_num();
                $config['base_url'] = base_url().'admin/index';
                $config['total_rows'] = $data['total'];
                $config['per_page'] = 15;
                $config['num_links']=9;
                $config['uri_segment'] =4;
                $this->pagination->initialize($config); 
                $this->load->view('admin/header');
                $this->load->view('admin/left');
                $this->load->view('admin/home',$data);
                $this->load->view('admin/footer');
            } else {
                $this->load->view('admin/header');
                $this->load->view('admin/login');


            }
        }
        public function login(){
            if($this->session->userdata('admin_id')!=''){
                redirect('/admin/index');

            }


            /*
            After login page when user submit her form the action perform check validation's  and go to module for login
            */		 
            $this->form_validation->set_rules('username', 'username', 'required');
            $this->form_validation->set_rules('password', 'password', 'required');

            if ($this->form_validation->run() === FALSE)
            {
                $this->load->view('admin/header');
                $this->load->view('admin/login');
            }
            else
            {
                $username = $this->input->post('username');
                $password = $this->input->post('password');
                $this->login->login($username,$password);
                $this->index();

            }

        }
        public function logout(){
            /*This one function use to logout admin from his area*/
            $this->login->logout();
            $this->index();

        }
        public function getnotifaction($id){

            $url = $this->get_notifaction_url($id);

            $this->delete_student_notifaction($id);
            redirect($url);
        }
        public function delete_student_notifaction($id){
            $Query = "UPDATE adminnotifaction SET
            status 	= '0'
            WHERE id = ".$id;
            $this->db->query($Query);
            return 1;
        }
        public function get_notifaction_url($id){
            $query = $this->db->query("SELECT url FROM adminnotifaction WHERE id = '".$id."'");
            $result = $query->row();
            return $result->url;
        }
    }
?>
