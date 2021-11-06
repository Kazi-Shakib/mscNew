<?php

$email=$_GET['email'];

?>
<html>
<head>
<title>CUET</title>
</head>
<body>

<?php



		
	
	$address 	= $email; 

			if($address !=''){	

	
		
	$servername = "localhost";
$username = "cuetac_msadmission";
$password = "Iict518#@!";
$dbname = "cuetac_msadmission";

$db = new mysqli($servername, $username, $password,$dbname);
   if ($db->connect_error) {
  die("Connection failed: " . $db->connect_error);
}

	 $sql2="SELECT * FROM student WHERE `ref1`='$email' OR `ref2`='$email'";
      $result1=mysqli_query($db, $sql2);
     $result2=mysqli_fetch_array($result1);
    $name=$result2["student_name"];
    
    $type_msc_phd=$result2["type_msc_phd"];
$student_type=$result2['student_type'];
$student_mode=$result2["student_mode"];
$email1=$result2["email"];
require_once('class.phpmailer.php');

$mail             = new PHPMailer(); // defaults to using php "mail()"


$body             = $name." has respectfully selected you as a potential reference in support of ".$student_type." in ".$dep." ".$student_mode."-program starting at Chittagong University of Engineering & Technology.

Please complete this reference request within two weeks of receiving this email. To submit your reference or decline this request Click on the following link: www.cuet.xyz/msc/ref.php?email=".$email1.". Please complete our online reference form and upload your reference letter in PDF with your institution’s / company’s official letterhead. If you experience any issues with this link, contact iict@cuet.ac.bd and please indicate the browser and version you are using.

We very much appreciate your time in preparing a letter of reference for ".$name.". If you have trouble with the reference request link, please copy and paste this URL into your browser: www.cuet.xyz/msc/ref.php?email=".$email1."  for successfully approving the student.";

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
  echo "A reminder has been sent to Referee's E-mail Address! <a href='tlist.php'> Click Here to return to the list!</a>";

}
echo"<center> <hr><h1 style='color:white'> A reminder has been sent to Referee's E-mail Address.</h1> <hr> </center>";
}

		




			

			else{

				

				

		

		echo"<center> <hr><h1 style='color:white'> Wrong mail or Referee uploaded first!</h1> <hr> </center>";

		

		

				

			}


?>

</body>
</html>
