<?php 
class student_login_model extends CI_Model {
	 // defult constructor 
     public function __construct() 
	  {
          parent::__construct();
		    // Your own constructor code
      }
	  
	 // models are stated below this   
    public function StudentLogin($data)
    {
		$query = $this->db->query("SELECT * FROM eb_student_profile WHERE email = '".$data['email']."' AND password = '".$data['password']."' AND status = '0' ");
		//$query->row();
		$dataResult = $query->row();
		if($query->num_rows() > 0){
			$customerdata = array(
                   'student_id'  		=> $dataResult->id,
                   'student_email'     	=> $dataResult->email,
				   'student_name'     	=> $dataResult->four_name,
				   'session_status'		=> $dataResult->id,
               );
			$this->session->set_userdata($customerdata);
			return "1";
		}else{
			return "0";
		}
    }
}

?>