<?php  session_start();
die("<b><h3><hr><center>Application Time has Expired!</center></b><hr></h3>");
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">


</head>
<body ondragstart="return false" onselectstart="return false" onload="download();">
<form action="uploads.php" method="post" enctype="multipart/form-data" name="app_form" id="app_form" onsubmit="return app_form_validator(this)">


			<input type="hidden" name="type_msc_phd" id="type_msc_phd" value="<?php echo $_POST["type_msc_phd"]?>" 	>		
		
			
		<input type="hidden" name="student_type" id="student_type" value="<?php echo $_POST["student_type"] ?>">
			<input type="hidden" name="student_mode" id="student_mode" value="<?php echo $_POST["student_mode"] ?>">
			<input type="hidden" name="name" id="name" value="<?php echo $_POST["name"] ?>">
			<input type="hidden" name="f_name" id="f_name" value="<?php echo $_POST["f_name"] ?>">
			<input type="hidden" name="m_name" id="m_name" value="<?php echo $_POST["m_name"] ?>">
			<input type="hidden" name="dep" id="dep" value="<?php echo $_POST["dep"] ?>">
			<input type="hidden" name="data_err" id="data_err" value="<?php echo $_POST["m_name"] ?>">
			
			 
		
			<input type="hidden" name="b_day" id="b_day" value="<?php echo $_POST["b_day"] ?>">
			<input type="hidden" name="b_month" id="b_month" value="<?php echo $_POST["b_month"] ?>">
			<input type="hidden" name="b_year" id="b_year" value="<?php echo $_POST["b_year"] ?>">
			
			
			<input type="hidden" name="nation" id="nation" value="<?php echo $_POST["nation"] ?>">
			<input type="hidden" name="religion" id="religion" value="<?php echo $_POST["religion"] ?>">
			<input type="hidden" name="nid" id="nid" value="<?php echo $_POST["nid"] ?>">
	



			<input type="hidden" name="present_care" id="present_care" value="<?php echo $_POST["present_care"] ?>">
			<input type="hidden" name="present_vill" id="present_vill" value="<?php echo $_POST["present_vill"] ?>">
			<input type="hidden" name="present_dist" id="present_dist" value="<?php echo $_POST["present_dist"] ?>">
			<input type="hidden" name="present_upazila" id="present_upazila" value="<?php echo $_POST["present_upazila"] ?>">
			<input type="hidden" name="present_post" id="present_post" value="<?php echo $_POST["present_post"] ?>">
			<input type="hidden" name="present_pcode" id="present_pcode" value="<?php echo $_POST["present_pcode"] ?>">
			
		
			
			<input type="hidden" name="phone" id="phone" value="<?php echo $_POST["phone"] ?>">
			<input type="hidden" name="email" id="email" value="<?php echo $_POST["email"] ?>">
		    <input type="hidden" name="password" id="password" value="<?php echo $_POST["password"] ?>">
 
 
 
                         <input type="hidden" name="exam1" id="exam1" value="<?php echo $_POST["exam1"] ?>">
			 <input type="hidden" name="roll1" id="roll1" value="<?php echo $_POST["roll1"] ?>">
			 <input type="hidden" name="result1" id="result1" value="<?php echo $_POST["result1"] ?>">
                         <input type="hidden" name="result_gpa1" id="result_gpa1" value="<?php echo $_POST["result_gpa1"] ?>">
			 <input type="hidden" name="institute1" id="institute1" value="<?php echo $_POST["institute1"] ?>">   
			 <input type="hidden" name="subject1" id="subject1" value="<?php echo $_POST["subject1"] ?>">
                         <input type="hidden" name="year1" id="year1" value="<?php echo $_POST["year1"] ?>">
			
			<input type="hidden" name="exam2" id="exam2" value="<?php echo $_POST["exam2"] ?>">
			 <input type="hidden" name="roll2" id="roll2" value="<?php echo $_POST["roll2"] ?>">
			 <input type="hidden" name="result2" id="result2" value="<?php echo $_POST["result2"] ?>">
                         <input type="hidden" name="result_gpa2" id="result_gpa2" value="<?php echo $_POST["result_gpa2"] ?>">
                         <input type="hidden" name="subject2" id="subject3" value="<?php echo $_POST["subject2"] ?>">
			 <input type="hidden" name="institute2" id="institute2" value="<?php echo $_POST["institute2"] ?>">                        
                         <input type="hidden" name="year2" id="year2" value="<?php echo $_POST["year2"] ?>">
                         
                          <input type="hidden" name="exam3" id="exam3" value="<?php echo $_POST["exam3"] ?>">
			 <input type="hidden" name="roll3" id="roll3" value="<?php echo $_POST["roll3"] ?>">
			 <input type="hidden" name="result3" id="result3" value="<?php echo $_POST["result3"] ?>">
                         <input type="hidden" name="result_gpa3" id="result_gpa3" value="<?php echo $_POST["result_gpa3"] ?>">
                         <input type="hidden" name="subject3" id="subject3" value="<?php echo $_POST["subject3"] ?>">
                         <input type="hidden" name="subject33" id="subject33" value="<?php echo $_POST["subject33"] ?>">
			 <input type="hidden" name="institute3" id="institute3" value="<?php echo $_POST["institute3"] ?>">                        
                         <input type="hidden" name="year3" id="year3" value="<?php echo $_POST["year3"] ?>">
                         
             <input type="hidden" name="exam4" id="exam4" value="<?php echo $_POST["exam4"] ?>">
			 <input type="hidden" name="roll4" id="roll4" value="<?php echo $_POST["roll4"] ?>">
			 <input type="hidden" name="result4" id="result4" value="<?php echo $_POST["result4"] ?>">
                         <input type="hidden" name="result_gpa4" id="result_gpa4" value="<?php echo $_POST["result_gpa4"] ?>">
                         <input type="hidden" name="subject4" id="subject4" value="<?php echo $_POST["subject4"] ?>">
                         <input type="hidden" name="subject44" id="subject3" value="<?php echo $_POST["subject44"] ?>">
			 <input type="hidden" name="institute4" id="institute4" value="<?php echo $_POST["institute4"] ?>">                        
                         <input type="hidden" name="year4" id="year4" value="<?php echo $_POST["year4"] ?>">
			
                
                
            	<input type="hidden" name="research_interest" id="research_interest" value="<?php echo $_POST["research_interest"] ?>">
			<input type="hidden" name="supervisor_name" id="supervisor_name" value="<?php echo $_POST["supervisor_name"] ?>">
            <input type="hidden" name="supervisor_email" id="supervisor_email" value="<?php echo $_POST["supervisor_email"] ?>">
            <?php echo $_POST["supervisor_email"];?>
			<input type="hidden" name="number_publication" id="number_publication" value="<?php echo $_POST["number_publication"] ?>">
			<input type="hidden" name="pub_info" id="pub_info" value="<?php echo $_POST["pub_info"] ?>">

    
		
			
			<input type="hidden" name="job_post1" id="job_post1" value="<?php echo $_POST["job_post1"] ?>">
			<input type="hidden" name="organization1" id="organization1" value="<?php echo $_POST["organization1"] ?>">

			<input type="hidden" name="t_day1" id="t_day1" value="<?php echo $_POST["t_day1"] ?>">
			<input type="hidden" name="t_month1" id="t_month1" value="<?php echo $_POST["t_month1"] ?>">
            <input type="hidden" name="t_year1" id="t_year1" value="<?php echo $_POST["t_year1"] ?>">

            	<input type="hidden" name="f_day1" id="f_day1" value="<?php echo $_POST["f_day1"] ?>">
			<input type="hidden" name="f_month1" id="f_month1" value="<?php echo $_POST["f_month1"] ?>">
            <input type="hidden" name="f_year1" id="f_year1" value="<?php echo $_POST["f_year1"] ?>">
            <input type="hidden" name="job_res1" id="job_res1" value="<?php echo $_POST["job_res1"] ?>">
            
            
            
            <input type="hidden" name="ref_name1" id="ref_name1" value="<?php echo $_POST["ref_name1"] ?>">
            <input type="hidden" name="ref_organization1" id="ref_organization1" value="<?php echo $_POST["ref_organization1"] ?>">
            <input type="hidden" name="ref_email1" id="ref_mob_no1" value="<?php echo $_POST["ref_email1"] ?>">
                         

            <input type="hidden" name="ref_name2" id="ref_name2" value="<?php echo $_POST["ref_name2"] ?>">
            <input type="hidden" name="ref_organization2" id="ref_organization2" value="<?php echo $_POST["ref_organization2"] ?>">
            <input type="hidden" name="ref_email2" id="ref_mob_no2" value="<?php echo $_POST["ref_email2"] ?>">
            

