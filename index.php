<?php session_start();
die("<b><h3><hr><center>Application Time has Expired!</center></b><hr></h3>");
 $email=$_SESSION['email'] ;
 echo $email; 
 
$password=$_SESSION['password'] ;

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<title>Chittagong University of Engineering & Technology</title>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
    $(function(){
        $(.save).click(function(){
        $('.textfield').savy('load');
    }}
    
</script>

<noscript>
	<style type="text/css">
		#appbody {display:none;}
	</style>
	<h1 align="center" style="color: red"> Please enable Javascript of your browser before you proceed. </h1>
</noscript>

    </head>  
</head>
<body id="appbody" ondragstart="return false" onselectstart="return false" onload="download(), dependencies();">
<form action="academic_info.php" method="post" name="app_form" id="app_form" enctype="multipart/form-data">
			
			<input type="hidden" name="min_edu_stage" id="min_edu_stage" value="2">
			<input type="hidden" name="edu_stage" id="edu_stage" value="3">
			<input type="hidden" name="job_exp" id="job_exp" value="1">
			<input type="hidden" name="edu_mas" id="edu_mas" value="0">

<table width="760" border="0" align="center" cellpadding="0" cellspacing="0">
  <tbody>	<tr>
    <td height="10" align="center" valign="middle" class="topbg">&nbsp;</td>
  </tr>
		  <tr>
		<td height="100" align="left	" valign="top" class="green"><table width="100%" border="0" cellpadding="0" cellspacing="0" class="white14bold">
		 <tbody><tr><td height="120" align="left" valign="top" class="green"><table width="100%" border="0" cellpadding="0" cellspacing="0" class="white14">
		  <tbody><tr>
			<td bgcolor="#49575f" height="120"><table width="100%" border="0" cellpadding="3" cellspacing="0" class="black12">
			  <tbody><tr>
				<td width="20%" align="right" valign="middle"><img src="logo.png" width="90" height="120"></td>
				
				<td width="80%" align="center" valign="middle">
				 
				 	<font color="white"><font size="6"><font face="Times New Roman"><b> CUET Post-Graduate Admission Form </b></font></font><br>
				 	 
					<!--<font color="white"><font size="2"><b><a href="http://www.cuet.ac.bd/" target="_blank"><mark>www.cuet.ac.bd<mark></mark></mark></a></b></font>-->  Helpline : 01580755805(Office hour) or mail at kazishakib98@cuet.ac.bd<br> 
           
			
			 
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
                                       	  
						  
						  <td width="107" align="middle" valign="middle"><a href="http://www.cuet.ac.bd/admission" class="link-home"><font color="white">Notice</font></a></td>
						  <td width="107" align="middle" valign="middle"><a href="help.pdf" class="link-home"><font color="white">Help</font></a></td>  
                          <td width="107" align="middle" valign="middle"><a href="cwl.php" class="link-home"><font color="white">Log out</font></a></td>
						</tr>
					</tbody></table>
				</td>
			</tr>
		 <tr>
  	<td height="35" align="center" valign="middle" bgcolor="#E3E3E3" class="black12bold"><font size=6><font face="Times New Roman">Personal Information</font></font></td>
  </tr>

  <tr>
    <td align="left" valign="top" bgcolor="#A2A2A2">
      <table width="100%" border="0" cellpadding="5" cellspacing="0" class="black12">
        <tbody><tr bgcolor="#A2A2A2">
          <td width="23%" height="35" align="left" valign="middle" style="padding-left: 20px;"><font size=4><font face="Times New Roman">Name of the Admission</font></font></td>
          <td width="7%" height="35" align="center" valign="middle">:</td>
          <td width="70%" height="35" align="left" valign="middle">
			  <table width="100%" border="0" cellspacing="0" cellpadding="0">
				  <tbody><tr>
					<td width="60%" align="left" valign="middle" class="black12"><font size=4><font face="Times New Roman">Masters/ PhD Online Admission Form</font></font></td>
				
</hr>
				  </tr>
			  </tbody></table>
		  </td>
		  <input type="hidden" name="post_code" id="post_code" value="200">
        </tr>

                        <tr>
                          <td align="left" valign="middle" bgcolor="#E3E3E3" class="black12"  style="padding-left: 20px;"><font size=3><font face="Times New Roman">Name of the Admission</font></font></td>
                          <td align="center" valign="middle" bgcolor="#E3E3E3" class="black12">:</td>
                          <td align="left" bgcolor="#E3E3E3" valign="middle"><select name="type_msc_phd" class="w3-input" id="admission_type" required>
                            <option value="0" selected="selected">Select</option>
                                <option value="Masters">Masters</option>
                                <option value="PhD">PhD</option>
                          </select></td>
                        </tr>
                       
  <tr>  
                          <td align="left" valign="middle" bgcolor="#E3E3E3" class="black12"  style="padding-left: 20px;">Admission Type</td>
                          <td align="center" valign="middle" bgcolor="#E3E3E3" class="black12">:</td>
                          <td align="left" bgcolor="#E3E3E3" valign="middle"><select name="student_type" class="textfield06a" id="student_type" required>
                            <option value="0" selected="selected">Select</option>
                                <option value="M.Sc. Engineering">M.Sc. Engineering</option>
                                <option value="M.Eng">M.Eng</option>
                                <option value="M.Phil">M.Phil</option>
                                <option value="M.Sc.">M.Sc.</option>
                                <option value="PhD">PhD</option>
                          </select></td>
                        </tr>

 <tr>
                          <td align="left" valign="middle" bgcolor="#E3E3E3" class="black12"  style="padding-left: 20px;">Mode of Admission</td>
                          <td align="center" valign="middle" bgcolor="#E3E3E3" class="black12">:</td>
                          <td align="left" bgcolor="#E3E3E3" valign="middle"><select name="student_mode" class="textfield06a" id="student_mode" required>
                            <option value="0" selected="selected">Select</option>
                                <option value="Part-Time">Part-Time</option>
                                <option value="Full-Time">Full-Time</option>
                          </select></td>
                        </tr>

<tr>
          <td align="left" valign="middle" bgcolor="#E3E3E3" class="black12"  style="padding-left: 20px;">Applicant's Name<span class="red12">*</span></td>
          <td align="center" valign="middle" bgcolor="#E3E3E3" class="black12">:</td>
          <td align="left" valign="middle" bgcolor="#E3E3E3"><input name="name" type="text" class="textfield03" id="name" onkeypress="return alpha(event,letters)" onblur="javascript:{this.value = this.value.toUpperCase(); }" required></td>
        </tr>
        <tr>
          <td align="left" valign="middle" bgcolor="#E3E3E3" class="black12" style="padding-left: 20px;">Father's Name<span class="red12">*</span></td>
          <td align="center" valign="middle" bgcolor="#E3E3E3" class="black12">:</td>
          <td align="left" valign="middle" bgcolor="#E3E3E3"><input name="f_name" type="text" class="textfield03" id="fathername" onkeypress="return alpha(event,letters)" onblur="javascript:{this.value = this.value.toUpperCase(); }" required></td>
        </tr>
        <tr>
          <td align="left" valign="middle" bgcolor="#E3E3E3" class="black12" style="padding-left: 20px;">Mother's Name<span class="red12">*</span></td>
          <td align="center" valign="middle" bgcolor="#E3E3E3" class="black12">:</td>
          <td align="left" valign="middle" bgcolor="#E3E3E3"><input name="m_name" type="text" class="textfield03" id="mothername" onkeypress="return alpha(event,letters)" onblur="javascript:{this.value = this.value.toUpperCase(); }" required></td>
        </tr>
           <tr>
               <td align="left" valign="middle" bgcolor="#E3E3E3" class="black12" style="padding-left: 20px;padding-top:10px; padding-bottom:10px ">Department for admission<span class="red12">*</span></td>
               <td align="center" valign="middle" bgcolor="#E3E3E3" class="black12">:</td>
        <td align="left" valign="middle" bgcolor="#E3E3E3"><select name="dep" class="textfield06a" id="dep" onchange="get_sub_gra(this), Show_ExamTextBox(this.id,&#39;other_exam3&#39;), changeVisibility3(this);" required>
                      <option value="0" selected="selected">Select One</option>
                      <option value="Computer Science & Engineering">Department of Computer Science & Engineering</option><option value="Electrical & Electronic Engineering">Department of Electrical & Electronic Engineering</option></option><option value="Mechanical Engineering">Department of Mechanical Engineering</option><option value="Civil Engineering">Department of Civil Engineering</option><option value="Electronics & Telecommunication Engineering">Department of Electronics & Telecommunication Engineering</option><option value="Disaster Engineering and Management">Department of Disaster Engineering and Management</option><option value="Physics">Department of Physics</option><option value="Chemistry">Department of Chemistry</option><option value="Mathematics">Department of Mathematics</option><option value="Energy Technology">Institute of Energy Technology</option><option value="Earthquake Engineering Research">Institute of Earthquake Engineering Research</option> <option value="Department of Nuclear Engineering">Department of Nuclear Engineering</option>
                    </select>
                  </td>
        </tr>
        <tr>
          <td align="left" valign="middle" bgcolor="#DCDCDC" class="black12" style="padding-left: 20px;">Date of Birth<span class="red12">*</span></td>
          <td align="center" valign="middle" bgcolor="#DCDCDC" class="black12">:</td>
          <td align="left" valign="middle" bgcolor="#DCDCDC"><span class="black12">Day</span>
            <select name="b_day" class="textfield02" id="b_day" required>
              <option value="0" selected="selected">Select</option>
				<option value="01">01</option><option value="02">02</option><option value="03">03</option><option value="04">04</option><option value="05">05</option><option value="06">06</option><option value="07">07</option><option value="08">08</option><option value="09">09</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option>
            </select>
            <span class="black12">Month</span>
            <select name="b_month" class="textfield02" id="b_month" required>
              <option value="0" selected="selected">Select</option>
			  
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
            <span class="black12">Year</span>
            <select name="b_year" class="textfield02" id="b_year" required>
              <option value="0" selected="selected">Select</option>
			<option value="1960">1960</option><option value="1961">1961</option><option value="1962">1962</option><option value="1963">1963</option><option value="1964">1964</option><option value="1965">1965</option><option value="1966">1966</option><option value="1967">1967</option><option value="1968">1968</option><option value="1969">1969</option><option value="1970">1970</option><option value="1971">1971</option><option value="1972">1972</option><option value="1973">1973</option><option value="1974">1974</option><option value="1975">1975</option><option value="1976">1976</option><option value="1977">1977</option><option value="1978">1978</option><option value="1979">1979</option><option value="1980">1980</option><option value="1981">1981</option><option value="1982">1982</option><option value="1983">1983</option><option value="1984">1984</option><option value="1985">1985</option><option value="1986">1986</option><option value="1987">1987</option><option value="1988">1988</option><option value="1989">1989</option><option value="1990">1990</option><option value="1991">1991</option><option value="1992">1992</option><option value="1993">1993</option><option value="1994">1994</option><option value="1995">1995</option><option value="1996">1996</option><option value="1997">1997</option><option value="1998">1998</option><option value="1999">1999</option><option value="2000">2000</option><option value="2001">2001</option><option value="2002">2002</option>
            </select></td>
        </tr>
        <!--<tr>
          <td align="left" valign="middle" bgcolor="#E3E3E3" class="black12">Gender<span class="red12">*</span></td>
          <td align="center" valign="middle" bgcolor="#E3E3E3" class="black12">:</td>
          <td align="left" valign="middle" bgcolor="#E3E3E3">
		  	<label>
                <input type="radio" name="gender" value="Male" id="sex_01">
                <span class="black12">Male</span>
			</label>
            <label>
                  <input type="radio" name="gender" value="Female" id="sex_02">
                  <span class="black12">Female</span>
			</label>
			 		<label>
                  <input type="radio" name="gender" value="Others" id="sex_03">
                  <span class="black12">Others</span>
					</label>
			</td>
        </tr>!-->
		<tr>
          <td align="left" valign="middle" bgcolor="#DCDCDC" class="black12"  style="padding-left: 20px; padding-top:10px; padding-bottom:10px">Nationality<span class="red12">*</span></td>
          <td align="center" valign="middle" bgcolor="#DCDCDC" class="black12">:</td>
          <td align="left" valign="middle" bgcolor="#DCDCDC"><table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tbody><tr>
		      <td width="30%" align="left" valign="middle"  style="padding-left: 20px;padding-top :10px"><select name="nation" class="textfield02" id="nationality" required>
		        <option value="Bangladeshi" selected="selected">Bangladeshi</option>
		        </select></td>
		      <td width="40%" align="right" valign="middle" class="black12" style="padding-left: 20px;padding-top:20px; padding-bottom:10px">Religion<span class="red12"></span> :</td>
		      <td width="25%" align="right" valign="middle"><select name="religion" class="textfield02" id="religion" >
                <option value="0" selected="selected">Select One</option>
                <option value="Islam">Islam</option>
                <option value="Hinduism">Hinduism</option>
                <option value="Christianity">Christianity</option>
                <option value="Buddhism">Buddhism</option>
                <option value="Others">Others</option>
              </select></td>
		      <td width="5%" align="left" valign="middle">&nbsp;</td>
		      </tr>
		    </tbody></table></td>
        </tr>
				<input type="hidden" name="email" id="email" value="<?php echo $email ?>">
		    <input type="hidden" name="password" id="password" value="<?php echo $password ?>">

		<tr>
          <td colspan="3" align="left" valign="middle" bgcolor="#DCDCDC" class="black12"><table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tbody><tr>
              <td width="100%" align="left" valign="middle" class="bdr02"><table width="100%" border="0" cellpadding="3" cellspacing="0" class="black12">
                <tbody><tr>
                  <td height="25" colspan="2" align="left" valign="middle" bgcolor="#A2A2A2" class="black12">Mailing Address<font color="red">[Avoid use of special characters. Ex: Bullet,'s(apostrophe s)]</font><span class="red12">*</span></td>
                </tr>
				<tr>
                  <td width="47%" align="left" valign="middle" style="padding-left: 20px;padding-top:10px; padding-bottom:10px ">Care of</td>
                  <td width="53%" align="left" valign="middle">
                    <input name="present_care" type="text" class="textfield06" id="present_care" onkeypress="return alpha(event,letters)">
                  </td>
                </tr>
                <tr>
                  <td align="left" valign="middle" style="padding-left: 20px;padding-top:10px; padding-bottom:10px ">
				  Village/Town/<br>
                  Road/House/Flat</td>
                  <td width="53%" align="left" valign="middle">
                    <textarea name="present_vill" cols="45" rows="2" class="textfield06" id="present_vill" onkeypress="return alpha(event,letters+numbers+custom)"></textarea>
                  </td>
                </tr>
                <tr>
                  <td align="left" valign="middle"style="padding-left: 20px;padding-top:10px; padding-bottom:10px ">District</td>
                  <td align="left" valign="middle">
                    <select name="present_dist" class="textfield06a" id="menu_one" onchange="get_one_list(this); changeVisibility1(this)">
                    <option value="0" selected="selected">Select One</option>
					<option value="Bagerhat">Bagerhat</option><option value="Bandarban">Bandarban</option><option value="Barguna">Barguna</option><option value="Barishal">Barishal</option><option value="Bhola">Bhola</option><option value="Bogura">Bogura</option><option value="Brahamanbaria">Brahamanbaria</option><option value="Chandpur">Chandpur</option><option value="Chapai Nawabganj">Chapai Nawabganj</option><option value="Chattogram">Chattogram</option><option value="Chuadanga">Chuadanga</option><option value="Cox`s Bazar">Cox`s Bazar</option><option value="Cumilla">Cumilla</option><option value="Dhaka">Dhaka</option><option value="Dinajpur">Dinajpur</option><option value="Faridpur">Faridpur</option><option value="Feni">Feni</option><option value="Gaibanda">Gaibanda</option><option value="Gazipur">Gazipur</option><option value="Gopalganj">Gopalganj</option><option value="Habiganj">Habiganj</option><option value="Jaipurhat">Jaipurhat</option><option value="Jamalpur">Jamalpur</option><option value="Jashore">Jashore</option><option value="Jhalokhathi">Jhalokhathi</option><option value="Jhenaidah">Jhenaidah</option><option value="Khagrachhari">Khagrachhari</option><option value="Khulna">Khulna</option><option value="Kishorganj">Kishorganj</option><option value="Kurigram">Kurigram</option><option value="Kushtia">Kushtia</option><option value="Lalmonirhat">Lalmonirhat</option><option value="Luxmipur">Luxmipur</option><option value="Madaripur">Madaripur</option><option value="Magura">Magura</option><option value="Manikganj">Manikganj</option><option value="Meharpur">Meharpur</option><option value="Mouluvibazar">Mouluvibazar</option><option value="Munshiganj">Munshiganj</option><option value="Mymensingh">Mymensingh</option><option value="Naogaon">Naogaon</option><option value="Narail">Narail</option><option value="43">Narayanganj</option><option value="Narsingdi">Narsingdi</option><option value="Natore">Natore</option><option value="Netrokona">Netrokona</option><option value="Nilphamari">Nilphamari</option><option value="Noakhali">Noakhali</option><option value="Pabna">Pabna</option><option value="Panchagarh">Panchagarh</option><option value="31">Patuakhali</option><option value="27">Pirojpur</option><option value="46">Rajbari</option><option value="Rajshahi">Rajshahi</option><option value="Rangamati">Rangamati</option><option value="Rangpur">Rangpur</option><option value="Satkhira">Satkhira</option><option value="Shariatpur">Shariatpur</option><option value="Sherpur">Sherpur</option><option value="Sirajganj">Sirajganj</option><option value="Sunamganj">Sunamganj</option><option value="Sylhet">Sylhet</option><option value="Tangail">Tangail</option><option value="Thakurgaon">Thakurgaon</option>
					</select>
				  </td>
                </tr>
                <tr>
                  <td align="left" valign="top" style="padding-left: 20px;padding-top:10px; padding-bottom:10px ">P.S./Upazila </td>
                  <td width="53%" align="left" valign="middle">
                    <input name="present_upazila" type="text" class="textfield06" id="present_upazilla" onkeypress="return alpha(event,letters)">
                  </td>
                  
                </tr>
                <tr>
                  <td align="left" valign="middle"style="padding-left: 20px;padding-top:10px; padding-bottom:10px ">Post Office</td>
                  <td align="left" valign="middle">
                    <input name="present_post" type="text" class="textfield06" id="present_post" onkeypress="return alpha(event,letters)">
                  </td>
                </tr>
                <tr>
                  <td align="left" valign="middle"style="padding-left: 20px;padding-top:10px; padding-bottom:10px ">Post Code</td>
                  <td align="left" valign="middle">
                    <input name="present_pcode" type="text" class="textfield06" id="present_pcode" onkeypress="return alpha(event,numbers)">
                  </td>
                </tr>
              </tbody></table></td>
              
        <tr>
          <td height="30" align="left" valign="middle" bgcolor="#E3E3E3" class="black12"style="padding-left: 20px;padding-top:10px; padding-bottom:10px ">Mobile Number<span class="red12">*</span></td>
          <td height="30" align="center" valign="middle" bgcolor="#E3E3E3" class="black12">:</td>
          <td height="30" align="left" valign="middle" bgcolor="#E3E3E3"><table width="100%" border="0" cellpadding="0" cellspacing="0" class="black12">
            <tbody><tr>
              <td width="26%" height="23" align="left" valign="middle"><input name="phone" type="text" class="textfield02" id="mobileno" maxlength="11" onkeypress="return alpha(event,numbers)" onselectstart="return false" onpaste="return false" oncopy="return false" oncut="return false" ondrag="return false" ondrop="return false" autocomplete="off" required></td>
              
              <td width="4%" align="left" valign="middle" class="red12">&nbsp;</td>
            </tr>
          </tbody></table></td>
        </tr>
        <tr>
		</tr><tr>
          <td height="30" align="left" valign="middle" bgcolor="#E3E3E3" class="black12"style="padding-left: 20px;padding-top:10px; padding-bottom:10px ">Confirm Mobile<span class="red12">*</span></td>
          <td height="30" align="center" valign="middle" bgcolor="#E3E3E3" class="black12">:</td>
          <td height="30" align="left" valign="middle" bgcolor="#E3E3E3"><table width="100%" border="0" cellpadding="0" cellspacing="0" class="black12">
            <tbody><tr>
              <td width="26%" height="23" align="left" valign="middle"><input name="confirmmobile" type="text" class="textfield02" id="confirmmobile" maxlength="11" onkeypress="return alpha(event,numbers)" onselectstart="return false" onpaste="return false" oncopy="return false" oncut="return false" ondrag="return false" ondrop="return false" autocomplete="off" required></td>
              <td width="70%" align="left" valign="middle" class="black11">« Please Retype Mobile Number.</td>
              <td width="4%" align="left" valign="middle" class="red12">&nbsp;</td>
            </tr>
          </tbody></table></td>
        </tr>
	
 	<tr>
          <td height="30" align="left" valign="middle" bgcolor="#E3E3E3" class="black12"style="padding-left: 20px;padding-top:10px; padding-bottom:10px ">NID no.<span class="red12">*</span></td>
          <td height="30" align="center" valign="middle" bgcolor="#E3E3E3" class="black12">:</td>
          <td height="30" align="left" valign="middle" bgcolor="#E3E3E3"><input name="nid" type="text" class="textfield03" id="nid" required></td>
        </tr>

<?php if($email==''){?>

       <tr>
          <td height="30" align="left" valign="middle" bgcolor="#E3E3E3" class="black12"style="padding-left: 20px;padding-top:10px; padding-bottom:10px ">Email<span class="red12"><font color="red"> [Use Account Login Mail]</font>*</span></td>
          <td height="30" align="center" valign="middle" bgcolor="#E3E3E3" class="black12">:</td>
          <td height="30" align="left" valign="middle" bgcolor="#E3E3E3"><input name="email" type="text" class="textfield03" id="email"></td>
        </tr>


<?php } ?>
        
        

<tr>
                   </tr>

	
    



     	  
		  
			  </tbody></table></td>
			</tr>
			</br>
        <tr>
          <td colspan="3" align="center" valign="middle" bgcolor="#A2A2A2" class="black11">
            <input type="checkbox" name="info_yes" id="info_yes" onclick="agreesubmit(this)" required>
            The above information is correct and I would like to Submit.</td>
        </tr>
        </br>
		<tr>
          <td colspan="3" align="center" valign="middle" bgcolor="#A2A2A2">
            <input type="submit" name="next" id="next" value="   Next(Check Preview)  " ></td>
        </tr>
		<tr>
          <td height="30" colspan="3" align="center" valign="middle" bgcolor="#A2A2A2">
          </td>
        </tr>
      </tbody></table>
    </td>
  </tr>
  <tr>
    <td height="25" align="center" valign="middle" bgcolor="lightgreen" class="black10"><font size="1"><b><i>For any inconvenience, please send email to kazishakib98@cuet.ac.bd</i></b></font></td>
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
