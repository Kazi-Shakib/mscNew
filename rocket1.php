<?php die("<b><h3><hr><center>Application Time has Expired!</center></b><hr></h3>"); session_start(); ?>
	<html>
<head>
    
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

</head><body>
<table width="760" border="0" align="center" cellpadding="0" cellspacing="0">
  <tbody><tr>
    <td height="10" align="center" valign="middle" class="topbg">&nbsp;</td>
  </tr>

    	  <tr>
		<td height="100" align="left	" valign="top" class="blue"><table width="100%" border="0" cellpadding="0" cellspacing="0" class="white14bold">
		 <tbody><tr><td height="120" align="left" valign="top" class="blue"><table width="100%" border="0" cellpadding="0" cellspacing="0" class="white14">
		  <tbody><tr>
				<td bgcolor="#49575f" height="120"><table width="100%" border="0" cellpadding="3" cellspacing="0" class="black12">
			  <tbody><tr>
				<td width="20%" align="left" valign="middle"><img src="logo.png" width="90" height="120"></td>
				
				<td width="80%" align="middle" valign="middle">
				 
				 	<font color="white"><font size="6"><font face="Times New Roman"><b> CUET Post-Graduate Admission Form </b></font></font><br>
				 	 
					<!--<font color="white"><font size="2"><b><a href="http://www.cuet.ac.bd/" target="_blank"><mark>www.cuet.ac.bd<mark></mark></mark></a></b></font>-->  Helpline : Call @ 01580755805(Office hour) or mail at @cuet.ac.bd<br> 
           
			  </tr>
			</tbody></table></td>
		  </tr>
		<tbody>
		 </tr>
    <tr>
				        <td height="30" align="left" valign="middle" bgcolor="#38B003">


					<table border="1" bordercolor="White" cellpadding="8" cellspacing="0" class="#FF0000">
						<tbody><tr>
						    					<tbody><tr>
						    

						</tr>
					</tbody></table>
				</td>
			</tr>
  
  <tr>
  	<td height="25" align="center" valign="middle" bgcolor="#E3E3E3" class="black12bold">

	<?php
//1912388697


$phone=$_POST['phone'];
echo $phone;
$email=$_POST['email'];
$email1=$_POST['ref_email1'];

$email2=$_POST['ref_email2'];
$supervisor_email=$_POST["supervisor_email"];
echo $supervisor_email;
$name=$_POST["name"];
echo "</br>Applicant's Name: ".$name."</br>";
$type_msc_phd=$_POST["type_msc_phd"];
$student_type=$_POST['student_type'];
$student_mode=$_POST["student_mode"];
$dep=$_POST["dep"];
$servername = "localhost";
$username = "cuetac_msadmission";
$password = "Iict518#@!";
$dbname = "cuetac_msadmission";

$db = new mysqli($servername, $username, $password,$dbname);
   if ($db->connect_error) {
  die("Connection failed: " . $db->connect_error);
}

