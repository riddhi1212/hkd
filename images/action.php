<?php 
	if(isset($_REQUEST['name']))
	{
	$name = $_REQUEST['name'];
	$phone = $_REQUEST['phone'];
	$email = $_REQUEST['email'];
	$address = $_REQUEST['address'];
	//$i_am = $_REQUEST['i_am'];
	
$to='manishjks2012@gmail.com';
		$subject='Contcat Us';
		$headers = "From:support@imperialpostal.com\r\nReply-To:".$email;
		$headers .= "MIME-Version: 1.0\r\n";
		$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
		$headers .='X-Mailer: PHP/' . phpversion();
		$message ='<html><body>';
		$message .='<div>';
		$message .='<div><img src="http://catalog.jkwsp.com/test/images/logo.png" height="71" width="244" alt="no image" /></div>';
		$message .="<div style='margin-left:150px'><h3>Contact Details</h3></div><div><div style='width:150px; float:left; margin-left:90px'><strong>Name :</strong></div>
        <div style='width:150px; float:left'>".strip_tags($name)."</div></div><div style='clear:both;'></div>";
		$message .="<div><div style='width:150px; float:left; margin-left:90px'><strong>Email :</strong></div><div style='width:150px; float:left'>".strip_tags($name)."</div></div><div style='clear:both;'></div>";
		$message .="<div><div style='width:150px; float:left; margin-left:90px'><strong>Phone No :</strong></div><div style='width:150px; float:left'>".strip_tags($name)."</div></div><div style='clear:both;'></div>";
		$message .="<div><div style='width:150px; float:left; margin-left:90px'><strong>Tracking :</strong></div><div style='width:150px; float:left'>".strip_tags($name)."</div></div><div style='clear:both;'></div>";
		$message .="<div><div style='width:150px; float:left; margin-left:90px'><strong>Question :</strong></div><div style='width:150px; float:left'>".strip_tags($name)."</div></div><div style='clear:both;'></div>";
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