<?php session_start();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<link href="./kgdcl2nd_files/style.css" rel="stylesheet" type="text/css">

</head>
<body ondragstart="return false" onselectstart="return false" onload="download();">
<form action="upload2.php" method="post" enctype="multipart/form-data" name="app_form" id="app_form" onsubmit="return app_form_validator(this)">


			<input type="hidden" name="type_msc_phd" id="type_msc_phd" value="<?php echo $_POST["type_msc_phd"]?>" 	>		
		
			
		<input type="hidden" name="student_type" id="student_type" value="<?php echo $_POST["student_type"] ?>">
			<input type="hidden" name="student_mode" id="student_mode" value="<?php echo $_POST["student_mode"] ?>">
			<input type="hidden" name="name" id="name" value="<?php echo $_POST["name"] ?>">
			<input type="hidden" name="f_name" id="f_name" value="<?php echo $_POST["f_name"] ?>">
			<input type="hidden" name="m_name" id="m_name" value="<?php echo $_POST["m_name"] ?>">
			<input type="hidden" name="dep" id="dep" value="<?php echo $_POST["dep"] ?>">
			
		
			<input type="hidden" name="b_day" id="b_day" value="<?php echo $_POST["b_day"] ?>">
			<input type="hidden" name="b_month" id="b_month" value="<?php echo $_POST["b_month"] ?>">
			<input type="hidden" name="b_year" id="b_year" value="<?php echo $_POST["b_year"] ?>">
			
			<input type="hidden" name="gender" id="gender" value="<?php echo $_POST["gender"] ?>">
			<input type="hidden" name="nation" id="nation" value="<?php echo $_POST["nation"] ?>">
			<input type="hidden" name="religion" id="religion" value="<?php echo $_POST["religion"] ?>">
			<input type="hidden" name="nid" id="nid" value="<?php echo $_POST["nid"] ?>">
	



			<input type="hidden" name="present_care" id="present_care" value="<?php echo $_POST["present_care"] ?>">
			<input type="hidden" name="present_vill" id="present_vill" value="<?php echo $_POST["present_vill"] ?>">
			<input type="hidden" name="present_dist" id="present_dist" value="<?php echo $_POST["present_dist"] ?>">
			<input type="hidden" name="present_upazila" id="present_upazila" value="<?php echo $_POST["present_upazila"] ?>">
			<input type="hidden" name="present_post" id="present_post" value="<?php echo $_POST["present_post"] ?>">
			<input type="hidden" name="present_pcode" id="present_pcode" value="<?php echo $_POST["present_pcode"] ?>">
			
			<input type="hidden" name="permanent_care" id="permanent_care" value="<?php echo $_POST["permanent_care"] ?>">
			<input type="hidden" name="permanent_vill" id="permanent_vill" value="<?php echo $_POST["permanent_vill"] ?>">
			<input type="hidden" name="permanent_dist" id="permanent_dist" value="<?php echo $_POST["permanent_dist"] ?>">
			<input type="hidden" name="permanent_upazila" id="permanent_upazila" value="<?php echo $_POST["permanent_upazila"] ?>">
			<input type="hidden" name="permanent_post" id="permanent_post" value="<?php echo $_POST["permanent_post"] ?>">
			<input type="hidden" name="permanent_pcode" id="permanent_pcode" value="<?php echo $_POST["permanent_pcode"] ?>">
			
			<input type="hidden" name="phone" id="phone" value="<?php echo $_POST["phone"] ?>">
			<input type="hidden" name="email" id="email" value="<?php echo $_POST["email"] ?>">
		


                         <input type="hidden" name="exam1" id="exam1" value="<?php echo $_POST["exam1"] ?>">
			 <input type="hidden" name="roll1" id="roll1" value="<?php echo $_POST["roll1"] ?>">
			 <input type="hidden" name="result1" id="result1" value="<?php echo $_POST["result1"] ?>">
                         <input type="hidden" name="result_gpa1" id="result_gpa1" value="<?php echo $_POST["result_gpa1"] ?>">
			 <input type="hidden" name="institute1" id="institute1" value="<?php echo $_POST["institute1"] ?>">   
			 <input type="hidden" name="subject1" id="subject1" value="<?php echo $_POST["subject1"] ?>">
                         <input type="hidden" name="year1" id="year1" value="<?php echo $_POST["year1"] ?>">
			
			<input type="hidden" name="exam2" id="exam2" value="<?php echo $_POST["exam2"] ?>">
			 <input type="hidden" name="roll1" id="roll2" value="<?php echo $_POST["roll2"] ?>">
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
			 <input type="hidden" name="institute3" id="institute3" value="<?php echo $_POST["institute3"] ?>">                        
                         <input type="hidden" name="year3" id="year3" value="<?php echo $_POST["year3"] ?>">
                         
             <input type="hidden" name="exam4" id="exam4" value="<?php echo $_POST["exam4"] ?>">
			 <input type="hidden" name="roll4" id="roll4" value="<?php echo $_POST["roll4"] ?>">
			 <input type="hidden" name="result4" id="result4" value="<?php echo $_POST["result4"] ?>">
                         <input type="hidden" name="result_gpa4" id="result_gpa4" value="<?php echo $_POST["result_gpa4"] ?>">
                         <input type="hidden" name="subject4" id="subject4" value="<?php echo $_POST["subject4"] ?>">
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
            <input type="hidden" name="ref_mob_no1" id="ref_mob_no1" value="<?php echo $_POST["ref_mob_no1"] ?>">
                         

            <input type="hidden" name="ref_name2" id="ref_name2" value="<?php echo $_POST["ref_name2"] ?>">
            <input type="hidden" name="ref_organization2" id="ref_organization2" value="<?php echo $_POST["ref_organization2"] ?>">
            <input type="hidden" name="ref_mob_no2" id="ref_mob_no2" value="<?php echo $_POST["ref_mob_no2"] ?>">
            

<table width="760" border="0" align="center" cellpadding="0" cellspacing="0">
  <tbody><tr>
    <td height="10" align="center" valign="middle" class="topbg">&nbsp;</td>
  </tr>

    	  <tr>
		<td height="100" align="left	" valign="top" class="blue"><table width="100%" border="0" cellpadding="0" cellspacing="0" class="white14bold">
		 <tbody><tr><td height="120" align="left" valign="top" class="blue"><table width="100%" border="0" cellpadding="0" cellspacing="0" class="white14">
		  <tbody><tr>
			<td bgcolor="Green" height="120"><table width="100%" border="0" cellpadding="3" cellspacing="0" class="black12">
			  <tbody><tr>
				<td width="10%" align="left" valign="middle"><img src="logo.png" width="90" height="90"></td>
				
				<td width="80%" align="center" valign="middle">
				 
				 	<font color="white"><font size="4"><b> CUET PG Admission Preview </b></font><br>
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