if(isset($_POST['submit'])){
$transaction_id=$_POST['transaction_id'];
	$username = "dbill";
	$password = "dBILL!23";
	$remote_url = "http://103.11.136.153/BillPayGW/BillInfoService?shortcode=246&userid=CUET101&password=j874hejduierunaigt&opcode=GT&txnid=$transaction_id";
	$opts = array(
	'http' => array(
	'method' => "GET",
	'host' => '10.10.200.142',
	'header' => "Authorization: Basic " . base64_encode("$username:$password")
	)
	);
	$context = stream_context_create($opts);
	
	// Open the file using the HTTP headers set above
	$file = file_get_contents($remote_url, false, $context);
	
	$ex=explode("|",$file);
	$cc=count($ex);
	if($cc>2){
	   $bank_amount=0;
	$bank_amount=$ex[2];
	echo 	" <br> Rocket Payment Received   from:".$bank_appid=$ex[1]."</br>Amount : ".$bank_amount."</br>";
	
	if(($bank_amount<500)){ 
		
			die("Payment error for Amount .Contact Call @ 01580755805(Office hour) or mail at kazishakib98@cuet.ac.bd for transaction query.To apply again: <br> <a href='preview2.php'> Dashboard </a>.  ");
		}
		else{
	$status=11;
    $sql1="SELECT * FROM student WHERE `transaction_id`='$transaction_id' AND status='11'";
    
	$row= mysqli_query($db, $sql1);
    
  
	$count=mysqli_num_rows($row);
	if($count==0){
  
	$sql = "UPDATE student SET status='11',transaction_id='$transaction_id' WHERE email='$email' AND phone ='$phone' ";
   
    $result=mysqli_query($db, $sql);
 
     $sql2="SELECT * FROM student WHERE `email`='$email' AND status='11'";
      $result1=mysqli_query($db, $sql2);
     $result2=mysqli_fetch_array($result1);
    $sl=$result2["sl"];
    
 echo "<center> <hr> <h3> Applicant's Serial: ".$sl."</br>Payment Verified and Application Submitted Successfully! <br> <a href='preview2.php'> Dashboard </a></h3></br><h3><a href='cwl.php'> Logout </a></h3> <hr></center>";
      
     

			if($email1!=''&& $email2!=''){	

	


require_once('class.phpmailer.php');

$mail             = new PHPMailer(); // defaults to using php "mail()"

$newline = '
';
$body          = '<h3>Reference Request</h3><br />'.$name.'  is applying to the '.$student_type.' in '.$dep.' '.$student_mode.' -program at Chittagong University of Engineering & Technology and has respectfully chosen you to provide a reference. Your recommendation will have a significant impact on the applicants chance for admission. Please visit the following link within two weeks of receiving this email to submit your reference or decline this request.

<br /> www.cuet.xyz/msc/ref.php?email='.$email.'. <br /> Please complete our online reference form and upload the PDF version of your reference letter with your official letterhead. If you experience any issues with this link, contact kazishakib98@cuet.ac.bd and please indicate the browser and version you are using. <br /> We very much appreciate your time in preparing a letter of reference for '.$name.'.
<br />Thank you for your assistance.<br />Sincerely,<br />Postgraduate Admission<br />Chittagong University of Engineering and Technology (CUET)<br />Chittagong-4349, Bangladesh';

    


$mail->AddReplyTo("iict_reply@cuet.ac.bd","IICT CUET");

$mail->SetFrom('iict_reply@cuet.ac.bd', 'IICT CUET');

$mail->AddReplyTo("iict_reply@cuet.ac.bd","IICT CUET");


$mail->AddAddress($email1, "IICT CUET");
$mail->AddAddress($email2, "IICT CUET");
$mail->MsgHTML($body);

$mail->Subject    = "Student Application in Post-Graduate Program at CUET | IICT , CUET";

$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test




if(!$mail->Send()) {
  echo "E-mail has not been sent to the referees. Mailer Error: " . $mail->ErrorInfo;
} else {
  echo "E-mail has been sent to the referees. Please make sure the reference letters are Uploaded!";

}
echo"<center> <hr><h1 style='color:white'> E-mail has been sent to the referees. Please make sure the reference letters are Uploaded! Please Check inbox or Spam folder</h1> <hr> </center>";

			    
			    if($supervisor_email!=''){	

	

echo "okkkk";
echo $supervisor_email;
require_once('class.phpmailer.php');

$mail             = new PHPMailer(); // defaults to using php "mail()"


$body          =   '<h3>Consent of Supervisor</h3><br />'.$name.'  is applying to the '.$student_type.' in '.$dep.' '.$student_mode.' -program at Chittagong University of Engineering & Technology and  has respectfully chosen you as the supervisor. Your consent will have a significant impact on the applicants chance for admission. Please visit the following link within two weeks of receiving this email to submit your reference or decline this request.

<br /> www.cuet.xyz/msc/consent.php?consent=1&email='.$email.' <br /> Or you may decline the request by clicking the following link:<br /> www.cuet.xyz/msc/consent.php?consent=0&email='.$email.'. If you experience any issues with this link, contact kazishakib98@cuet.ac.bd and please indicate the browser and version you are using. <br /> We very much appreciate your time in preparing a letter of reference for '.$name.'.
<br />Thank you for your assistance.<br />Sincerely,<br />Postgraduate Admission<br />Chittagong University of Engineering and Technology (CUET)<br />Chittagong-4349, Bangladesh';



$mail->AddReplyTo("iict_reply@cuet.ac.bd","IICT CUET");

$mail->SetFrom('iict_reply@cuet.ac.bd', 'IICT CUET');

$mail->AddReplyTo("iict_reply@cuet.ac.bd","IICT CUET");


$mail->AddAddress($supervisor_email, "IICT CUET");

$mail->MsgHTML($body);

$mail->Subject    = "Student Application in Post-Graduate Program at CUET | IICT , CUET";

$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test




if(!$mail->Send()) {
  echo "E-mail has not been sent to the Potential Supervisor. Mailer Error: " . $mail->ErrorInfo;
} else {
  echo "E-mail has been sent to the Potential Supervisor. Please make sure the reference letters are Uploaded!";

}
echo"<center> <hr><h1 style='color:white'> E-mail has been sent to the referees. Please make sure the Potential Supervisor consent is provided! Please Check inbox or Spam folder</h1> <hr> </center>";
}

			}

		




			

			else{

				

				

		

		echo"<center> <hr><h1 style='color:white'> Please Check update on Dashboard & Preview page!</h1> <hr> </center>";

		

		

				

			}

	
	}
	    else{
			die("Invalid Transaction ID or Used Before . Contact kazishakib98@cuet.ac.bd for transaction query. To apply again: <br> <a href='preview2.php'> Dashboard </a>. ");
		}
	
    

	
	

}}
 else{
			die("Invalid Transaction ID or No Transection found . Contact kazishakib98@cuet.ac.bd for transaction query.To apply again: <br> <a href='preview2.php'> Dashboard </a>. ");
		}
}  
    
	
	?>					  

</td>
						</tr>
				
				</td></tbody>
			</tr>
       <tbody><tr>
  
            

          


        </div>

		
		  
     

    </div>


	<tr>
          <td height="30" colspan="3" align="center" valign="middle" bgcolor="#A2A2A2">
          
        </tr>
      </tbody></table>
    </td>
  </tr>
  <tr>
    <td height="25" align="center" valign="middle" bgcolor="lightgreen" class="black10"><font size="1"><b><i>For any inconvenience, please send email to kazishakib@cuet.ac.bd,or call </i></b></font></td>
  </tr>
  <tr>
    <td align="left" valign="top">&nbsp;</td>
  </tr>
  <tr>
    <td align="left" valign="top"><fieldset>
      <table width="100%" border="0" cellpadding="0" cellspacing="0" class="black10">
        <tbody><tr>
          <td width="1%" align="left" valign="middle">&nbsp;</td>
          <td width="80%" align="left" valign="middle"><tt>©2021 Chittagong University of Engineering & Technology All Rights Reserved.</tt></td>
     
          <td width="9%" align="left" valign="middle"></td>
        </tr>
      </tbody></table>
    </fieldset></td>
  </tr>
	
</tbody></table>


</form></body></html>
