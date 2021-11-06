<?php

/*$conn = mysqli_connect(
	'localhost',		//  The host to connect to
	'cuetac_msadmission',		//  The user to connect as
	'Iict518#@!',		//  The password to use
	'cuetac_msadmission');	//  The default database to query
		"<h1 style='color:white'>Please Check E-mail</h1>";
			$email 	= htmlentities ( trim ( $_POST['email'] ) , ENT_NOQUOTES ); 
			if($email !=''){	
		$sql_user_exist = "SELECT * FROM student WHERE `email`='$email'";
			$user_exist=mysqli_query($conn,$sql_user_exist);
		$count_user_exist = mysqli_num_rows($user_exist); 
			if ($count_user_exist>0) {
			
			while ($row_course = mysqli_fetch_assoc($user_exist)) {
		
	       	$students_pass=$row_course['password'];
               $_SESSION[$student_pass]=$body;
               $_SESSION[$email]=$address;

			
			
			$curl = curl_init();
// Set some options - we are passing in a useragent too here
curl_setopt_array($curl, array(
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_URL => $str,
    CURLOPT_USERAGENT => 'Codular Sample cURL Request'
));
// Send the request & save response to $resp
$resp = curl_exec($curl);
// Close request to clear up some resources
curl_close($curl);
			
				echo"<center> <hr><h1 style='color:white'> Your Password has been sent to your CUET E-mail Address . Please Check inbox or Spam folder</h1> <hr> </center>";
			
			
			}
		
	}
			}
	
			
			else{
				
				
		
		echo"<center> <hr><h1 style='color:white'> Please register to the admission form</h1> <hr> </center>";
		
		
				
			}
			
			*/
			
	?>
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
		<tbody>
		 </tr>
    <tr>
				        <td height="30" align="left" valign="middle" bgcolor="#38B003">


					<table border="1" bordercolor="White" cellpadding="8" cellspacing="0" class="#FF0000">
						<tbody><tr>

						  


						</tr>
				
				</td></tbody>
			</tr>
       <tbody><tr>
	<form class="form-signin" method="post" action="mail.php" name="login_form" onSubmit="return check_login_form()">
	    
	    <div class="user-login-info">
				
                <input name="email" id="email" type="text" class="form-control" placeholder="User Email">
			
                
				
            </div>
            <label class="checkbox">
                
                <span class="center">
                    <input name="loginuser" class="btn btn-lg btn-login btn-block" type="submit" name="submit" value="Submit">
                    

                </span>
            </label>
            
	 </form></body></html>
