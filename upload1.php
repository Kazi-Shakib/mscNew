<?php


 // Connect to MySql
	$servername = "localhost";
$username = "cuetac_msadmission";
$password = "Iict518#@!";
$dbname = "cuetac_msadmission";

$db = new mysqli($servername, $username, $password,$dbname);
   if ($db->connect_error) {
  die("Connection failed: " . $db->connect_error);
}
function secure($value) {

	global $db;

	// Stripslashes
	if (get_magic_quotes_gpc()) {
	$value = stripslashes($value);
	}

	// Quote if not a number
	if (!is_numeric($value)) {
	$value = mysqli_real_escape_string($db, $value);
	}

	return $value;
}


	// Loop through POST variables
	foreach($_POST as $input => $value) {
	$_POST[$input] = secure($value);
	}

	 // sakib , you start code from here ////////
	 $type1_msc_phd=$_POST['type_msc_phd'];
	 $student_type=$_POST['student_type'];
	 $student_mode=$_POST['student_mode'];
	 $student_name=$_POST['name'];
	 $f_name=$_POST['f_name'];
	 $m_name=$_POST['m_name'];
	 $dep=$_POST['dep'];
     $b_day=$_POST['b_day']."/".$_POST['b_month']."/".$_POST['b_year'];
     $gender1=$_POST['gender'];
     $nationality=$_POST['nation'];
     $religion=$_POST['religion'];
     $present_address=$_POST['present_care']."##".$_POST['present_vill']."##".$_POST['present_dist']."##".$_POST['present_upazila']."##".$_POST['present_post']."##".$_POST['present_pcode'];
     
     $phone=$_POST['phone'];
     $email=$_POST['email'];
     $password=$_POST['password'];
     $nid=$_POST['nid'];
     $degree_name=$_POST['exam3']."##".$_POST['roll3']."##".$_POST['exam4']."##".$_POST['roll4'];     $institute=$_POST['institute1']."##".$_POST['institute2']."##".$_POST['institute3']."##".$_POST['institute4'];
     $passing_dept=$_POST['subject3']."##".$_POST['subject33']."##".$_POST['subject4']."##".$_POST['subject44'];
     $cgpa=$_POST['result3']."##".$_POST['result_gpa3']."##".$_POST['result4']."##".$_POST['result_gpa4'];
     $passing_year=$_POST['year3']."##".$_POST['year4'];
     $occupation=$_POST['job_no']."##".$_POST['job_post1']."##".$_POST['organization1']."##".$_POST['t_day1']."/".$_POST['t_month1']."/".$_POST['t_year1']."##".$_POST['f_day1']."/".$_POST['f_month1']."/".$_POST['f_year1']."##".$_POST['job_res1'];
     $research=$_POST['research_interest']."##".$_POST['supervisor_name']."##".$_POST['number_publication']."##".$_POST['pub_info'];
     $reference=$_POST['ref_name1']."##".$_POST['ref_organization1']."##".$_POST['ref_mob_no1']."##".$_POST['ref_name2']."##".$_POST['ref_organization2']."##".$_POST['ref_mob_no2'];
     $photo=$_POST['phone']."_".$_FILES['photo']['name'];
     $signature=$_POST['phone']."_".$_FILES['signature']['name'];
     $zip=$_POST['phone']."_".$_FILES['zip']['name'];
    
     $NOC=$_POST['phone']."_".$_FILES['NOC']['name'];
     $paper_proposal=$_POST['phone']."_".$_FILES['paper_proposal']['name'];
     $character_certificate=$_POST['phone']."_".$_FILES['character_certificate']['name'];
     $supervisor_recommendation=$_POST['phone']."_".$_FILES['supervisor_recommendation']['name'];
     if($type1_msc_phd=1){
         $type_msc_phd="Masters";
     }
     elseif($type1_msc_phd=2){
         $type_msc_phd="P.hD";
     }
  
     
  function chk($email){
      	$servername = "localhost";
$username = "cuetac_msadmission";
$password = "Iict518#@!";
$dbname = "cuetac_msadmission";


 $db = new mysqli($servername, $username, $password,$dbname);
   if ($db->connect_error) {
  die("Connection failed: " . $db->connect_error);
}
$sql="SELECT * FROM `student` WHERE `email`='$email'";
    $result = mysqli_query($db, $sql); 
      
   
        $row = mysqli_num_rows($result); 
        if($row>0){
            echo "<h1> <center> <br><br><br><hr>  You have Already used this email . Please Use another E-mail <hr>  </center> <h3><hr> <center> <a href='index.php'> Try Again </a> </center> </h3> </h1>";
         
            die();
        }
      
  }
  //chk($email);
    $sql = "INSERT INTO student (type_msc_phd,student_type,student_mode,student_name, f_name,m_name,dep,b_day,nation,religion,present_address,password,phone,email,nid,degree_name,institute,passed_dept,cgpa,passing_year,occupation,research,reference,pic_upload,signature_upload,certificate_upload,NOC,paper_proposal,character_certificate,supervisor_recommendation,transaction_id,status)
