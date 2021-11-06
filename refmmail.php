<?php
$email="samincuet06@gmail.com";
$supervisor_email="saiful05eee@cuet.ac.bd";
$servername = "localhost";
$username = "cuetac_msadmission";
$password = "Iict518#@!";
$dbname = "cuetac_msadmission";

$db = new mysqli($servername, $username, $password,$dbname);
   if ($db->connect_error) {
  die("Connection failed: " . $db->connect_error);
}
 $sql2="SELECT * FROM student WHERE `email`='$email' AND status='11'";
      $result1=mysqli_query($db, $sql2);
     $result2=mysqli_fetch_array($result1);
    $sl=$result2["sl"];
    $name=$result2["student_name"];
    $type_msc_phd=$result2["type_msc_phd"];
$student_type=$result2['student_type'];
$student_mode=$result2["student_mode"];
$dep=$result2["dep"];



require_once('class.phpmailer.php');

$mail             = new PHPMailer(); // defaults to using php "mail()"


$body          =   '<h3>Reference Request</h3><br />'.$name.'  is applying to the '.$student_type.' in '.$dep.' '.$student_mode.' -program at Chittagong University of Engineering & Technology and has respectfully chosen you to provide a reference. Your recommendation will have a significant impact on the applicants chance for admission. Please visit the following link within two weeks of receiving this email to submit your reference or decline this request.

<br /> www.cuet.xyz/msc/ref.php?email='.$email.'. <br /> Please complete our online reference form and upload the PDF version of your reference letter with your official letterhead. If you experience any issues with this link, contact kazishakib98@cuet.ac.bd and please indicate the browser and version you are using. <br /> We very much appreciate your time in preparing a letter of reference for '.$name.'.
<br />Thank you for your assistance.<br />Sincerely,<br />Postgraduate Admission<br />Chittagong University of Engineering and Technology (CUET)<br />Chittagong-4349, Bangladesh';


$mail->AddReplyTo("iict_reply@cuet.ac.bd","IICT CUET");

$mail->SetFrom('iict_reply@cuet.ac.bd', 'IICT CUET');

$mail->AddReplyTo("iict_reply@cuet.ac.bd","IICT CUET");


$mail->AddAddress($supervisor_email, "IICT CUET");

$mail->MsgHTML($body);

$mail->Subject    = "Student Application in Post-Graduate Program at CUET | IICT , CUET";

$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test
if(!$mail->Send()) {
  echo "E-mail has not been sent to the referees. Mailer Error: " . $mail->ErrorInfo;
} else {
  echo "E-mail has been sent to the referees. Please make sure the reference letters are Uploaded!";

}
?>