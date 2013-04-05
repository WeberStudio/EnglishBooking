<?php 
class college_detail_model extends CI_Model {
	 // defult constructor 
     public function __construct() 
	  {
          parent::__construct();
		    // Your own constructor code
      }
	  
	 // models are stated below this   
    public function addCollege_info($data)
    {
		$cust_id = $this->session->userdata('customer_id');
		$Query = "INSERT INTO eb_collegedetails 
			(cid, name, city, post_code, address, phone, fax, email, year_of_establish, no_branches, hts, description, image, 
				house_no, house_name, street, town, state, country) VALUES 
			(".$cust_id.", '".$data['name']."', '".$data['city']."', '".$data['post_code']."', ".$this->db->escape($data['address']).", '".$data['phone']."', '".$data['fax']."',
			'".$data['email']."', '".$data['year_of_establish']."', '".$data['no_branches']."', '".$data['hts']."', ".$this->db->escape($data['description']).", '".$data['image']."', 
			'".$data['house_no']."', '".$data['house_name']."', '".$data['street']."', '".$data['town']."', '".$data['state']."', '".$data['country']."')";
		$this->db->query($Query);
    }
	public function get_Collegdetail()
    {
		$cust_id = $this->session->userdata('customer_id');
		$query = $this->db->query("SELECT * FROM eb_collegedetails WHERE cid = '".$cust_id."'");
		return $query->row();
    }
	
	public function get_countries()
    {
		$query = $this->db->query("SELECT * FROM country ORDER BY printable_name ASC");
		return $query->result();
    }
	
	public function edit_Collegedetail($data)
    {
		$cust_id = $this->session->userdata('customer_id');
		if($data['image'] != ""){
		$Query = "UPDATE eb_collegedetails SET
			name 				= '".$data['name']."',
			city 				= '".$data['city']."', 
			post_code 			= '".$data['post_code']."', 
			address 			= ".$this->db->escape($data['address']).", 
			phone 				= '".$data['phone']."', 
			house_no 			= '".$data['house_no']."',
			house_name 			= '".$data['house_name']."',
			street 				= '".$data['street']."',
			town 				= '".$data['town']."',
			state 				= '".$data['state']."',
			country				= '".$data['country']."',
			
			fax 				= '".$data['fax']."',
			email 				= '".$data['email']."', 
			year_of_establish 	= '".$data['year_of_establish']."', 
			no_branches 		= '".$data['no_branches']."', 
			hts 				= '".$data['hts']."',
			image 				= '".$data['image']."',
			description			= ".$this->db->escape($data['description'])."
			WHERE cid = ".$cust_id;
		}else{
		$Query = "UPDATE eb_collegedetails SET
			name 				= '".$data['name']."',
			city 				= '".$data['city']."', 
			post_code 			= '".$data['post_code']."', 
			address 			= ".$this->db->escape($data['address']).", 
			
			house_no 			= '".$data['house_no']."',
			house_name 			= '".$data['house_name']."',
			street 				= '".$data['street']."',
			town 				= '".$data['town']."',
			state 				= '".$data['state']."',
			country				= '".$data['country']."',
			
			phone 				= '".$data['phone']."', 
			fax 				= '".$data['fax']."',
			email 				= '".$data['email']."', 
			year_of_establish 	= '".$data['year_of_establish']."', 
			no_branches 		= '".$data['no_branches']."', 
			hts 				= '".$data['hts']."',
			description			= ".$this->db->escape($data['description'])."
			WHERE cid = ".$cust_id;
		}
		$this->db->query($Query);
    }
}

?>