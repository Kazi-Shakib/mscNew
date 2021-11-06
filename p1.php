<?php die(); session_start();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">


</head>
<body ondragstart="return false" onselectstart="return false" onload="download();">
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

						    <td width="107" align="middle" valign="middle"><a href="index.php" class="link-home"><font color="white">Home</font></a></td>          	  
						     <td width="107" align="middle" valign="middle"><a href="http://www.cuet.ac.bd/admission" class="link-home"><font color="white">Notice</font></a></td>          	  
						     <td width="107" align="middle" valign="middle"><a href="index.php" class="link-home"><font color="white">Apply Online</font></a></td>          	  
						     <td width="107" align="middle" valign="middle"><a href="login.php" class="link-home"><font color="white">Log In</font></a></td>          	  
                            <td width="107" align="middle" valign="middle"><a href="help.pdf" class="link-home"><font color="white">Help</font></a></td>  

						</tr>
					</tbody></table>
				</td>
			</tr>
  
  <tr>
  	<td height="25" align="center" valign="middle" bgcolor="#E3E3E3" class="black12bold">Application Preview And Status</td>
  </tr>

<form action="upload2.php" method="post" enctype="multipart/form-data" name="app_form" id="app_form" onsubmit="return app_form_validator(this)">
 
            

<table width="760" border="0" align="center" cellpadding="0" cellspacing="0">
  <tbody><tr>
    <td height="10" align="center" valign="middle" class="topbg">&nbsp;</td>
  </tr>
