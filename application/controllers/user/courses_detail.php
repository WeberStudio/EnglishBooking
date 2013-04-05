<?php
class Courses_detail extends CI_Controller {

	 	// defult constructor 
	public function __construct()
    {
            parent::__construct();
            // Your own constructor code	
		$this->load->model('user/branch_detail_model');
		$this->load->model('user/cource');
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

	public function courses_detl()
	{
		$data['branches'] = $this->branch_detail_model->getbranches();	
		$data['selected'] = 'courses';
		$this->load->view('user/header');
		$this->load->view('user/left_menu',$data);
		$this->load->view('user/courses_detail',$data);
		$this->load->view('user/footer');
	}
	//=============================			Course Detail
	public function addcource($barnch,$branchid){
		$data['selected'] = 'courses';
		$data['branchname'] = $barnch;
		$data['branchid'] = $branchid;
		$this->load->view('user/header');
		$this->load->view('user/left_menu',$data);
		$this->load->view('user/add_cources',$data);
		$this->load->view('user/footer');
	}
	//=============================			Add New Course
	public function savecource(){
		$targetFolder = '/projects/English2/uploadfiles/course_images/';
		$targetFolder_new = '/projects/English2/uploadfiles/course_images/thumbs/';
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
				$this->make_thumb($targetFile, 100, 75,$targetFile_new);			
				$data['image'] = $filename;
				}
			}
		   $data['collegeid'] 			= $this->session->userdata('customer_id');
		   $data['college_name']		= $this->session->userdata('college_name');
		   $data['branch_id'] 			= $this->input->post('branchid');
		   $data['category'] 			= $this->input->post('category');
		   $data['txtCn'] 				= $this->input->post('txtCn');
		   $data['txtAddress'] 			= $this->input->post('txtAddress');
		   $data['Offer_price'] 		= $this->input->post('Offer_price');
		   $data['ag_commession'] 		= $this->input->post('ag_commession');
		   $data['duration'] 			= $this->input->post('duration');
		   $data['endcourcedatestart'] 	= $this->input->post('endcourcedatestart');
		   $data['endcourcedateend'] 	= $this->input->post('endcourcedateend');
		   $data['txtsession'] 			= $this->input->post('txtsession');
		   $data['description'] 		= $this->input->post('description');
		   $targetFolder = '/projects/English2/uploadfiles/needcourcedc/';
			if (!empty($_FILES)) {
				foreach($_FILES as $file => $details){
				$tempFile = $details['tmp_name'];
				$targetPath = $_SERVER['DOCUMENT_ROOT'] . $targetFolder;
				$targetFile = rtrim($targetPath,'/') . '/' . $details['name'];
				$filename = $details['name'];
				$fileParts = pathinfo($details['name']);
				move_uploaded_file($tempFile,$targetFile);
				$data['filename'] = $filename;
				}
			}
		$this->cource->savecource($data);	
		$this->courses_detl();
	}
	public function viewCource($courcename,$courceID){
		$data['courcelist'] = $this->cource->getcources($courceID);	
		$data['selected'] = 'courses';
		$this->load->view('user/header');
		$this->load->view('user/left_menu',$data);
		$this->load->view('user/courses_list',$data);
		$this->load->view('user/footer');
	}
	//=============================		Delete Course
	public function deletecource($deletecource){
			$this->cource->courses_detl($deletecource);
			 $this->courses_detl();
	}
	
	public function editcourse($course_id){
		$data['selected'] = 'courses';
		$data['course_id'] = $course_id;
		$data['course'] = $this->cource->getCourse($course_id);
                $data['testimonials'] = $this->cource->gettestimonials($course_id);;
		$this->load->view('user/header');
		$this->load->view('user/left_menu',$data);
		$this->load->view('user/edit_cources',$data);
		$this->load->view('user/footer');
	}	
	//=============================		Course Update
	public function Edit_Cource(){
		$targetFolder = '/projects/English2/uploadfiles/course_images/';
		$targetFolder_new = '/projects/English2/uploadfiles/course_images/thumbs/';
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
				$this->make_thumb($targetFile, 100, 75,$targetFile_new);			
				$data['image'] = $filename;
				}
			}else{
				$data['image'] = "";
			}
                        
	   $data['course_ID'] 			= $this->input->post('course_ID');
	   $data['category'] 			= $this->input->post('category');
	   $data['txtCn'] 				= $this->input->post('txtCn');
	   $data['txtAddress'] 			= $this->input->post('txtAddress');
	   $data['Offer_price'] 		= $this->input->post('Offer_price');
	   $data['ag_commession'] 		= $this->input->post('ag_commession');
	   $data['duration'] 			= $this->input->post('duration');
	   $data['endcourcedatestart'] 	= $this->input->post('endcourcedatestart');
	   $data['endcourcedateend'] 	= $this->input->post('endcourcedateend');
	   $data['txtsession'] 			= $this->input->post('txtsession');
	   $data['description'] 		= $this->input->post('description');
           $nationality	 			= $this->input->post('txtName');
           $percentage	 				= $this->input->post('txtpersentage');
           $diver_id 					= $this->input->post('diver_id');
	   $targetFolder = '/projects/English2/uploadfiles/needcourcedc/';
		if (!empty($_FILES)) {
			foreach($_FILES as $file => $details){
			$tempFile = $details['tmp_name'];
			$targetPath = $_SERVER['DOCUMENT_ROOT'] . $targetFolder;
			$targetFile = rtrim($targetPath,'/') . '/' . $details['name'];
			$filename = $details['name'];
			$fileParts = pathinfo($details['name']);
			move_uploaded_file($tempFile,$targetFile);
			$data['filename'] = $filename;
			}
		}
		$this->cource->Edit_Courses($data,$nationality,$percentage,$diver_id);	
		$this->session->set_flashdata('msg', 'Your information has been sucssfully updated');
		redirect('/user/courses_detail/editcourse/'.$data['course_ID']);
	}
         public function getstudents($offset = 0){
               $datas['search'] = $this->input->post('search');
                $per_page = 15;
                $counti = $per_page + $offset;
                $offset1 = $offset.",".$counti;
            	$data['selected'] = 'getstudents';
		$data['branches'] = $this->branch_detail_model->getbranches_1($datas);
		$data['total'] = $this->branch_detail_model->getbranches_num();	
                $config['base_url'] = base_url().'user/courses_detail/getstudents';
                $config['total_rows'] = $data['total'];
                $config['per_page'] = 15;
                $config['num_links']=9;
                $config['uri_segment'] =4;
                $this->pagination->initialize($config); 
                $this->load->view('user/header');
                $this->load->view('user/left_menu',$data);
                $this->load->view('user/student_branches',$data);
                $this->load->view('user/footer');
        }
        public function studentviewCource($courcename,$courceID){
		$data['courcelist'] = $this->cource->getcources($courceID);	
		$data['selected'] = 'getstudents';
		$this->load->view('user/header');
		$this->load->view('user/left_menu',$data);
		$this->load->view('user/get_student_course',$data);
		$this->load->view('user/footer');
        }
        public function students($courceid){
		$data['students'] = $this->cource->getstudents($courceid);
		$data['selected'] = 'getstudents';
		$this->load->view('user/header');
		$this->load->view('user/left_menu',$data);
		$this->load->view('user/get_user_cources',$data);
		$this->load->view('user/footer');
            
        }
        public function getstudentname(){
              $cust_id = $this->session->userdata('customer_id');
              $search = $_GET['keywords1'];
           $query = $this->db->query('SELECT C.*, SC.*, S.*, B.*, 
			C.id AS Selected_course_id, SC.id AS Course_id, S.id AS Student_profile_id, 
			B.id AS Branch_id, B.name AS BranchName FROM eb_selected_course C 
			LEFT OUTER JOIN eb_cource SC ON C.course_id = SC.id 
			INNER JOIN eb_student_profile S ON C.student_id = S.id 
			LEFT OUTER JOIN eb_college_branches B ON B.id = SC.branch_id WHERE s.family_name LIKE "%'.$search.'%" or s.four_name  LIKE "%'.$search.'%"  AND S.showcustomer = 1 AND C.course_id = '.$cust_id.'');
            foreach ($query->result() as $row){
             $id =  $row->id;
             $varresult .= "<a href='#' onclick ='check(this.id)' id='".$id."'><span id='s".$id."'>".$row->family_name." ".$row->four_name."</span></a><br/>"  ;
            }
            echo  $varresult;
        }
        
}
?>