<table width="760" border="0" align="center" cellpadding="0" cellspacing="0">
  <tbody><tr>
    <td height="10" align="center" valign="middle" class="topbg">&nbsp;</td>
  </tr>

    	  <tr>
		<td height="100" align="left	" valign="top" class="blue"><table width="100%" border="0" cellpadding="0" cellspacing="0" class="white14bold">
		 <tbody><tr><td height="120" align="left" valign="top" class="blue"><table width="100%" border="0" cellpadding="0" cellspacing="0" class="white14">
		  <tbody><tr>
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
		</tbody></table></td>
		 </tr>
    <tr>
				        <td height="30" align="left" valign="middle" bgcolor="#38B003">


					<table border="1" bordercolor="White" cellpadding="8" cellspacing="0" class="#FF0000">
						<tbody><tr>

						  <td width="107" align="middle" valign="middle"><a href="preview2.php" class="link-home"><font color="white">Dashboard</font></td> 
						  <td width="107" align="middle" valign="middle"><a href="index.php" class="link-home"><font color="white">Apply</font></a></td>
                                       	  
						  <td width="107" align="middle" valign="middle"><a href="cwl.php" class="link-home"><font color="white">Log In</font></a></td>
						  <td width="107" align="middle" valign="middle"><a href="http://www.cuet.ac.bd/admission" class="link-home"><font color="white">Notice</font></a></td>
						  <td width="107" align="middle" valign="middle"><a href="help.pdf" class="link-home"><font color="white">Help</font></a></td>  


						</tr>
					</tbody></table>
				</td>
			</tr>
  
  <tr>
  	<td height="25" align="center" valign="middle" bgcolor="#E3E3E3" class="black12bold">Application Preview</td>
  </tr>






  <tr>
    <td align="left" valign="top">
      <table width="100%" border="0" cellpadding="5" cellspacing="0" class="black12">
        <tbody><tr>
          <td width="23%" align="left" valign="middle" bgcolor="lightgreen">Name of the Admission</td>
          <td width="7%" align="center" valign="middle" bgcolor="lightgreen">:</td>
          <td width="70%" align="left" valign="middle" bgcolor="lightgreen"><?php echo $_POST["type_msc_phd"]?></td>
        </tr>
