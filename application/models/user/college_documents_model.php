<?php 
class college_documents_model extends CI_Model {
	 // defult constructor 
     public function __construct() 
	  {
          parent::__construct();
		    // Your own constructor code
      }
	  
	 // models are stated below this   
    public function upload_files($tempname,$cid)
    {
		 
		  $Query = "INSERT INTO eb_college_doc 
			(cid, filename ) VALUES 
			('".$cid."', '".$tempname."')";
			$this->db->query($Query);
    }
	public function get_upload_files(){
		$query = $this->db->get_where('eb_college_doc', array('cid' => $this->session->userdata('customer_id')));
		return $query->result();
	}
	public function del_clientdoc($id){
			$query = $this->db->where('id', $id);
		  $query = $this->db->limit(1,0);
		  $query = $this->db->delete('eb_college_doc');
		  return ($this->db->affected_rows() > 0) ? TRUE : FALSE;
	}
}

?>