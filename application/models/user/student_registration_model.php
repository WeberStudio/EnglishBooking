<?php 
class student_registration_model extends CI_Model {
	 // defult constructor 
     public function __construct() 
	  {
          parent::__construct();
		    // Your own constructor code
      }
	  
	 // models are stated below this   
	public function addStudent_info($studentdata)
    {		
	//	echo print_r($this->session->all_userdata()); exit; 
		$reg_from = "course";
		 $Query = "INSERT INTO eb_student_profile 
			(family_name, four_name, date_of_birth, gender, nationality, address, telephone, fax, 
			illness, smoke, other_info, english_level, other_info2, ocopation, college_name, accomodation, 
			accomodation_info, email, password, register_from, house_name, house_no, street, city, state, post_code, country) VALUES 
			(".$this->db->escape($this->session->userdata('family_name')).",".$this->db->escape($this->session->userdata('four_name')).", '".$this->session->userdata('date_of_birth')."', '".$this->session->userdata('gender')."', 
			'".$this->session->userdata('nationality')."',".$this->db->escape($this->session->userdata('address')).", '".$this->session->userdata('telephone')."', '".$this->session->userdata('fax')."', 
			'".$this->session->userdata('illness')."', '".$this->session->userdata('smoke')."', ".$this->db->escape($this->session->userdata('other_info')).", '".$this->session->userdata('english_level')."', 
			".$this->db->escape($this->session->userdata('other_info2')).", '".$this->session->userdata('ocopation')."', '".$this->session->userdata('college_name')."', 
			'".$this->session->userdata('accomodation')."', ".$this->db->escape($this->session->userdata('accomodation_info')).", 
			'".$this->session->userdata('email')."', '".$this->session->userdata('password')."', '".$reg_from."', 
			'".$this->session->userdata('house_name')."', '".$this->session->userdata('house_no')."', '".$this->session->userdata('street')."', 
			'".$this->session->userdata('city')."', '".$this->session->userdata('state')."', '".$this->session->userdata('post_code')."', '".$this->session->userdata('country')."')";
               
		$this->db->query($Query);
		$lastinsertid = $this->db->insert_id();
					$to = $this->session->userdata('email');
					$subject = "English Booking Registration";
					$message = '	
								<table width="200" border="1">
									<tr>
											<td>Thank you</td>
											<td>Thank you for your registration on <a href="http://englishbooking.com">english booking</a></td>
									</tr>
								</table>';
								$headers = 'From: husnain.swl@gmail.com' . "\r\n" .
								'Reply-To: husnain.swl@gmail.com' . "\r\n" .
								'X-Mailer: PHP/' . phpversion();
						mail($to, $subject, $message, $headers);
                  $url = base_url()."admin_main/students_info/get_student_info/".$lastinsertid;                                  
		$sql = "INSERT INTO  adminnotifaction (text,url) VALUES ('A new Student enrolled','".$url."')";
                $this->db->query($sql);
		return "1";
    }
	
	public function Student_session($studentdata)
    {		
		$query = $this->db->query("SELECT * FROM eb_student_profile WHERE email = '".$this->session->userdata('email')."' 
		AND password = '".$this->session->userdata('password')."' AND status = '0' ");
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
	
	public function check_email($studentdata)
    {		
			$query = $this->db->query("SELECT email FROM eb_student_profile WHERE email = '".$this->session->userdata('email')."'");
	//		echo "test"; exit;
			return $query->num_rows();
	}
    
	public function addStudent_info_1($studentdata)
    {		
	//	echo print_r($this->session->all_userdata()); exit; 
			$query = $this->db->query("SELECT email FROM eb_student_profile WHERE email = '".$this->session->userdata('email')."'");
	//	$dataResult = $query->row();
		if($query->num_rows() > 0){
	//		echo "test"; exit;
			return "2";
		}else{
		$reg_from = "course";
		$Query = "INSERT INTO eb_student_profile 
			(family_name, four_name, date_of_birth, gender, nationality, address, telephone, fax, 
			illness, smoke, other_info, english_level, other_info2, ocopation, college_name, accomodation, 
			accomodation_info, email, password, register_from, house_name, house_no, street, city, state, post_code, country) VALUES 
			(".$this->db->escape($this->session->userdata('family_name')).",".$this->db->escape($this->session->userdata('four_name')).", '".$this->session->userdata('date_of_birth')."', '".$this->session->userdata('gender')."', 
			'".$this->session->userdata('nationality')."', '".$this->session->userdata('address')."', '".$this->session->userdata('telephone')."', '".$this->session->userdata('fax')."', 
			'".$this->session->userdata('illness')."', '".$this->session->userdata('smoke')."', ".$this->db->escape($this->session->userdata('other_info')).", '".$this->session->userdata('english_level')."', 
			'".$this->session->userdata('other_info2')."', '".$this->session->userdata('ocopation')."', '".$this->session->userdata('college_name')."', 
			'".$this->session->userdata('accomodation')."', ".$this->db->escape($this->session->userdata('accomodation_info')).", 
			'".$this->session->userdata('email')."', '".$this->session->userdata('password')."', '".$reg_from."', 
			'".$this->session->userdata('house_name')."', '".$this->session->userdata('house_no')."', '".$this->session->userdata('street')."', 
			'".$this->session->userdata('city')."', '".$this->session->userdata('state')."', '".$this->session->userdata('post_code')."', '".$this->session->userdata('country')."')";
		$this->db->query($Query);
		
					$to = $this->session->userdata('email');
					$subject = "English Booking Registration";
					$message = '	
								<table width="200" border="1">
									<tr>
											<td>Thank you</td>
											<td>Thank you for your registration on <a href="http://englishbooking.com">english booking</a></td>
									</tr>
								</table>';
								$headers = 'From: husnain.swl@gmail.com' . "\r\n" .
								'Reply-To: husnain.swl@gmail.com' . "\r\n" .
								'X-Mailer: PHP/' . phpversion();
						mail($to, $subject, $message, $headers);

		$sql = "INSERT INTO  adminnotifaction (text,url) VALUES ('A new Student enrolled','".$url."')";
                $this->db->query($sql);
		return "1";
		}
    }
	
	public function Student_session_1($studentdata)
    {		
		$query = $this->db->query("SELECT * FROM eb_student_profile WHERE email = '".$this->session->userdata('email')."' 
		AND password = '".$this->session->userdata('password')."' AND status = '0' ");
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
		
	public function new_password($data)
    {		
		$query = "UPDATE eb_student_profile SET password = '".$data['password']."' WHERE id = ".$data['id'];
		$this->db->query($query);
		return 1;
	}
	
	public function get_countries()
    {
		$query = $this->db->query("SELECT * FROM country ORDER BY printable_name ASC");
		return $query->result();
    }
	
}

?>