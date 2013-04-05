<?php 
class branch_detail_model extends CI_Model {
	 // defult constructor 
     public function __construct() 
	  {
          parent::__construct();
		    // Your own constructor code
      }
	  
	 // models are stated below this   
    public function addBranches($data,$nationality,$percentage, $accommodation)
    {
		$accomo = $accommodation;
		$cust_id = $this->session->userdata('customer_id');
		 $Query = "INSERT INTO eb_college_branches 
			(college_id, name, city, post_code, address, phone, fax, email, year_of_establish, traffic_info, intertainment_info, weather_info, accommodation, description, image) VALUES 
			('".$cust_id."','".$data['name']."', '".$data['city']."', '".$data['post_code']."', ".$this->db->escape($data['address']).", '".$data['phone']."', '".$data['fax']."',
			'".$data['email']."', '".$data['year_of_establish']."', '".$data['traffic_info']."', '".$data['intertainment_info']."', '".$data['weather_info']."', 
			'".$accomo."', ".$this->db->escape($data['description']).", '".$data['image']."')";
		$this->db->query($Query);
		$lastbranchID = $this->db->insert_id();
		$i = 0;
		$totalcount = count($percentage);
		
			while($i<$totalcount){
			
			$nan = $nationality[$i];
			$per = $percentage[$i];
			$Querys = "INSERT INTO eb_branches_diversity 
			(college_id, nationality, persentage, branch_id) VALUES 
			('".$cust_id."','".$nan."', '".$per."', '".$lastbranchID."')";
			$this->db->query($Querys);
				$i++;
			}
          return  $lastbranchID;
		
    }
	public function getbranches($data){
		$cust_id = $this->session->userdata('customer_id');
	//	$query = $this->db->get_where('eb_college_branches', array('college_id' => $cust_id));		// 		This function get beanch details according to the college
                if(!empty($data['search'])){
                    $array = split(' ',$data['search']);
                     $query = $this->db->query('SELECT C.*, SC.*, S.*, B.*, 
			C.id AS Selected_course_id, SC.id AS Course_id, S.id AS Student_profile_id, 
			B.id AS Branch_id, B.name AS BranchName FROM eb_selected_course C 
			LEFT OUTER JOIN eb_cource SC ON C.course_id = SC.id 
			INNER JOIN eb_student_profile S ON C.student_id = S.id 
			LEFT OUTER JOIN eb_college_branches B ON B.id = SC.branch_id WHERE family_name LIKE "%'.$array['0'].'%"AND C.course_id = '.$cust_id.' AND S.showcustomer = 1');
                }else{ 
                   /* $query = $this->db->query('
					SELECT C.*, SC.*, S.*, B.*, 
			C.id AS Selected_course_id, SC.id AS Course_id, S.id AS Student_profile_id, 
			B.id AS Branch_id, B.name AS BranchName FROM eb_selected_course C 
			LEFT OUTER JOIN eb_cource SC ON C.course_id = SC.id 
			INNER JOIN eb_student_profile S ON C.student_id = S.id 
			LEFT OUTER JOIN eb_college_branches B ON B.id = SC.branch_id WHERE B.college_id = '.$cust_id.' AND S.showcustomer = 1');*/
			$query = $this->db->query('SELECT * FROM eb_college_branches WHERE college_id = '.$cust_id);
                }
		
		return $query->result();
	}
	
	public function getbranches_1($data){
		$cust_id = $this->session->userdata('customer_id');
	//	$query = $this->db->get_where('eb_college_branches', array('college_id' => $cust_id));		// 		This function get beanch details according to the college
                if(!empty($data['search'])){
                    $array = split(' ',$data['search']);
                     $query = $this->db->query('SELECT C.*, SC.*, S.*, B.*, 
			C.id AS Selected_course_id, SC.id AS Course_id, S.id AS Student_profile_id, 
			B.id AS Branch_id, B.name AS BranchName FROM eb_selected_course C 
			LEFT OUTER JOIN eb_cource SC ON C.course_id = SC.id 
			INNER JOIN eb_student_profile S ON C.student_id = S.id 
			LEFT OUTER JOIN eb_college_branches B ON B.id = SC.branch_id WHERE family_name LIKE "%'.$array['0'].'%"AND C.course_id = '.$cust_id.' AND S.showcustomer = 1');
                }else{ 
                    $query = $this->db->query('
					SELECT C.*, SC.*, S.*, B.*, 
			C.id AS Selected_course_id, SC.id AS Course_id, S.id AS Student_profile_id, 
			B.id AS Branch_id, B.name AS BranchName FROM eb_selected_course C 
			LEFT OUTER JOIN eb_cource SC ON C.course_id = SC.id 
			INNER JOIN eb_student_profile S ON C.student_id = S.id 
			LEFT OUTER JOIN eb_college_branches B ON B.id = SC.branch_id WHERE B.college_id = '.$cust_id.' AND S.showcustomer = 1');
			/*$query = $this->db->query('SELECT * FROM eb_college_branches WHERE college_id = '.$cust_id);*/
                }
		
		return $query->result();
	}

        public function getbranches_num(){
		$cust_id = $this->session->userdata('customer_id');
	//	$query = $this->db->get_where('eb_college_branches', array('college_id' => $cust_id));		// 		This function get beanch details according to the college
		$query = $this->db->query('SELECT C.*, SC.*, S.*, B.*, 
			C.id AS Selected_course_id, SC.id AS Course_id, S.id AS Student_profile_id, 
			B.id AS Branch_id, B.name AS BranchName FROM eb_selected_course C 
			LEFT OUTER JOIN eb_cource SC ON C.course_id = SC.id 
			INNER JOIN eb_student_profile S ON C.student_id = S.id 
			LEFT OUTER JOIN eb_college_branches B ON B.id = SC.branch_id WHERE C.course_id = '.$cust_id.' AND S.showcustomer = 1');
		return $query->num_rows();
	}
	public function deletebranch($bramchid){
		  $query = $this->db->where('id', $bramchid);
		  $query = $this->db->limit(1,0);
		  $query = $this->db->delete('eb_college_branches');
		  return ($this->db->affected_rows() > 0) ? TRUE : FALSE;
		
	}
	public function getBranchData($branch_id){
		$query = $this->db->get_where("eb_college_branches", array('id' => $branch_id));
		return $query->row();
	}
	public function getBranchDiversity($branch_id){
		$query2 = $this->db->get_where(" eb_branches_diversity", array('branch_id' => $branch_id));
		return $query2->result();
	}
	//		Edit Branches Data
    public function editBranches($data,$nationality,$percentage, $diver_id, $accommodation)
    {
		$accomo = $accommodation;
		$cust_id = $this->session->userdata('customer_id');
		$Br_id = $data['branch_id'];
		if($data['image'] != ""){
			 $Query = "UPDATE eb_college_branches SET 
				college_id 			= '".$cust_id."', 
				name 				= '".$data['name']."', 
				city 				= '".$data['city']."', 
				post_code 			= '".$data['post_code']."', 
				address 			= ".$this->db->escape($data['address']).", 
				phone 				= '".$data['phone']."', 
				fax 				= '".$data['fax']."', 
				email 				= '".$data['email']."', 
				year_of_establish 	= '".$data['year_of_establish']."', 
				traffic_info 		= '".$data['traffic_info']."', 
				intertainment_info 	= '".$data['intertainment_info']."', 
				weather_info 		= '".$data['weather_info']."', 
				description 		= ".$this->db->escape($data['description']).",
				image 				= '".$data['image']."',
				accommodation 		= '".$accomo."'
				WHERE id = ".$Br_id;
		}else{
			 $Query = "UPDATE eb_college_branches SET 
				college_id 			= '".$cust_id."', 
				name 				= '".$data['name']."', 
				city 				= '".$data['city']."', 
				post_code 			= '".$data['post_code']."', 
				address 			= ".$this->db->escape($data['address']).", 
				phone 				= '".$data['phone']."', 
				fax 				= '".$data['fax']."', 
				email 				= '".$data['email']."', 
				year_of_establish 	= '".$data['year_of_establish']."', 
				traffic_info 		= '".$data['traffic_info']."', 
				intertainment_info 	= '".$data['intertainment_info']."', 
				weather_info 		= '".$data['weather_info']."', 
				description 		= ".$this->db->escape($data['description']).",
				accommodation 		= '".$accomo."'
				WHERE id = ".$Br_id;
		}
			//echo $Query; die;
		$this->db->query($Query);
		$lastbranchID = $this->db->insert_id();
		$i = 0;
		$totalcount = count($percentage);
		
			while($i<$totalcount){
			$Diversity_id = $diver_id[$i];
			$nan = $nationality[$i];
			$per = $percentage[$i];
			$Querys = "UPDATE eb_branches_diversity SET
			nationality = '".$nan."', 
			persentage = '".$per."' 
			WHERE id = ".$Diversity_id;
				//exit;
			$this->db->query($Querys);
				$i++;
			}
    }
    public function getinfo($branchid){
        $query = $this->db->get_where('eb_college_branches', array('id' => $branchid));
        return $query->row();
    }
     public function updatecollegeinfo($data){
                        $Query = "UPDATE eb_college_branches SET ";
                        
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
			Storesshortdes 	= ".$this->db->escape($data['Storesshortdes']).", 
			Restaurantsshortdes 	= ".$this->db->escape($data['Restaurantsshortdes']).", 
			Airportshortdes 	= ".$this->db->escape($data['Airportshortdes'])."
			WHERE id = ".$data['branch_id'];
               $this->db->query($Query);
    }
}
?>