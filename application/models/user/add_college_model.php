<?php 
class customer_dashboard_model extends CI_Model {
	 // defult constructor 
     public function __construct() 
	  {
          parent::__construct();
		    // Your own constructor code
      }
	  
	 // models are stated below this   
    public function addCustomer_info($data)
    {
		$Query = "INSERT INTO eb_college_personaldetail 
			(name, email, mobile, fax, skype, county, city, gender) VALUES 
			('".$data['name']."', '".$data['email']."', '".$data['mobile']."', '".$data['fax']."', '".$data['skype']."', '".$data['county']."',
			'".$data['city']."', '".$data['gender']."')";
			$this->db->query($Query);
    }
}

?>