<?php 
class student_dashboard_model extends CI_Model {
	 // defult constructor 
     public function __construct() 
	  {
          parent::__construct();
		    // Your own constructor code
      }
	  
	 // models are stated below this   
    public function check_personal_info(){
		$cust_id = $this->session->userdata('customer_id');
		$Query = $this->db->get_where('eb_college_personaldetail', "cid = ".$cust_id);
		if($Query->num_rows()>0){
				
			return '1';
		}else {
			return '0';
		}
	}
	public function addStudent_info($data)
    {
		$Query = "INSERT INTO eb_student_profile 
			(family_name, four_name, date_of_birth, gender, nationality, address, email, telephone, fax, ref_id, password) VALUES 
			(".$this->db->escape($data['family_name']).",".$this->db->escape($data['four_name']).", '".$data['date_of_birth']."', '".$data['gender']."', '".$data['nationality']."', 
			".$this->db->escape($data['address']).", '".$data['email']."', '".$data['telephone']."', '".$data['fax']."', '".$data['ref_id']."', '".$data['password']."')";
			$this->db->query($Query);
    }
	public function get_student_info()
    {
		$student_id = $this->session->userdata('student_id');
		$query = $this->db->query("SELECT * FROM eb_student_profile WHERE id = '".$student_id."'");
		return $query->row();
    }
	public function editStudent_info($data)
    {
		$student_id = $this->session->userdata('student_id');
		$Query = "UPDATE eb_student_profile SET
			family_name 	= ".$this->db->escape($data['family_name']).",
			four_name 		= ".$this->db->escape($data['four_name']).", 
			date_of_birth 	= '".$data['date_of_birth']."', 
			gender 			= '".$data['gender']."', 
			nationality 	= '".$data['nationality']."', 
			address 		= ".$this->db->escape($data['address']).",
			email 			= '".$data['email']."', 
			telephone 		= '".$data['telephone']."',
			fax 			= '".$data['fax']."',
			ref_id 			= '".$data['ref_id']."'
			WHERE id = ".$student_id;
			$this->db->query($Query);
    }
    public function delete_student_notifaction($id){
        $Query = "UPDATE eb_student_notifaction SET
			status 	= '0'
			WHERE id = ".$id;
			$this->db->query($Query);
            return 1;
    }
    public function get_notifaction_url($id){
        $query = $this->db->query("SELECT url FROM eb_student_notifaction WHERE id = '".$id."'");
        $result = $query->row();
	return $result->url;
    }

	public function get_student_password($data){
        $query = $this->db->query("SELECT id, email FROM eb_student_profile WHERE email = '".$data['email']."'");
        $result = $query->row();
		$student_id = $reslut->id;
		if ($result == 1){
			$url = $url = base_url()."user/student_dashboard/recover_password/000".$student_id;
			$to = $data['email'];
			$subject = "English Booking Password Recovery";
			$message = '	
						<table width="200" border="1">
							<tr>
									<td>Go to this link and reset your password</td>
							</tr>
							<tr>
									<td><a href="'.$url.'">English Booking recover Password here</a></td>
							</tr>
						</table>';
						$headers = 'From: husnain.swl@gmail.com' . "\r\n" .
						'Reply-To: husnain.swl@gmail.com' . "\r\n" .
						'X-Mailer: PHP/' . phpversion();
				mail($to, $subject, $message, $headers);
				return 1;
		}
		else
			return 0; 
    }
	
	public function new_password($data)
    {		
		$query = "UPDATE eb_student_profile SET password = '".$data['password']."' WHERE id = ".$data['id'];
		$this->db->query($query);
		return 1;
	}


}

?>