<?php
class ajax extends CI_Controller {

	 	// defult constructor 
	public function __construct()
    {
            parent::__construct();
            // Your own constructor code	
	    //$this->load->model('user/branch_detail_model');
    }
    public function searchmulti(){
            $gettingserachdata =  $_GET['keywords1'];
            $varresult = "";
            $sql = "SELECT eb.*,ecb.city FROM eb_cource eb,eb_college_branches ecb WHERE ecb.college_id = eb.college_id and ecb.city LIKE '%".$gettingserachdata."%' OR eb.college_name LIKE '%".$gettingserachdata."%'";
            $query = $this->db->query($sql);
            $varresult .="<ul>";
           foreach ($query->result() as $row){
             $id =  $row->id;
             $varresult .= "<li><a href='#' onclick ='check(this.id)' id='".$id."'><span id='s".$id."'>".$row->courcename.",".$row->city.",".$row->college_name."</span></a></li>"  ;
            }
              $varresult .="</ul>";
            echo  $varresult;
	
    }
	 
	    public function search2(){
            $sql = "SELECT eb.*,ecb.city FROM eb_cource eb,eb_college_branches ecb";
            $query = $this->db->query($sql);
    }
	
    public function currency_session(){
        $this->session->set_userdata('currencyTo',  $this->input->post('currencyTo'));
         header( 'Location:'.$_SERVER['HTTP_REFERER']) ;
    }
   
}  
?>
