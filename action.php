<?php 
	if(isset($_REQUEST['name']))
	{
	$name = $_REQUEST['name'];
	$phone = $_REQUEST['phone'];
	$email = $_REQUEST['email'];
	$address = $_REQUEST['address'];
	$address2 = $_REQUEST['address2'];
	$i_am = $_REQUEST['i_am'];
	
	$to='riddhi.mittal1@gmail.com';
		$subject='Contcat Us';
		$headers = "From:info@harekrishnadham.com\r\nReply-To:info@harekrishnadham.com";
		$headers .= "MIME-Version: 1.0\r\n";
		$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
		$headers .='X-Mailer: PHP/' . phpversion();
		$message ='<html><body>';
		$message .="<div style='margin-left:150px'><h3>Contact Details</h3></div><div><div style='width:150px; float:left; margin-left:90px'><strong>Name :</strong></div>
        <div style='width:150px; float:left'>".strip_tags($name)."</div></div><div style='clear:both;'></div>";
		$message .="<div style='width:150px; float:left; margin-left:90px'><strong>Phone No :</strong></div>
        <div style='width:150px; float:left'>".strip_tags($phone)."</div><div style='clear:both;'></div>";
		$message .="<div style='width:150px; float:left; margin-left:90px'><strong>Email :</strong></div>
        <div style='width:150px; float:left'>".strip_tags($email)."</div><div style='clear:both;'></div>";
		$message .="<div style='width:150px; float:left; margin-left:90px'><strong>Address :</strong></div>
        <div style='width:150px; float:left'>".strip_tags($address)."</div><div style='clear:both;'></div>";
		$message .="<div style='width:150px; float:left; margin-left:90px'><strong></strong></div>
        <div style='width:150px; float:left'>".strip_tags($address2)."</div><div style='clear:both;'></div>";
		$message .="<div style='width:150px; float:left; margin-left:90px'><strong>I am :</strong></div>
        <div style='width:150px; float:left'>".strip_tags($i_am)."</div><div style='clear:both;'></div>";

		$message .='</body></html>';
		//ini_set('sendmail_from', $to);
		$success=mail($to, $subject, $message, $headers);
		if($success){
			echo "Thanks and connect you soon!";
		}else{
			echo "Error in mail sent please contact you admin!";
        }
		
	
	}
?>