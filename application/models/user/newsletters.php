<?php 
class Newsletters extends CI_Model {
	 // defult constructor 
     public function __construct() 
	  {
          parent::__construct();
		    // Your own constructor code
      }
	  
	 // models are stated below this   
    public function InsertNewsletter($data)
    {
   		 $Query = $this->db->insert('eb_newsletter', $data);     
    }
	
	public function send_friend($data)
    {
		 	$to = $data['email'];
			$subject = "English booking enquiry";
			$message = '	
				<table width="200" border="1">
					<tr>
							<td>Email</td>
							<td>'.$data['email'].'</td>
					</tr>
					<tr>
							<td>Message</td>
							<td>Hi <br>
								Your please visite this site <a href="http://englishbooking.com">English Booking</a>
							</td>
					</tr>
				</table>';
			$headers = 'From: husnain.swl@gmail.com' . "\r\n" .
				'Reply-To: husnain.swl@gmail.com' . "\r\n" .
				'X-Mailer: PHP/' . phpversion();
				$headers .= "MIME-Version: 1.0" . "\r\n";
				$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
			mail($to, $subject, $message, $headers);
			return 1;
    }

}

?>