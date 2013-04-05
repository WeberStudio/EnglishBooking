<?php 
class branch_info_model extends CI_Model {
	 // defult constructor 
     public function __construct() 
	  {
          parent::__construct();
		    // Your own constructor code
      }
	  
	 // models are stated below this  
	 public function get_branch_info($branch_id){
		/*$query = "SELECT B.*, B.id AS Branch_ID, B.name AS branch_name, C.courcename, C.offerprice, 
			C.id, C.description AS Course_desc, C.courcerequirmentdoc, CD.name AS college_name FROM eb_college_branches B 
			INNER JOIN eb_cource C ON C.branch_id = B.id 
			RIGHT OUTER JOIN eb_collegedetails CD ON B.college_id = CD.ID WHERE C.cid =".$branch_id;*/
             $query = "SELECT B.*, B.id AS Branch_ID, B.name AS branch_name, C.courcename, C.offerprice, C.id, C.description AS Course_desc, C.courcerequirmentdoc, CD.name AS college_name FROM eb_college_branches B INNER JOIN eb_cource C ON C.branch_id = B.id RIGHT OUTER JOIN eb_collegedetails CD ON B.college_id = CD.cid WHERE C.id ='".$branch_id."'";
		 $result = $this->db->query($query);
		 return $result->row();
	 }
	 
	 public function selected_course_list($course_id){
		 $student_id = $this->session->userdata('student_id');
		 $Query = $this->db->query("SELECT * FROM eb_selected_course WHERE student_id = ".$student_id." AND process = 1" );
		return $Query->num_rows();
	 }
	 
	  public function add_course_list($course_id , $branch_id, $offerprice){
		$student_id = $this->session->userdata('student_id');
		$query = $this->db->query("INSERT INTO eb_selected_course (student_id, course_id, branch_id, price) 
			VALUES (".$student_id.", ".$course_id.",".$branch_id.", '".$offerprice."')");
			
	 }
	 
	 public function get_branch_data($branch_id){
		$query = "SELECT * FROM eb_college_branches B WHERE id =".$branch_id;
		 $result = $this->db->query($query);
		 return $result->row();
	 }
	 
	public function popularcourses(){
        $query = "SELECT  pc. *, cd.*, cd.id AS Course_ID FROM eb_popularcourses pc 
			INNER JOIN eb_cource cd ON pc.cid  = cd.id WHERE  pc.status = 1  ORDER BY RAND() LIMIT 0,2"; 
            $allcollegeedata = $this->db->query($query);
            $returnresult =   $allcollegeedata->result();
            return $returnresult;     
    }

}

?>