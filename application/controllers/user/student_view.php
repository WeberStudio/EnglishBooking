<?php
class student_view extends CI_Controller {

	 	// defult constructor 
	public function __construct()
    {
            parent::__construct();
	/*		if(!$this->session->userdata('customer_id')){ 

			} else {
				redirect('/user/Customer_info/customer_main');
			}
      */      // Your own constructor code	
			$this->load->model('user/customer_student_view');
    }
	public function view_student($studentid){
		$data['selected'] = 'getstudents';
		$customer_id = $this->session->userdata('customer_id');
        $data['profile'] = $this->customer_student_view->getuserprofile($studentid);
        $data['studentdocuments'] = $this->customer_student_view->getstudentdocuments($studentid);
		$data['admindocuments'] = $this->customer_student_view->get_admin_documents($studentid);
		$data['my_documents'] = $this->customer_student_view->get_customer_documents($customer_id, $studentid);
		$this->load->view('user/header');
		$this->load->view('user/left_menu',$data);
		$this->load->view('user/get_user_view');
		$this->load->view('user/footer');
	}
		
	public function uploaddocuments(){
			$customer_id  = $_POST['customer_id'];
			$student_id  = $_POST['student_id'];
			$targetFolder = '/projects/English2/uploadfiles/student_documents/'; // Relative to the root
			$verifyToken = md5('unique_salt' . $_POST['timestamp']);
			if (!empty($_FILES) && $_POST['token'] == $verifyToken) {
			$tempFile = $_FILES['Filedata']['tmp_name'];
			$targetPath = $_SERVER['DOCUMENT_ROOT'] . $targetFolder;
			$targetFile = rtrim($targetPath,'/') . '/' .time(). $_FILES['Filedata']['name'];
			$filename = time().$_FILES['Filedata']['name'];
			$fileParts = pathinfo($_FILES['Filedata']['name']);
			move_uploaded_file($tempFile,$targetFile);
			$this->customer_student_view->upload_files($filename,$customer_id,$student_id);
			}
                $url = base_url()."admin_main/students_info/get_student_info/".$student_id;                                  
		$sql = "INSERT INTO  adminnotifaction (text,url) VALUES ('A new File upload By College','".$url."')";
                $this->db->query($sql);
	}
	
	//		=========================	Delete Documents	============================
	
	public function del_student_doc($docid, $student_id){	
		$this->customer_student_view->del_student_documents($docid);
		$this->view_student($student_id);
	}

	
}
?>
