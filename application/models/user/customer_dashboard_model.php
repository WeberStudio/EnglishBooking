<?php 
class customer_dashboard_model extends CI_Model {
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
	public function addCustomer_info($data)
    {
		$cust_id = $this->session->userdata('customer_id');
		$Query = "INSERT INTO eb_college_personaldetail 
			(cid, name, email, phone, mobile, fax, skype, county, city, gender) VALUES 
			(".$cust_id.",'".$data['name']."', '".$data['email']."', '".$data['phone']."', '".$data['mobile']."', '".$data['fax']."', '".$data['skype']."', '".$data['county']."',
			'".$data['city']."', '".$data['gender']."')";
			$this->db->query($Query);
    }
	public function get_personal_info()
    {
		$cust_id = $this->session->userdata('customer_id');
		$query = $this->db->query("SELECT * FROM eb_college_personaldetail WHERE cid = '".$cust_id."'");
		return $query->row();
    }
	
	public function get_countries()
    {
		$query = $this->db->query("SELECT * FROM country ORDER BY printable_name ASC");
		return $query->result();
    }
	
	public function editCustomer_info($data)
    {
		$cust_id = $this->session->userdata('customer_id');
		$Query = "UPDATE eb_college_personaldetail SET
			name 	= '".$data['name']."',
			email 	= '".$data['email']."', 
			mobile 	= '".$data['mobile']."', 
			fax 	= '".$data['fax']."', 
			skype 	= '".$data['skype']."', 
			county 	= '".$data['county']."',
			city 	= '".$data['city']."', 
			gender 	= '".$data['gender']."'
			WHERE cid = ".$cust_id;
			$this->db->query($Query);
    }
    public function updatecollegeinfo($data){
        $cust_id = $this->session->userdata('customer_id');
                        $Query = "UPDATE eb_colleges SET ";
                        
                        if($data['touristimage']!='0'){
                         $Query .= "touristimage 	= '".$data['touristimage']."', ";  
                        }
                        if($data['Busimage']!='0'){
                         $Query .= "Busimage 	= '".$data['Busimage']."', ";  
                        }
                        if($data['Storesimage']!='0'){
                         $Query .= "Storesimage 	= '".$data['Storesimage']."', ";  
                        }
                        if($data['Restaurantsimage']!='0'){
                         $Query .= "Restaurantsimage 	= '".$data['Restaurantsimage']."', ";  
                        }
                        if($data['Airportimage']!='0'){
                         $Query .= "Airportimage 	= '".$data['Airportimage']."', ";  
                        }
                        if($data['touristfile']!='0'){
                         $Query .= "touristfile 	= '".$data['touristfile']."', ";  
                        }
                        if($data['Busfile']!='0'){
                         $Query .= "Busfile 	= '".$data['Busfile']."', ";  
                        }
                        if($data['Storesfile']!='0'){
                         $Query .= "Storesfile 	= '".$data['Storesfile']."', ";  
                        }
                        if($data['Restaurantsfile']!='0'){
                         $Query .= "Restaurantsfile 	= '".$data['Restaurantsfile']."', ";  
                        }
                        if($data['Airportfile']!='0'){
                         $Query .= "Airportfile 	= '".$data['Airportfile']."', ";  
                        }
		$Query .= " touristshortdes 	= ".$this->db->escape($data['touristshortdes']).",
			Busshortdes 	= ".$this->db->escape($data['Busshortdes']).", 
			Storesshortdes 	='".$this->db->escape($data['Storesshortdes']).", 
			Restaurantsshortdes 	= ".$this->db->escape($data['Restaurantsshortdes']).", 
			Airportshortdes 	= ".$this->db->escape($data['Airportshortdes'])."
			WHERE id = ".$cust_id;
               $this->db->query($Query);
    }
    public function getinfo(){
          $cust_id = $this->session->userdata('customer_id');
        $query = $this->db->get_where('eb_colleges', array('id' => $cust_id));
        return $query->row();
    }
}

?>