<tr>
          <td width="23%" align="left" valign="middle" bgcolor="lightgreen">Admission Type</td>
          <td width="7%" align="center" valign="middle" bgcolor="lightgreen">:</td>
          <td width="70%" align="left" valign="middle" bgcolor="lightgreen"><?php echo $_POST["student_type"]?></td>
        </tr>
<tr>
          <td width="23%" align="left" valign="middle" bgcolor="lightgreen">Mode of Admission</td>
          <td width="7%" align="center" valign="middle" bgcolor="lightgreen">:</td>
          <td width="70%" align="left" valign="middle" bgcolor="lightgreen"><?php echo $_POST["student_mode"]?></td>
        </tr>
              <tr>
          <td align="left" valign="middle" bgcolor="#E3E3E3">Applicant's Name</td>
          <td align="center" valign="middle" bgcolor="#E3E3E3">:</td>
          <td align="left" valign="middle" bgcolor="#E3E3E3" class="black11"><?php echo $_POST["name"]?></td>
       </tr>

        <tr>
          <td align="left" valign="middle" bgcolor="#E3E3E3">Father's Name</td>
          <td align="center" valign="middle" bgcolor="#E3E3E3">:</td>
          <td align="left" valign="middle" bgcolor="#E3E3E3" class="black11"><?php echo $_POST["f_name"]?></td>
        </tr>

        <tr>
          <td align="left" valign="middle" bgcolor="#E3E3E3">Mother's Name</td>
          <td align="center" valign="middle" bgcolor="#E3E3E3">:</td>
          <td align="left" valign="middle" bgcolor="#E3E3E3" class="black11"><?php echo $_POST["m_name"]?></td>
        </tr>
