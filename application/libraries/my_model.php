<?php
 if (!defined('BASEPATH')) exit('No direct script access allowed');  
class my_model {
		/**
	 * Shopping Class Constructor
	 *
	 * The constructor loads the Session class, used to store the shopping cart contents.
	 */
	public function __construct($params = array())
	{
		// Set the super object to a local variable for use later
		$this->CI =& get_instance();
	}
	
	public function getfootorpage(){
		
		 $query = $this->CI->db->query('SELECT * FROM eb_pages WHERE status = 1 and position = "bottom"');   
		 return $query->result();
	}
         public  function currencyconvert($amount){
            //$amount=$_POST["amount"];
             if($this->CI->session->userdata('currencyTo') == ""){
              return $amount;
             }
            $from_currency='GBP';
            $to_currency=$this->CI->session->userdata('currencyTo');

            $amount = urlencode($amount);
            $from_currency = urlencode($from_currency);
            $to_currency = urlencode($to_currency);
            $submit_url = "http://www.google.com/ig/calculator?hl=en&q=$amount$from_currency=?$to_currency";
            $chr = curl_init();

            curl_setopt ($chr, CURLOPT_URL, $submit_url);
            curl_setopt ($chr, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($chr,  CURLOPT_USERAGENT , "Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1)");
            curl_setopt ($chr, CURLOPT_CONNECTTIMEOUT, 0);
             $data = curl_exec($chr);
            curl_close($chr);
            $data = explode('"', $data);
            $rate=explode(' ', $data[3]);
            $main = explode('.', $rate['0']);
            return   $main['0']; 
        
    }    
    
    public function gettotalcources() {
        return  $this->CI->db->count_all('eb_cource');
        
    }
    public function getcollegeofdaydate($id){
        $query = "SELECT selecteddate FROM eb_college_of_day WHERE status = 1 and colleg_id  = '".$id."'";
        $this->CI->db->query($query);
        $result = $this->CI->db->row();
        return $result->selecteddate;
    }
    public function gettotalcolleges(){
        return  $this->CI->db->count_all('eb_colleges');
    }
   public function getshowhidebluebar(){
       $query = $this->CI->db->query('SELECT * FROM eb_showhidecollegecourse WHERE id = "3"  or id ="4"  ');   
		 return $query->result(); 
   }	
   public function collegeinfo($collegeid){
                  $query = $this->CI->db->query('SELECT * FROM eb_collegedetails WHERE cid = "'.$collegeid.'"  ');   
		 return $query->row(); 
   }
   public function getbookedcourses($courseid){
       $query = $this->CI->db->get_where('eb_selected_course', array('course_id' => $courseid));
       return count($query);
   }
   public function gethomedate(){
            $query = $this->CI->db->query('SELECT * FROM eb_homepage_text WHERE id ="1"');	
            return  $query->row();
        }
        public function branchinfo($branchid){
              $query = $this->CI->db->query('SELECT * FROM eb_college_branches WHERE id = "'.$branchid.'"  ');   
		 return $query->row(); 
        }
   public function gettestimonials($courseid){
       $query = $this->CI->db->query('SELECT * FROM eb_testimonials WHERE cid = "'.$courseid.'"  ');   
		 return $query->result(); 
   }
   public function blog(){
     $query =  $this->CI->db->query("select ID,post_content,post_date from wp_posts order by ID desc limit 1,2");
      return $query->result(); 
   }
   public function getcatehories(){
        $query =  $this->CI->db->query("select * from categories WHERE status = 1 order by ID asc ");
        return $query->result(); 
   }
   public function getmaxcourseprice(){
        $query =  $this->CI->db->query( "select max(offerprice) from eb_cource");
        if($query->num_rows() > 0) {
             return $query->row_array(); //return the row as an associative array
        }
   }
    public function getmincourseprice(){
        $query =  $this->CI->db->query( "select MIN(offerprice) from eb_cource");
       if($query->num_rows() > 0) {
             return $query->row_array(); //return the row as an associative array
        }
   }
   public function getcoursessamelocation($address,$courseid){
        $query =  $this->CI->db->query("select * from eb_cource WHERE id != '".$courseid."' AND address LIKE '%".$address."%' order by ID asc limit 0,2");
        return $query->result();
   }
   public function getpopularcities(){
       
        $query = "SELECT * FROM popular_city WHERE id=1";
            $result= $this->CI->db->query($query);
            $results = $result->row();  
            
            return $results;
   }
    public function getcoursegeofday(){
       $sql = "SELECT course_id  FROM eb_course_of_day WHERE selecteddate = '".date('d/m/Y')."' AND status = 1";
       $result = $this->CI->db->query($sql);
       $results = $result->row();
     
       if(!empty($results)){
           $courceid = $results->course_id;
           $selectdcourceid =  $courceid ;
       }else {
         $sqlresult = "SELECT course_id from eb_course_of_day ORDER BY RAND() LIMIT 0,1"; 
         $result = $this->CI->db->query($sqlresult);
         $results = $result->row();
         $courceid = $results->course_id;
         $selectdcourceid =  $courceid ;
       }
      	$getcorcedeatil = "SELECT * FROM eb_cource WHERE id = '".$selectdcourceid."'";
       $allcourcedata = $this->CI->db->query($getcorcedeatil);
       $returnresult =   $allcourcedata->row();
       return $returnresult;
    }
	
	 public function getcollegeofday(){
        $sql = "SELECT colleg_id FROM eb_college_of_day WHERE selecteddate = '".date('d/m/Y')."' AND status = 1";
       $result = $this->CI->db->query($sql);
       $results = $result->row();
      
       if(!empty($results)){
            $collegeidid = $results->colleg_id ;
           $selectdcollegeid =  $collegeidid ;
       }else {
         $sqlresult = "SELECT colleg_id from eb_college_of_day ORDER BY RAND() LIMIT 0,1"; 
         $result = $this->CI->db->query($sqlresult);
         $results = $result->row();
         $collegeidid = $results->colleg_id;
         $selectdcollegeid =  $collegeidid ;
       }
       $getcollegedeatil = "SELECT * FROM eb_collegedetails WHERE cid = '".$selectdcollegeid."'"; 
       $allcollegeedata = $this->CI->db->query($getcollegedeatil);
       $returnresult =   $allcollegeedata->row();
       return $returnresult;
    }
	
	public function search2(){
            $sql = "SELECT eb.*,ecb.* FROM eb_cource eb LEFT OUTER JOIN eb_college_branches ecb ON eb.branch_id = ecb.id";
            $query = $this->CI->db->query($sql);
			return $query->result();
    }


	
}