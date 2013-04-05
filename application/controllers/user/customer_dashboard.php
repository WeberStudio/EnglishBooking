<?php
class Customer_dashboard extends CI_Controller {

	 	// defult constructor 
	public function __construct()
    {
            parent::__construct();
            // Your own constructor code	
			$this->load->model('user/customer_dashboard_model');
		/* check whether login or not */
                        $this->load->library('image_lib');
		if(!$this->session->userdata('customer_id')){
		redriect('user/customer_login/customers_login');
		}
    }
	
	public function customer_board()
	{
              
		$data['selected'] = 'customer_dashboard';
		 $result = $this->customer_dashboard_model->check_personal_info();
		$this->load->view('user/header');
		$this->load->view('user/left_menu',$data);
		if($result == 1){
			$result = $this->customer_dashboard_model->get_personal_info();
			$data['cust_info'] = $this->customer_dashboard_model->get_personal_info();
			$data['countries'] = $this->customer_dashboard_model->get_countries();
			$this->load->view('user/edit_customer_dashboard',$data);
		} else {
			$this->load->view('user/customer_dashboard');	
		}
		
		$this->load->view('user/footer');
	}
	
	public function add_custinfo()
	{
		$data['name']	 = $this->input->post('name');
		$data['email']	 = $this->input->post('email');
		$data['phone']	 = $this->input->post('phone');
		$data['mobile']	 = $this->input->post('mobile');
		$data['fax']	 = $this->input->post('fax');
		$data['skype']	 = $this->input->post('skype');
		$data['county']	 = $this->input->post('county');
		$data['city']	 = $this->input->post('city');
		$data['gender']	 = $this->input->post('gender');
		$this->customer_dashboard_model->addCustomer_info($data);
		$this->session->set_flashdata('msg', 'Your information has been sucssfully updated');
			 redirect('/user/customer_dashboard/customer_board');
	}
	
	public function edit_custinfo()
	{
		$data['name']	 = $this->input->post('name');
		$data['email']	 = $this->input->post('email');
		$data['phone']	 = $this->input->post('phone');
		$data['mobile']	 = $this->input->post('mobile');
		$data['fax']	 = $this->input->post('fax');
		$data['skype']	 = $this->input->post('skype');
		$data['county']	 = $this->input->post('county');
		$data['city']	 = $this->input->post('city');
		$data['gender']	 = $this->input->post('gender');
		$this->customer_dashboard_model->editCustomer_info($data);
		$this->session->set_flashdata('msg', 'Your information has been sucssfully updated');
			 redirect('/user/customer_dashboard/customer_board');
	}
        public function collegeinformation(){
            $data['info'] = $this->customer_dashboard_model->getinfo();
           $data['selected'] = 'collegeinformation'; 
           $this->load->view('user/header');
	   $this->load->view('user/left_menu',$data);
           $this->load->view('user/college_information',$data);
           $this->load->view('user/footer');
        }
		
