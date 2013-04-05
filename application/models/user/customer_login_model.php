<?php 
class customer_login_model extends CI_Model {
	 // defult constructor 
     public function __construct() 
	  {
          parent::__construct();
		    // Your own constructor code
      }
	  
	 // models are stated below this   
    public function CustomerLogin($data)
    {
		$query = $this->db->query("SELECT * FROM eb_colleges WHERE useremail = '".$data['email']."' AND password = '".$data['password']."' AND status = '1' ");
		//$query->row();
		$dataResult = $query->row();
		if($query->num_rows() > 0){
			$customerdata = array(
                   'customer_id'  		=> $dataResult->id,
                   'customer_email'     => $dataResult->useremail,
				   'college_name'     	=> $dataResult->collegename,
				   'session_status'		=> $dataResult->id,
               );
			$this->session->set_userdata($customerdata);
			return "1";
		}else{
			return "0";
		}
    }
	
	public function get_customer_password($data){
        $query = $this->db->query("SELECT id, email FROM eb_colleges WHERE useremail = '".$data['email']."'");
        $result = $query->row();
		$college_id = $reslut->id;
		if ($result == 1){
			$url = base_url()."user/customer_login/recover_customer_password/000".$college_id;
			$to = $data['email'];
			$subject = "English Booking Password Recovery";
			$message = '	
						<table width="200" border="1">
							<tr>
									<td>Go to this link and reset your password</td>
							</tr>
							<tr>
									<td><a href="'.$url.'">english booking recover Password here</a></td>
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
		$query = "UPDATE eb_colleges SET password = '".$data['password']."' WHERE id = ".$data['id'];
		$this->db->query($query);
		return 1;
	}

	
}

?>