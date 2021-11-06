<?php session_start();
die("<b><h3><hr><center>Application Time has Expired!</center></b><hr></h3>");
$type=$_POST["student_type"];
echo $_POST["email"];
//if(isset($_POST['back'])){
  //  header ('Location: index.php');
    
//}


?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">


</head>
<body ondragstart="return false" onselectstart="return false" onload="download();">
     <tr>
		<td height="100" align="left" valign="top" class="blue"><table width="100%" border="0" cellpadding="0" cellspacing="0" class="white14bold">
		 <tbody><tr><td height="120" align="left" valign="top" class="blue"><table width="100%" border="0" cellpadding="0" cellspacing="0" class="white14">
		  <tbody><tr>
			<td bgcolor="#283655" height="120"><table width="100%" border="0" cellpadding="3" cellspacing="0" class="black12">
			  <tbody><tr>
				<td width="20%" align="right" valign="middle"><img src="logo.png" width="90" height="120"></td>
				
				<td width="90%" align="center" valign="middle">
				 
				 	<font color="white"><font size="6"><font face="Times New Roman"><b> CUET Post-Graduate Admission</b></font></font></font><br>
				 	 <font color="white"><font size="2"></font><br>
					<!--<font color="white"><font size="2"><b><a href="www.cuet.ac.bd" target="_blank"><mark>www.cuet.ac.bd<mark></mark></mark></a></b></font><br>-->
           
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
  	<td height="25" align="center" valign="middle" bgcolor="#E3E3E3" class="black12bold">Applicant Academic Qualification:</td>
  </tr>
