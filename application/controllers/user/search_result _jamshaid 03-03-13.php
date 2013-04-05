<?php
class search_result extends CI_Controller {

	 	// defult constructor 
	public function __construct()
    {
            parent::__construct();
            // Your own constructor code	
		//$this->load->model('user/branch_detail_model');
		/* check whether login or not */
		
    }
    public function search($city){
         if(!empty($city)){
              $locationaddres1 =  $city;
         
         }else {
        if(!empty($_POST['location'])){
         $locationaddres1 =$this->input->post('location');
         $locationaddress = explode(',',$locationaddres1);
         $category = $this->input->post('category'); 
         $searchdate = $this->input->post('searchdate');
         $enddate = $this->input->post('enddate');
         $weeks = $this->input->post('weeks');
         $amountrange = $this->input->post('amountrange');
         
        }else {
         $locationaddress = $this->session->userdata('locationaddress');
         $category = $this->session->userdata('category');
         $searchdate = $this->session->userdata('searchdate');
         $weeks = $this->session->userdata('weeks');
        }
        
         }   
         $date_search = ""; 
         /*if(!empty($searchdate)){
             $date_search .= "AND startdate = ".$searchdate." ";
         } else {
            $date_search .= ""; 
         }*/
         $date_search = "";
          if(!empty($weeks) AND $weeks !=0){
             $date_search .= "AND duration = ".$weeks." ";
         }else if(!empty($searchdate) ){
            $date_search .= "AND startdate = ".$searchdate." ";
         } else {
             $date_search = "";
         }
         if($amountrange != 0 ){
             $getting = explode(',',$amountrange);
            $sqlamount =  " AND `offerprice` >=".$getting['0']." AND `offerprice` <=".$getting['1'];
         } else{
             $sqlamount = " ";
         }
         $newdata = array(
                'locationaddress'  => $locationaddress,
                'category'     => $category,
                'searchdate' => $searchdate,
                'weeks'=>$weeks,
                'enddate'=>$enddate,
                'amountrange'=>$amountrange
            );

         $this->session->set_userdata($newdata);
         $sqlcat = "";
         $i = 1 ;
         if(!empty($category)){
             foreach($category as $cat ){
                 if($i==1){
                      $sqlcat .= " AND (";
                 } else {
                      $sqlcat .= " OR ";
                 }
                 
                 $sqlcat .= " category = ".$cat;
                 $i++;
             }
             $sqlcat .= ")";
         }else {
             $sqlcat = "";
         }
         $data['msg'] = 0;
         if(!empty($locationaddress['1'])){
             $location = " WHERE ecb.city LIKE '%".$locationaddress['1']."%'  "."".$sqlcat." ".$date_search." ".$sqlamount;
             /*OR college_name LIKE'%".$locationaddress['2']."%'*/
         } else {
            $location = " WHERE ecb.city LIKE '%".$locationaddres1."%' or courcename LIKE '%".$locationaddres1."%' or college_name LIKE '%".$locationaddres1."%'   "."".$sqlcat." ".$date_search." ".$sqlamount;
             $data['msg'] = 0;
         }
    //  $sql = "SELECT eb.* FROM eb_cource eb LEFT OUTER JOIN eb_college_branches ecb ON eb.college_id = ecb.college_id  ".$location;
	$sql = "SELECT * FROM  eb_college_branches ".$location;
     
/*'SELECT C.*, SC.*, S.*, B.*, 
			C.id AS Selected_course_id, SC.id AS Course_id, S.id AS Student_profile_id, 
			B.id AS Branch_id, B.name AS BranchName FROM eb_selected_course C 
			LEFT OUTER JOIN eb_cource SC ON C.course_id = SC.id 
			INNER JOIN eb_student_profile S ON C.student_id = S.id 
			LEFT OUTER JOIN eb_college_branches B ON B.id = SC.branch_id WHERE family_name LIKE "%'.$array['0'].'%"AND C.course_id = '.$cust_id.' AND S.showcustomer = 1'*/
//echo $sql ;
         //exit;
         $result = $this->db->query($sql);
         if($result->num_rows() > 0) {
         $data['list']= $result->result();
         } else {
            $data['msg'] = 1;
            $sql = "SELECT * FROM eb_cource";
            $result = $this->db->query($sql);
            $data['list']= $result->result();
         }
         $data['count'] = $result->num_rows();
         if(!empty($city)){
             $data['city'] = $city;
         } else if(!empty($locationaddress['1'])){
             $data['city'] = $locationaddress['1'];
         } else {
             $data['city'] = $locationaddres1;
         }
         $this->load->view('user/header');
		 //$this->load->view('user/course_of_day');
		// $this->load->view('user/college_of_day');
        $this->load->view('user/searchresult',$data);
        $this->load->view('user/colleges');
        $this->load->view('user/footer');
    }
    function getsearchbranchcourse($id){
       
          $sql = "SELECT eb.* ,ecb.name as branchname FROM eb_cource eb LEFT OUTER JOIN eb_college_branches ecb ON eb.college_id = ecb.college_id  and  eb.branch_id = '".$id."'";
          $result = $this->db->query($sql);
          $data['list']= $result->result();
          $data['city'] = $data['list']['0']->branchname;;
         $this->load->view('user/header');
		 //$this->load->view('user/course_of_day');
		// $this->load->view('user/college_of_day');
        $this->load->view('user/searchresult',$data);
        $this->load->view('user/colleges');
        $this->load->view('user/footer');
        
    }
	
	
}
?>


