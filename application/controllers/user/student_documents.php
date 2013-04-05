<?php
class Student_documents extends CI_Controller {

	 	// defult constructor 
	public function __construct()
    {
            parent::__construct();
            // Your own constructor code	
			$this->load->model('user/student_documents_model');
		/* check whether login or not */
		if(!$this->session->userdata('student_id')){
		//redriect('/user/customer_login/college_documents_model');
		}
    }
	public function documents()
	{
		$data['selected'] = 'documents';
		$this->load->view('user/header');
		$this->load->view('user/left_menu_students',$data);
		$data['student_documents'] = $this->student_documents_model->get_upload_files();
		$this->load->view('user/student_documents',$data);		
		$this->load->view('user/footer');
	}
	public function uploaddocuments(){
			$cid  = $_POST['cid'];
			$targetFolder = '/projects/English2/uploadfiles/student_documents/'; // Relative to the root
			$verifyToken = md5('unique_salt' . $_POST['timestamp']);
			if (!empty($_FILES) && $_POST['token'] == $verifyToken) {
			$tempFile = $_FILES['Filedata']['tmp_name'];
			$targetPath = $_SERVER['DOCUMENT_ROOT'] . $targetFolder;
			$targetFile = rtrim($targetPath,'/') . '/' .time(). $_FILES['Filedata']['name'];
			$filename = time().$_FILES['Filedata']['name'];
			$fileParts = pathinfo($_FILES['Filedata']['name']);
			move_uploaded_file($tempFile,$targetFile);
			$this->student_documents_model->upload_files($filename,$cid);
			}
	}
	public function del_student_doc($docid){	
		$this->student_documents_model->del_student_documents($docid);
		$this->documents();
	}
	
	
	public function admin_documents()
	{
		$data['selected'] = 'admin_documents';
		$this->load->view('user/header');
		$this->load->view('user/left_menu_students',$data);
		$data['student_documents'] = $this->student_documents_model->get_admin_files();
		$this->load->view('user/admin_documents',$data);		
		$this->load->view('user/footer');
	}
}
?>