VALUES ('$type_msc_phd','$student_type','$student_mode','$student_name', '$f_name','$m_name','$dep','$b_day','$nationality','$religion','$present_address','$password','$phone','$email','$nid','$degree_name','$institute','$passing_dept','$cgpa','$passing_year','$occupation','$research','$reference','$photo','$signature','$zip','$NOC','$paper_proposal','$character_certificate','$supervisor_recommendation','','')";
 //echo $sql = "INSERT INTO student (type_msc_phd, student_name, f_name,m_name,b_day,gender,nation,religion,present_address,permanent_address,phone,email,degree_name,institute,passing_dept,cgpa,passing_year,occupation,pic_upload,signature_upload,,certificate_upload,bank_slip)
//VALUES ('$type_msc_phd', '$student_name', '$f_name','$m_name','$b_day','$gender','$nationality','$religion','$present_address',' $permanent_address','$phone','$email','$degree_name','$institute','$passing_dept','$cgpa','$passing_year','$occupation','$photo','$signature','$zip','$bank_slip')";

$row= mysqli_query($db, $sql);
if($row){
    
    echo ". ";
}
else{
    echo "<h3><p style='color:red'><B>Fatal Error, Contact with 01534660559</B><p><h3>";
    die();
}
	$photo1 = $_FILES["photo"]["name"];

  
  $photo1Name = $_FILES["photo"]["name"];
  $photoTmpName = $_FILES["photo"]["tmp_name"];
  $photoType = $_FILES["photo"]["type"];
  $photoSize= $_FILES["photo"]["size"];
  $photoError = $_FILES["photo"]["error"];
  $photoExt=explode('.',$photo1Name);
  $photoActualExt=strtolower(end($photoExt));
  $allowed=array('jpg','png','jpeg');
  if(in_array($photoActualExt,$allowed)){
     if($photoError==0){
         if($photoSize<1024000){
            $photoNewName='1304106_'.uniqid('',true).".".$photoActualExt;
            $photoDestination='pic/'.$photoNewName;
            move_uploaded_file($photoTmpName,$photoDestination);
          $sql1 = "UPDATE student SET `pic_upload`='$photoNewName' WHERE `email`='$email'";
            mysqli_query($db, $sql1);
         }
         else{
              echo"</br>Invalid Photo Size</br>";
              echo"<h3><hr> <center> <a href='index.php'> Try Again </a> </center> </h3>"; 

         }
     }
     else{
         echo "</br>There was a problem uploading photo</br>";
         echo"<h3><hr> <center> <a href='index.php'> Try Again </a> </center> </h3>";

     }
     
  }
  else{
              echo"</br>Invalid file formats for Photo </br>";
              echo"<h3><hr> <center> <a href='index.php'> Try Again </a> </center> </h3>";

         }
  $signature1= $_FILES["signature"]["name"];
  
  
  $signature1Name = $_FILES["signature"]["name"];
  $signatureTmpName = $_FILES["signature"]["tmp_name"];
  $signature1Type = $_FILES["signature"]["type"];
  $signatureSize= $_FILES["signature"]["size"];
  $signatureError = $_FILES["signature"]["error"];
  $signatureExt=explode('.',$signature1Name);
  $signatureActualExt=strtolower(end($signatureExt));
  $allowed=array('jpg','png','jpeg');
  if(in_array($signatureActualExt,$allowed)){
     if($signatureError==0){
         if($signatureSize<10000000){
            $signatureNewName='1304106_'.uniqid('',true).".".$signatureActualExt;
            $signatureDestination='pic/'.$signatureNewName;
            move_uploaded_file($signatureTmpName,$signatureDestination);
           $sql2 = "UPDATE student SET `signature_upload`='$signatureNewName' WHERE `email`='$email'";
            mysqli_query($db, $sql2);
            
         }
         else{
              echo"</br>Invalid Signature Size</br>";
              echo"<h3><hr> <center> <a href='index.php'> Try Again </a> </center> </h3>";
         }
     }
     else{
         echo "</br>There was a problem uploading Signature or File submission missing</br>";

         echo"<h3><hr> <center> <a href='index.php'> Try Again </a> </center> </h3>";
     }
    
  }
   else{
              echo"</br>Invalid file formats for Signature</br>";
         }
  $zip1= $_FILES["zip"]["name"];
  
  
  $zip1Name = $_FILES["zip"]["name"];
  $zipTmpName = $_FILES["zip"]["tmp_name"];
  $zip1Type = $_FILES["zip"]["type"];
  $zipSize= $_FILES["zip"]["size"];
  $zipError = $_FILES["zip"]["error"];
  $zipExt=explode('.',$zip1Name);
  $zipActualExt=strtolower(end($zipExt));
  $allowed=array('zip','tar','rar');
  if(in_array($zipActualExt,$allowed)){
     if($zipError==0){
         if($zipSize<1000000000){
            $zipNewName='1304106_'.uniqid('',true).".".$zipActualExt;
            $zipDestination='zip/'.$zipNewName;
            move_uploaded_file($zipTmpName,$zipDestination);
            $sql3 = "UPDATE student SET `certificate_upload`='$zipNewName' WHERE `email`='$email'";
            mysqli_query($db, $sql3);
            
         }
         else{
              echo"</br>Invalid Uploaded file Size</br>";
              echo"<h3><hr> <center> <a href='index.php'> Try Again </a> </center> </h3>"; 
         }
     }
     else{
         echo "</br>There was a problem uploading Files zip or File submission missing";
         echo"<h3><hr> <center> <a href='index.php'> Try Again </a> </center> </h3>"; 
     }
    
  }
   else{
              echo"Invalid file formats For ZIP certificate ";
              echo"<h3><hr> <center> <a href='index.php'> Try Again </a> </center> </h3>"; 
         }
 
    $NOC1= $_FILES["NOC"]["name"];
     
 
  $NOC1Name = $_FILES["NOC"]["name"];
  
  $NOCTmpName = $_FILES["NOC"]["tmp_name"];
  $NOCType = $_FILES["NOC"]["type"];
  $NOCSize= $_FILES["NOC"]["size"];
  $NOCError = $_FILES["NOC"]["error"];
  $NOCExt=explode('.',$NOC1Name);
