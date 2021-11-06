<?php session_start();

if(!isset($_SESSION['tt'])){
    echo"NO WAY"; die();
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">


</head>
<body> 
    <tr>
		<td height="100" align="left	" valign="top" class="blue"><table width="100%" border="0" cellpadding="0" cellspacing="0" class="white14bold">
		 <tbody><tr><td height="120" align="left" valign="top" class="blue"><table width="100%" border="0" cellpadding="0" cellspacing="0" class="white14">
		  <tbody><tr>
			<td bgcolor="#49575f" height="120"><table width="100%" border="0" cellpadding="3" cellspacing="0" class="black12">
			  <tbody><tr>
				<td width="20%" align="right" valign="middle"><img src="logo.png" width="90" height="120"></td>
				
				<td width="80%" align="center" valign="middle">
				 
				 	<font color="white"><font size="6"><font face="Times New Roman"><b> CUET Post-Graduate Admission Form </b></font></font><br>
				 	 
					<!--<font color="white"><font size="2"><b><a href="http://www.cuet.ac.bd/" target="_blank"><mark>www.cuet.ac.bd<mark></mark></mark></a></b></font>-->  Helpline : (Office hour) or mail at @cuet.ac.bd<br> 
           
			
			  </tr>
			</tbody></table></td>
		  </tr>
		</tbody></table></td>
		 </tr>
    <tr>
				        <td height="30" align="left" valign="middle" bgcolor="#38B003">


					<table border="1" bordercolor="White" cellpadding="8" cellspacing="0" class="#FF0000">
						<tbody><tr>

						  <td width="107" align="middle" valign="middle"><a href="http://cuet.ac.bd/admission" class="link-home"><font color="white">Home</font></a></td>
                                	  
                            <td width="107" align="middle" valign="middle"><a href="help.pdf" class="link-home"><font color="white">Help</font></a></td>  

						</tr>
					</tbody></table>
				</td>
			</tr>
  
  <tr>
  	<td height="25" align="center" valign="middle" bgcolor="#E3E3E3" class="black12bold">Application Preview And Status</td>
  </tr>

 
 
            

<table width="1200" border="2" align="center" cellpadding="0" cellspacing="0">
  <tbody>
      <tr>
    <td> SL </td>
    <td> Apply_ID </td>
    <td> Name </td>
    <td> E-mail </td>
    <td> Reference Status </td>
    <td> Phone </td>
    <td> Payment </td>
    <td> Send Reminder to Referee!</td>
    <td> Tentative Supervisor Consent(for PhD only) </td>
    <td> Details </td>

  </tr>
<?php  $sl=1;
 
 // Connect to MySql
	$conn = mysqli_connect(
	'localhost',		//  The host to connect to
	'cuetac_msadmission',		//  The user to connect as
	'Iict518#@!',		//  The password to use
	'cuetac_msadmission');	//  The default database to query


		$dep=$_SESSION['tt'];
    
    $sql_user_exist = "SELECT * FROM student WHERE `dep`='$dep' && status='11'";
		
		$result=mysqli_query($conn,$sql_user_exist);
	 
			 
			while($row=mysqli_fetch_array($result)){
echo"<tr>";
 ?>
 <td> <?php echo $sl++; ?> </td>
 <td> <?php echo $apx=$row['sl']; ?> </td>
 <td> <?php echo $ap=$row['student_name']; ?> </td>
 <td> <?php echo $ap=$row['email']; ?> </td>
 <td><?php $apw=$row['ref1'];$apw1=$row['ref2']; 

$findme   = '1304106';
$pos = strpos($apw, $findme);
if ($pos === false) {
    echo "Reference 1 not uploaded!</br>";
}
else{echo "Reference 1 has uploaded!</br>";}
$pos1 = strpos($apw1, $findme);
if ($pos1 === false) {
    echo "Reference 2 not uploaded!</br>";
}
else{echo "Reference 2 has uploaded!</br>";}


 ?></td>
 <td> <?php echo $ap=$row['phone']; ?> </td>
 <td> <?php $ac=$row['status']; if($ac==11){echo"PAID";} else {echo"<p style='color:red'>NOT PAID</p>";} ?> </td>
 <td><a href="reminder.php?email=<?php echo $apw;?>"> Reminder to Reference 1 </a></br>
     <a href="reminder.php?email=<?php echo $apw1;?>"> Reminder to Reference 2 </a></br>
 <td><?php $acp=$row['supervisor_recommendation']; 

if ($acp=='0') {
    echo "<p style='color:red'>NOT Approved!</p></br>";
}
elseif($acp == '1'){
    echo"Supervisor Approved!";
} 
elseif($acp != ''){echo "<p style='color:red'>PhD student!</p>";}
else{echo "Not PhD student!";}
 ?> </td>
     
 <td> <a href="teacherpreview.php?sl=<?php echo $apx; ?>"> Detail Information </a> </td>
 
 <?php
	 echo"</tr>";
			}
		
			?>
  




</td></tr></tbody></table></form></body></html>