<?php
class Branches_detail extends CI_Controller {

	 	// defult constructor 
	public function __construct()
    {
            parent::__construct();
            // Your own constructor code	
		$this->load->model('user/branch_detail_model');
                 $this->load->library('image_lib');
		/* check whether login or not */
		if(!$this->session->userdata('customer_id')){
		redriect('user/customer_login/customers_login');
		}
    }
	
	/*function make_thumb($source_image,$width, $height,$targetFile_new){
		$config['image_library'] = 'gd2';
		$config['source_image'] = $source_image;
		$config['new_image'] =  $targetFile_new;
		$config['thumb_marker'] = FALSE;
		$config['create_thumb'] = TRUE;
		$config['maintain_ratio'] = TRUE;
		$config['width'] = $width;
		$config['height'] = $height;
		$this->load->library('image_lib', $config);
		$this->image_lib->resize();
	}*/
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

	public function branches_detl() {
		$data['branches'] = $this->branch_detail_model->getbranches();
		$data['selected'] = 'branches';
		$this->load->view('user/header');
		$this->load->view('user/left_menu',$data);
		$this->load->view('user/branches_detail',$data);
		$this->load->view('user/footer');
	}
	public function add_branch(){
		$data['selected'] = 'branches';
		$this->load->view('user/header');
		$this->load->view('user/left_menu',$data);
		$this->load->view('user/add_branches');
		$this->load->view('user/footer');
	}
		public function add_newbranch(){
		$targetFolder = '/projects/English2/uploadfiles/branches_images/';
		$targetFolder_new = '/projects/English2/uploadfiles/branches_images/thumbs/';
			if (!empty($_FILES)) {
				foreach($_FILES as $file => $details){
				$tempFile = $details['tmp_name'];
				$targetPath = $_SERVER['DOCUMENT_ROOT'] . $targetFolder;
				$targetPath_new = $_SERVER['DOCUMENT_ROOT'] . $targetFolder_new;
				$file_name = time().$details['name'];
				$targetFile = rtrim($targetPath,'/') . '/' .$file_name;
				$targetFile_new = rtrim($targetPath_new,'/') . '/' .$file_name;
				$filename = $file_name;
				$fileParts = pathinfo($details['name']);
				move_uploaded_file($tempFile,$targetFile);
				$this->make_thumb($targetFile, 100, 75,$targetFile_new);			
				$data['image'] = $filename;
				}
			}
		$data['name']	 			= $this->input->post('name');
		$data['city']	 			= $this->input->post('city');
		$data['post_code']	 		= $this->input->post('post_code');
		$data['address']	 		= $this->input->post('address');
		$data['phone']	 			= $this->input->post('phone');
		$data['fax']	 			= $this->input->post('fax');
		$data['email']	 			= $this->input->post('email');
		$data['year_of_establish']	= $this->input->post('year_of_establish');
		$data['intertainment_info'] = $this->input->post('intertainment_info');
		$data['traffic_info'] 		= $this->input->post('traffic_info');
		$data['weather_info'] 		= $this->input->post('weather_info');
		$data['description'] 		= $this->input->post('description');
		$accomodation 				= $this->input->post('host_family').','.$this->input->post('private').','.$this->input->post('college').','.$this->input->post('hotels');
		$nationality	 			= $this->input->post('txtName');
		$percentage	 				= $this->input->post('txtpersentage');
                
                /**********************************************************************************************/
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
                   /*****************************************************************/
		$data['branch_id'] = $this->branch_detail_model->addBranches($data,$nationality,$percentage, $accomodation);
                    
                   $this->branch_detail_model->updatecollegeinfo($data);
		$this->session->set_flashdata('msg', 'Your information has been sucssfully updated');
		redirect('/user/branches_detail/branches_detl');
	}
	function deletebranch($branchID){
		$this->branch_detail_model->deletebranch($branchID);	
		 redirect('/user/branches_detail/branches_detl');
	}
	/*  ==================		Edit Branches	=================*/	
	public function editBranch($branch_id)
	{
		$data['selected'] = 'branches';
		$data['branch_id'] = $branch_id;
                $data['info'] = $this->branch_detail_model->getinfo($branch_id);
		$data['branch'] = $this->branch_detail_model->getBranchData($branch_id);
		$data['Diversity'] = $this->branch_detail_model->getBranchDiversity($branch_id);
		$this->load->view('user/header');
		$this->load->view('user/left_menu',$data);
		$this->load->view('user/edit_branches',$data);
		$this->load->view('user/footer');
	}
	
	public function Edit_Branch()
	{
		$targetFolder = '/projects/English2/uploadfiles/branches_images/';
		$targetFolder_new = '/projects/English2/uploadfiles/branches_images/thumbs/';
			if ($_FILES['file']['name'] != "") {
				foreach($_FILES as $file => $details){
				$tempFile = $details['tmp_name'];
				$targetPath = $_SERVER['DOCUMENT_ROOT'] . $targetFolder;
				$targetPath_new = $_SERVER['DOCUMENT_ROOT'] . $targetFolder_new;
				$file_name = time().$details['name'];
				$targetFile = rtrim($targetPath,'/') . '/' .$file_name;
				$targetFile_new = rtrim($targetPath_new,'/') . '/' .$file_name;
				$filename = $file_name;
				$fileParts = pathinfo($details['name']);
				move_uploaded_file($tempFile,$targetFile);
                                $_FILES['userfile']['error'];
                                //exit;
				$this->make_thumb($targetFile, 100, 75,$targetFile_new);			
				$data['image'] = $filename;
				}
			}else{
				$data['image'] = "";
			}
		$data['branch_id']	 		= $this->input->post('branch_id');
		$data['name']	 			= $this->input->post('name');
		$data['city']	 			= $this->input->post('city');
		$data['post_code']	 		= $this->input->post('post_code');
		$data['address']	 		= $this->input->post('address');
		$data['phone']	 			= $this->input->post('phone');
		$data['fax']	 			= $this->input->post('fax');
		$data['email']	 			= $this->input->post('email');
		$data['year_of_establish']	= $this->input->post('year_of_establish');
		$data['intertainment_info'] = $this->input->post('intertainment_info');
		$data['traffic_info'] 		= $this->input->post('traffic_info');
		$data['weather_info'] 		= $this->input->post('weather_info');
		$data['description'] 		= $this->input->post('description');
		$accomodation 				= $this->input->post('host_family').','.$this->input->post('private').','.$this->input->post('college').','.$this->input->post('hotels');
		$nationality	 			= $this->input->post('txtName');
		$percentage	 				= $this->input->post('txtpersentage');
		$diver_id 					= $this->input->post('diver_id');
		$this->branch_detail_model->editBranches($data,$nationality,$percentage, $diver_id,$accomodation);
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
               $this->branch_detail_model->updatecollegeinfo($data);
		$this->session->set_flashdata('msg', 'Your information has been sucssfully updated');
			 redirect('/user/branches_detail/editBranch/'.$data['branch_id']);
	}
	
}
?>
