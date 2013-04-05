<?php 
class customer_student_view extends CI_Model {
	 // defult constructor 
     public function __construct() 
	  {
          parent::__construct();
		    // Your own constructor code
      }
	  
	 // models are stated below this   
   public function getuserprofile($id){
      $query = $this->db->get_where('eb_student_profile', array('id' => $id));
      return $query->row(); 
   }
   public function getstudentdocuments($id){
       $query = "SELECT * FROM eb_student_documents WHERE  student_id = '".$id."' AND status = 1  AND admin_upload = 0 AND customer_id = 0";
       $result = $this->db->query($query);
      return $result->result(); 
   }
   public function get_admin_documents($id){
       $query = "SELECT * FROM eb_student_documents WHERE  student_id = '".$id."' AND status = 1  AND admin_upload = 1";
       $result = $this->db->query($query);
      return $result->result();  
   }
   
   
	public function get_customer_documents($customer_id, $student_id){
      $query = "SELECT * FROM eb_student_documents WHERE  student_id = '".$student_id."' AND customer_id = ".$customer_id;
       $result = $this->db->query($query);
      return $result->result();  
   }
   
   //		=========================	Delete Documents	============================
   
	public function del_student_documents($id){
			$query = $this->db->where('id', $id);
		  $query = $this->db->limit(1,0);
		  $query = $this->db->delete('eb_student_documents');
		  return ($this->db->affected_rows() > 0) ? TRUE : FALSE;
	}

	public function upload_files($tempname,$customer_id,$student_id)
    {
		  $Query = "INSERT INTO eb_student_documents 
			(student_id, customer_id, filename) VALUES 
			('".$student_id."', '".$customer_id."', '".$tempname."')";
			$this->db->query($Query);
    }

}

?>