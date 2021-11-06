<html>
<head>
<title>CUET</title>
</head>
<body>

<?php
$conn = mysqli_connect(
	'localhost',		//  The host to connect to
	'cuetac_msadmission',		//  The user to connect as
	'Iict518#@!',		//  The password to use
	'cuetac_msadmission');	//  The default database to query
	"<h1 style='color:white'>Please Check E-mail</h1>";

			 $address 	= htmlentities ( trim ( $_POST['email'] ) , ENT_NOQUOTES ); 

			if($address !=''){	

		$sql_user_exist = "SELECT * FROM student WHERE `email`='$address'";

			$user_exist=mysqli_query($conn,$sql_user_exist);

		$count_user_exist = mysqli_num_rows($user_exist); 

			if ($count_user_exist>0) {

			

			while ($row_course = mysqli_fetch_assoc($user_exist)) {

		

		$body=$row_course['password'];
                                

if($body==''){ 
    
    $sql= "UPDATE student SET `password`='cuet1234' WHERE `email`='$address'"; 
    
    $result=mysqli_query($conn,$sql);
    
    $body='cuet1234';

require_once('class.phpmailer.php');

$mail             = new PHPMailer(); // defaults to using php "mail()"


$body             = "Your Account Login new Password is : ".$body;

$mail->AddReplyTo("iict_reply@cuet.ac.bd","IICT CUET");

$mail->SetFrom('iict_reply@cuet.ac.bd', 'IICT CUET');

$mail->AddReplyTo("iict_reply@cuet.ac.bd","IICT CUET");


$mail->AddAddress($address, "IICT CUET");

$mail->Subject    = "Account Login Password | IICT , CUET";

$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test

$mail->MsgHTML($body);



if(!$mail->Send()) {
  echo "Mailer Error: " . $mail->ErrorInfo;
} else {
  echo "Password sent to your E-mail Address ! <a href='cwl.php'> Click Here to Login</a>";

}
echo"<center> <hr><h1 style='color:white'> Your Password has been sent to your  E-mail Address . Please Check inbox or Spam folder</h1> <hr> </center>";
}
			    
			    else{
			       require_once('class.phpmailer.php');

$mail             = new PHPMailer(); // defaults to using php "mail()"


$body             = "Your Account  Login Password is : ".$body;

$mail->AddReplyTo("iict_reply@cuet.ac.bd","IICT CUET");

$mail->SetFrom('iict_reply@cuet.ac.bd', 'IICT CUET');

$mail->AddReplyTo("iict_reply@cuet.ac.bd","IICT CUET");


$mail->AddAddress($address, "IICT CUET");

$mail->Subject    = "Account Login Password | IICT , CUET";

$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test

$mail->MsgHTML($body);



if(!$mail->Send()) {
  echo "Mailer Error: " . $mail->ErrorInfo;
} else {
  echo "Password sent to your E-mail Address ! <a href='cwl.php'> Click Here to Login</a>";

}
echo"<center> <hr><h1 style='color:white'> Your Password has been sent to your  E-mail Address . Please Check inbox or Spam folder</h1> <hr> </center>"; 
			        
			    }
			}

		

	}

			}

	

			

			else{

				

				

		

		echo"<center> <hr><h1 style='color:white'> Please register to the admission form</h1> <hr> </center>";

		

		

				

	}	
	


?>

</body>
</html>
