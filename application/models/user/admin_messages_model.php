<?php 
class admin_messages_model extends CI_Model {
	 // defult constructor 
     public function __construct() 
	  {
          parent::__construct();
		    // Your own constructor code
      }
	  
	 // models are stated below this   
    public function submit_messages($data){
		$student_id = $this->session->userdata('student_id');
		$student_name = $this->session->userdata('student_name'); 
		  $Query = "INSERT INTO eb_admin_chat
			(student_id, course_id, student_name, message, student_status) VALUES 
			('".$student_id."', '".$data['course_id']."', '".$student_name."', '".$data['message']."', 1)";
			$this->db->query($Query);
                        $url = base_url()."admin_main/messages/get_student_messages/".$student_id;
                     $sql = "INSERT INTO adminnotifaction (text, url) VALUES ('A new message from student','$url')"; 
                     $this->db->query($sql);
    }
	
	public function get_student_messages(){
		$student_id = $this->session->userdata('student_id');
		/*echo $Query = "SELECT * FROM eb_admin_chat WHERE student_id = ".$student_id." AND status = 1 or student_status = 1 ORDER BY id ASC"; exit;*/
		$query = $this->db->query("SELECT * FROM eb_admin_chat WHERE student_id = ".$student_id." AND status = 1 ORDER BY id ASC");
		return $query->result();
	}
	
	public function get_student_data(){
		$student_id = $this->session->userdata('student_id');
		$query = $this->db->query("SELECT * FROM eb_selected_course WHERE student_id = ".$student_id."");
		return $query->row();
	}

	public function del_student_documents($id){
			$query = $this->db->where('id', $id);
		  $query = $this->db->limit(1,0);
		  $query = $this->db->delete('eb_student_documents');
		  return ($this->db->affected_rows() > 0) ? TRUE : FALSE;
	}
}

?>