<?php
class Client_documents extends CI_Controller {

	 	// defult constructor 
	public function __construct()
    {
            parent::__construct();
            // Your own constructor code	
			$this->load->model('user/college_documents_model');
		/* check whether login or not */
		if(!$this->session->userdata('customer_id')){
		//redriect('/user/customer_login/college_documents_model');
		}
    }
	public function documents()
	{
		$data['selected'] = 'documents';
		$this->load->view('user/header');
		$this->load->view('user/left_menu',$data);
		$this->load->view('user/client_documents');
		$this->load->view('user/footer');
	}
	public function uploaddocuments(){
			$cid  = $_POST['cid'];
			$targetFolder = '/projects/English2/uploadfiles/collegedocuments/'; // Relative to the root
			$verifyToken = md5('unique_salt' . $_POST['timestamp']);
			if (!empty($_FILES) && $_POST['token'] == $verifyToken) {
			$tempFile = $_FILES['Filedata']['tmp_name'];
			$targetPath = $_SERVER['DOCUMENT_ROOT'] . $targetFolder;
			$targetFile = rtrim($targetPath,'/') . '/' . $_FILES['Filedata']['name'];
			$filename = $_FILES['Filedata']['name'];
			$fileParts = pathinfo($_FILES['Filedata']['name']);
			move_uploaded_file($tempFile,$targetFile);
			$this->college_documents_model->upload_files($filename,$cid);
			}
	}
	public function del_clientdoc($docid){	
		$this->college_documents_model->del_clientdoc($docid);
		$this->documents();
	}
}
?>