        public function addcollegeinformation(){
            
                    $targetFolder = '/projects/English2/uploadfiles/infoimages/';
                    $targetFolder_new = '/projects/English2/uploadfiles/infoimages/thumbs/';
                    $targetPath = $_SERVER['DOCUMENT_ROOT'] . $targetFolder;
                    $targetPath_new = $_SERVER['DOCUMENT_ROOT'] . $targetFolder_new;
                    $targetfileFolder = '/projects/English2/uploadfiles/info_files/';
                    $targetfile = $_SERVER['DOCUMENT_ROOT'] . $targetfileFolder;
                    if(!empty($_FILES['touristimage']['name'])){
                    $tempFile = $_FILES['touristimage']['tmp_name'];
                    $file_name = time().$_FILES['touristimage']['name'];
		    $targetFile = rtrim($targetPath,'/') . '/' .$file_name;
                    $targetFile_new = rtrim($targetPath_new,'/') . '/' .$file_name;
                    move_uploaded_file($tempFile,$targetFile);
                    $this->make_thumb($targetFile, 220, 235,$targetFile_new);
                    $data['touristimage'] = $file_name;
                    } else {
                        $data['touristimage'] = "0";
                    }
                    
                     if(!empty($_FILES['Busimage']['name'])){     
                    $tempFile = $_FILES['Busimage']['tmp_name'];
                    $file_name = time().$_FILES['Busimage']['name'];
		    $targetFile = rtrim($targetPath,'/') . '/' .$file_name;
                    $targetFile2 = rtrim($targetPath,'/') . '/' .$file_name;
                    $targetFile_new = rtrim($targetPath_new,'/') . '/' .$file_name;
                    move_uploaded_file($tempFile,$targetFile);
                    $this->make_thumb($targetFile, 220, 235,$targetFile_new);
                    $data['Busimage'] = $file_name;
                    } else {
                        $data['Busimage'] = "0";
                    }
                     if(!empty($_FILES['Storesimage']['name'])){
                    $tempFile = $_FILES['Storesimage']['tmp_name'];
                    $file_name = time().$_FILES['Storesimage']['name'];
		    $targetFile = rtrim($targetPath,'/') . '/' .$file_name;
                    $targetFile_new = rtrim($targetPath_new,'/') . '/' .$file_name;
                    move_uploaded_file($tempFile,$targetFile);
                    $this->make_thumb($targetFile, 220, 235,$targetFile_new);
                    $data['Storesimage'] = $file_name;
                    } else {
                        $data['Storesimage'] = "0";
                    }
                     if(!empty($_FILES['Restaurantsimage']['name'])){
                    $tempFile = $_FILES['Restaurantsimage']['tmp_name'];
                    $file_name = time().$_FILES['Restaurantsimage']['name'];
		    $targetFile = rtrim($targetPath,'/') . '/' .$file_name;
                    $targetFile_new = rtrim($targetPath_new,'/') . '/' .$file_name;
                    move_uploaded_file($tempFile,$targetFile);
                    $this->make_thumb($targetFile, 220, 235,$targetFile_new);
                    $data['Restaurantsimage'] = $file_name;
                    } else {
                        $data['Restaurantsimage'] = "0";
                    }
                     if(!empty($_FILES['Airportimage']['name'])){
                    $tempFile = $_FILES['Airportimage']['tmp_name'];
                    $file_name = time().$_FILES['Airportimage']['name'];
		    $targetFile = rtrim($targetPath,'/') . '/' .$file_name;
                    $targetFile_new = rtrim($targetPath_new,'/') . '/' .$file_name;
                    move_uploaded_file($tempFile,$targetFile);
                    $this->make_thumb($targetFile, 220, 235,$targetFile_new);
                    $data['Airportimage'] = $file_name;
                    } else {
                        $data['Airportimage'] = "0";
                    }
                    /*File Upload locations*/
                    if(!empty($_FILES['touristfile']['name'])){
                    $tempFile = $_FILES['touristfile']['tmp_name'];
                    $file_name = time().$_FILES['touristfile']['name'];
		    $targetFile = rtrim($targetfile,'/') . '/' .$file_name;
                    move_uploaded_file($tempFile,$targetFile);
                    $data['touristfile'] = $file_name;
                    } else {
                        $data['touristfile'] = "0";
                    }
                    if(!empty($_FILES['Busfile']['name'])){
                    $tempFile = $_FILES['Busfile']['tmp_name'];
                    $file_name = time().$_FILES['Busfile']['name'];
		    $targetFile = rtrim($targetfile,'/') . '/' .$file_name;
                    move_uploaded_file($tempFile,$targetFile);
                    $data['Busfile'] = $file_name;
                    } else {
                        $data['Busfile'] = "0";
                    }
                    if(!empty($_FILES['Storesfile']['name'])){
                    $tempFile = $_FILES['Storesfile']['tmp_name'];
                    $file_name = time().$_FILES['Storesfile']['name'];
		    $targetFile = rtrim($targetfile,'/') . '/' .$file_name;
                    move_uploaded_file($tempFile,$targetFile);
                    $data['Storesfile'] = $file_name;
                    } else {
                        $data['Storesfile'] = "0";
                    }
                    if(!empty($_FILES['Restaurantsfile']['name'])){
                    $tempFile = $_FILES['Restaurantsfile']['tmp_name'];
                    $file_name = time().$_FILES['Restaurantsfile']['name'];
		    $targetFile = rtrim($targetfile,'/') . '/' .$file_name;
                    move_uploaded_file($tempFile,$targetFile);
                    $data['Restaurantsfile'] = $file_name;
                    } else {
                        $data['Restaurantsfile'] = "0";
                    }
                    if(!empty($_FILES['Airportfile']['name'])){
                    $tempFile = $_FILES['Airportfile']['tmp_name'];
                    $file_name = time().$_FILES['Airportfile']['name'];
		    $targetFile = rtrim($targetfile,'/') . '/' .$file_name;
                    move_uploaded_file($tempFile,$targetFile);
                    $data['Airportfile'] = $file_name;
                    } else {
                        $data['Airportfile'] = "0";
                    }
                   $data['touristshortdes'] =  $this->input->post('touristshortdes');
                   $data['Busshortdes'] =  $this->input->post('Busshortdes');
                   $data['Storesshortdes'] =  $this->input->post('Storesshortdes');
                   $data['Restaurantsshortdes'] =  $this->input->post('Restaurantsshortdes');
                   $data['Airportshortdes'] =  $this->input->post('Airportshortdes');
               $this->customer_dashboard_model->updatecollegeinfo($data);
               $this->collegeinformation();
        }
        function make_thumb($source_image,$width, $height,$targetFile_new){
                $config = array();
		$config['image_library'] = 'gd2';
		$config['source_image'] = $source_image;
		$config['new_image'] =  $targetFile_new;
		$config['thumb_marker'] = "";
		$config['create_thumb'] = TRUE;
		$config['maintain_ratio'] = TRUE;
		$config['width'] = $width;
		$config['height'] = $height;
                $this->image_lib->initialize($config);
                $this->image_lib->resize();
                $this->image_lib->clear();
	}
       
}
?>
