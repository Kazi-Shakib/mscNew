<?php die();

if(isset($_POST['button'])){
	

 // Connect to MySql
	$db = mysqli_connect(
	'localhost',		//  The host to connect to
	'cuetac_msadmission',		//  The user to connect as
	'sakibsakib#',		//  The password to use
	'cuetac_msadmission');	//  The default database to query


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
     $phone=$_POST['phone'];
     $email=$_POST['email'];
     $password=$_POST['password'];
	 
	$photo=$_POST['phone']."_".$_FILES['photo']['name'];
     $signature=$_POST['phone']."_".$_FILES['signature']['name'];
     $zip=$_POST['phone']."_".$_FILES['zip']['name'];
   
     $NOC=$_POST['phone']."_".$_FILES['NOC']['name'];
     $paper_proposal=$_POST['phone']."_".$_FILES['paper_proposal']['name'];
     $character_certificate=$_POST['phone']."_".$_FILES['character_certificate']['name'];
     $supervisor_recommendation=$_POST['phone']."_".$_FILES['supervisor_recommendation']['name'];
     echo $sql = "UPDATE student SET pic_upload='$photo',signature_upload='$signature',certificate_upload='$zip',NOC='$NOC',paper_proposal,character_certificate='$character_certificate',supervisor_recommendation='$supervisor_recommendation') WHERE 'email'=$email AND phone='$phone' and password='$password'";
 //echo $sql = "INSERT INTO student (type_msc_phd, student_name, f_name,m_name,b_day,gender,nation,religion,present_address,permanent_address,phone,email,degree_name,institute,passing_dept,cgpa,passing_year,occupation,pic_upload,signature_upload,,certificate_upload,bank_slip)
//VALUES ('$type_msc_phd', '$student_name', '$f_name','$m_name','$b_day','$gender','$nationality','$religion','$present_address',' $permanent_address','$phone','$email','$degree_name','$institute','$passing_dept','$cgpa','$passing_year','$occupation','$photo','$signature','$zip','$bank_slip')";

mysqli_query($db, $sql);
	$photo1 = $_FILES["photo"]["name"];
	$photo2=$photo1;
  print_r($photo1);
  $photo1Name = $_FILES["photo"]["name"];
  $photoTmpName = $_FILES["photo"]["tmp_name"];
  $photoType = $_FILES["photo"]["type"];
  $photoSize= $_FILES["photo"]["size"];
  $photoError = $_FILES["photo"]["error"];
  $photoExt=explode('.',$photo1Name);
  echo $photoActualExt=strtolower(end($photoExt));
  $allowed=array('jpg','png','jpeg');
  if(in_array($photoActualExt,$allowed)){
     if($photoError==0){
         if($photoSize<100000){
            $photoNewName=$_POST['phone'].uniqid('',true).".".$photoActualExt;
            $photoDestination='pic/'.$photoNewName;
            move_uploaded_file($photoTmpName,$photoDestination);
           echo $sql1 = "UPDATE student SET `pic_upload`='$photoNewName' WHERE `pic_upload`='$photo2' AND phone='$phone' AND email='$email'";
            mysqli_query($db, $sql1);
         }
         else{
              echo"Invalid Photo Size";
         }
     }
     else{
         echo "There was a problem uploading photo";
     }
     
  }
  else{
              echo"Invalid file formats";
         }
}
 $signature1= $_FILES["signature"]["name"];
  $signature2=$_POST['phone']."_".$signature1;
  
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
         if($signatureSize<100000){
            $signatureNewName=$_POST['phone'].uniqid('',true).".".$signatureActualExt;
            $signatureDestination='pic/'.$signatureNewName;
            move_uploaded_file($signatureTmpName,$signatureDestination);
           $sql2 = "UPDATE student SET `signature_upload`='$signatureNewName' WHERE `signature_upload`='$signature2' AND phone='$phone' AND email='$email'";
            mysqli_query($db, $sql2);
            
         }
         else{
              echo"</br>Invalid Signature Size</br>";
         }
     }
     else{
         echo "</br>There was a problem uploading Signature</br>";
     }
    
  }
   else{
              echo"</br>Invalid file formats</br>";
         }
  $zip1= $_FILES["zip"]["name"];
    $zip2=$_POST['phone']."_".$zip1;
  
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
         if($zipSize<100000000){
            $zipNewName=$_POST['phone'].uniqid('',true).".".$zipActualExt;
            $zipDestination='zip/'.$zipNewName;
            move_uploaded_file($zipTmpName,$zipDestination);
            $sql3 = "UPDATE student SET `certificate_upload`='$zipNewName' WHERE `certificate_upload`='$zip2' AND phone='$phone' AND email='$email'";
            mysqli_query($db, $sql3);
            
         }
         else{
              echo"</br>Invalid Uploaded_file Size</br>";
         }
     }
     else{
         echo "</br>There was a problem uploading Files zip";
     }
    
  }
   else{
              echo"Invalid file formats";
         }

 
    $NOC1= $_FILES["NOC"]["name"];
     $NOC2=$_POST['phone']."_".$NOC1;
 
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
            $NOCNewName=$_POST['phone'].uniqid('',true).".".$NOCActualExt;
            $NOCDestination='pic/'.$NOCNewName;
            move_uploaded_file($NOCTmpName,$NOCDestination);
            $sql5 = "UPDATE student SET `NOC`= '$NOCNewName' WHERE `NOC`= '$NOC2'";
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
    $paper_proposal2=$_POST['phone']."_".$paper_proposal1;
 
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
            $paper_proposalNewName=$_POST['phone'].uniqid('',true).".".$paper_proposalActualExt;
            $paper_proposalDestination='pic/'.$paper_proposalNewName;
            move_uploaded_file($paper_proposalTmpName,$paper_proposalDestination);
            $sql6 = "UPDATE student SET `paper_proposal`= '$paper_proposalNewName' WHERE `paper_proposal`= '$paper_proposal2' AND phone='$phone' AND email='$email'";
            mysqli_query($db, $sql6);
         }
         else{
              echo"</br>Invalid Uploaded_paper_proposal Size</br>";
         }
     }
     else{
         echo "</br>There was a problem uploading paper_proposal</br>";
     }
    
  }
   else{
              echo"</br>Invalid file formats paper_proposal</br>";
         }	
    $character_certificate1= $_FILES["character_certificate"]["name"];
    $character_certificate2=$_POST['phone']."_".$character_certificate1;
 
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
            $character_certificateNewName=$_POST['phone'].uniqid('',true).".".$character_certificateActualExt;
            $character_certificateDestination='pic/'.$character_certificateNewName;
            move_uploaded_file($character_certificateTmpName,$character_certificateDestination);
            $sql6 = "UPDATE student SET `character_certificate`= '$character_certificateNewName' WHERE `character_certificate`= '$character_certificate2' AND `phone`='$phone' AND `email`='$email'";
            mysqli_query($db, $sql6);
         }
         else{
              echo"</br>Invalid Uploaded_character_certificate Size</br>";
         }
     }
     else{
         echo "</br>There was a problem uploading character_certificate</br>";
     }
    
  }
   else{
              echo"</br>Invalid file formats character_certificate</br>";
         }	
 $supervisor_recommendation1= $_FILES["supervisor_recommendation"]["name"];
    $supervisor_recommendation2=$_POST['phone']."_".$supervisor_recommendation1;
 
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
            $supervisor_recommendationNewName=$_POST['phone'].uniqid('',true).".".$supervisor_recommendationActualExt;
            $supervisor_recommendationDestination='pic/'.$supervisor_recommendationNewName;
            move_uploaded_file($supervisor_recommendationTmpName,$supervisor_recommendationDestination);
            $sql6 = "UPDATE student SET `supervisor_recommendation`= '$supervisor_recommendationNewName' WHERE `supervisor_recommendation`= '$supervisor_recommendation2' AND phone='$phone' AND email='$email'";
            mysqli_query($db, $sql6);
         }
         else{
              echo"</br>Invalid Uploaded_supervisor_recommendation_letter Size</br>";
         }
     }
     else{
         echo "</br>There was a problem uploading supervisor_recommendation</br>";
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
					<font color="white"><font size="1"><b><a href="www.cuet.xyz" target="_blank"><mark>www.cuet.xyz<mark></mark></mark></a></b></font><br>
           
			  </tr>
			</tbody></table></td>
		  </tr>
		</tbody></table></td>
		 </tr>
    <tr>
				        <td height="30" align="left" valign="middle" bgcolor="#38B003">


					<table border="1" bordercolor="White" cellpadding="8" cellspacing="0" class="#FF0000">
						<tbody><tr>

						  <td width="107" align="middle" valign="middle"><a href="http://cuet.xyz/msc/a.php" class="link-home"><font color="white">Home</font></a></td>
                                        	  


						</tr>
					</tbody></table>
				</td>
			</tr>
  
  <tr>
  	<td height="25" align="center" valign="middle" bgcolor="#E3E3E3" class="black12bold">Payment Verification</td>
  </tr>
  <tr>
<form action ="rocket.php" method="POST">
     	<input type="hidden" name="phone" id="phone" value="<?php echo $_POST["phone"] ?>">
			<input type="hidden" name="email" id="email" value="<?php echo $_POST["email"] ?>">
    <td colspan="3" align="center" valign="middle" bgcolor="#A2A2A2"><input name="transaction_id" id="transaction_id" type="text" class="form-control" placeholder="Provide Rocket Transaction Id"></td>
    
   <tr>
          <td colspan="3" align="center" valign="middle" bgcolor="#A2A2A2"><input type="submit" name="submit" id="submit" value="Submit the Application" ></td>
        </tr> </tr>
</form>
  <tr>
    <td height="25" align="center" valign="middle" bgcolor="lightgreen" class="black10"><font size="1"><b><i>For any inconvenience, please send email to iict@cuet.ac.bd</i></b></font></td>
  </tr>
  <tr>
    <td align="left" valign="top">&nbsp;</td>
  </tr>
  <tr>
    <td align="left" valign="top"><fieldset>
      <table width="100%" border="0" cellpadding="0" cellspacing="0" class="black10">
        <tbody><tr>
          <td width="1%" align="left" valign="middle">&nbsp;</td>
          <td width="80%" align="left" valign="middle"><tt>©2020 Chittagong University of Engineering & Technology All Rights Reserved.</tt></td>
     
          <td width="9%" align="left" valign="middle"></td>
        </tr>
      </tbody></table>
    </fieldset></td>
  </tr>
	
</tbody></table>





</td></tr></tbody></table></form></body></html>