$NOCActualExt=strtolower(end($NOCExt));
  $allowed=array('pdf','doc','png','jpg','jpeg','docx','');
  if(in_array($NOCActualExt,$allowed)){
     if($NOCError==0){
         if($NOCSize<10000000){
            $NOCNewName='1304106_'.uniqid('',true).".".$NOCActualExt;
            $NOCDestination='pic/'.$NOCNewName;
            move_uploaded_file($NOCTmpName,$NOCDestination);
            $sql5 = "UPDATE student SET `NOC`= '$NOCNewName' WHERE `email`= '$email'";
            mysqli_query($db, $sql5);
         }
         else{
              echo"</br>Invalid Uploaded_NOC Size</br>";
         }
     }
     else{
         echo "";
     }
    
  }
   else{
              echo"</br>Invalid file formats NOC</br>";
         }	
    $paper_proposal1= $_FILES["paper_proposal"]["name"];
    
 
  $paper_proposal1Name = $_FILES["paper_proposal"]["name"];
  
  $paper_proposalTmpName = $_FILES["paper_proposal"]["tmp_name"];
  $paper_proposalType = $_FILES["paper_proposal"]["type"];
  $paper_proposalSize= $_FILES["paper_proposal"]["size"];
  $paper_proposalError = $_FILES["paper_proposal"]["error"];
  $paper_proposalExt=explode('.',$paper_proposal1Name);