<?php 
session_start();
   $email=$_SESSION['email'];
  $password= $_SESSION['password'];
 // Connect to MySql
	$conn = mysqli_connect(
	'localhost',		//  The host to connect to
	'cuetac_msadmission',		//  The user to connect as
	'Iict518#@!',		//  The password to use
	'cuetac_msadmission');	//  The default database to query


		
    
    $sql_user_exist = "SELECT * FROM student WHERE `email`='$email' AND `password`='$password'";
		
		$result=mysqli_query($conn,$sql_user_exist);
	 
			
			while($row=mysqli_fetch_array($result)){
	    $status = $row['status'];
	    $sl=$row['sl'];
	$type_msc_phd = $row['type_msc_phd'];
		$student_type = $row['student_type'];
		$student_mode = $row['student_mode'];
	    $student_name = $row['student_name'];
		$f_name = $row['f_name'];
		$m_name = $row['m_name'];	
		$dep = $row['dep'];
		$b_day = $row['b_day'];
		
		$gender = $row['gender'];
		$nation = $row['nation'];	

		$religion = $row['religion'];
		$nid = $row['nid'];	
	    $present_address=$row['present_address'];

		$permanent_address=$row['permanent_address'];
 /*$exx=explode(",",$permanent_address);
 foreach($exx as $exs){
     echo"$exs <br>";
 }*/
   
		
		$phone = $row['phone'];
		$email = $row['email'];
		$degree_name=$row['degree_name'];
		$institute=$row['institute'];
		$passed_dept=$row['passed_dept'];
		$cgpa=$row['cgpa'];
		$passing_year=$row['passing_year'];
		$research_interest = $row['research_interest'];
		$research = $row['research'];
    	$reference = $row['reference'];
		$occupation=$row['occupation'];
		$photo=$row['pic_upload'];
		$signature=$row['signature_upload'];
		$zip=$row['certificate_upload'];
		$NOC=$row['NOC'];
		$paper_proposal=$row['paper_proposal'];
	    $character_certificate=$row['character_certificate'];
	   
	    $supervisor_recommendation=$row['supervisor_recommendation'];
	?>

    	  

            <input type="hidden" name="phone" id="phone" value="<?php echo $phone ?>">
			<input type="hidden" name="email" id="email" value="<?php echo $email ?>">
		    <input type="hidden" name="password" id="password" value="<?php echo $password ?>">
		    




  <tr>
    <td align="left" valign="top">
      <table width="100%" border="0" cellpadding="5" cellspacing="0" class="black12">
        <tbody>
         <tr>
          <td align="left" valign="middle" bgcolor="#E3E3E3">Applicant's Status</td>
          <td align="center" valign="middle" bgcolor="#E3E3E3">:</td>
          <td align="left" valign="middle" bgcolor="#E3E3E3" class="black11"><?php if($status==11){ echo "Payment done and verified";} else{echo "Payment Pending!";} ?></td>
       </tr>
       <tr>
          <td align="left" valign="middle" bgcolor="#E3E3E3">Applicant's Sl</td>
          <td align="center" valign="middle" bgcolor="#E3E3E3">:</td>
          <td align="left" valign="middle" bgcolor="#E3E3E3" class="black11"><?php echo $sl; ?></td>
       </tr>
    
        <tr>
          <td width="23%" align="left" valign="middle" bgcolor="lightgreen">Name of the Post</td>
          <td width="7%" align="center" valign="middle" bgcolor="lightgreen">:</td>
          <td width="70%" align="left" valign="middle" bgcolor="lightgreen"><?php echo $type_msc_phd?></td>
        </tr>
<tr>
          <td width="23%" align="left" valign="middle" bgcolor="lightgreen">Admission Type</td>
          <td width="7%" align="center" valign="middle" bgcolor="lightgreen">:</td>
          <td width="70%" align="left" valign="middle" bgcolor="lightgreen"><?php echo $student_type?></td>
        </tr>
<tr>
          <td width="23%" align="left" valign="middle" bgcolor="lightgreen">Mode of Admission</td>
          <td width="7%" align="center" valign="middle" bgcolor="lightgreen">:</td>
          <td width="70%" align="left" valign="middle" bgcolor="lightgreen"><?php echo $student_mode?></td>
        </tr>

              <tr>
          <td align="left" valign="middle" bgcolor="#E3E3E3">Applicant's Name</td>
          <td align="center" valign="middle" bgcolor="#E3E3E3">:</td>
          <td align="left" valign="middle" bgcolor="#E3E3E3" class="black11"><?php echo $student_name ?></td>
       </tr>

        <tr>
          <td align="left" valign="middle" bgcolor="#E3E3E3">Father's Name</td>
          <td align="center" valign="middle" bgcolor="#E3E3E3">:</td>
          <td align="left" valign="middle" bgcolor="#E3E3E3" class="black11"><?php echo $f_name?></td>
        </tr>

        <tr>
          <td align="left" valign="middle" bgcolor="#E3E3E3">Mother's Name</td>
          <td align="center" valign="middle" bgcolor="#E3E3E3">:</td>
          <td align="left" valign="middle" bgcolor="#E3E3E3" class="black11"><?php echo $m_name?></td>
        </tr>
<tr>
    <tr>
          <td align="left" valign="middle" bgcolor="#DCDCDC">Date of Birth</td>
          <td align="center" valign="middle" bgcolor="#DCDCDC">:</td>
          <td align="left" valign="middle" bgcolor="#DCDCDC" class="black11"><?php echo $b_day ?></td>
        </tr>

        <tr>
          <td align="left" valign="middle" bgcolor="#DCDCDC">Gender</td>
         <td align="center" valign="middle" bgcolor="#DCDCDC">:</td>
          <td align="left" valign="middle" bgcolor="#DCDCDC" class="black11"><?php echo $gender ?></td>
        </tr>

        <tr>
          <td align="left" valign="middle" bgcolor="#DCDCDC">Nationality</td>
          <td align="center" valign="middle" bgcolor="#DCDCDC">:</td>
          <td align="left" valign="middle" bgcolor="#DCDCDC"><table width="100%" border="0" cellpadding="0" cellspacing="0" class="black12">
            <tbody><tr>
              <td width="20%" height="23" align="left" valign="middle" class="black11"><?php echo $nation ?></td>
              <td width="5%" align="left" valign="middle">&nbsp;</td>
            </tr>

          </tbody></table></td>
        </tr>
	


         <tr>
          <td align="left" valign="middle" bgcolor="#DCDCDC">National ID</td>
          <td align="center" valign="middle" bgcolor="#DCDCDC">:</td>
          <td align="left" valign="middle" bgcolor="#DCDCDC" class="black11"><?php echo $nid ?></td>
        </tr>


		<tr>
          <td align="left" valign="middle" bgcolor="#E3E3E3">Religion</td>
          <td align="center" valign="middle" bgcolor="#E3E3E3">:</td>
          <td align="left" valign="middle" bgcolor="#E3E3E3" class="black11"><?php echo $religion ?></td>
        </tr>
		
        <tr>
          <td colspan="3" align="left" valign="middle" bgcolor="#DCDCDC" class="black12"><table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tbody><tr>
              <td width="50%" align="left" valign="middle" class="bdr02"><table width="100%" border="0" cellpadding="3" cellspacing="0" class="black12">
                <tbody><tr>
                  <td colspan="2" height="25" align="left" valign="middle" bgcolor="lightgreen">Mailing/Present Address</td>
                </tr>
		
                <tr>
                  <td width="47%" align="left" valign="middle"></td>
                  <td width="53%" align="left" valign="middle" claspasss="black11"><?php $exx=explode("##",$present_address);
 foreach($exx as $exs){
     echo"$exs <br>"; }  ?></td>
                   </tr>
                <!--<tr>
                  <td align="left" valign="middle">
				  Village/Town/<br>
                  Road/House/Flat:</td>
                  <td width="53%" align="left" valign="middle" class="black11"><?php echo $present_vill ?></td>
                </tr>
                <tr>
                  <td align="left" valign="middle">District:</td>
                  <td align="left" valign="middle" class="black11"><?php echo $present_dist ?></td>
                </tr>
                <tr>
                  <td align="left" valign="middle">P.S./Upazila:</td>
                  <td align="left" valign="middle" class="black11"><?php echo $present_upazila ?></td>
                </tr>
                <tr>
                  <td align="left" valign="middle">Post Office:</td>
                  <td align="left" valign="middle" class="black11"<?php echo $present_post ?></td>
                </tr>
                <tr>
                  <td align="left" valign="middle">Post Code:</td>
                  <td align="left" valign="middle" class="black11"><?php echo $present_pcode ?></td>
                </tr>-->
              </tbody></table></td>
              <td align="left" valign="middle">&nbsp;</td>
              <td width="50%" align="left" valign="middle" class="bdr02"><table width="100%" border="0" cellpadding="3" cellspacing="0" class="black12">
                <tbody><tr>
                  <td colspan="2" height="25" align="left" valign="middle" bgcolor="lightgreen">Permanent Address:</td>
                </tr>
				<tr>
                  <td width="47%" align="left" valign="middle"></td>
                  <td width="53%" align="left" valign="middle" class="black11"><?php $exx=explode("##",$permanent_address);
 foreach($exx as $exs){
     echo"$exs <br>"; }  ?></td>
                </tr>
                <!--<tr>
                  <td align="left" valign="middle">
				  Village/Town/<br>
                  Road/House/Flat:</td>
                  <td width="53%" align="left" valign="middle" class="black11"><?php echo $permanent_vill ?></td>
                </tr>
                <tr>
                  <td align="left" valign="middle">Home District:</td>
                  <td align="left" valign="middle" class="black11"><?php/* echo $permanent_dist ?></td>
                </tr>
                <tr>
                  <td align="left" valign="middle">P.S./Upazila:</td>
                  <td align="left" valign="middle" class="black11"><?php echo $permanent_upazila ?></td>
                </tr>
                <tr>
                  <td align="left" valign="middle">Post Office:</td>
                  <td align="left" valign="middle" class="black11"><?php echo $permanent_post ?></td>
                </tr>
                <tr>
                  <td align="left" valign="middle">Post Code:</td>
                  <td align="left" valign="middle" class="black11"><?php echo $permanent_pcode */?></td>-->
                </tr>
              </tbody></table></td>
              <td align="left" valign="middle">&nbsp;</td>
            </tr>
          </tbody></table></td>
        </tr>
        <tr bgcolor="#E3E3E3">
          <td align="left" valign="middle">Contact Mobile</td>
          <td align="center" valign="middle">:</td>
          <td align="left" valign="middle">
		  <table width="100%" border="0" cellpadding="0" cellspacing="0" class="black12">
            <tbody><tr>
              <td width="37%" height="23" align="left" valign="middle" class="red12bold"><?php echo $phone ?></td>
              <td width="21%" align="right" valign="middle">&nbsp;</td>
              <td width="33%" align="right" valign="middle" class="red12bold">&nbsp;</td>
              <td width="9%" align="left" valign="middle" class="red12bold">&nbsp;</td>
              </tr>
          </tbody></table>
		  </td>
        </tr>
        <tr bgcolor="#E3E3E3">
          <td align="left" valign="middle">Email</td>
          <td align="center" valign="middle">:</td>
          <td align="left" valign="middle"><?php echo $email ?></td>
        </tr>


        <tr>
          <td colspan="3" align="left" valign="middle" bgcolor="lightgreen">Academic Qualifications:</td>
        </tr>
        <tr>
          <td colspan="3" align="left" valign="middle" bgcolor="#DCDCDC" class="black14"><table width="100%" border="0" cellpadding="3" cellspacing="1" class="black12">
            <tbody><tr>
              <td width="20%" height="25" align="center" valign="middle" bgcolor="#A2A2A2">Examination & Roll</td>
              <td width="20%" height="25" align="center" valign="middle" bgcolor="#A2A2A2">Board/University</td>
              
              <td width="20%" height="25" align="center" valign="middle" bgcolor="#A2A2A2">Result</td>
              <td width="20%" height="25" align="center" valign="middle" bgcolor="#A2A2A2">Group/Subject</td>
              <td width="20%" height="25" align="center" valign="middle" bgcolor="#A2A2A2">Year</td>
            </tr>


	<tr class="black11">
				  <td height="25" align="center" valign="middle" bgcolor="#C7C7C7"><?php 
				 $exx=explode("##",$degree_name);
 foreach($exx as $exs){
     echo"$exs <br>"; }?></td>
				  <td height="25" align="center" valign="middle" bgcolor="#C7C7C7"><?php $exx=explode("##",$institute);
 foreach($exx as $exs){
     echo"$exs <br>"; }  ?></td>
				  
				  <td height="25" align="center" valign="middle" bgcolor="#C7C7C7"><?php $exx=explode("##",$cgpa);
 foreach($exx as $exs){
     echo"$exs <br>"; }  ?> </td>
				  <td height="25" align="center" valign="middle" bgcolor="#C7C7C7"><?php $exx=explode("##",$passed_dept);
 foreach($exx as $exs){
     echo"$exs <br>"; } ?></td>
				  <td height="25" align="center" valign="middle" bgcolor="#C7C7C7"><?php $exx=explode("##",$passing_year);
 foreach($exx as $exs){
     echo"$exs <br>"; }  ?></td>
				  <td align="center" valign="middle" bgcolor="#C7C7C7">&nbsp;</td>
				
	
        
      
        </tr>



 </tbody></table></td>
    
        
	
	<tr>
       </tr><tr>
          <td colspan="3" align="left" valign="middle" bgcolor="lightgreen"><table width="100%" border="0" cellpadding="3" cellspacing="1" class="black12">Research/Publication:</td>
        </tr>



   <tr>
          <td colspan="3" align="left" valign="middle" bgcolor="#DCDCDC" class="black14">
      
    <table width="100%" border="0" cellpadding="3" cellspacing="1" class="black12">
            <tbody><tr>
              <td width="20%" height="25" align="center" valign="middle" bgcolor="#A2A2A2">Research Interest,Tentative Supervisor name (For PhD only),Number of Publication,Publication Type, Titles & info</td>

              
    </tr><tr>
              <td width="10%" height="25" align="center" valign="middle" bgcolor="#A2A2A2"><?php echo $research;
              $exx=explode("##",$research);
 foreach($exx as $exs){
     echo"$exs <br>";}
     ?></td>
              


	
        </tbody></table></td>
        </tr>


        
        
        
 
<tr>
       </tr><tr>
          <td colspan="3" align="left" valign="middle" bgcolor="lightgreen">Professional Experience:</td>
        </tr>



   <tr>
          <td colspan="3" align="left" valign="middle" bgcolor="#DCDCDC" class="black14">
      
    <table width="100%" border="0" cellpadding="3" cellspacing="1" class="black12">
            <tbody><tr>
              <td width="20%" height="25" align="center" valign="middle" bgcolor="#A2A2A2">Organization Name,Post Name,Responsibilities,Start Date,End Date</td>
              
             
         
    </tr><tr>
              <td width="20%" height="25" align="center" valign="middle" bgcolor="#A2A2A2"><?php $exx=explode("##",$occupation);
 foreach($exx as $exs){
     echo"$exs <br>";} ?></td>
              



             </tr>


  

    </tbody></table></td>
    
    <tr>
       </tr><tr>
          <td colspan="3" align="left" valign="middle" bgcolor="lightgreen">Reference:</td>
        </tr>



   <tr>
          <td colspan="3" align="left" valign="middle" bgcolor="#DCDCDC" class="black14">
      
    <table width="100%" border="0" cellpadding="3" cellspacing="1" class="black12">
            <tbody><tr>
              <td width="20%" height="25" align="center" valign="middle" bgcolor="#A2A2A2">Reference</td>
              
             
             
         
    </tr><tr>
              <td width="20%" height="25" align="center" valign="middle" bgcolor="#A2A2A2"><?php 
              $exx=explode("##",$reference);
 foreach($exx as $exs){
     echo"$exs <br>";} ?> </td>
             

             
      
         
            </tr>
            
             <tr>
       </tr>

  

    </tbody></table></td>
    
            <tr>
   </tr><tr>
          <td colspan="3" align="left" valign="middle" bgcolor="lightgreen">Uploads:</td>
        </tr>



   <tr>
          <td colspan="3" align="left" valign="middle" bgcolor="#DCDCDC" class="black14">
      
    <table width="100%" border="0" cellpadding="3" cellspacing="1" class="black12">
            <tbody><tr>
              <td width="20%" height="25" align="center" valign="middle" bgcolor="#A2A2A2">Upload Photo</td>
              <td width="20%" height="25" align="center" valign="middle" bgcolor="#A2A2A2">Upload Signature</td>
              <td width="10%" height="25" align="center" valign="middle" bgcolor="#A2A2A2">Upload Files Zip</td>
             <td width="10%" height="25" align="center" valign="middle" bgcolor="#A2A2A2">Upload NOC</td>
             <td width="10%" height="25" align="center" valign="middle" bgcolor="#A2A2A2">Upload Paper Proposal</td>
             <td width="10%" height="25" align="center" valign="middle" bgcolor="#A2A2A2">Upload Character Crtificate</td>
             <td width="10%" height="25" align="center" valign="middle" bgcolor="#A2A2A2">Upload Supervisor Recommendation</td>
         
    </tr><tr>
              <td width="20%" height="25" align="center" valign="middle" bgcolor="#A2A2A2"><?php 
              $exx=explode(",",$photo);
              if($exx=''){
              echo "There is no Photo,Upload Photo";    
              }
              else{
                  echo "Photo Uploaded";
              }
               ?></td>
               <td width="20%" height="25" align="center" valign="middle" bgcolor="#A2A2A2"><?php 
              if($signature=''){
              echo "There is no signature,Upload Signature";    
              }
              else{
                  echo "Signature Uploaded";
              }
               ?></td>
             
              <td width="20%" height="25" align="center" valign="middle" bgcolor="#A2A2A2"><?php 
              if($zip=''){
              echo "There is no Certificate Zip,Upload Certificate Zip";    
              }
              else{
                  echo "Certificate Zip Uploaded";
              }
               ?></td>
             
             
                <td width="20%" height="25" align="center" valign="middle" bgcolor="#A2A2A2"><?php 
                $exx=explode("",$NOC);
              if($exx!='0'){
              echo "There is no NOC,Upload NOC(Optional)";    
              }
              else{
                  echo "NOC(Optional) Uploaded";
              }
               ?></td>
             <td width="20%" height="25" align="center" valign="middle" bgcolor="#A2A2A2"><?php 
              if($paper_proposal=''){
              echo "There is no Paper Proposal,Upload Paper Proposal";    
              }
              else{
                  echo "Paper Proposal Uploaded";
              }
               ?></td>
                <td width="20%" height="25" align="center" valign="middle" bgcolor="#A2A2A2"><?php 
              if($character_certificate=''){
              echo "There is no Character Certificate,Upload Paper Proposal";    
              }
              else{
                  echo "Character Certificate Uploaded";
              }
               ?></td>
                <td width="20%" height="25" align="center" valign="middle" bgcolor="#A2A2A2"><?php 
              if($supervisor_recommendation=''){
              echo "There is no Supervisor Recommendation,Upload Supervisor Recommendation";    
              }
              else{
                  echo "Supervisor Recommendation Uploaded";
              }
               ?></td>
            </tr>
<tr>
              
             
      
         
            </tr>
            
    </tbody></table></td>

<?php
		}
		
	?>
  

    </tbody></table></td>
    
            <tr>
   </tr><tr>
      <td align="left" valign="top" bgcolor="#F1DCC9">

      <table width="230" border="0" align="center" cellpadding="0" cellspacing="0">

      <tbody></tbody></table></td>
	   </tr>


	<tr>
          <td colspan="3" align="left" valign="middle" bgcolor="#E3E3E3" class="black12bold"><b>Photo &amp; Signature:(If not Uploaded)</b></td>
          </tr>
        <tr>
          <td height="40" colspan="3" align="left" valign="middle" bgcolor="#E3E3E3" class="black11"><div align="justify">Photo must be <span class="black11bold"> 300 X 300 pixel</span> (width X height) <span class="red11"><b>[ .jpg format]</b></span> and file size not more than <span class="red11">100 KB (Minimum 4KB)</span> and Signature must be <span class="black11bold"> 300 X 80 pixel</span> (width X height) <span class="red11"><b>[ .jpg format]</b></span> and file size not more than <span class="red11">60 KB (Minimum 3KB)</span>. <span class="black11bold">Colour Photo is a must</span>. Black &amp; White, Monochrome or Grayscale photo or any image other than photo will not be accepted. This application is capable to detect image with <span class="red11">Facial Recognition</span>.
        </tr>
          <tr>
          <td colspan="3" align="left" valign="middle" bgcolor="#DCDCDC"><table width="100%" border="0" cellpadding="0" cellspacing="0" class="black12">
            <tbody><tr>
              <td width="22%" align="left" valign="middle">&nbsp;Upload Photo</td>
              <td width="7%" align="center" valign="middle">:</td>
              <td width="51%" align="left" valign="middle">
              <label>
                <input name="photo" type="file" class="textfield03" id="photo" onchange="return validateFileExtension(this), previewFile()" required>
              
              </label>
              </td>
              </tr>
              
              
              <tr>
              <td align="left" valign="middle">&nbsp;Upload Signature</td>
              <td align="center" valign="middle">:</td>
              <td align="left" valign="middle"><label>
                <input name="signature" type="file" class="textfield03" id="signature" onchange="return validateFileExtension(this), previewSign()" required>
                
              </label></td>
            </tr>
            <tr>
              <td align="left" valign="middle">&nbsp;Upload Academic Certificates in Zip Format</td>
              <td align="center" valign="middle">:</td>
              <td align="left" valign="middle"><label>
                <input name="zip" type="file" class="textfield03" id="zip" onchange="return validateFileExtension(this), previewSign()" required>
                
              </label></td>
            </tr>
            <tr>
              <td align="left" valign="middle">&nbsp;Payment Slip</td>
              <td align="center" valign="middle">:</td>
              <td align="left" valign="middle"><label>
                <input name="bank_slip" type="file" class="textfield03" id="bank_slip" onchange="return validateFileExtension(this), previewSign()" required>
                
              </label></td>
            </tr>
            <tr>
              <td align="left" valign="middle">&nbsp;NOC(If required)</td>
              <td align="center" valign="middle">:</td>
              <td align="left" valign="middle"><label>
                <input name="NOC" type="file" class="textfield03" id="NOC" onchange="return validateFileExtension(this), previewSign()">
                
              </label></td>
            </tr>
             <tr>
              <td align="left" valign="middle">&nbsp;Proposal Manuscript</td>
              <td align="center" valign="middle">:</td>
              <td align="left" valign="middle"><label>
                <input name="paper_proposal" type="file" class="textfield03" id="paper_proposal" onchange="return validateFileExtension(this), previewSign()">
                
              </label></td>
            </tr>
              <tr>
              <td align="left" valign="middle">&nbsp;Last Institution Character Certificate</td>
              <td align="center" valign="middle">:</td>
              <td align="left" valign="middle"><label>
                <input name="character_certificate" type="file" class="textfield03" id="character_certificate" onchange="return validateFileExtension(this), previewSign()">
                
              </label></td>
            </tr>
            <tr>
              <td align="left" valign="middle">&nbsp;Previous Institution Supervisor Recommendation Letter(Mandatory for PhD)</td>
              <td align="center" valign="middle">:</td>
              <td align="left" valign="middle"><label>
                <input name="supervisor_recommendation" type="file" class="textfield03" id="character_certificate" onchange="return validateFileExtension(this), previewSign()">
                
              </label></td>
            </tr>
            </tbody></table></td>
              </tr>
         

		<tr>
          <td colspan="3" align="center" valign="middle" bgcolor="#A2A2A2"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tbody><tr>
                      <td width="5%" align="center" valign="middle"><input type="checkbox" name="info_yes" id="info_yes" onclick="agreesubmit(this)"></td>
                      <td width="95%" align="left" valign="middle" class="black11i"><div align="justify">I declare that the information provided in this form are correct, true and complete to the best of my knowledge and belief. If any information is found false, incorrect, incomplete or if any ineligibility is detected before or after the examination, any action can be taken against me by the Authority including cancellation of my candidature.</div></td>
                    </tr>
                  </tbody></table></td>
        </tr>
        <tr>
          <td colspan="3" align="center" valign="middle" bgcolor="#A2A2A2"><input type="submit" name="okk" id="okk" value="Submit the Application" ></td>
        </tr>
	<tr>
          <td height="30" colspan="3" align="center" valign="middle" bgcolor="#A2A2A2">
          
        </tr>
      </tbody></table>
    </td>
  </tr>
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tbody>
  <tr>
    <td height="25" align="center" valign="middle" bgcolor="lightgreen" class="black10" width="100%"><font size="1"><b><i>For any inconvenience, please send email to iict@cuet.ac.bd</i></b></font></td>
  </tr>
  <tr>
    <td align="left" valign="top">&nbsp;</td>
  </tr>
  <tr>
    <td align="left" valign="top"><fieldset>
      <table width="100%" border="0" cellpadding="0" cellspacing="0" class="black10">
        <tbody><tr>
          <td width="1%" align="left" valign="middle">&nbsp;</td>
          <td width="100%" align="left" valign="middle"><tt>©2020 Chittagong University of Engineering & Technology All Rights Reserved.</tt></td>
     
          <td width="9%" align="left" valign="middle"></td>
        </tr>
      </tbody></table>
    </fieldset></td>
  </tr>
	
</tbody></table>





</td></tr></tbody></table></form></body></html>