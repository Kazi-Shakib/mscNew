<?php 
die("<b><h3><hr><center>Application Time has Expired!</center></b><hr></h3>"); 
?>
<!DOCTYPE html>
<html>
<head>
    
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>
 
$(document).ready(function(){
$('#cpwd').keyup(function()){
var pwd=$('#pwd').val();
var cpwd=$('#cpwd').val();
    
    
    if(cpwd!=pwd){
        $('#showErrorpassword').html('Password is not Matching!');
        $('#showErrorpassword').css('color', 'red');
        return false;
    }
    else{
        $('#showErrorpassword').html('Password is Matching!');
        $('#showErrorpassword').css('color', 'green');
        return true;
    }
});
});
</script>
</head><body>
    
<table width="760" border="0" align="center" cellpadding="0" cellspacing="0">
  <tbody><tr>
    <td height="10" align="center" valign="middle" class="topbg">&nbsp;</td>
  </tr>

    	  <tr>
		<td height="100" align="left	" valign="top" class="blue"><table width="100%" border="0" cellpadding="0" cellspacing="0" class="white14bold">
		 <tbody><tr><td height="120" align="left" valign="top" class="blue"><table width="100%" border="0" cellpadding="0" cellspacing="0" class="white14">
		  <tbody><tr>
			<td bgcolor="#242c42" height="120"><table width="100%" border="0" cellpadding="3" cellspacing="0" class="black12">
			  <tbody><tr>
				<td width="10%" align="left" valign="middle"><img src="logo.png" width="90" height="90"></td>
				
				<td width="80%" align="center" valign="middle">
				 
				 	<font color="white"><font size="6"><font face="Times New Roman"><b> CUET Post-Graduate Admission</b></font></font><br>
				 	 <font color="white"><font size="2"></font><br>
					<!--<font color="white"><font size="1"><b><a href="www.cuet.ac.bd" target="_blank"><mark>www.cuet.ac.bd<mark></mark></mark></a></b></font><br>-->
           
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
				        <td height="30" align="left" valign="middle" bgcolor="#38B003">


					 
				</td>
			</tr>
       <tbody><tr>
           <br>
           <br>
           <br>
      <form class="form-signin" method="post" action="mmail.php" name="login_form" onSubmit="return check_login_form()">
        <center><div style='width:80%' class="login-wrap">
            <div class="user-login-info">
				<input name="name" id="name" type="text" class="form-control" placeholder="User Name" required> <br>
                <input name="email" id="email" type="text" class="form-control" placeholder="User Email" required> <br>
			
                <input name="password" id="pwd" type="password" class="form-control" placeholder="Password" required></br>
				

  <input name="confirm_password" id="cpwd" type="password" class="form-control" placeholder="Confirm Password">


            </div>
            <div id="showErrorpassword">
                
            </div>
            <label class="checkbox">
                
                <span class="center">
                    <br> 
                    <input name="register" class="btn btn-lg btn-login btn-block" type="submit" name="submit" value="Register">
                    

                </span>
            </label>
            </form>
<center>
            <div class="registration">
                <br>
               
                <br>
                <h3 style='color:white'> Already have an account? </h3>
                <a href="http://cuet.xyz/msc/cwl.php"><h4><B>Login?</B></h4></a></br>
                  <h3 style='color:white'> Having problem with registration ? </h3>
                 
                   <a href="http://cuet.xyz/msc/email.php"><B>Forgot Password?</B></a></br></br>
                    
                <a  href="help.pdf"><B>
                    Get Help</B>
                </a>
                </br></br>
            </div>
</center>

        </div>
</center>
		
		  
     

    </div>


	<tr>
        <td height="30" colspan="3" align="center" valign="middle" bgcolor="#242c42">
          
        </tr>
      </tbody></table>
    </td>
  </tr>
  <tr>
    <td height="25" align="center" valign="middle" bgcolor="#4D648D" class="black10"><font size="2"><b><i>For any inconvenience, please send email to kazishakib98@cuet.ac.bd</i></b></font></td>
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


</body>




</html>