<tr>
    <tr>
          <td align="left" valign="middle" bgcolor="#DCDCDC">Date of Birth</td>
          <td align="center" valign="middle" bgcolor="#DCDCDC">:</td>
          <td align="left" valign="middle" bgcolor="#DCDCDC" class="black11"><?php echo $_POST["b_day"]."/".$_POST["b_month"]."/".$_POST["b_year"] ?></td>
        </tr>

       <!-- <tr>
          <td align="left" valign="middle" bgcolor="#DCDCDC">Gender</td>
         <td align="center" valign="middle" bgcolor="#DCDCDC">:</td>
          <td align="left" valign="middle" bgcolor="#DCDCDC" class="black11"><?php echo $_POST["gender"] ?></td>
        </tr>
            !-->
        <tr>
          <td align="left" valign="middle" bgcolor="#DCDCDC">Nationality</td>
          <td align="center" valign="middle" bgcolor="#DCDCDC">:</td>
          <td align="left" valign="middle" bgcolor="#DCDCDC"><table width="100%" border="0" cellpadding="0" cellspacing="0" class="black12">
            <tbody><tr>
              <td width="20%" height="23" align="left" valign="middle" class="black11"><?php echo $_POST["nation"] ?></td>
              <td width="5%" align="left" valign="middle">&nbsp;</td>
            </tr>

          </tbody></table></td>
        </tr>
	


         <tr>
          <td align="left" valign="middle" bgcolor="#DCDCDC">National ID</td>
          <td align="center" valign="middle" bgcolor="#DCDCDC">:</td>
          <td align="left" valign="middle" bgcolor="#DCDCDC" class="black11"><?php echo $_POST["nid"] ?></td>
        </tr>



         
		<tr>
          <td align="left" valign="middle" bgcolor="#E3E3E3">Religion</td>
          <td align="center" valign="middle" bgcolor="#E3E3E3">:</td>
          <td align="left" valign="middle" bgcolor="#E3E3E3" class="black11"><?php echo $_POST["religion"] ?></td>
        </tr>
		
        <tr>
          <td colspan="3" align="left" valign="middle" bgcolor="#DCDCDC" class="black12"><table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tbody><tr>
              <td width="50%" align="left" valign="middle" class="bdr02"><table width="100%" border="0" cellpadding="3" cellspacing="0" class="black12">
                <tbody><tr>
                  <td colspan="2" height="25" align="left" valign="middle" bgcolor="lightgreen">Mailing/Present Address</td>
                </tr>
		
                <tr>
                  <td width="47%" align="left" valign="middle">Care of:</td>
                  <td width="53%" align="left" valign="middle" claspasss="black11"><?php echo $_POST["present_care"] ?></td>
                   </tr>
                <tr>
                  <td align="left" valign="middle">
				  Village/Town/<br>
                  Road/House/Flat:</td>
                  <td width="53%" align="left" valign="middle" class="black11"><?php echo $_POST["present_vill"] ?></td>
                </tr>
                <tr>
                  <td align="left" valign="middle">District:</td>
                  <td align="left" valign="middle" class="black11"><?php echo $_POST["present_dist"] ?></td>
                </tr>
                <tr>
                  <td align="left" valign="middle">P.S./Upazila:</td>
                  <td align="left" valign="middle" class="black11"><?php echo $_POST["present_upazila"] ?></td>
                </tr>
                <tr>
                  <td align="left" valign="middle">Post Office:</td>
                  <td align="left" valign="middle" class="black11"><?php echo $_POST["present_post"] ?></td>
                </tr>
                <tr>
                  <td align="left" valign="middle">Post Code:</td>
                  <td align="left" valign="middle" class="black11"><?php echo $_POST["present_pcode"] ?></td>
                </tr>
              </tbody></table></td>
              <td align="left" valign="middle">&nbsp;</td>
          
        <tr bgcolor="#E3E3E3">
          <td align="left" valign="middle">Contact Mobile</td>
          <td align="center" valign="middle">:</td>
          <td align="left" valign="middle">
		  <table width="100%" border="0" cellpadding="0" cellspacing="0" class="black12">
            <tbody><tr>
              <td width="37%" height="23" align="left" valign="middle" class="red12bold"><?php echo $_POST["phone"] ?></td>
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
          <td align="left" valign="middle"><?php echo $_POST["email"] ?></td>
        </tr>


        <tr>
          <td colspan="3" align="left" valign="middle" bgcolor="lightgreen">Academic Qualifications:</td>
        </tr>
        <tr>
          <td colspan="3" align="left" valign="middle" bgcolor="#DCDCDC" class="black14"><table width="100%" border="0" cellpadding="3" cellspacing="1" class="black12">
            <tbody><tr>
              <td width="20%" height="25" align="center" valign="middle" bgcolor="#A2A2A2">Examination</td>
              <td width="20%" height="25" align="center" valign="middle" bgcolor="#A2A2A2">Board/University</td>
              <td width="10%" height="25" align="center" valign="middle" bgcolor="#A2A2A2">Roll</td>
              <td width="10%" height="25" align="center" valign="middle" bgcolor="#A2A2A2">Result</td>
              <td width="20%" height="25" align="center" valign="middle" bgcolor="#A2A2A2">Group/Subject</td>
              <td width="10%" height="25" align="center" valign="middle" bgcolor="#A2A2A2">Year</td>
              
            </tr>


	<tr class="black11">
				  <td height="25" align="center" valign="middle" bgcolor="#C7C7C7"><?php echo $_POST["exam1"] ?></td>
				  <td height="25" align="center" valign="middle" bgcolor="#C7C7C7"><?php echo $_POST["institute1"] ?></td>
				  <td height="25" align="center" valign="middle" bgcolor="#C7C7C7"><?php echo $_POST["roll1"] ?></td>
				  <td height="25" align="center" valign="middle" bgcolor="#C7C7C7"><?php echo $_POST["result1"]."/".$_POST["result_gpa1"] ?> </td>
				  <td height="25" align="center" valign="middle" bgcolor="#C7C7C7"><?php echo $_POST["subject1"] ?></td>
				  <td height="25" align="center" valign="middle" bgcolor="#C7C7C7"><?php echo $_POST["year1"] ?></td>
				  <td align="center" valign="middle" bgcolor="#C7C7C7">&nbsp;</td>
				</tr><tr class="black11">
				  <td height="25" align="center" valign="middle" bgcolor="#B9B9B9"><?php echo $_POST["exam2"] ?></td>
				  <td height="25" align="center" valign="middle" bgcolor="#B9B9B9"><?php echo $_POST["institute2"] ?></td>
				  <td height="25" align="center" valign="middle" bgcolor="#B9B9B9"><?php echo $_POST["roll2"] ?></td>
				  <td height="25" align="center" valign="middle" bgcolor="#B9B9B9"><?php echo $_POST["result2"]."/".$_POST["result_gpa2"] ?>  </td>
				  <td height="25" align="center" valign="middle" bgcolor="#B9B9B9"><?php echo $_POST["subject2"] ?></td>
				  <td height="25" align="center" valign="middle" bgcolor="#B9B9B9"><?php echo $_POST["year2"] ?></td>
				  <td align="center" valign="middle" bgcolor="#B9B9B9">&nbsp;</td>
				</tr><tr class="black11">
				  <td height="25" align="center" valign="middle" bgcolor="#C7C7C7"><?php echo $_POST["exam3"] ?></td>
				  <td height="25" align="center" valign="middle" bgcolor="#C7C7C7"><?php echo $_POST["institute3"];$_POST["subject33"] ?></td>
				  <td height="25" align="center" valign="middle" bgcolor="#C7C7C7"><?php echo $_POST["roll3"] ?></td>
				  <td height="25" align="center" valign="middle" bgcolor="#C7C7C7"><?php echo $_POST["result3"]."/".$_POST["result_gpa3"] ?> </td>
				  <td height="25" align="center" valign="middle" bgcolor="#C7C7C7"><?php echo $_POST["subject3"] ?></td>
				  <td height="25" align="center" valign="middle" bgcolor="#C7C7C7"><?php echo $_POST["year3"] ?></td>
				</tr>
				<tr class="black11">
				  <td height="25" align="center" valign="middle" bgcolor="#B9B9B9"><?php echo $_POST["exam4"] ?></td>
				  <td height="25" align="center" valign="middle" bgcolor="#B9B9B9"><?php echo $_POST["institute4"] ?></td>
				  <td height="25" align="center" valign="middle" bgcolor="#B9B9B9"><?php echo $_POST["roll4"] ?></td>
				  <td height="25" align="center" valign="middle" bgcolor="#B9B9B9"><?php echo $_POST["result4"]."/".$_POST["result_gpa4"] ?>  </td>
				  <td height="25" align="center" valign="middle" bgcolor="#B9B9B9"><?php echo $_POST["subject4"] ?></td>
				  <td height="25" align="center" valign="middle" bgcolor="#B9B9B9"><?php echo $_POST["year4"] ?></td>
				  <td align="center" valign="middle" bgcolor="#B9B9B9">&nbsp;</td>
				</tr>
	
        
            

        </tbody></table></td>
        </tr>




    
        
	
	<tr>
       </tr><tr>
          <td colspan="3" align="left" valign="middle" bgcolor="lightgreen">Research/Publication:</td>
        </tr>



   <tr>
          <td colspan="3" align="left" valign="middle" bgcolor="#DCDCDC" class="black14">
      
    <table width="100%" border="0" cellpadding="3" cellspacing="1" class="black12">
            <tbody><tr>
              <td width="20%" height="25" align="center" valign="middle" bgcolor="#A2A2A2">Research Interest</td>
              <td width="20%" height="25" align="center" valign="middle" bgcolor="#A2A2A2">Tentative Supervisor name (For PhD only)</td>
              <td width="20%" height="25" align="center" valign="middle" bgcolor="#A2A2A2">Tentative Supervisor Email (For PhD only)</td>
              <td width="10%" height="25" align="center" valign="middle" bgcolor="#A2A2A2">Number of Publication</td>
              <td width="20%" height="25" align="center" valign="middle" bgcolor="#A2A2A2">Publication Type, Titles & info</td>
              
    </tr><tr>
              <td width="10%" height="25" align="center" valign="middle" bgcolor="#A2A2A2"><?php echo $_POST["research_interest"] ?></td>
              <td width="20%" height="25" align="center" valign="middle" bgcolor="#A2A2A2"><?php echo $_POST["supervisor_name"] ?></td>
              <td width="20%" height="25" align="center" valign="middle" bgcolor="#A2A2A2"><?php echo $_POST["supervisor_email"] ?></td>
              <td width="10%" height="25" align="center" valign="middle" bgcolor="#A2A2A2"><?php echo $_POST["number_publication"] ?></td>
              <td width="20%" height="25" align="center" valign="middle" bgcolor="#A2A2A2"><?php echo $_POST["pub_info"] ?></td>


	
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
              <td width="20%" height="25" align="center" valign="middle" bgcolor="#A2A2A2">Organization Name</td>
              <td width="20%" height="25" align="center" valign="middle" bgcolor="#A2A2A2">Post Name</td>
              <td width="10%" height="25" align="center" valign="middle" bgcolor="#A2A2A2">Responsibilities</td>
              <td width="20%" height="25" align="center" valign="middle" bgcolor="#A2A2A2">Start Date</td>
              <td width="10%" height="25" align="center" valign="middle" bgcolor="#A2A2A2">End Date</td>
             
         
    </tr><tr>
              <td width="20%" height="25" align="center" valign="middle" bgcolor="#A2A2A2"><?php echo $_POST["organization1"] ?></td>
              <td width="20%" height="25" align="center" valign="middle" bgcolor="#A2A2A2"><?php echo $_POST["job_post1"] ?></td>
              <td width="10%" height="25" align="center" valign="middle" bgcolor="#A2A2A2"><?php echo $_POST["job_res1"] ?></td>



              <td width="20%" height="25" align="center" valign="middle" bgcolor="#A2A2A2"><?php echo $_POST["t_day1"]."/".$_POST["t_month1"]."/".$_POST["t_year1"] ?></td>
              <td width="10%" height="25" align="center" valign="middle" bgcolor="#A2A2A2"><?php echo $_POST["f_day1"]."/".$_POST["f_month1"]."/".$_POST["f_year1"] ?><br></td>
      
         
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
              <td width="20%" height="25" align="center" valign="middle" bgcolor="#A2A2A2">Reference Name</td>
              <td width="20%" height="25" align="center" valign="middle" bgcolor="#A2A2A2">Referee Organization Name, Address</td>
              <td width="10%" height="25" align="center" valign="middle" bgcolor="#A2A2A2">Mobile No</td>
             
             
         
    </tr><tr>
              <td width="20%" height="25" align="center" valign="middle" bgcolor="#A2A2A2"><?php echo $_POST["ref_name1"] ?></td>
              <td width="20%" height="25" align="center" valign="middle" bgcolor="#A2A2A2"><?php echo $_POST["ref_organization1"] ?></td>
              <td width="10%" height="25" align="center" valign="middle" bgcolor="#A2A2A2"><?php echo $_POST["ref_email1"] ?></td>



             
      
         
            </tr>
