<?php
class College_details extends CI_Controller {
	 	// defult constructor 
	public function __construct()
    {
            parent::__construct();
            // Your own constructor code	
		$this->load->model('user/college_detail_model');
		/* check whether login or not */
		if(!$this->session->userdata('customer_id')){
		redriect('user/customer_login/customers_login');
		}
    }
	function make_thumb($source_image,$width, $height,$targetFile_new){
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
	}
	public function college_detl()
	{
		$data['selected'] = 'c_detail';
		$result = $this->college_detail_model->get_Collegdetail();
		$data['countries'] = $this->college_detail_model->get_countries();
		$this->load->view('user/header');
		$this->load->view('user/left_menu',$data);
		if(!empty($result)){
			$data['college'] = $this->college_detail_model->get_Collegdetail();
			$this->load->view('user/editcollege_details', $data);
		}else{
			$this->load->view('user/college_details',$data);
		}
		$this->load->view('user/footer');
	}
	public function add_newcollege()
	{
		$targetFolder = '/projects/English2/uploadfiles/collegeimages/';
		$targetFolder_new = '/projects/English2/uploadfiles/collegeimages/thumbs/';
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
		
		$data['house_no']	 		= $this->input->post('house_no');
		$data['house_name']	 		= $this->input->post('house_name');
		$data['street']	 			= $this->input->post('street');
		$data['town']	 			= $this->input->post('town');
		$data['state']	 			= $this->input->post('state');
		$data['country']	 		= $this->input->post('country');
		
		$data['address']	 		= $this->input->post('address');
		$data['phone']	 			= $this->input->post('phone');
		$data['fax']	 			= $this->input->post('fax');
		$data['email']	 			= $this->input->post('email');
		$data['year_of_establish']	= $this->input->post('year_of_establish');
		$data['no_branches']		= $this->input->post('no_branches');
		$data['hts'] 				= $this->input->post('hts');
		$data['description']		= $this->input->post('description');
		$this->college_detail_model->addCollege_info($data);
		$this->session->set_flashdata('msg', 'Your information has been sucssfully updated');
			 redirect('/user/college_details/college_detl');
	}	
	public function edit_collegedetail()
	{
		$targetFolder = '/projects/English2/uploadfiles/collegeimages/';
		$targetFolder_new = '/projects/English2/uploadfiles/collegeimages/thumbs/';
			if ($_FILES['files']['name'] != "") {
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
			}else{
				$data['image'] = "";
			}
		$data['name']	 			= $this->input->post('name');
		$data['city']	 			= $this->input->post('city');
		$data['post_code']	 		= $this->input->post('post_code');
		
		$data['house_no']	 		= $this->input->post('house_no');
		$data['house_name']	 		= $this->input->post('house_name');
		$data['street']	 			= $this->input->post('street');
		$data['town']	 			= $this->input->post('town');
		$data['state']	 			= $this->input->post('state');
		$data['country']	 		= $this->input->post('country');
		
		$data['address']	 		= $this->input->post('address');
		$data['phone']	 			= $this->input->post('phone');
		$data['fax']	 			= $this->input->post('fax');
		$data['email']	 			= $this->input->post('email');
		$data['year_of_establish']	= $this->input->post('year_of_establish');
		$data['no_branches']		= $this->input->post('no_branches');
		$data['hts'] 				= $this->input->post('hts');
		$data['description']		= $this->input->post('description');
		$this->college_detail_model->edit_Collegedetail($data);
		$this->session->set_flashdata('msg', 'Your information has been sucssfully updated');
		redirect('/user/college_details/college_detl');
	}

	public function college_lists(){
		$this->load->view('user/header');
		$this->load->view('user/college_list');
		$this->load->view('user/colleges');
		$this->load->view('user/footer');
	}

}
?>
