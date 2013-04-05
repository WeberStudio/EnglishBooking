<?php 
class customer_student_messages_model extends CI_Model {
	 // defult constructor 
     public function __construct() 
	  {
          parent::__construct();
		    // Your own constructor code
      }
	  
	 // models are stated below this   
    public function submit_messages($data)
    {
		$student_id = $data['student_id'];
		$course_id = $data['course_id'];
		
		  $Query = "INSERT INTO eb_admin_chat
			(student_id, course_id, message, course_status) VALUES 
			('".$student_id."', '".$course_id."', '".$data['message']."', 1)";
			$this->db->query($Query);
                $url = base_url()."admin_main/messages/get_student_messages/".$student_id;                                  
		$sql = "INSERT INTO  adminnotifaction (text,url) VALUES ('A new Message By College','".$url."')";
                $this->db->query($sql);
    }
	public function get_student_messages($student_id, $course_id){
	//	echo $student_id; exit;
	//	$query = $this->db->query("SELECT * FROM eb_admin_chat WHERE student_id = ".$student_id." AND course_id = ".$course_id." AND admin_id = 0 AND status = 1");
		$query = $this->db->query("SELECT * FROM eb_admin_chat WHERE student_id = ".$student_id." AND status = 1 OR course_status = 1 ORDER BY id ASC");
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