<tr>
              <td width="20%" height="25" align="center" valign="middle" bgcolor="#A2A2A2"><?php echo $_POST["ref_name2"] ?></td>
              <td width="20%" height="25" align="center" valign="middle" bgcolor="#A2A2A2"><?php echo $_POST["ref_organization2"] ?></td>
              <td width="10%" height="25" align="center" valign="middle" bgcolor="#A2A2A2"><?php echo $_POST["ref_email2"] ?></td>



             
      
         
            </tr>



  

    </tbody></table></td>
    
            <tr>
   </tr><tr>
      <td align="left" valign="top" bgcolor="#F1DCC9">

      <table width="230" border="0" align="center" cellpadding="0" cellspacing="0">

      <tbody></tbody></table></td>
	   </tr>


	
            </tbody></table></td>
              </tr>
         
     
		<tr>
          <td colspan="3" align="center" valign="middle" bgcolor="#A2A2A2"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tbody><tr>
                      <td width="5%" align="center" valign="middle"><input type="checkbox" name="info_yes" id="info_yes" onclick="agreesubmit(this)" required></td>
                      <td width="95%" align="left" valign="middle" class="black11i"><div align="justify">I declare that the information provided in this form are correct, true and complete to the best of my knowledge and belief. If any information is found false, incorrect, incomplete or if any ineligibility is detected before or after the examination, any action can be taken against me by the Authority including cancellation of my candidature.</div></td>
                    </tr>
                  </tbody></table></td>
        </tr>
        <tr>
          <td colspan="3" align="center" valign="middle" bgcolor="#A2A2A2"><input type="submit" name="next" id="next" value="Next" ></td>
        </tr>
        </form>
                <tr>
          <td colspan="3" align="left" valign="middle" bgcolor="#DCDCDC" class="black12"><table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tbody><tr>
              <td width="97%" align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
        <form action="reference.php" method="post" enctype="multipart/form-data" name="app_form" id="app_form" onsubmit="return app_form_validator(this)">
		<input type="hidden" name="type_msc_phd" id="type_msc_phd" value="<?php echo $_POST["type_msc_phd"]?>" 	>		
		
			
		<input type="hidden" name="student_type" id="student_type" value="<?php echo $_POST["student_type"] ?>">
			<input type="hidden" name="student_mode" id="student_mode" value="<?php echo $_POST["student_mode"] ?>">
			<input type="hidden" name="name" id="name" value="<?php echo $_POST["name"] ?>">
			<input type="hidden" name="f_name" id="f_name" value="<?php echo $_POST["f_name"] ?>">
			<input type="hidden" name="m_name" id="m_name" value="<?php echo $_POST["m_name"] ?>">
			<input type="hidden" name="dep" id="dep" value="<?php echo $_POST["dep"] ?>">
			<input type="hidden" name="data_err" id="data_err" value="<?php echo $_POST["m_name"] ?>">
			
			 
		
			<input type="hidden" name="b_day" id="b_day" value="<?php echo $_POST["b_day"] ?>">
			<input type="hidden" name="b_month" id="b_month" value="<?php echo $_POST["b_month"] ?>">
			<input type="hidden" name="b_year" id="b_year" value="<?php echo $_POST["b_year"] ?>">
			
			
			<input type="hidden" name="nation" id="nation" value="<?php echo $_POST["nation"] ?>">
			<input type="hidden" name="religion" id="religion" value="<?php echo $_POST["religion"] ?>">
			<input type="hidden" name="nid" id="nid" value="<?php echo $_POST["nid"] ?>">
	

		<input type="hidden" name="email" id="email" value="<?php echo $_POST["email"] ?>">
		    <input type="hidden" name="password" id="password" value="<?php echo $_POST["password"] ?>">

			<input type="hidden" name="present_care" id="present_care" value="<?php echo $_POST["present_care"] ?>">
			<input type="hidden" name="present_vill" id="present_vill" value="<?php echo $_POST["present_vill"] ?>">
			<input type="hidden" name="present_dist" id="present_dist" value="<?php echo $_POST["present_dist"] ?>">
			<input type="hidden" name="present_upazila" id="present_upazila" value="<?php echo $_POST["present_upazila"] ?>">
			<input type="hidden" name="present_post" id="present_post" value="<?php echo $_POST["present_post"] ?>">
			<input type="hidden" name="present_pcode" id="present_pcode" value="<?php echo $_POST["present_pcode"] ?>">
			
			<input type="hidden" name="permanent_care" id="permanent_care" value="<?php echo $_POST["permanent_care"] ?>">
		
			<input type="hidden" name="phone" id="phone" value="<?php echo $_POST["phone"] ?>">
   <input type="hidden" name="exam1" id="exam1" value="<?php echo $_POST["exam1"] ?>">
			 <input type="hidden" name="roll1" id="roll1" value="<?php echo $_POST["roll1"] ?>">
			 <input type="hidden" name="result1" id="result1" value="<?php echo $_POST["result1"] ?>">
                         <input type="hidden" name="result_gpa1" id="result_gpa1" value="<?php echo $_POST["result_gpa1"] ?>">
			 <input type="hidden" name="institute1" id="institute1" value="<?php echo $_POST["institute1"] ?>">   
			 <input type="hidden" name="subject1" id="subject1" value="<?php echo $_POST["subject1"] ?>">
                         <input type="hidden" name="year1" id="year1" value="<?php echo $_POST["year1"] ?>">
			
			<input type="hidden" name="exam2" id="exam2" value="<?php echo $_POST["exam2"] ?>">
			 <input type="hidden" name="roll2" id="roll2" value="<?php echo $_POST["roll2"] ?>">
			 <input type="hidden" name="result2" id="result2" value="<?php echo $_POST["result2"] ?>">
                         <input type="hidden" name="result_gpa2" id="result_gpa2" value="<?php echo $_POST["result_gpa2"] ?>">
                         <input type="hidden" name="subject2" id="subject3" value="<?php echo $_POST["subject2"] ?>">
			 <input type="hidden" name="institute2" id="institute2" value="<?php echo $_POST["institute2"] ?>">                        
                         <input type="hidden" name="year2" id="year2" value="<?php echo $_POST["year2"] ?>">
                         			
 <input type="hidden" name="exam3" id="exam3" value="<?php echo $_POST["exam3"] ?>">
			 <input type="hidden" name="roll3" id="roll3" value="<?php echo $_POST["roll3"] ?>">
			 <input type="hidden" name="result3" id="result3" value="<?php echo $_POST["result3"] ?>">
                         <input type="hidden" name="result_gpa3" id="result_gpa3" value="<?php echo $_POST["result_gpa3"] ?>">
                         <input type="hidden" name="subject3" id="subject3" value="<?php echo $_POST["subject3"] ?>">
                         <input type="hidden" name="subject33" id="subject33" value="<?php echo $_POST["subject33"] ?>">
			 <input type="hidden" name="institute3" id="institute3" value="<?php echo $_POST["institute3"] ?>">                        
                         <input type="hidden" name="year3" id="year3" value="<?php echo $_POST["year3"] ?>">
                         
             <input type="hidden" name="exam4" id="exam4" value="<?php echo $_POST["exam4"] ?>">
			 <input type="hidden" name="roll4" id="roll4" value="<?php echo $_POST["roll4"] ?>">
			 <input type="hidden" name="result4" id="result4" value="<?php echo $_POST["result4"] ?>">
                         <input type="hidden" name="result_gpa4" id="result_gpa4" value="<?php echo $_POST["result_gpa4"] ?>">
                         <input type="hidden" name="subject4" id="subject4" value="<?php echo $_POST["subject4"] ?>">
                         <input type="hidden" name="subject44" id="subject3" value="<?php echo $_POST["subject44"] ?>">
			 <input type="hidden" name="institute4" id="institute4" value="<?php echo $_POST["institute4"] ?>">                        
                         <input type="hidden" name="year4" id="year4" value="<?php echo $_POST["year4"] ?>">
                         	<input type="hidden" name="research_interest" id="research_interest" value="<?php echo $_POST["research_interest"] ?>">
			<input type="hidden" name="supervisor_name" id="supervisor_name" value="<?php echo $_POST["supervisor_name"] ?>">

			<input type="hidden" name="number_publication" id="number_publication" value="<?php echo $_POST["number_publication"] ?>">
			<input type="hidden" name="pub_info" id="pub_info" value="<?php echo $_POST["pub_info"] ?>">

    
		
			
			<input type="hidden" name="job_post1" id="job_post1" value="<?php echo $_POST["job_post1"] ?>">
			<input type="hidden" name="organization1" id="organization1" value="<?php echo $_POST["organization1"] ?>">

			<input type="hidden" name="t_day1" id="t_day1" value="<?php echo $_POST["t_day1"] ?>">
			<input type="hidden" name="t_month1" id="t_month1" value="<?php echo $_POST["t_month1"] ?>">
            <input type="hidden" name="t_year1" id="t_year1" value="<?php echo $_POST["t_year1"] ?>">

            	<input type="hidden" name="f_day1" id="f_day1" value="<?php echo $_POST["f_day1"] ?>">
			<input type="hidden" name="f_month1" id="f_month1" value="<?php echo $_POST["f_month1"] ?>">
            <input type="hidden" name="f_year1" id="f_year1" value="<?php echo $_POST["f_year1"] ?>">
            <input type="hidden" name="job_res1" id="job_res1" value="<?php echo $_POST["job_res1"] ?>">
            
            
            
            <input type="hidden" name="ref_name1" id="ref_name1" value="<?php echo $_POST["ref_name1"] ?>">
            <input type="hidden" name="ref_organization1" id="ref_organization1" value="<?php echo $_POST["ref_organization1"] ?>">
            <input type="hidden" name="ref_email1" id="ref_mob_no1" value="<?php echo $_POST["ref_email1"] ?>">
                         

            <input type="hidden" name="ref_name2" id="ref_name2" value="<?php echo $_POST["ref_name2"] ?>">
            <input type="hidden" name="ref_organization2" id="ref_organization2" value="<?php echo $_POST["ref_organization2"] ?>">
            <input type="hidden" name="ref_email2" id="ref_mob_no2" value="<?php echo $_POST["ref_email2"] ?>">
             <tr>
    
        	 <td height="30" align="left" valign="middle" bgcolor="#E3E3E3" class="black12"style="padding-left: 20px;padding-top:10px; padding-bottom:10px "><span class="red12"><font color="red">If Back is pressed data will be on the previous page but won't be shown on the field.</span></font></td>
        	 </tr>
        	<tr>
          <td colspan="3" align="center" valign="middle" bgcolor="#A2A2A2">
            <input type="submit" name="back" id="back" value="   Back  " ></td>
        </tr></form>
	<tr>
          <td height="30" colspan="3" align="center" valign="middle" bgcolor="#A2A2A2">
          
        </tr>
      </tbody></table>
    </td>
  </tr>
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
          <td width="80%" align="left" valign="middle"><tt>©2021 Chittagong University of Engineering & Technology All Rights Reserved.</tt></td>
     
          <td width="9%" align="left" valign="middle"></td>
        </tr>
      </tbody></table>
    </fieldset></td>
  </tr>
	
</tbody></table>





</td></tr></tbody></table></body></html>