$paper_proposalActualExt=strtolower(end($paper_proposalExt));
  $allowed=array('pdf','doc','png','jpg','jpeg','docx','');
  if(in_array($NOCActualExt,$allowed)){
     if($paper_proposalError==0){
         if($paper_proposalSize<10000000){
            $paper_proposalNewName='1304106_'.uniqid('',true).".".$paper_proposalActualExt;
            $paper_proposalDestination='pic/'.$paper_proposalNewName;
            move_uploaded_file($paper_proposalTmpName,$paper_proposalDestination);
            $sql6 = "UPDATE student SET `paper_proposal`= '$paper_proposalNewName' WHERE `email`='$email'";
            mysqli_query($db, $sql6);
         }
         else{
              echo"</br>Invalid Uploaded paper proposal Size</br>";
         }
     }
     else{
     //    echo "</br>There was a problem uploading paper proposal or File submission missing</br>";
     }
    
  }
   else{
              echo"</br>Invalid file formats paper_proposal</br>";
         }	
    $character_certificate1= $_FILES["character_certificate"]["name"];
  $character_certificate1Name = $_FILES["character_certificate"]["name"];
  
  $character_certificateTmpName = $_FILES["character_certificate"]["tmp_name"];
  $character_certificateType = $_FILES["character_certificate"]["type"];
  $character_certificateSize= $_FILES["character_certificate"]["size"];
  $character_certificateError = $_FILES["character_certificate"]["error"];
  $character_certificateExt=explode('.',$character_certificate1Name);
$character_certificateActualExt=strtolower(end($character_certificateExt));
  $allowed=array('pdf','doc','png','jpg','jpeg','docx','');
  if(in_array($character_certificateActualExt,$allowed)){
     if($character_certificateError==0){
         if($character_certificateSize<100000000){
            $character_certificateNewName='1304106_'.uniqid('',true).".".$character_certificateActualExt;
            $character_certificateDestination='pic/'.$character_certificateNewName;
            move_uploaded_file($character_certificateTmpName,$character_certificateDestination);
            $sql6 = "UPDATE student SET `character_certificate`= '$character_certificateNewName' WHERE `email`='$email'";
            mysqli_query($db, $sql6);
         }
         else{
              echo"</br>Invalid Uploaded character certificate Size</br>";
         }
     }
     else{
       //  echo "</br>There was a problem uploading character certificate or File submission missing</br>";
     }
    
  }
   else{
              echo"</br>Invalid file formats character_certificate</br>";
         }	
 $supervisor_recommendation1= $_FILES["supervisor_recommendation"]["name"];
    
 
  $supervisor_recommendation1Name = $_FILES["supervisor_recommendation"]["name"];
  
  $supervisor_recommendationTmpName = $_FILES["supervisor_recommendation"]["tmp_name"];
  $supervisor_recommendationType = $_FILES["supervisor_recommendation"]["type"];
  $supervisor_recommendationSize= $_FILES["supervisor_recommendation"]["size"];
  $supervisor_recommendationError = $_FILES["supervisor_recommendation"]["error"];
  $supervisor_recommendationExt=explode('.',$supervisor_recommendation1Name);
$supervisor_recommendationActualExt=strtolower(end($supervisor_recommendationExt));
  $allowed=array('pdf','doc','png','jpg','jpeg','docx','');
  if(in_array($supervisor_recommendationActualExt,$allowed)){
     if($supervisor_recommendationError==0){
         if($supervisor_recommendationSize<100000000){
            $supervisor_recommendationNewName='1304106_'.uniqid('',true).".".$supervisor_recommendationActualExt;
            $supervisor_recommendationDestination='pic/'.$supervisor_recommendationNewName;
            move_uploaded_file($supervisor_recommendationTmpName,$supervisor_recommendationDestination);
            $sql6 = "UPDATE student SET `supervisor_recommendation`= '$supervisor_recommendationNewName' WHERE `email`='$email'";
            mysqli_query($db, $sql6);
         }
         else{
              echo"</br>Invalid Uploaded_supervisor_recommendation_letter Size</br>";
         }
     }
     else{
     //    echo "</br>There was a problem uploading supervisor_recommendation  or File submission missing</br>";
     }
    
  }
   else{
              echo"</br>Invalid file formats supervisor_recommendation</br>";
         }	


