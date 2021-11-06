<?php 

session_start();
 // Connect to MySql
	$conn = mysqli_connect(
	'localhost',		//  The host to connect to
	'cuetac_msadmission',		//  The user to connect as
	'Iict518#@!',		//  The password to use
	'cuetac_msadmission');	//  The default database to query


$email=$_SESSION['email'] ;
$password=$_SESSION['password'] ;	  
	
	if($email !='' && $password !=''){	
		 	$sql_user_exist = "SELECT * FROM student WHERE `email`='$email' AND `password`='$password'";
		
	     		$result=mysqli_query($conn,$sql_user_exist);
	 
			
			while($row=mysqli_fetch_array($result)){
			    $status=$row["status"];
			    $name=$row["student_name"];
			     $status=$row["status"];
			    $phone=$row["phone"];
			    $name=$row['student_name'];
			    $dep=$row['dep'];
			 
        
                
       
      
 
			    $_SESSION['email']=$email;
			   
			    $_SESSION['password'] =$password;
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
<table width="760" border="0" align="center" cellpadding="4" cellspacing="0">
  <tbody><tr>
    <td height="10" align="center" valign="middle" class="topbg">&nbsp;</td>
  </tr>

    	  <tr>
		<td height="100" align="left" valign="top" class="blue"><table width="100%" border="0" cellpadding="4" cellspacing="0" class="white14bold">
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
		
	<tr>
				        <td height="30" align="left" valign="middle" bgcolor="#006C84">



					<table border="1" bordercolor="White" cellpadding="8" cellspacing="0" class="#A1BE95" width="100%">
						<tbody><tr>
                        <td width="107" align="middle" valign="middle"><font color="white">Dashboard</font></td> 
						  <td width="107" align="middle" valign="middle"><a href="index.php" class="link-home"><font color="white">Apply</font></a></td>
                                       	  
						  
						  <td width="107" align="middle" valign="middle"><a href="http://www.cuet.ac.bd/admission" class="link-home"><font color="white">Notice</font></a></td>
						  <td width="107" align="middle" valign="middle"><a href="help.pdf" class="link-home"><font color="white">Help</font></a></td>  
                          <td width="107" align="middle" valign="middle"><a href="cwl.php" class="link-home"><font color="white">Log out</font></a></td>

	</tr>
					</tbody></table>
				</td>
			</tr>
			<tr><td height="55" align="center" valign="middle" bgcolor="#E3E3E3" class="black12bold"><u><font size=6><font face="Times New Roman">Dashboard</font></font></u></td></tr>
			<tr><td height="55" align="left" valign="middle" bgcolor="#E3E3E3" class="black12bold"  style="padding-left: 20px;"><font size=5><font face="Times New Roman"><?php if($status==11){ echo "<font size=4>Application Status : Submitted and Paid!<br> Eligible List will be published on  01/09/2021 at  www.cuet.ac.bd/admission</font>";}
      
      elseif($dep!='' && $phone!='' & $email!='' && $status==''){echo "Application Status : Data submitted but Payment not verified!";}
      else{echo "Application Status : Data not Submitted & Payment not verified!";}?></font></font></td>
		
			
			</tr>
				<tr><td height="55" align="left" valign="middle" bgcolor="#E3E3E3" class="black12bold" style="padding-left: 20px;"><font size=4><font face="Times"><?php echo "User Name ".": ".$name ;?></font></font></td>
			
			</tr>
			
				<tr><td height="55" align="middle" valign="middle" bgcolor="#E3E3E3" class="black12bold" style="padding-left: 20px;padding-top: 40px"><font size=5><font face="Times New Roman">Go to Application  Page!   <a href="http://cuet.xyz/msc/index.php"><B> Apply Now? </B></a> </font></font></td>
			
			</tr>
			<tr><td height="55" align="middle" valign="middle" bgcolor="#E3E3E3" class="black12bold" style="padding-left: 20px; "><font size=5><font face="Times New Roman">Apply done?Payment verification Missing? Go to transaction Page!   <a href="http://cuet.xyz/msc/upload3.php"><B>Verify?</B></a> </font></font></td></tr>
			<tr><td height="55" align="middle" valign="middle" bgcolor="#E3E3E3" class="black12bold" style="padding-left: 20px; "><font size=5><font face="Times New Roman">Registration done? Go to Preview Page!   <a href="http://cuet.xyz/msc/preview1.php"><B>Preview?</B></a> </font></font></td>
			
			</tr>
			
			<tr><td height="55" align="middle" valign="middle" bgcolor="#E3E3E3" class="black12bold" style="padding-left: 20px; "><font size=5><font face="Times New Roman">You Can't apply mulitiple Department using same account! </font></font></td>
			
			</tr>
			
			</br>
			
			
			<tr><td height="35" align="left" valign="middle" bgcolor="#E3E3E3" class="black12bold" style="padding-left: 20px; "><font size=3><font face="Times New Roman">Documents to be uploaded: </br></font></font></td></tr>
			<tr><td height="25" align="left" valign="middle" bgcolor="#E3E3E3" class="black12bold" style="padding-left: 20px; "><font size=3><font face="Times New Roman">a) Photo(100KB)-300×300 pixel on jpg, jpeg and png format.</br></font></font></td></tr>
<tr><td height="25" align="left" valign="middle" bgcolor="#E3E3E3" class="black12bold" style="padding-left: 20px; "><font size=3><font face="Times New Roman">b) Signature(60 KB)-300×80 pixel on jpg, jpeg and png format.</br></font></font></td></tr>
<tr><td height="25" align="left" valign="middle" bgcolor="#E3E3E3" class="black12bold" style="padding-left: 20px; "><font size=3><font face="Times New Roman">c) Academic Certificates(All Academic Certificates-Transcript and Certificates) in a single pdf then compress it in Zip,Tar, Rar format as less as
1 MB.</br></font></font></td></tr>
<tr><td height="25" align="left" valign="middle" bgcolor="#E3E3E3" class="black12bold" style="padding-left: 20px; "><font size=3><font face="Times New Roman">d) NOC(for currently employed candidates) in png, jpg, doc, pdf format not more than 2 MB.</br></font></font></td></tr>
<tr><td height="25" align="left" valign="middle" bgcolor="#E3E3E3" class="black12bold" style="padding-left: 20px; "><font size=3><font face="Times New Roman">e) Character Certificate of last organization ) in png, jpg, doc, pdf format not more than 2 MB.</br></font></font></td></tr>
<tr><td height="25" align="left" valign="middle" bgcolor="#E3E3E3" class="black12bold" style="padding-left: 20px; "><font size=3><font face="Times New Roman">f) Recommendation Letter(Mandatory for only PhD) in png, jpg, doc, pdf format not more than 2 MB.</br></font></font></td></tr>
				<tr><td height="75" align="left" valign="middle" bgcolor="#E3E3E3" class="black12bold" style="padding-left: 20px;"></td></tr>
