<html>
<head>
<title>CUET</title>
</head>
<body>

<?php
	$servername = "";
$username = "";
$password = "";
$dbname = "";
$db = new mysqli($servername, $username, $password,$dbname);
   if ($db->connect_error) {
  die("Connection failed: " . $db->connect_error);
}

	if(isset($_POST['register']))
	{
    $name	= htmlentities ( trim ( $_POST['name'] ) , ENT_NOQUOTES ); 
	$email 	= htmlentities ( trim ( $_POST['email'] ) , ENT_NOQUOTES ); 
	$password 	= htmlentities ( trim ( $_POST['password'] ) , ENT_NOQUOTES ); 
     
  function chk($email){
      


 $db = new mysqli($servername, $username, $password,$dbname);
   if ($db->connect_error) {
  die("Connection failed: " . $db->connect_error);
}
$sql="SELECT * FROM `studentssss` WHERE `email`='$email'";
    $result = mysqli_query($db, $sql); 
      
   
        $row = mysqli_num_rows($result); 
        if($row>0){
            echo "<h1> <center> <br><br><br><hr>  You have Already used this email . Please Use another E-mail <hr>  </center> <h3><hr> <center> <a href='register.php'> Try Again </a> </center> </h3> </h1>";
         
            die();
        }
      
  }
  chk($email);

		
	
		$sql = "INSERT INTO student (student_name,email,password) VALUES ('$name', '$email', '$password')";
		
	$result= mysqli_query($db, $sql);
	 
if($result){
    
    echo "Success!";
}}
			 $address 	= $email; 

			if($address !=''){	

	
		

		
                                

	

require_once('class.phpmailer.php');

$mail             = new PHPMailer(); // defaults to using php "mail()"


$body             = "Your Account ".$name."\r \n email ".$email." & \n Login Password is : ".$password. " \n Login to www.cuet.xyz/msc/cwl.php";

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
echo"<center> <hr><h1 style='color:white'> Your Password has been sent to your E-mail Address . Please Check inbox or Spam folder</h1> <hr> </center>";
}

		




			

			else{

				

				

		

		echo"<center> <hr><h1 style='color:white'> Please register First!</h1> <hr> </center>";

		

		

				

			}


?>

</body>
</html>
