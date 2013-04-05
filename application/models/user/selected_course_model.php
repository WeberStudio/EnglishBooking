<?php 
class selected_course_model extends CI_Model {
	 // defult constructor 
     public function __construct() 
	  {
          parent::__construct();
		    // Your own constructor code
      }
	  
	 // models are stated below this   
	public function get_selected_course()
    {
		$student_id = $this->session->userdata('student_id');
		$query = $this->db->query("SELECT S.*, B.name, B.id, C.* FROM eb_selected_course S 
		INNER JOIN eb_college_branches B ON S.branch_id = B.id 
		INNER JOIN eb_cource C ON C.id = S.course_id WHERE student_id = '".$student_id."'");
		return $query->result();
    }

}

?>