<tr><td height="25" align="left" valign="middle" bgcolor="#E3E3E3" class="black12bold" style="padding-left: 20px; "><font size=3><font face="Times New Roman">Payment Method via Rocket Only.Biller ID 246.</br></font></font></td></tr>			
			</tr>
			
			 <!--<tr>
				        <td height="30" align="left" valign="middle" bgcolor="#38B003">


					 
				</td>
			</tr>-->
				     
				     
  

			</tbody></table></tbody></table></td>
		 </tr>
    <td height="25" align="center" valign="middle" bgcolor="#6EB5C0" class="black10"><font size="1"><b><i>For any inconvenience, please call at 01580755805(Within Office time) or send email to kazishakib98@cuet.ac.bd</i></b></font></td>
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
          </tr>
      </tbody></table>
    </fieldset></td>
  </tr>
</tbody></table>

</td></tr></tbody></table></body></html>

     <!-- <center>
     <h3 style='color:white'> </h3></br></br>
     
     
       <h3 style='color:white'></h3></a></br></br>
       </center>
<center>
            <div class="registration">
                <br>
               
                <br>
                
                  
                 
                 
                   <a href="http://cuet.xyz/msc/email.php"><B>Forgot Password?</B></a></br></br>
                   
                <a  href="help.pdf"><B>
                    Get Help</B>
                </a>
                </br></br>
            </div>
</center>-->
<?php } }?>