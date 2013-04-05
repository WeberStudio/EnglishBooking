<?php 
class student_documents_model extends CI_Model {
	 // defult constructor 
     public function __construct() 
	  {
          parent::__construct();
		    // Your own constructor code
      }
	  
	 // models are stated below this   
    public function upload_files($tempname,$cid)
    {
		 
		  $Query = "INSERT INTO eb_student_documents 
			(student_id, filename, status) VALUES 
			('".$cid."', '".$tempname."', 0)";
			$this->db->query($Query);
                        $url = base_url()."admin_main/students_info/get_student_info/".$cid;
                   $sql = "INSERT INTO adminnotifaction (text,url)VALUES('A new File upload from student','".$url."')";
                   $this->db->query($sql);
    }
	public function get_upload_files(){
		$student_id = $this->session->userdata('student_id');
		//$query = $this->db->get_where('eb_student_documents', array('student_id' => $this->session->userdata('student_id').' AND admin_upload = 0 AND status = 1'));
		$query = $this->db->query("SELECT * FROM eb_student_documents WHERE student_id = ".$student_id." AND admin_upload = 0 AND customer_id = 0");
		return $query->result();
	}
	
	public function get_admin_files(){
		$student_id = $this->session->userdata('student_id');
		$query = $this->db->query("SELECT * FROM eb_student_documents WHERE student_id = ".$student_id." AND admin_upload = 1 OR customer_id  > 0 AND status = 1 ");
		return $query->result();
	}
	
	public function del_student_documents($id){
			$query = $this->db->where('id', $id);
		  $query = $this->db->limit(1,0);
		  $query = $this->db->delete('eb_student_documents');
		  return ($this->db->affected_rows() > 0) ? TRUE : FALSE;
	}
}

?>