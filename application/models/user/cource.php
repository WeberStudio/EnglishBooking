<?php 
class cource extends CI_Model {
	 // defult constructor 
     public function __construct(){
          parent::__construct();
		    // Your own constructor code
      }
	  
	 // models are stated below this  
	 public function getcollegename(){
		 $query = $this->db->get_where('eb_colleges', array('id' => $this->session->userdata('customer_id')));
		 $result = $query->row();
		 return $result->collegename;
	 }
	 
	 public function savecource($data){
		  $sqlQuery = "INSERT INTO eb_cource 
			(college_id,branch_id, college_name, category,courcename, address,offerprice,agentcommesion,courcerequirmentdoc,duration,startdate, enddate,session, description, image) VALUES 
			('".$data['collegeid']."','".$data['branch_id']."', '".$data['college_name']."', '".$data['category']."','".$data['txtCn']."',".$this->db->escape($data['txtAddress']).",'".$data['Offer_price']."', 
			'".$data['ag_commession']."','".$data['filename']."','".$data['duration']."','".$data['endcourcedatestart']."','".$data['endcourcedateend']."', 
			'".$data['txtsession']."', ".$this->db->escape($data['description']).", '".$data['image']."' )";
		$this->db->query($sqlQuery);
		 	
	 }
	 public function getcources($branch_id){
	 	 $query = $this->db->query("SELECT * FROM eb_cource WHERE branch_id = '".$branch_id."'");
		 //'eb_cource', array('branch_id' => $branch_id)
		 return  $query->result();
	 }
	 
	 //==============================		Delete Course
	 
	 public function courses_detl($courceid){
		  $query = $this->db->where('id', $courceid);
		  $query = $this->db->limit(1,0);
		  $query = $this->db->delete('eb_cource');
		  return ($this->db->affected_rows() > 0) ? TRUE : FALSE;
	 }
	 
	 // ===============================		Get Course For Edit
	 
	 public function getCourse($course_id){
		 $query = $this->db->get_where('eb_cource', array('id' => $course_id));
		 return $query->row();
	 }
	 public function Edit_Courses($data,$nationality,$percentage,$diver_id){
		 $Course_ID = $data['course_ID'];
		 $File_nam = $data['filename'];
		 if($data['image'] != "" or $File_nam != ""){
			  $sqlQuery = "UPDATE eb_cource SET 
				category 			= '".$data['category']."', 
				courcename 			= '".$data['txtCn']."', 
				address 			= ".$this->db->escape($data['txtAddress']).", 
				offerprice 			= '".$data['Offer_price']."',
				agentcommesion 		= '".$data['ag_commession']."', 
				courcerequirmentdoc = '".$data['filename']."',
				duration 			= '".$data['duration']."', 
				startdate 			= '".$data['endcourcedatestart']."', 	
				enddate 			= '".$data['endcourcedateend']."', 
				description 		= ".$this->db->escape($data['description']).", 
				session 			= '".$data['txtsession']."',
                                image                   = '".$data['image']."'    
				WHERE id = ".$Course_ID;
			$this->db->query($sqlQuery);
		 }else{
			  $sqlQuery = "UPDATE eb_cource SET 
				category 			= '".$data['category']."', 
				courcename 			= '".$data['txtCn']."', 
				address 			= ".$this->db->escape($data['txtAddress']).", 
				offerprice 			= '".$data['Offer_price']."',
				agentcommesion 		= '".$data['ag_commession']."', 
				duration 			= '".$data['duration']."', 
				startdate 			= '".$data['endcourcedatestart']."', 	
				enddate 			= '".$data['endcourcedateend']."', 
				description 		= ".$this->db->escape($data['description']).", 
				session 			= '".$data['txtsession']."'
				WHERE id = ".$Course_ID;
			$this->db->query($sqlQuery);
		 }
                 
                 $i = 0;
		$totalcount = count($percentage);
		
			while($i<$totalcount){
			$Diversity_id = $diver_id[$i];
			$nan = $nationality[$i];
			$per = $percentage[$i];
                        if($Diversity_id == '0') {
                          $query = "INSERT INTO eb_testimonials (value,name,cid) VALUES ('".$nan."','".$per."','".$Course_ID."')";  
			  $this->db->query($query);
                        } else {
			$Querys = "UPDATE eb_testimonials SET
			value = '".$nan."', 
			name = '".$per."' 
			WHERE id = ".$Diversity_id;
				//exit;
			$this->db->query($Querys);
                        }
				$i++;
			}
                 
                 
	 }
         public function getstudents($courseid){
		//	 $sql =  "SELECT esp.* FROM eb_selected_course esc LEFT JOIN eb_student_profile esp ON esc.student_id =esp.id AND esc.course_id = '".$courseid."'  AND esp.showcustomer = 1";
              $sql =  "SELECT esp.*, esc.ID AS Course_ID
                FROM eb_selected_course esc
                INNER JOIN eb_student_profile esp
                ON esc.student_id =esp.id AND esc.course_id = '".$courseid."'  AND esp.showcustomer = 1";
            $result = $this->db->query($sql);
            return $result->result();
         }
         public function gettestimonials($courseid){
		 $query = $this->db->get_where('eb_testimonials', array('cid' => $courseid));
                 return $query->result();
         }
}

?>