<?php 
class pages_model extends CI_Model {
	 // defult constructor 
     public function __construct(){
          parent::__construct();
		    // Your own constructor code
	}
	  
	 // models are stated below this   
    public function getpages($pageID)
    {
		$query = $this->db->query("SELECT * FROM eb_pages WHERE url = '".$pageID."'");
		return $query->row();
   		 
    }
	//	===============================  Subscribe Email
	public function add_subscribe_email($data)
    {
		$Query = "INSERT INTO eb_subscribe_offer (email) VALUES ('".$data['email']."')";
		$this->db->query($Query);
    }
	
	//	===============================  Contactus Email
	
	public function get_contact_info()
    {
		$Query = $this->db->query("SELECT * FROM eb_pages WHERE id = 1");
		return $Query->row();		
    }
	
	
	public function get_college_list()
    {
		$Query = $this->db->query("SELECT C.*, CD.cid, CD.description,CD.image FROM eb_colleges C INNER JOIN eb_collegedetails CD ON C.id = CD.cid");
		return $Query->result();		
    }
	
	
	public function get_college_data($college_id)
    {
		$Query = $this->db->query("SELECT C.*, CD.*, CD.id AS CD_ID FROM eb_colleges C INNER JOIN eb_collegedetails CD ON C.id = CD.cid WHERE C.id = ".$college_id);
		return $Query->row();		
    }
	
	
	public function get_college_branches($college_id)
    {
		$Query = $this->db->query("SELECT * FROM eb_college_branches WHERE college_id = ".$college_id);
		return $Query->num_rows();		
    }
	
	//	**************************** branch list against specfic college \\
	
	public function get_branch_list($college_id)
    {
		$Query = $this->db->query("SELECT * FROM eb_college_branches WHERE college_id = ".$college_id);
		return $Query->result();		
    }

	
	public function send_contact_mail($data){
	$to = "jamshaid.weber@gmail.com";
	$subject = "English booking enquiry";
	$message = '	
		<table width="200" border="1">
			<tr>
					<td>Name</td>
					<td>'.$data['name'].'</td>
			</tr>
			<tr>
					<td>Email</td>
					<td>'.$data['email'].'</td>
			</tr>
			<tr>
					<td>Phone</td>
					<td>'.$data['phone'].'</td>
			</tr>
			<tr>
					<td>Message</td>
					<td>'.$data['message'].'</td>
			</tr>
			<tr>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
			</tr>
		</table>';
                $headers = 'From: husnain.swl@gmail.com' . "\r\n" .
                'Reply-To: husnain.swl@gmail.com' . "\r\n" .
                'X-Mailer: PHP/' . phpversion();
		mail($to, $subject, $message, $headers);
	}
}

?>