<?php 

session_start();
 // Connect to MySql
	$conn = mysqli_connect(
	);	//  The default database to query


	if(isset($_POST['loginuser']))
	{

	$email 	= htmlentities ( trim ( $_POST['email'] ) , ENT_NOQUOTES ); 
	$password 	= htmlentities ( trim ( $_POST['password'] ) , ENT_NOQUOTES ); 
 $dep=$_POST['dep'];
 $email = mysqli_real_escape_string($conn, $email);
 $password = mysqli_real_escape_string($conn, $password);
		
		if($email !='' && $password !=''){	
		  
			if ($email=='msc_admission' AND $password=='cuetmscphd@#' ) {
		 
			  $_SESSION['tt'] = $dep;
			  
			  header ('Location: tlist.php');
			   
			  
			  
			} else{ echo "Wrong Access";}
		}
	    else{
				echo "Sorry, you have no access!";		
			}
	}
	else{
	    echo "";
	}
	
?>
<!DOCTYPE html>
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
				<td width="20%" align="right" valign="middle"><img src="logo.png" width="90" height="120"></td>
				
				<td width="80%" align="center" valign="middle">
				 
				 	<font color="white"><font size="6"><font face="Times New Roman"><b> CUET Post-Graduate Admission Form </b></font></font><br>
				 	 
					<!--<font color="white"><font size="2"><b><a href="http://www.cuet.ac.bd/" target="_blank"><mark>www.cuet.ac.bd<mark></mark></mark></a></b></font>-->  Helpline : 01534660559(Office hour) or mail at kazishakib98@cuet.ac.bd<br> 
           
			  </tr>
			</tbody></table></td>
		  </tr>
		<tbody>
		 </tr>
    <tr>
				        <td height="30" align="left" valign="middle" bgcolor="#97BC62FF">


					<table border="1" bordercolor="White" cellpadding="8" cellspacing="0" class="#FF0000">
						<tbody><tr>

						  


						</tr>
				
				</td></tbody>
			</tr>
			 <tr>
				        <td height="30" align="left" valign="middle" bgcolor="#97BC62FF">


					 
				</td>
			</tr>
       <tbody><tr>
           <br>
           <br>
           <br>
      <form class="form-signin" method="post" action="" name="login_form" onSubmit="return check_login_form()">
        <center><div style='width:80%' class="login-wrap">
            <div class="user-login-info">
				
                <input name="email" id="email" type="text" class="form-control" placeholder="User  ID"> <br>
			
                <input name="password" id="password" type="password" class="form-control" placeholder="Password">
				
				
				<hr>
				<select class="form-control"   name="dep" class="textfield06a" id="dep" onchange="get_sub_gra(this), Show_ExamTextBox(this.id,'other_exam3'), changeVisibility3(this);" required="">
                      <option value="0" selected="selected">Select Department </option>
                      <option value="Computer Science &amp; Engineering">Department of Computer Science &amp; Engineering</option><option value="Electrical &amp; Electronic Engineering">Department of Electrical &amp; Electronic Engineering</option><option value="Mechanical Engineering">Department of Mechanical Engineering</option><option value="Civil Engineering">Department of Civil Engineering</option><option value="Electronics &amp; Telecommunication Engineering">Department of Electronics &amp; Telecommunication Engineering</option><option value="Disaster Engineering and Management">Department of Disaster Engineering and Management</option><option value="Physics">Department of Physics</option><option value="Chemistry">Department of Chemistry</option><option value="Mathematics">Department of Mathematics</option><option value="Energy Technology">Institute of Energy Technology</option><option value="Earthquake Engineering Research">Institute of Earthquake Engineering Research</option> <option value="Department of Nuclear Engineering">Department of Nuclear Engineering</option>
                    </select>
                    
                    
            </div>
            <label class="checkbox">
                
                <span class="center">
                    <br> 
                    <input name="loginuser" class="btn btn-lg btn-login btn-block" type="submit" name="submit" value="Sign In">
                    

                </span>
            </label>
            </form>
 

        </div>
</center>
		
		  
     

    </div>


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


</body></html>
