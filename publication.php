  
  <?php session_start();
  die("<b><h3><hr><center>Application Time has Expired!</center></b><hr></h3>");
  $type=$_POST["student_type"];
  
  ?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">


</head>
<body ondragstart="return false" onselectstart="return false" onload="download();">
     <tr>
		<td height="100" align="left	" valign="top" class="green"><table width="100%" border="0" cellpadding="0" cellspacing="0" class="white14bold">
		 <tbody><tr><td height="120" align="left" valign="top" class="green"><table width="100%" border="0" cellpadding="0" cellspacing="0" class="white14">
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
  	<td height="25" align="center" valign="middle" bgcolor="#E3E3E3" class="black12bold">Applicant's Publication and Work Experience:</td>
  </tr>
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
			
 
  <tr>
			  <td colspan="3" align="left" valign="middle" bgcolor="#E3E3E3"><table width="100%" border="0" cellspacing="0" cellpadding="0">
				<tbody><tr>
				  <td width="97%"><table width="100%" border="0" cellpadding="3" cellspacing="0" class="bdr02">
					<tbody><tr>
					  <td height="25" colspan="3" align="left" valign="middle" bgcolor="#A2A2A2" class="black12bold"style="padding-left: 20px;">Research/Publication(Optional)
						
					  <td align="left" valign="middle" bgcolor="#A2A2A2" class="black12">&nbsp;</td>
					</tr>


	

					<tr>
					  <td width="19%" align="left" valign="middle"style="padding-left: 20px;">Research Interest</td>
					  <td width="36%" align="left" valign="middle">
						<input name="research_interest" type="text" class="textfield06" id="research_interest" onkeypress="return alpha(event,letters)" >
					  </td>
					  </tr>
					  <tr>
					 <td width="19%" align="left" valign="middle"style="padding-left: 20px;">Number of Publication</td>
					  <td width="36%" align="left" valign="middle">
					  <input name="number_publication" type="text" class="textfield06" id="number_publication" onkeypress="return alpha(event,letters)" >
					  </td>
					 
					</tr>
	


					  <td align="left" valign="middle"style="padding-left: 20px;">Publication Type, Titles & info <font color="red">[Avoid use of special characters. Ex: Bullet,'s(apostrophe s)]</font> </td>
					  <td align="left" valign="middle">
						<textarea name="pub_info" cols="45" rows="4" class="textfield06" id="pub_info" onkeypress="return alpha(event,letters+numbers+custom)" ></textarea>
						</td></tr>
	<tr>
<?php if($type=='PhD'||$type=='M.Phil'){?>
					  <td width="19%" align="left" valign="middle"style="padding-left: 20px;">Tentative Supervisor name (For PhD only)</td>
					  <td width="36%" align="left" valign="middle">
					  <input name="supervisor_name" type="text" class="textfield06" id="supervisor_name" onkeypress="return alpha(event,letters)" >
					  </td></tr>
					  <tr>
					  <td width="19%" align="left" valign="middle"style="padding-left: 20px;">Tentative Supervisor Email (For PhD only)</td>
					   <td width="36%" align="left" valign="middle">
					  <input name="supervisor_email" type="text" class="textfield06" id="supervisor_email" onkeypress="return alpha(event,letters)" >
					  </td></tr>

<?php }	?>






					</tr>
				  </tbody></table></td>
				  <td width="3%">&nbsp;</td>
				</tr>
              
	<tr>
			  <td colspan="3" align="left" valign="middle" bgcolor="#E3E3E3"><table width="100%" border="0" cellspacing="0" cellpadding="0">
				<tbody><tr>
				  <td width="97%"><table width="100%" border="0" cellpadding="3" cellspacing="0" class="bdr02">
					<tbody><tr>
					  <td height="25" colspan="3" align="left" valign="middle" bgcolor="#A2A2A2" class="black12bold"style="padding-left: 20px;">Latest Professional Experience(Optional)
						<input name="job_no" type="checkbox" id="job_no" value="1" onclick="jfd();">
						<span class="black10">if applicable(Please fill up latest Experience first)
						<input type="hidden" name="job_exp" id="job_exp" value="1">
						</span></td>
					  <td align="left" valign="middle" bgcolor="#A2A2A2" class="black12">&nbsp;</td>
					</tr>


	

					<tr>
					  <td width="19%" align="left" valign="middle"style="padding-left: 20px;">Designation/Post Name</td>
					  <td width="36%" align="left" valign="middle">
						<input name="job_post1" type="text" class="textfield06" id="job_post1" onkeypress="return alpha(event,letters)" >
					  </td>
					  <td width="15%" align="left" valign="middle"style="padding-left: 20px;">Organization Name</td>
					  <td width="30%" align="left" valign="middle">
						<input name="organization1" type="text" class="textfield06" id="organization1" onkeypress="return alpha(event,letters)">
					  </td>
					</tr>
					<tr>
					  <td align="left" valign="middle"style="padding-left: 20px;">Length of Service</td>
					  <td align="left" valign="middle"><select name="t_day1" class="textfield02a" id="t_day1" >
						<option selected="selected" value="0">Day</option>
						<option value="01">01</option><option value="02">02</option><option value="03">03</option><option value="04">04</option><option value="05">05</option><option value="06">06</option><option value="07">07</option><option value="08">08</option><option value="09">09</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option>
						</select>
						 <select name="t_month1" class="textfield02a" id="t_month1" >
						  <option selected="selected" value="0">Month</option>
						  
				<option value="01">01 - January</option>
				<option value="02">02 - February</option>
				<option value="03">03 - March</option>
				<option value="04">04 - April</option>
				<option value="05">05 - May</option>
				<option value="06">06 - June</option>
				<option value="07">07 - July</option>
				<option value="08">08 - August</option>
				<option value="09">09 - September</option>
				<option value="10">10 - October</option>
				<option value="11">11 - November</option>
				<option value="12">12 - December</option>
						  </select>
						<select name="t_year1" class="textfield02a" id="t_year1">
						  <option selected="selected" value="0">Year</option>
						  <option value="1986">1986</option><option value="1987">1987</option><option value="1988">1988</option><option value="1989">1989</option><option value="1990">1990</option><option value="1991">1991</option><option value="1992">1992</option><option value="1993">1993</option><option value="1994">1994</option><option value="1995">1995</option><option value="1996">1996</option><option value="1997">1997</option><option value="1998">1998</option><option value="1999">1999</option><option value="2000">2000</option><option value="2001">2001</option><option value="2002">2002</option><option value="2003">2003</option><option value="2004">2004</option><option value="2005">2005</option><option value="2006">2006</option><option value="2007">2007</option><option value="2008">2008</option><option value="2009">2009</option><option value="2010">2010</option><option value="2011">2011</option><option value="2012">2012</option><option value="2013">2013</option><option value="2014">2014</option><option value="2015">2015</option><option value="2016">2016</option><option value="2017">2017</option><option value="2018">2018</option><option value="2019">2019</option><option value="2020">2020</option>
						  </select>
						<br>

						------------------- to -------------------<br>
						<select name="f_day1" class="textfield02a" id="f_day1" >
						  <option selected="selected" value="0">Day</option>
						  <option value="01">01</option><option value="02">02</option><option value="03">03</option><option value="04">04</option><option value="05">05</option><option value="06">06</option><option value="07">07</option><option value="08">08</option><option value="09">09</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option>
						  </select>
						<select name="f_month1" class="textfield02a" id="f_month1" >
						  <option value="0" selected="selected">Month</option>
						  
				<option value="01">01 - January</option>
				<option value="02">02 - February</option>
				<option value="03">03 - March</option>
				<option value="04">04 - April</option>
				<option value="05">05 - May</option>
				<option value="06">06 - June</option>
				<option value="07">07 - July</option>
				<option value="08">08 - August</option>
				<option value="09">09 - September</option>
				<option value="10">10 - October</option>
				<option value="11">11 - November</option>
				<option value="12">12 - December</option>
						  </select>
						<select name="f_year1" class="textfield02a" id="f_year1">
						  <option selected="selected" value="0">Year</option>
						   <option value="1986">1986</option><option value="1987">1987</option><option value="1988">1988</option><option value="1989">1989</option><option value="1990">1990</option><option value="1991">1991</option><option value="1992">1992</option><option value="1993">1993</option><option value="1994">1994</option><option value="1995">1995</option><option value="1996">1996</option><option value="1997">1997</option><option value="1998">1998</option><option value="1999">1999</option><option value="2000">2000</option><option value="2001">2001</option><option value="2002">2002</option><option value="2003">2003</option><option value="2004">2004</option><option value="2005">2005</option><option value="2006">2006</option><option value="2007">2007</option><option value="2008">2008</option><option value="2009">2009</option><option value="2010">2010</option><option value="2011">2011</option><option value="2012">2012</option><option value="2013">2013</option><option value="2014">2014</option><option value="2015">2015</option><option value="2016">2016</option><option value="2017">2017</option><option value="2018">2018</option><option value="2019">2019</option><option value="2020">2020</option><option value="2021">2021</option>
						  </select>
						  <br>
						  <input name="till_now" type="checkbox" id="till_now" value="1" >
						  <span class="green10">Presently Working
						<br></span></td>


					  <td align="left" valign="middle"style="padding-left: 20px;">Responsibilities</td>
					  <td align="left" valign="middle">
						<textarea name="job_res1" cols="45" rows="4" class="textfield06" id="job_res1" onkeypress="return alpha(event,letters+numbers+custom)" ></textarea>
						</td>
	




					</tr>
				  </tbody></table></td>
				  
			  </tbody></table></td>
			</tr>
        <tr>
          <td colspan="3" align="center" valign="middle" bgcolor="#A2A2A2" class="black11">
            <input type="checkbox" name="info_yes" id="info_yes" onclick="agreesubmit(this)" required>
            The above information is correct and I would like to Submit.</td>
        </tr>
        
		<tr>
          <td colspan="3" align="center" valign="middle" bgcolor="#A2A2A2">
            <input type="submit" name="next" id="next" value="   Next  " ></td>
        </tr>
         </form>
        <form action="academic_info.php" method="post" enctype="multipart/form-data" name="app_form" id="app_form" onsubmit="return app_form_validator(this)">
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
        	<tr>
        	 <td height="30" align="left" valign="middle" bgcolor="#E3E3E3" class="black12"style="padding-left: 20px;padding-top:10px; padding-bottom:10px "><span class="red12"><font color="red">If Back is pressed data will be on the previous page but won't be shown on the field.</span></font></td>
        	 </tr>
        	<tr>
          <td colspan="3" align="center" valign="middle" bgcolor="#A2A2A2">
            <input type="submit" name="back" id="back" value="   Back  " ></td>
        </tr></form>
		<tr>
          <td height="30" colspan="3" align="center" valign="middle" bgcolor="#A2A2A2">
          </td>
        </tr>
      </tbody></table>
    </td>
  </tr>
  <tr>
     </br>
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
          <td width="10%" align="left" valign="middle"></td>
          <td width="9%" align="left" valign="middle"></td>
        </tr>
      </tbody></table>
    </fieldset></td>
  </tr>
</tbody></table>

</td></tr></tbody></table></form></body></html>