?>
<table width="760" border="0" align="center" cellpadding="0" cellspacing="0">
  <tbody><tr>
    <td height="10" align="center" valign="middle" class="topbg">&nbsp;</td>
  </tr>

    	  <tr>
		<td height="100" align="left	" valign="top" class="blue"><table width="100%" border="0" cellpadding="0" cellspacing="0" class="white14bold">
		 <tbody><tr><td height="120" align="left" valign="top" class="blue"><table width="100%" border="0" cellpadding="0" cellspacing="0" class="white14">
		  <tbody><tr>
			<td bgcolor="Blue" height="120"><table width="100%" border="0" cellpadding="3" cellspacing="0" class="black12">
			  <tbody><tr>
				<td width="10%" align="left" valign="middle"><img src="logo.png" width="90" height="90"></td>
				
				<td width="80%" align="center" valign="middle">
				 
				 	<font color="white"><font size="4"><b> CUET Post-Graduate Admission</b></font><br>
				 	 <font color="white"><font size="2"></font><br>
					<font color="white"><font size="1"><b><a href="www.cuet.ac.bd" target="_blank"><mark>www.cuet.ac.bd<mark></mark></mark></a></b></font><br>
           
			  </tr>
			</tbody></table></td>
		  </tr>
		</tbody></table></td>
		 </tr>
    <tr>
				        <td height="30" align="left" valign="middle" bgcolor="#38B003">


					<table border="1" bordercolor="White" cellpadding="8" cellspacing="0" class="#FF0000">
						<tbody><tr>

						  <td width="107" align="middle" valign="middle"><a href="http://cuet.xyz/msc/" class="link-home"><font color="white">Home</font></a></td>
                                        	  


						</tr>
					</tbody></table>
				</td>
			</tr>
  
  
  <tr><td> <center>   <img  width='600' src='rockett.png'></center></td>  </tr>
 
 <tr>
     
  	<td height="25" align="center" valign="middle" bgcolor="#E3E3E3" class="black12bold">Payment Verification <hr> DO NOT USE Rocket Mobile APP , Dial *322# for payment <hr></br><hr><font size=4><font color='red'>If Email is not shown on this page resubmit Again!</font></font>  <hr></td>
  </tr>
  <tr>
   
<form action ="rocket.php" method="POST">
    	<?php 
    
			
			?>
     	<input type="hidden" name="phone" id="phone" value="<?php echo $_POST["phone"] ?>">
			<input type="hidden" name="email" id="email" value="<?php echo $_POST["email"] ?>">
    <td colspan="3" align="center" valign="middle" bgcolor="#A2A2A2"><br><input name="transaction_id" id="transaction_id" type="text" class="form-control" placeholder="Rocket Transaction ID">
    <br></td>
    
   <tr>
       <br>
          <td colspan="3" align="center" valign="middle" bgcolor="#A2A2A2"> <br> <input type="submit" name="submit" id="submit" value="Confirm Payment & Submit" > <br> </td>
        <br> </tr> </tr> <br>
</form>

  <tr>
    <td height="25" align="center" valign="middle" bgcolor="lightgreen" class="black10"><font size="1"><b><i>For any inconvenience, please send email to iict@cuet.ac.bd or call 01534660559</i></b></font></td>
  </tr>
  <tr>
    <td align="left" valign="top">&nbsp;</td>
  </tr>
  <tr>
    <td align="left" valign="top"><fieldset>
      <table width="100%" border="0" cellpadding="0" cellspacing="0" class="black10">
        <tbody><tr>
          <td width="1%" align="left" valign="middle">&nbsp;</td>
          <td width="80%" align="left" valign="middle"><tt>??2020 Chittagong University of Engineering & Technology All Rights Reserved. HelpLine : 01534660559 (Within Office time)</tt></td>
     
          <td width="9%" align="left" valign="middle"></td>
        </tr>
      </tbody></table>
    </fieldset></td>
  </tr>
	
</tbody></table>





</td></tr></tbody></table></form></body></html>
