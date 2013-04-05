<?php 
class booking_info_model extends CI_Model {
	 // defult constructor 
     public function __construct() 
	  {
          parent::__construct();
		    // Your own constructor code
      }
	  
	 // models are stated below this  
	 public function get_course_info($course_id){
		$query = "SELECT * FROM eb_cource WHERE id = ".$course_id;
		 $result = $this->db->query($query);
		 return $result->row();
	 } 
	  public function add_course_list($course_id , $branch_id, $offerprice){
		$student_id = $this->session->userdata('student_id');
		$query = $this->db->query("SELECT * FROM eb_selected_course WHERE student_id = ".$student_id." AND process = 1");
		$res = $query->num_rows();
		if($res >= 1){
			return 1;	
		}else{
		$query = $this->db->query("INSERT INTO eb_selected_course (student_id, course_id, branch_id, price) 
			VALUES (".$student_id.", ".$course_id.",".$branch_id.", '".$offerprice."')");
		}
	 }
	 
}

?>