<?php 
class popular_model extends CI_Model {
	 // defult constructor 
     public function __construct(){
          parent::__construct();
		    // Your own constructor code
      }
	  
    function getcoursegeofday(){
       $sql = "SELECT course_id  FROM eb_course_of_day WHERE selecteddate = '".date('d/m/Y')."' AND status = 1";
       $result = $this->db->query($sql);
       $results = $result->row();
     
       if(!empty($results)){
           $courceid = $results->course_id;
           $selectdcourceid =  $courceid ;
       }else {
         $sqlresult = "SELECT course_id from eb_course_of_day ORDER BY RAND() LIMIT 0,1"; 
         $result = $this->db->query($sqlresult);
         $results = $result->row();
         $courceid = $results->course_id;
         $selectdcourceid =  $courceid ;
       }
      	$getcorcedeatil = "SELECT * FROM eb_cource WHERE id = '".$selectdcourceid."'";
       $allcourcedata = $this->db->query($getcorcedeatil);
       $returnresult =   $allcourcedata->row();
       return $returnresult;
    }
	
    public function getcollegeofday(){
        $sql = "SELECT colleg_id FROM eb_college_of_day WHERE selecteddate = '".date('d/m/Y')."' AND status = 1";
       $result = $this->db->query($sql);
       $results = $result->row();
      
       if(!empty($results)){
            $collegeidid = $results->colleg_id ;
           $selectdcollegeid =  $collegeidid ;
       }else {
         $sqlresult = "SELECT colleg_id from eb_college_of_day ORDER BY RAND() LIMIT 0,1"; 
         $result = $this->db->query($sqlresult);
         $results = $result->row();
         $collegeidid = $results->colleg_id;
         $selectdcollegeid =  $collegeidid ;
       }
       $getcollegedeatil = "SELECT * FROM eb_collegedetails WHERE cid = '".$selectdcollegeid."'"; 
       $allcollegeedata = $this->db->query($getcollegedeatil);
       $returnresult =   $allcollegeedata->row();
       return $returnresult;
    }
	

}

?>