<form action="publication.php" method="post" enctype="multipart/form-data" name="app_form" id="app_form" onsubmit="return app_form_validator(this)">


			<input type="hidden" name="type_msc_phd" id="type_msc_phd" value="<?php echo $_POST["type_msc_phd"]?>" 	>		
		<?php $type=$_POST["student_type"];?>
			
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
	
             		<input type="hidden" name="email" id="email" value="<?php echo $_POST["email"]; ?>">
		    <input type="hidden" name="password" id="password" value="<?php echo $_POST["password"] ?>">

           
			<input type="hidden" name="present_care" id="present_care" value="<?php echo $_POST["present_care"] ?>">
			<input type="hidden" name="present_vill" id="present_vill" value="<?php echo $_POST["present_vill"] ?>">
			<input type="hidden" name="present_dist" id="present_dist" value="<?php echo $_POST["present_dist"] ?>">
			<input type="hidden" name="present_upazila" id="present_upazila" value="<?php echo $_POST["present_upazila"] ?>">
			<input type="hidden" name="present_post" id="present_post" value="<?php echo $_POST["present_post"] ?>">
			<input type="hidden" name="present_pcode" id="present_pcode" value="<?php echo $_POST["present_pcode"] ?>">
			
			<input type="hidden" name="permanent_care" id="permanent_care" value="<?php echo $_POST["permanent_care"] ?>">
		
			<input type="hidden" name="phone" id="phone" value="<?php echo $_POST["phone"] ?>">
			
 
 
        <tr>
          <td colspan="3" align="left" valign="middle" bgcolor="#DCDCDC" class="black12"><table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tbody><tr>
              <td width="97%" align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tbody><tr>
                  <td width="50%" height="30" align="left" valign="middle"><b>Academic Qualifications:</b></td>
                  <td width="1%" height="30" align="left" valign="middle">&nbsp;</td>
                  <td width="49%" height="30" align="left" valign="middle">&nbsp;</td>
                </tr>
                
 <tr>
                  <td align="left" valign="top" class="bdr02"><table width="100%" border="0" cellpadding="3" cellspacing="0">
                    <tbody><tr>
                      <td height="25" bgcolor="#A2A2A2" class="black12bold">SSC or Equivalent Level <!--<span class="red12">*--></td>
                    </tr>
                    <tr>
                      <td><table width="100%" border="0" cellpadding="3" cellspacing="0" class="black12">
                        <tbody><tr>
                          <td width="37%" align="left" valign="middle">Examination</td>
                          <td width="63%" align="left" valign="middle"><select name="exam1" class="textfield06a" id="exam1" onchange="get_sub_ssc(this), changeVisibility_ssc(this)" required>
                            <option value="0" selected="selected">Select One</option>
			     					<option value="S.S.C">S.S.C</option><option value="Dakhil">Dakhil</option><option value="S.S.C Vocational">S.S.C Vocational</option><option value="O Level/Cambridge">O Level/Cambridge</option><option value="S.S.C Equivalent">S.S.C Equivalent</option>
                          </select></td>
                        </tr>
                        <tr>
                          <td align="left" valign="middle">Board</td>
                          <td align="left" valign="middle"><select name="institute1" class="textfield06a" id="institute1">
                            <option value="0" selected="selected">Select One</option>
                            <option value="Dhaka">Dhaka</option><option value="Cumilla">Cumilla</option><option value="Rajshahi">Rajshahi</option><option value="Jashore">Jashore</option><option value="Chittagong">Chittagong</option><option value="Barishal">Barishal</option><option value="Sylhet">Sylhet</option><option value="Dinajpur">Dinajpur</option><option value="Madrasah">Madrasah</option><option value="Mymensingh">Mymensingh</option><option value="Cambridge International - IGCE">Cambridge International - IGCE</option><option value="Bangladesh Tech Edu Board (BTEB)">Edexcel International</option><option value="Bangladesh Tech Edu Board (BTEB)">Bangladesh Tech Edu Board (BTEB)</option><option value="Others">Others</option>
                          </select></td>
                        </tr>
						 <tr>
                          <td height="25" align="left" valign="middle">Roll No</td> 
                          <td height="25" align="left" valign="middle"><input name="roll1" type="text" class="textfield07b" id="roll1" onkeypress="return alpha(event,numbers)"></td>
                        </tr>
                        <tr>
                          <td align="left" valign="middle">Result</td>
                          <td align="left" valign="middle"><table width="100%" border="0" cellpadding="0" cellspacing="1" class="black12" style="margin-bottom:1px;">
                            <tbody><tr>
                              <td width="55%" align="left" valign="middle"><select name="result1" class="textfield07" id="result1" onchange="Show_GpaTextBox(this.id,&#39;result_gpa1&#39;);"required>
                                <option value="0" selected="selected">Select</option>
                                <option value="1st Division">1st Division</option>
                                <option value="2nd Division">2nd Division</option>
                                <option value="3rd Division">3rd Division</option>
                                <option value="GPA(out of 4)">GPA(out of 4)</option>
								<option value="GPA(out of 5)">GPA(out of 5)</option>
																
                              </select></td>
                              <td width="25%" align="left" valign="middle" id="TextBox_Marks1">GPA:
							  <input name="result_gpa1" class="textfield_gpa" id="result_gpa1"  onkeypress="return alpha(event,flot)" size="4" maxlength="4" required></td>
                              <td align="left" valign="middle" id="Caption_Marks1" class="black11">&nbsp;</td>
                            </tr>
                          </tbody></table></td>
                        </tr>
                        <tr>
                          <td align="left" valign="middle">Group/Subject</td>
                          <td align="left" valign="middle"><select name="subject1" class="textfield07" id="subject1">
                            <option value="0" selected="selected">Select One</option>
                            <option value="Science" selected="selected">Science</option>
                            <option value="Commerce" selected="selected">Commerce</option>\
        
                            <option value="Humanities" selected="selected">Humanities</option>
                            <option value="Others" selected="selected">Others</option>
                          </select></td>
                        </tr>
                        <tr>
                          <td align="left" valign="middle">Passing Year</td>
                          <td align="left" valign="middle"><select name="year1" class="textfield07" id="year1" required>
                            <option value="0" selected="selected">Select One</option>
                            <option value="1960">1960</option><option value="1961">1961</option><option value="1962">1962</option><option value="1963">1963</option><option value="1964">1964</option><option value="1965">1965</option><option value="1966">1966</option><option value="1967">1967</option><option value="1968">1968</option><option value="1969">1969</option><option value="1970">1970</option><option value="1971">1971</option><option value="1972">1972</option><option value="1973">1973</option><option value="1974">1974</option><option value="1975">1975</option><option value="1976">1976</option><option value="1977">1977</option><option value="1978">1978</option><option value="1979">1979</option><option value="1980">1980</option><option value="1981">1981</option><option value="1982">1982</option><option value="1983">1983</option><option value="1984">1984</option><option value="1985">1985</option><option value="1986">1986</option><option value="1987">1987</option><option value="1988">1988</option><option value="1989">1989</option><option value="1990">1990</option><option value="1991">1991</option><option value="1992">1992</option><option value="1993">1993</option><option value="1994">1994</option><option value="1995">1995</option><option value="1996">1996</option><option value="1997">1997</option><option value="1998">1998</option><option value="1999">1999</option><option value="2000">2000</option><option value="2001">2001</option><option value="2002">2002</option><option value="2003">2003</option><option value="2004">2004</option><option value="2005">2005</option><option value="2006">2006</option><option value="2007">2007</option><option value="2008">2008</option><option value="2009">2009</option><option value="2010">2010</option><option value="2011">2011</option><option value="2012">2012</option><option value="2013">2013</option><option value="2014">2014</option><option value="2015">2015</option><option value="2016">2016</option><option value="2017">2017</option><option value="2018">2018</option><option value="2019">2019</option><option value="2020">2020</option>
                          </select></td>
                        </tr>
                      </tbody></table></td>
                    </tr>
                  </tbody></table></td>
                  <td rowspan="2" align="left" valign="middle">&nbsp;</td>
                  <td class="bdr02" align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="3">
                    <tbody><tr>
                      <td height="25" bgcolor="#A2A2A2" class="black12bold">HSC or Equivalent Level <!--<span class="red12">*</span>--></td>
                    </tr>
                    <tr>
                      <td><table width="100%" border="0" cellpadding="3" cellspacing="0" class="black12">
                        <tbody><tr>
                          <td width="37%" align="left" valign="middle">Examination</td>
                          <td width="63%" align="left" valign="middle"><select name="exam2" class="textfield06a" id="exam2" onchange="get_sub_hsc(this), changeVisibility_hsc(this)">
                            <option value="0" selected="selected">Select One</option>
							<option value="H.S.C">H.S.C</option><option value="Alim">Alim</option><option value="Business Management">Business Management</option><option value="Diploma Engineering">Diploma Engineering</option><option value="A Level/Sr. Cambridge">A Level/Sr. Cambridge</option><option value="H.S.C Equivalent">H.S.C Equivalent</option><option value="Others">Others</option>
                          </select></td>
                        </tr>
                        <tr>
                          <td align="left" valign="middle">Board</td>
                          <td align="left" valign="middle"><select name="institute2" class="textfield06a" id="institute2">
                            <option value="0" selected="selected">Select One</option>
							<option value="Dhaka">Dhaka</option><option value="Cumilla">Cumilla</option><option value="Rajshahi">Rajshahi</option><option value="Jashore">Jashore</option><option value="Chittagong">Chittagong</option><option value="Barishal">Barishal</option><option value="Sylhet">Sylhet</option><option value="Dinajpur">Dinajpur</option><option value="Madrasah">Madrasah</option><option value="Mymensingh">Mymensingh</option><option value="Cambridge International - IGCE">Cambridge International - IGCE</option><option value="Bangladesh Tech Edu Board (BTEB)">Edexcel International</option><option value="Bangladesh Tech Edu Board (BTEB)">Bangladesh Tech Edu Board (BTEB)</option><option value="Others">Others</option>
                          </select></td>
                        </tr>
						<tr><td height="25" align="left" valign="middle">Roll No</td>
                        <td height="25" align="left" valign="middle"><input name="roll2" type="text" class="textfield07b" id="roll2" onkeypress="return alpha(event,numbers)"></td>
                        </tr>
                        <tr>
                          <td align="left" valign="middle">Result</td>
                          <td align="left" valign="middle"><table width="100%" border="0" cellpadding="0" cellspacing="1" class="black12" style="margin-bottom:1px;">
                            <tbody><tr>
                              <td width="55%" align="left" valign="middle"><select name="result2" class="textfield07" id="result2" onchange="Show_GpaTextBox(this.id,&#39;result_gpa2&#39;);">
                                <option value="0" selected="selected">Select</option>
												<option value="1st Division">1st Division</option>
                                <option value="2nd Division">2nd Division</option>
                                <option value="3rd Division">3rd Division</option>
                                <option value="GPA(out of 4)">GPA(out of 4)</option>
												<option value="GPA(out of 5)">GPA(out of 5)</option>
												
                              </select></td>
                              <td width="25%" align="left" valign="middle" id="TextBox_Marks2">GPA:<input name="result_gpa2" class="textfield_gpa" id="result_gpa2" onkeypress="return alpha(event,flot)" size="4" maxlength="4" required></td>
                            <td width="20%" align="left" valign="middle" id="Caption_Marks2" class="black11">&nbsp;</td>
							</tr>
                          </tbody></table></td>
                        </tr>
                        <tr>
                          <td align="left" valign="middle">Group/Subject </td>
                          <td align="left" valign="middle"><select name="subject2" class="textfield07" id="subject2">
                            <option value="0" selected="selected">Select One</option>
                            <option value="Science" selected="selected">Science</option>
                            <option value="Commerce" selected="selected">Commerce</option>\
        
                            <option value="Humanities" selected="selected">Humanities</option>
                            <option value="Others" selected="selected">Others</option>
                          </select></td>
                        </tr>
                        <tr>
                          <td align="left" valign="middle">Passing Year</td>
                          <td align="left" valign="middle"><select name="year2" class="textfield07" id="year2">
                            <option value="0" selected="selected">Select One</option>
                            <option value="1960">1960</option><option value="1961">1961</option><option value="1962">1962</option><option value="1963">1963</option><option value="1964">1964</option><option value="1965">1965</option><option value="1966">1966</option><option value="1967">1967</option><option value="1968">1968</option><option value="1969">1969</option><option value="1970">1970</option><option value="1971">1971</option><option value="1972">1972</option><option value="1973">1973</option><option value="1974">1974</option><option value="1975">1975</option><option value="1976">1976</option><option value="1977">1977</option><option value="1978">1978</option><option value="1979">1979</option><option value="1980">1980</option><option value="1981">1981</option><option value="1982">1982</option><option value="1983">1983</option><option value="1984">1984</option><option value="1985">1985</option><option value="1986">1986</option><option value="1987">1987</option><option value="1988">1988</option><option value="1989">1989</option><option value="1990">1990</option><option value="1991">1991</option><option value="1992">1992</option><option value="1993">1993</option><option value="1994">1994</option><option value="1995">1995</option><option value="1996">1996</option><option value="1997">1997</option><option value="1998">1998</option><option value="1999">1999</option><option value="2000">2000</option><option value="2001">2001</option><option value="2002">2002</option><option value="2003">2003</option><option value="2004">2004</option><option value="2005">2005</option><option value="2006">2006</option><option value="2007">2007</option><option value="2008">2008</option><option value="2009">2009</option><option value="2010">2010</option><option value="2011">2011</option><option value="2012">2012</option><option value="2013">2013</option><option value="2014">2014</option><option value="2015">2015</option><option value="2016">2016</option><option value="2017">2017</option><option value="2018">2018</option><option value="2019">2019</option><option value="2020">2020</option>
                          </select></td>
                        </tr>
                      </tbody></table></td>
                    </tr>
                  </tbody></table></td>
                </tr>
                <tr>
                  <td align="left" valign="middle" class="gap01">&nbsp;</td>
                  <td align="left" valign="middle" class="gap01">&nbsp;</td>
                </tr>
              </tbody></table></td>
              <td width="3%" align="left" valign="top">&nbsp;</td>
            </tr>





            <tr>
              <td align="left" valign="top" class="bdr02"><table width="100%" border="0" cellpadding="3" cellspacing="0" class="black12">
                <tbody><tr>
                  <td height="25" colspan="3" align="left" valign="middle" bgcolor="#A2A2A2" class="black12bold">Graduation/Equivalent Level</td>
                  <td align="left" valign="middle" bgcolor="#A2A2A2" class="subblack12">&nbsp;</td>
                </tr>
                <tr>
                  <td width="19%" align="left" valign="top">Examination</td>
                  <td width="34%" align="left" valign="middle">
                    <select name="exam3" class="textfield06a" id="exam3" required>
                      <option value="0" selected="selected">Select One</option>
                      <option value="B.Sc(Engineering)">B.Sc(Engineering)</option><option value="Honors">Honors</option>
                    </select>
		<td width="19%" align="left" valign="top">Subject</td>
                  <td width="34%" align="left" valign="middle"><select name="subject3" class="textfield06a" id="subject3" onchange="get_sub_gra(this), Show_ExamTextBox(this.id,&#39;other_exam3&#39;), changeVisibility3(this);" required>
                      <option value="0" selected="selected">Select One</option>
                      <option value="Computer Science & Engineering">Department of Computer Science & Engineering</option><option value="Electrical & Electronics Engineering">Department of Electrical & Electronics Engineering</option></option><option value="Mechanical Engineering">Department of Mechanical Engineering</option><option value="Civil Engineering">Department of Civil Engineering</option><option value="Disaster Engineering and Management">Department of Disaster Engineering and Management</option><option value="Physics">Department of Physics</option><option value="Chemistry">Department of Chemistry</option><option value="Mathematics">Department of Mathematics</option><option value="Electronics & Communication Engineering">Electronics & Communication Engineering</option><option value="Electronics & TeleCommunication Engineering">Electronics & TeleCommunication Engineering</option><option value="Information & Communication Technology">Information & Communication Technology</option><option value="Petroleum & Mining Engineering">Petroleum & Mining Engineering</option><option value="Urban & Regional Planning">Urban & Regional Planning</option><option value="Mechatronics and Industrial Engineering">Mechatronics and Industrial Engineering</option>
                    </select>
                  </td>
                  <td width="17%" align="left" valign="top">Result</td>
                  <td width="30%" align="left" valign="top">
                    <table width="100%" border="0" cellpadding="0" cellspacing="1" class="black12" style="margin-bottom:1px;">
			                    <tbody><tr>
                      <td width="55%" align="left" valign="middle">
                        <select name="result3" class="textfield07" id="result3" onchange="Show_GpaTextBox(this.id,&#39;result_gpa3&#39;);">
                          	<option value="0" selected="selected">Select One</option>
                          	<option value="1st Class">1st Class</option>
							<option value="2nd Class">2nd Class</option>
							<option value="3rd Class">3rd Class</option>
							<option value="CGPA(out of 4)">CGPA(out of 4)</option>
							<option value="CGPA(out of 5)">CGPA(out of 5)</option>
						

							

                        </select>
                      </td>
                      <td width="25%" align="left" valign="middle" id="TextBox_Marks3">
		    <input name="result_gpa3" class="textfield_gpa" id="result_gpa3" onkeypress="return alpha(event,flot)" size="4" maxlength="4"></td>
                    <td width="20%" align="left" valign="middle" id="Caption_Marks3" class="black11">&nbsp;</td>
					</tr>
                  </tbody></table>
                  </td>
                </tr>
                <tr>
                  <td align="left" valign="top">Passed Subject/Degree <img src="" border="0" align="absmiddle" name="loading3" style=""></td>
                  <td align="left" valign="top">
                    <select name="subject" class="textfield06a" id="sub" onchange="Show_SubTextBox(this.id,&#39;other_subject3&#39;);">
                      <option value="0" selected="selected">Type if Passed Department & Institution was not in the list</option>
                    </select>
		<input name="subject33" type="text" class="textfield06" id="other_subject3"  onkeypress="return alpha(event,letters)">
                  </td>
                  <td align="left" valign="top">Passing Year</td>
                  <td align="left" valign="top">
                    <select name="year3" class="textfield07" id="year3" required>
                      <option value="0" selected="selected">Select One</option>
                      <option value="1960">1960</option><option value="1961">1961</option><option value="1962">1962</option><option value="1963">1963</option><option value="1964">1964</option><option value="1965">1965</option><option value="1966">1966</option><option value="1967">1967</option><option value="1968">1968</option><option value="1969">1969</option><option value="1970">1970</option><option value="1971">1971</option><option value="1972">1972</option><option value="1973">1973</option><option value="1974">1974</option><option value="1975">1975</option><option value="1976">1976</option><option value="1977">1977</option><option value="1978">1978</option><option value="1979">1979</option><option value="1980">1980</option><option value="1981">1981</option><option value="1982">1982</option><option value="1983">1983</option><option value="1984">1984</option><option value="1985">1985</option><option value="1986">1986</option><option value="1987">1987</option><option value="1988">1988</option><option value="1989">1989</option><option value="1990">1990</option><option value="1991">1991</option><option value="1992">1992</option><option value="1993">1993</option><option value="1994">1994</option><option value="1995">1995</option><option value="1996">1996</option><option value="1997">1997</option><option value="1998">1998</option><option value="1999">1999</option><option value="2000">2000</option><option value="2001">2001</option><option value="2002">2002</option><option value="2003">2003</option><option value="2004">2004</option><option value="2005">2005</option><option value="2006">2006</option><option value="2007">2007</option><option value="2008">2008</option><option value="2009">2009</option><option value="2010">2010</option><option value="2011">2011</option><option value="2012">2012</option><option value="2013">2013</option><option value="2014">2014</option><option value="2015">2015</option><option value="2016">2016</option><option value="2017">2017</option><option value="2018">2018</option><option value="2019">2019</option><option value="2020">2020</option><option value="2021">2021</option>
                    </select>
                  </td>
                </tr>
                <tr>
                  <td align="left" valign="top">University/Institute</td>
                  <td align="left" valign="middle"><select name="institute3" class="textfield06a" id="institute3" onchange="Show_UniTextBox(this.id,&#39;other_institute3&#39;);" required>
                        <option value="0" selected="selected">Select One</option>
			<option value="Bangabandhu Sheikh Mujibur Rahman Science and Technology University">Bangabandhu Sheikh Mujibur Rahman Science and Technology University</option><option value="111">Bangabandhu Sheikh Mujib Medical University</option><option value="112">Bangabandhu Sheikh Mujibur Rahman Agricultural University</option><option value="113">Bangladesh Agricultural University,Mymensingh</option><option value="Bangladesh Open University">Bangladesh Open University</option><option value="Bangladesh University of Engineering &amp; Technology">Bangladesh University of Engineering &amp; Technology</option><option value="Bangladesh University of Professionals">Bangladesh University of Professionals</option><option value="Chittagong University of Engineering &amp; Technology">Chittagong University of Engineering &amp; Technology</option><option value="118">Chattogram Veterinary and Animal Sciences University</option><option value="Comilla University">Comilla University</option><option value="Dhaka University">Dhaka University</option><option value="Dhaka University of Engineering &amp; Technology">Dhaka University of Engineering &amp; Technology</option><option value="Hajee Mohammad Danesh Science &amp; Technology University">Hajee Mohammad Danesh Science &amp; Technology University</option><option value="Islamic University, Kushtia">Islamic University, Kushtia </option><option value="124">Jagannath University</option><option value="Jahangirnagar University">Jahangirnagar University</option><option value="Jatiya Kabi Kazi Nazrul Islam University">Jatiya Kabi Kazi Nazrul Islam University</option><option value="Jessore Science &amp; Technology University">Jessore Science &amp; Technology University</option><option value="Khulna University">Khulna University</option><option value="Khulna University of Engineering and Technology">Khulna University of Engineering and Technology</option><option value="Mawlana Bhashani Science &amp; Technology University">Mawlana Bhashani Science &amp; Technology University</option><option value="National University">National University</option><option value="Noakhali Science &amp; Technology University">Noakhali Science &amp; Technology University</option><option value="Pabna University of Science and Technology">Pabna University of Science and Technology</option><option value="Patuakhali Science And Technology University">Patuakhali Science And Technology University</option><option value="Rajshahi University">Rajshahi University</option><option value="Rajshahi University of Engineering &amp; Technology">Rajshahi University of Engineering &amp; Technology</option><option value="Rangpur University">Rangpur University</option><option value="Shahjalal University of Science &amp; Technology">Shahjalal University of Science &amp; Technology</option><option value="139">Sher-e-Bangla Agricultural University</option><option value="140">Sylhet Agricultural University</option><option value="University of Chittagong">University of Chittagong</option><option value="142">Faridpur Engineering College</option><option value="143">Mymensingh Engineering College</option><option value="Sylhet Engineering College">Sylhet Engineering College</option><option value="145">Barishal Engineering College</option><option value="Ahsanullah University of Science and Technology">Ahsanullah University of Science and Technology</option><option value="223">America Bangladesh University</option><option value="American International University Bangladesh">American International University Bangladesh</option><option value="225">ASA University Bangladesh</option><option value="Asian University of Bangladesh">Asian University of Bangladesh</option><option value="227">Atish Dipankar University of Science &amp; Technology</option><option value="228">Bangladesh Islami University</option><option value="Bangladesh University">Bangladesh University</option><option value="Bangladesh University of Business &amp; Technology (BUBT)">Bangladesh University of Business &amp; Technology (BUBT)</option><option value="BGC Trust University Bangladesh, Chittagong">BGC Trust University Bangladesh, Chittagong</option><option value="BRAC University">BRAC University</option><option value="233">Central Women's University</option><option value="City University">City University</option><option value="Daffodil International University">Daffodil International University</option><option value="236">Darul Ihsan University</option><option value="237">Dhaka International University</option><option value="East Delta University , Chittagong">East Delta University , Chittagong</option><option value="East West University">East West University</option><option value="Eastern University"<>Eastern University</option><option value="2ono Bishwabidyalay">Gono Bishwabidyalay</option><option value="242">Green University of Bangladesh</option><option value="243">IBAIS University</option><option value="Independent University, Bangladesh">Independent University, Bangladesh</option><option value="International Islamic University, Chittagong">International Islamic University, Chittagong</option><option value="International University of Business Agriculture &amp; Technology">International University of Business Agriculture &amp; Technology</option><option value="Leading University, Sylhet">Leading University, Sylhet</option><option value="248">Manarat International University</option><option value="249">Metropolitan University, Sylhet</option><option value="North South University">North South University</option><option value="251">Northern University Bangladesh</option><option value="Premier University, Chittagong">Premier University, Chittagong</option><option value="Presidency University">Presidency University</option><option value="254">Prime University</option><option value="Primeasia University">Primeasia University</option><option value="256">Queens University</option><option value="257">Royal University of Dhaka</option><option value="258">Shanto Mariam University of Creative Technology</option><option value="Southeast University">Southeast University</option><option value="Southern University of Bangladesh , Chittagong">Southern University of Bangladesh , Chittagong</option><option value="Stamford University, Bangladesh">Stamford University, Bangladesh</option><option value="262">State University Of Bangladesh</option><option value="263">Sylhet International University, Sylhet</option><option value="264">The Millenium University</option><option value="265">The Peoples University of Bangladesh</option><option value="The University of Asia Pacific">The University of Asia Pacific</option><option value="267">United International University</option><option value="268">University of Development Alternative</option><option value="University of Information Technology &amp; Sciences">University of Information Technology &amp; Sciences</option><option value="University of Liberal Arts Bangladesh">University of Liberal Arts Bangladesh</option><option value="University of Science &amp; Technology, Chittagong">University of Science &amp; Technology, Chittagong</option><option value="272">University of South Asia</option><option value="Uttara University">Uttara University</option><option value="274">Victoria University of Bangladesh</option><option value="World University of Bangladesh">World University of Bangladesh</option><option value="333">Asian University for Women</option><option value="Islamic University of Technology">Islamic University of Technology</option><option value="335">South Asian University</option><option value="401">Dhaka Medical College</option><option value="402">Sir Salimullah Medical College</option><option value="403">Mymensingh Medical College</option><option value="404">Chattogram Medical College</option><option value="405">Rajshahi Medical College</option><option value="406">MAG Osmani Medical College</option><option value="407">Sher-E-Bangla Medical College</option><option value="408">Rangpur Medical College</option><option value="409">Comilla Medical College</option><option value="410">Khulna Medical College</option><option value="411">Shaheed Ziaur Rahman Medical College</option><option value="412">Dinajpur Medical College</option><option value="413">Faridpur Medical College</option><option value="414">Shaheed Suhrawardy Medical College</option><option value="415">Pabna Medical College</option><option value="416">Noakhali Medical College</option><option value="417">Cox's Bazar Medical College</option><option value="418">Jessore Medical College</option><option value="419">Shaheed Nazrul Islam Medical College</option><option value="420">Kushtia Medical College</option><option value="421">Satkhira Medical College</option><option value="422">Sheikh Sayera Khatun Medical College, Gopalganj</option><option value="501">Feni Medical College,Feni</option><option value="502">Gono Bishwabidyalay, Savar, Dhaka</option><option value="503">Ad-din Womens Medical College, Dhaka</option><option value="504">Anwer Khan Modern Medical College, Dhaka</option><option value="505">Bangladesh Medical College</option><option value="506">Jalalabad Rageb-Rabeya Medical College,Sylhet</option><option value="507">BGC Trust Medical College, Chittagong</option><option value="508">Central Medical College, Comilla</option><option value="509">Chottagram Ma-O-Shishu Hospital Medical College</option><option value="510">Community Based Medical College (cbmc), Mymensingh</option><option value="511">Community Medical College, Dhaka</option><option value="512">Delta Medical College, Dhaka</option><option value="513">Dhaka National Medical College</option><option value="514">Durra Samad Rahman Red Crescent Womens Medical College, Sylhet</option><option value="515">Eastern Medical College, Comilla</option><option value="516">Enam Medical College, Savar, Dhaka</option><option value="517">Sylhet Women`s Medical College, Sylhet</option><option value="518">Green Life Medical College,Dhaka</option><option value="519">Holy Family Red Crescent Medical College, Dhaka</option><option value="520">Ibrahim Medical College, Dhaka</option><option value="521">Ibn Sina Medical College, Dhaka</option><option value="522">International Medical College, Gazipur</option><option value="523">Islami Bank Medical College, Rajshahi</option><option value="524">Jahurul Islam Medical College, Kishoregonj</option><option value="525">Jalalabad Ragib-Rabeya Medical College Sylhet</option><option value="526">Khawja Yunus Ali Medical College, Sirajganj</option><option value="527">Kumudini Medical College, Tangail</option><option value="528">Labaid Medical College[6] Dhanmondi, Dhaka</option><option value="529">Maulana Bhasani Medical College</option><option value="530">Medical College for Women and Hospital, Dhaka</option><option value="531">Nightingale Medical College, Dhaka</option><option value="532">North Bengal Medical College, Sirajganj</option><option value="533">North East Medical College, Sylhet</option><option value="534">Northern International Medical College, Dhaka</option><option value="535">Northern Private Medical College, Rangpur</option><option value="536">Popular Medical College &amp; Hospital, Dhaka</option><option value="537">Prime Medical College, Rangpur</option><option value="538">Rangpur Community Hospital Medical College</option><option value="539">Sahabuddin Medical College and Hospital</option><option value="540">Samaj Vittik Medical College, Mirzanagar, Savar</option><option value="541">Shahabuddin Medical College, Dhaka</option><option value="542">Z. H. Sikder Women`s Medical College</option><option value="543">Southern Medical College, Chittagong</option><option value="544">Tairunnessa Memorial Medical College, Gazipur</option><option value="545">TMSS Medical College,Bogra</option><option value="546">University Of Science and Technology Chittagong. IAMS</option><option value="547">Uttara Adhunik Medical College,Dhaka</option><option value="Military Institute of Science and Technology (MIST)">Military Institute of Science and Technology (MIST)</option><option value="Sonargaon University">Sonargaon University</option><option value="600">Anwer Khan Modern University </option><option value="601">Bandarban University </option><option value="602">Bangabandhu Sheikh Mujibur Rahman Digital University</option><option value="603">Bangabandhu Sheikh Mujibur Rahman Maritime University</option><option value="604">Bangabandhu Sheikh Mujibur Rahman Science &amp; Technology University</option><option value="605">Bangamata Sheikh Fojilatunnesa Mujib Science and Technology University</option><option value="606">Bangladesh Agricultural University</option><option value="Bangladesh Army International University of Science &amp; Technology(BAIUST) ,Comilla">Bangladesh Army International University of Science &amp; Technology(BAIUST) ,Comilla</option><option value="Bangladesh Army University of Engineering and Technology (BAUET), Qadirabad">Bangladesh Army University of Engineering and Technology (BAUET), Qadirabad</option><option value="Bangladesh Army University of Science and Technology(BAUST), Saidpur">Bangladesh Army University of Science and Technology(BAUST), Saidpur </option><option value="610">Bangladesh University of Health Sciences</option><option value="Bangladesh University of Textiles">Bangladesh University of Textiles </option><option value="612">Barishal University</option><option value="Begum Rokeya University">Begum Rokeya University</option><option value="614">BGMEA University of Fashion &amp; Technology(BUFT)</option><option value="615">Canadian University of Bangladesh</option><option value="616">CCN University of Science &amp; Technology</option><option value="Chattogram Independent University">Chattogram Independent University </option><option value="618">Chattogram Medical University</option><option value="619">Cox's Bazar International University</option><option value="620">East Delta University </option><option value="621">European University of Bangladesh</option><option value="622">Exim Bank Agricultural University, Bangladesh</option><option value="623">Fareast International University</option><option value="Feni University">Feni University</option><option value="625">First Capital University of Bangladesh</option><option value="626">German University Bangladesh</option><option value="627">Global University Bangladesh</option><option value="628">Hamdard University Bangladesh</option><option value="629">Ishakha International University, Bangladesh</option><option value="630">Islamic Arabic University</option><option value="Islamic University">Islamic University</option><option value="632">Jessore University of Science &amp; Technology</option><option value="633">Khulna Agricultural University</option><option value="634">Khwaja Yunus Ali University </option><option value="635">N.P.I University of Bangladesh</option><option value="636">North Bengal International University</option><option value="637">North East University Bangladesh</option><option value="638">North Western University</option><option value="639">Northern University of Business &amp; Technology, Khulna</option><option value="640">Notre Dame University Bangladesh</option><option value="Port City International University">Port City International University</option><option value="642">Rabindra Maitree University, Kushtia</option><option value="643">Rabindra University, Bangladesh</option><option value="644">Rajshahi Medical University </option><option value="Rajshahi Science &amp; Technology University (RSTU), Natore">Rajshahi Science &amp; Technology University (RSTU), Natore</option><option value="646">Ranada Prasad Shaha University</option><option value="Rangamati Science and Technology University">Rangamati Science and Technology University</option><option value="648">Sheikh Fazilatunnesa Mujib University</option><option value="Sheikh Hasina University">Sheikh Hasina University </option><option value="Sonargaon University">Sonargaon University</option><option value="651">Sylhet Medical University</option><option value="652">The International University of Scholars</option><option value="653">Times University, Bangladesh</option><option value="University of Creative Technology, Chittagong">University of Creative Technology, Chittagong</option><option value="655">University of Global Village</option><option value="656">Varendra University</option><option value="657">Z.H Sikder University of Science &amp; Technology</option><option value="658">Z.N.R.F. University of Management Sciences</option><option value="999">Others</option>
                      </select>
					  <input name="other_institute3" type="text" class="textfield06" id="other_institute3" style="VISIBILITY: hidden" onkeypress="return alpha(event,letters)"></td>
                  <td align="left" valign="top">Course Duration</td>
                  <td align="left" valign="top">
                      <select name="duration3" class="textfield07" id="duration3">
                      <option value="0" selected="selected">Select One</option>
                      <!--<option value="02">02 Years</option>-->
                      <option value="03">03 Years</option>
                      <option value="04">04 Years</option>
                      <option value="05">05 Years</option>
											
                    </select>
                  </td>
                </tr>
              </tbody></table>
			  </td>
              <td align="left" valign="top">&nbsp;</td>
            </tr>
			<tr class="gap01">
              <td align="left" valign="top">&nbsp;</td>
              <td align="left" valign="top">&nbsp;</td>
            </tr>
            
			<?php if($type=='PhD'||$type=='M.Phil'){
  		       ?>
  		       
            <tr>
              <td align="left" valign="top" class="bdr02"><table width="100%" border="0" cellpadding="3" cellspacing="0" class="black12">
                <tbody><tr>
                  <td height="25" colspan="3" align="left" valign="middle" bgcolor="#A2A2A2" class="black12bold">Post Graduation/Equivalent Level</td>
                  <td align="left" valign="middle" bgcolor="#A2A2A2" class="subblack12">&nbsp;</td>
                </tr>
                <tr>
                  <td width="19%" align="left" valign="top">Examination</td>
                  <td width="34%" align="left" valign="middle">
                    <select name="exam4" class="textfield06a" id="exam4" required>
                      <option value="0" selected="selected">Select One</option>
                      <option value="M.Sc. Engineering">M.Sc. Engineering</option>
                                <option value="M.Eng">M.Eng</option>
                                <option value="M.Phil">M.Phil</option>
                                <option value="M.Sc.">M.Sc.</option>
                                <option value="M.Sc. & M.Phil">M.Sc. & M.Phil</option>
                                
                    </select>
		<td width="19%" align="left" valign="top">Subject</td>
                  <td width="34%" align="left" valign="middle"><select name="subject4" class="textfield06a" id="subject4" onchange="get_sub_gra(this), Show_ExamTextBox(this.id,&#39;other_exam3&#39;), changeVisibility3(this);" required>
                       <option value="0" selected="selected">Select One</option>
                      <option value="Computer Science & Engineering">Computer Science & Engineering</option><option value="Electrical & Electronics Engineering">Electrical & Electronics Engineering</option><option value="Electronics & Communication Engineering">Electronics & Communication Engineering</option><option value="Electronics & TeleCommunication Engineering">Electronics & TeleCommunication Engineering</option><option value="Information & Communication Technology">Information & Communication Technology</option><option value="Civil Engineering">Civil Engineering</option><option value="Mechanical Engineering">Mechanical Engineering</option><option value="Petroleum & Mining Engineering">Petroleum & Mining Engineering</option><option value="Urban & Regional Planning">Urban & Regional Planning</option><option value="Physics">Department of Physics</option><option value="Chemistry">Department of Chemistry</option><option value="Mathematics">Department of Mathematics</option>
                    </select>
                  </td>
                  <td width="17%" align="left" valign="top">Result</td>
                  <td width="30%" align="left" valign="top">
                    <table width="100%" border="0" cellpadding="0" cellspacing="1" class="black12" style="margin-bottom:1px;">
			                    <tbody><tr>
                      <td width="55%" align="left" valign="middle">
                        <select name="result4" class="textfield07" id="result4" onchange="Show_GpaTextBox(this.id,&#39;result_gpa3&#39;);">
                          	<option value="0" selected="selected">Select One</option>
                          	<option value="1st Class">1st Class</option>
							<option value="2nd Class">2nd Class</option>
							<option value="3rd Class">3rd Class</option>
							<option value="CGPA(out of 4)">CGPA(out of 4)</option>
							<option value="CGPA(out of 5)">CGPA(out of 5)</option>
						

							

                        </select>
                      </td>
                      <td width="25%" align="left" valign="middle" id="TextBox_Marks3">
		    <input name="result_gpa4" class="textfield_gpa" id="result_gpa4" onkeypress="return alpha(event,flot)" size="4" maxlength="4"></td>
                    <td width="20%" align="left" valign="middle" id="Caption_Marks3" class="black11">&nbsp;</td>
					</tr>
                  </tbody></table>
                  </td>
                </tr>
                <tr>
                  <td align="left" valign="top">Passed Subject/Degree <img src="" border="0" align="absmiddle" name="loading3" style=""></td>
                  <td align="left" valign="top">
                    <select name="subject" class="textfield06a" id="sub" onchange="Show_SubTextBox(this.id,&#39;other_subject3&#39;);">
                      <option value="0" selected="selected">Type if Passed Department & Institution was not in the list</option>
                    </select>
		<input name="subject33" type="text" class="textfield06" id="other_subject3"  onkeypress="return alpha(event,letters)">
                  </td>
                  <td align="left" valign="top">Passing Year</td>
                  <td align="left" valign="top">
                    <select name="year4" class="textfield07" id="year4" required>
                      <option value="0" selected="selected">Select One</option>
                      <option value="1960">1960</option><option value="1961">1961</option><option value="1962">1962</option><option value="1963">1963</option><option value="1964">1964</option><option value="1965">1965</option><option value="1966">1966</option><option value="1967">1967</option><option value="1968">1968</option><option value="1969">1969</option><option value="1970">1970</option><option value="1971">1971</option><option value="1972">1972</option><option value="1973">1973</option><option value="1974">1974</option><option value="1975">1975</option><option value="1976">1976</option><option value="1977">1977</option><option value="1978">1978</option><option value="1979">1979</option><option value="1980">1980</option><option value="1981">1981</option><option value="1982">1982</option><option value="1983">1983</option><option value="1984">1984</option><option value="1985">1985</option><option value="1986">1986</option><option value="1987">1987</option><option value="1988">1988</option><option value="1989">1989</option><option value="1990">1990</option><option value="1991">1991</option><option value="1992">1992</option><option value="1993">1993</option><option value="1994">1994</option><option value="1995">1995</option><option value="1996">1996</option><option value="1997">1997</option><option value="1998">1998</option><option value="1999">1999</option><option value="2000">2000</option><option value="2001">2001</option><option value="2002">2002</option><option value="2003">2003</option><option value="2004">2004</option><option value="2005">2005</option><option value="2006">2006</option><option value="2007">2007</option><option value="2008">2008</option><option value="2009">2009</option><option value="2010">2010</option><option value="2011">2011</option><option value="2012">2012</option><option value="2013">2013</option><option value="2014">2014</option><option value="2015">2015</option><option value="2016">2016</option><option value="2017">2017</option><option value="2018">2018</option><option value="2019">2019</option><option value="2020">2020</option><option value="2021">2021</option>
                    </select>
                  </td>
                </tr>
                <tr>
                  <td align="left" valign="top">University/Institute</td>
                  <td align="left" valign="middle"><select name="institute4" class="textfield06a" id="institute4" onchange="Show_UniTextBox(this.id,&#39;other_institute3&#39;);" required>
                        <option value="0" selected="selected">Select One</option>
			<option value="Bangabandhu Sheikh Mujibur Rahman Science and Technology University">Bangabandhu Sheikh Mujibur Rahman Science and Technology University</option><option value="111">Bangabandhu Sheikh Mujib Medical University</option><option value="112">Bangabandhu Sheikh Mujibur Rahman Agricultural University</option><option value="113">Bangladesh Agricultural University,Mymensingh</option><option value="Bangladesh Open University">Bangladesh Open University</option><option value="Bangladesh University of Engineering &amp; Technology">Bangladesh University of Engineering &amp; Technology</option><option value="Bangladesh University of Professionals">Bangladesh University of Professionals</option><option value="Chittagong University of Engineering &amp; Technology">Chittagong University of Engineering &amp; Technology</option><option value="118">Chattogram Veterinary and Animal Sciences University</option><option value="Comilla University">Comilla University</option><option value="Dhaka University">Dhaka University</option><option value="Dhaka University of Engineering &amp; Technology">Dhaka University of Engineering &amp; Technology</option><option value="Hajee Mohammad Danesh Science &amp; Technology University">Hajee Mohammad Danesh Science &amp; Technology University</option><option value="Islamic University, Kushtia">Islamic University, Kushtia </option><option value="124">Jagannath University</option><option value="Jahangirnagar University">Jahangirnagar University</option><option value="126">Jatiya Kabi Kazi Nazrul Islam University</option><option value="Jessore Science &amp; Technology University">Jessore Science &amp; Technology University</option><option value="Khulna University">Khulna University</option><option value="Khulna University of Engineering and Technology">Khulna University of Engineering and Technology</option><option value="Mawlana Bhashani Science &amp; Technology University">Mawlana Bhashani Science &amp; Technology University</option><option value="National University">National University</option><option value="Noakhali Science &amp; Technology University">Noakhali Science &amp; Technology University</option><option value="Pabna University of Science and Technology">Pabna University of Science and Technology</option><option value="Patuakhali Science And Technology University">Patuakhali Science And Technology University</option><option value="Rajshahi University">Rajshahi University</option><option value="Rajshahi University of Engineering &amp; Technology">Rajshahi University of Engineering &amp; Technology</option><option value="Rangpur University">Rangpur University</option><option value="Shahjalal University of Science &amp; Technology">Shahjalal University of Science &amp; Technology</option><option value="139">Sher-e-Bangla Agricultural University</option><option value="140">Sylhet Agricultural University</option><option value="University of Chittagong">University of Chittagong</option><option value="142">Faridpur Engineering College</option><option value="143">Mymensingh Engineering College</option><option value="Sylhet Engineering College">Sylhet Engineering College</option><option value="145">Barishal Engineering College</option><option value="Ahsanullah University of Science and Technology">Ahsanullah University of Science and Technology</option><option value="223">America Bangladesh University</option><option value="American International University Bangladesh">American International University Bangladesh</option><option value="225">ASA University Bangladesh</option><option value="Asian University of Bangladesh">Asian University of Bangladesh</option><option value="227">Atish Dipankar University of Science &amp; Technology</option><option value="228">Bangladesh Islami University</option><option value="Bangladesh University">Bangladesh University</option><option value="Bangladesh University of Business &amp; Technology (BUBT)">Bangladesh University of Business &amp; Technology (BUBT)</option><option value="BGC Trust University Bangladesh, Chittagong">BGC Trust University Bangladesh, Chittagong</option><option value="BRAC University">BRAC University</option><option value="233">Central Womens University</option><option value="City University">City University</option><option value="Daffodil International University">Daffodil International University</option><option value="236">Darul Ihsan University</option><option value="237">Dhaka International University</option><option value="East Delta University , Chittagong">East Delta University , Chittagong</option><option value="East West University">East West University</option><option value="Eastern University"<>Eastern University</option><option value="2ono Bishwabidyalay">Gono Bishwabidyalay</option><option value="242">Green University of Bangladesh</option><option value="243">IBAIS University</option><option value="Independent University, Bangladesh">Independent University, Bangladesh</option><option value="International Islamic University, Chittagong">International Islamic University, Chittagong</option><option value="246">International University of Business Agriculture &amp; Technology</option><option value="Leading University, Sylhet">Leading University, Sylhet</option><option value="248">Manarat International University</option><option value="249">Metropolitan University, Sylhet</option><option value="250">North South University</option><option value="251">Northern University Bangladesh</option><option value="Premier University, Chittagong">Premier University, Chittagong</option><option value="253">Presidency University</option><option value="254">Prime University</option><option value="Primeasia University">Primeasia University</option><option value="256">Queens University</option><option value="257">Royal University of Dhaka</option><option value="258">Shanto Mariam University of Creative Technology</option><option value="Southeast University">Southeast University</option><option value="outhern University of Bangladesh , Chittagong">Southern University of Bangladesh , Chittagong</option><option value="Stamford University, Bangladesh">Stamford University, Bangladesh</option><option value="262">State University Of Bangladesh</option><option value="263">Sylhet International University, Sylhet</option><option value="264">The Millenium University</option><option value="265">The Peoples University of Bangladesh</option><option value="The University of Asia Pacific">The University of Asia Pacific</option><option value="267">United International University</option><option value="268">University of Development Alternative</option><option value="University of Information Technology &amp; Sciences">University of Information Technology &amp; Sciences</option><option value="270">University of Liberal Arts Bangladesh</option><option value="University of Science &amp; Technology, Chittagong">University of Science &amp; Technology, Chittagong</option><option value="272">University of South Asia</option><option value="Uttara University">Uttara University</option><option value="274">Victoria University of Bangladesh</option><option value="World University of Bangladesh">World University of Bangladesh</option><option value="333">Asian University for Women</option><option value="Islamic University of Technology">Islamic University of Technology</option><option value="335">South Asian University</option><option value="401">Dhaka Medical College</option><option value="402">Sir Salimullah Medical College</option><option value="403">Mymensingh Medical College</option><option value="404">Chattogram Medical College</option><option value="405">Rajshahi Medical College</option><option value="406">MAG Osmani Medical College</option><option value="407">Sher-E-Bangla Medical College</option><option value="408">Rangpur Medical College</option><option value="409">Comilla Medical College</option><option value="410">Khulna Medical College</option><option value="411">Shaheed Ziaur Rahman Medical College</option><option value="412">Dinajpur Medical College</option><option value="413">Faridpur Medical College</option><option value="414">Shaheed Suhrawardy Medical College</option><option value="415">Pabna Medical College</option><option value="416">Noakhali Medical College</option><option value="417">Cox's Bazar Medical College</option><option value="418">Jessore Medical College</option><option value="419">Shaheed Nazrul Islam Medical College</option><option value="420">Kushtia Medical College</option><option value="421">Satkhira Medical College</option><option value="422">Sheikh Sayera Khatun Medical College, Gopalganj</option><option value="501">Feni Medical College,Feni</option><option value="502">Gono Bishwabidyalay, Savar, Dhaka</option><option value="503">Ad-din Womens Medical College, Dhaka</option><option value="504">Anwer Khan Modern Medical College, Dhaka</option><option value="505">Bangladesh Medical College</option><option value="506">Jalalabad Rageb-Rabeya Medical College,Sylhet</option><option value="507">BGC Trust Medical College, Chittagong</option><option value="508">Central Medical College, Comilla</option><option value="509">Chottagram Ma-O-Shishu Hospital Medical College</option><option value="510">Community Based Medical College (cbmc), Mymensingh</option><option value="511">Community Medical College, Dhaka</option><option value="512">Delta Medical College, Dhaka</option><option value="513">Dhaka National Medical College</option><option value="514">Durra Samad Rahman Red Crescent Womens Medical College, Sylhet</option><option value="515">Eastern Medical College, Comilla</option><option value="516">Enam Medical College, Savar, Dhaka</option><option value="517">Sylhet Women`s Medical College, Sylhet</option><option value="518">Green Life Medical College,Dhaka</option><option value="519">Holy Family Red Crescent Medical College, Dhaka</option><option value="520">Ibrahim Medical College, Dhaka</option><option value="521">Ibn Sina Medical College, Dhaka</option><option value="522">International Medical College, Gazipur</option><option value="523">Islami Bank Medical College, Rajshahi</option><option value="524">Jahurul Islam Medical College, Kishoregonj</option><option value="525">Jalalabad Ragib-Rabeya Medical College Sylhet</option><option value="526">Khawja Yunus Ali Medical College, Sirajganj</option><option value="527">Kumudini Medical College, Tangail</option><option value="528">Labaid Medical College[6] Dhanmondi, Dhaka</option><option value="529">Maulana Bhasani Medical College</option><option value="530">Medical College for Women and Hospital, Dhaka</option><option value="531">Nightingale Medical College, Dhaka</option><option value="532">North Bengal Medical College, Sirajganj</option><option value="533">North East Medical College, Sylhet</option><option value="534">Northern International Medical College, Dhaka</option><option value="535">Northern Private Medical College, Rangpur</option><option value="536">Popular Medical College &amp; Hospital, Dhaka</option><option value="537">Prime Medical College, Rangpur</option><option value="538">Rangpur Community Hospital Medical College</option><option value="539">Sahabuddin Medical College and Hospital</option><option value="540">Samaj Vittik Medical College, Mirzanagar, Savar</option><option value="541">Shahabuddin Medical College, Dhaka</option><option value="542">Z. H. Sikder Women`s Medical College</option><option value="543">Southern Medical College, Chittagong</option><option value="544">Tairunnessa Memorial Medical College, Gazipur</option><option value="545">TMSS Medical College,Bogra</option><option value="546">University Of Science and Technology Chittagong. IAMS</option><option value="547">Uttara Adhunik Medical College,Dhaka</option><option value="Military Institute of Science and Technology (MIST)">Military Institute of Science and Technology (MIST)</option><option value="Sonargaon University">Sonargaon University</option><option value="600">Anwer Khan Modern University </option><option value="601">Bandarban University </option><option value="602">Bangabandhu Sheikh Mujibur Rahman Digital University</option><option value="603">Bangabandhu Sheikh Mujibur Rahman Maritime University</option><option value="604">Bangabandhu Sheikh Mujibur Rahman Science &amp; Technology University</option><option value="605">Bangamata Sheikh Fojilatunnesa Mujib Science and Technology University</option><option value="606">Bangladesh Agricultural University</option><option value="Bangladesh Army International University of Science &amp; Technology(BAIUST) ,Comilla">Bangladesh Army International University of Science &amp; Technology(BAIUST) ,Comilla</option><option value="Bangladesh Army University of Engineering and Technology (BAUET), Qadirabad">Bangladesh Army University of Engineering and Technology (BAUET), Qadirabad</option><option value="Bangladesh Army University of Science and Technology(BAUST), Saidpur">Bangladesh Army University of Science and Technology(BAUST), Saidpur </option><option value="610">Bangladesh University of Health Sciences</option><option value="Bangladesh University of Textiles">Bangladesh University of Textiles </option><option value="612">Barishal University</option><option value="Begum Rokeya University">Begum Rokeya University</option><option value="614">BGMEA University of Fashion &amp; Technology(BUFT)</option><option value="615">Canadian University of Bangladesh</option><option value="616">CCN University of Science &amp; Technology</option><option value="617">Chattogram Independent University </option><option value="618">Chattogram Medical University</option><option value="619">Cox's Bazar International University</option><option value="620">East Delta University </option><option value="621">European University of Bangladesh</option><option value="622">Exim Bank Agricultural University, Bangladesh</option><option value="623">Fareast International University</option><option value="Feni University">Feni University</option><option value="625">First Capital University of Bangladesh</option><option value="626">German University Bangladesh</option><option value="627">Global University Bangladesh</option><option value="628">Hamdard University Bangladesh</option><option value="629">Ishakha International University, Bangladesh</option><option value="630">Islamic Arabic University</option><option value="Islamic University">Islamic University</option><option value="632">Jessore University of Science &amp; Technology</option><option value="633">Khulna Agricultural University</option><option value="634">Khwaja Yunus Ali University </option><option value="635">N.P.I University of Bangladesh</option><option value="636">North Bengal International University</option><option value="637">North East University Bangladesh</option><option value="638">North Western University</option><option value="639">Northern University of Business &amp; Technology, Khulna</option><option value="640">Notre Dame University Bangladesh</option><option value="Port City International University">Port City International University</option><option value="642">Rabindra Maitree University, Kushtia</option><option value="643">Rabindra University, Bangladesh</option><option value="644">Rajshahi Medical University </option><option value="Rajshahi Science &amp; Technology University (RSTU), Natore">Rajshahi Science &amp; Technology University (RSTU), Natore</option><option value="646">Ranada Prasad Shaha University</option><option value="Rangamati Science and Technology University">Rangamati Science and Technology University</option><option value="648">Sheikh Fazilatunnesa Mujib University</option><option value="Sheikh Hasina University">Sheikh Hasina University </option><option value="Sonargaon University">Sonargaon University</option><option value="651">Sylhet Medical University</option><option value="652">The International University of Scholars</option><option value="653">Times University, Bangladesh</option><option value="University of Creative Technology, Chittagong">University of Creative Technology, Chittagong</option><option value="655">University of Global Village</option><option value="656">Varendra University</option><option value="657">Z.H Sikder University of Science &amp; Technology</option><option value="658">Z.N.R.F. University of Management Sciences</option><option value="999">Others</option>
                      </select>
					  <input name="other_institute4" type="text" class="textfield06" id="other_institute4" style="VISIBILITY: hidden" onkeypress="return alpha(event,letters)"></td>
                  <td align="left" valign="top">Course Duration</td>
                  <td align="left" valign="top">
                      <select name="duration4" class="textfield07" id="duration4">
                      <option value="0" selected="selected">Select One</option>
                      <option value="02">02 Years</option>
                      <option value="03">03 Years</option>
                      <option value="04">04 Years</option>
                      <option value="05">05 Years</option>
											
                    </select>
                  </td>
                </tr>
              </tbody></table>
			  </td>
              <td align="left" valign="top">&nbsp;</td>
            </tr>
			<tr class="gap01">
              <td align="left" valign="top">&nbsp;</td>
              <td align="left" valign="top">&nbsp;</td>
            </tr>
            <?php } ?>

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
  </tbody></table>
			  </tbody></table></td>
			</tr>
			</br>
       
        <tr>
          <td colspan="3" align="left" valign="middle" bgcolor="#DCDCDC" class="black12"><table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tbody><tr>
              <td width="97%" align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
        <form action="index.php" method="post" enctype="multipart/form-data" name="app_form" id="app_form" onsubmit="return app_form_validator(this)">
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
    <td height="25" align="center" valign="middle" bgcolor="lightgreen" class="black10"><font size="1"><b><i>For any inconvenience, please call at 01580755805(Office hours) or send email to kazishakib98@cuet.ac.bd</i></b></font></td>
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

</td></tr></tbody></table></body></html>
