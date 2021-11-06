<?php
die("<b><h3><hr><center>Application Time has Expired!</center></b><hr></h3>");
session_start();
$email=$_SESSION['email'];
$_SESSION['email']=$email;
 // Connect to MySql
	$servername = "localhost";
$username = "cuetac_msadmission";
$password = "Iict518#@!";
$dbname = "cuetac_msadmission";

$db = new mysqli($servername, $username, $password,$dbname);
   if ($db->connect_error) {
  die("Connection failed: " . $db->connect_error);
}

$sql="SELECT * FROM `student` WHERE `email`='$email'";
    $result = mysqli_query($db, $sql); 
      
   
	 
			
			while($row=mysqli_fetch_array($result)){
			    $status=$row["status"];
			   
			    $phone=$row["phone"];
			    $name=$row['student_name'];
			    $dep=$row['dep'];
			    $type_msc_phd=$row['type_msc_phd'];
			    $student_type=$row['student_type'];
			    $student_mode=$row['student_mode'];
			    $ref_email1=$row['ref_email1'];
			    $ref_email2=$row['ref_email2'];
			    $supervisor_email=$row['supervisor_email'];
        
                
     
      
  
  //chk($email);
	
	if($dep!='' && $phone!='' && $email!='' && $status==''){
          echo "<center> <hr><h3>Payment Pending!</h3></hr></center> ";
        	 }
  elseif($status==11){
            echo "<center> <hr><h3>Payment already done!</h3></hr></center>";
            die();
        }
        else{
            echo "<center> <hr><h3>Apply and input your data first!<a href='index.php'>Apply First!</a></h3></hr></center> ";
            die();
            
        }
        }   
?>
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
		</tbody></table></td>
		 </tr>
    <tr>
				        <td height="30" align="left" valign="middle" bgcolor="#38B003">


					<table border="1" bordercolor="White" cellpadding="8" cellspacing="0" class="#FF0000">
						<tbody><tr>

						  <td width="107" align="middle" valign="middle"><a href="http://cuet.xyz/msc/" class="link-home"><font color="white">Home</font></a></td>
                                        	  


						</tr>
					</tbody></table>
				</td>
			</tr>
  
  
  <tr><td> <center>   <img  width='600' src='rockett.png'></center></td>  </tr>
 
 <tr>
     
  	<td height="25" align="center" valign="middle" bgcolor="#E3E3E3" class="black12bold">Payment Verification Page! <hr> DO NOT USE Rocket Mobile APP , Dial *322# for payment!  <hr><hr><font size=4><font color='red'>If Email is not shown on this page resubmit Again!</font></font>  <hr></td>
  </tr>
  <tr>
   
<form action ="rocket1.php" method="POST">
    <?php 	
    	echo "<hr> Email : ".$email."<hr>";
    	if($email==''){
    	   
    	   echo "<hr><h3>Data is Missing! </h3><br><h3><a href='index.php'>Apply again!</a></h3><hr>";
    	    die();}
			
			
			
			?>
     	<input type="hidden" name="phone" id="phone" value="<?php echo $phone; ?>">
			<input type="hidden" name="email" id="email" value="<?php echo $email; ?>">
			<input type="hidden" name="name" id="name" value="<?php echo $name; ?>">
			<input type="hidden" name="dep" id="name" value="<?php echo $dep;?>">
			<input type="hidden" name="type_msc_phd" id="name" value="<?php echo $type_msc_phd;?>">
			
			<input type="hidden" name="student_type" id="name" value="<?php echo $student_type;?>">
			<input type="hidden" name="student_mode" id="email" value="<?php echo $student_mode; ?>">
			<input type="hidden" name="ref_email1" id="email" value="<?php echo $ref_email1; ?>">
			
			<input type="hidden" name="ref_email2" id="email" value="<?php echo $ref_email2; ?>">
			<input type="hidden" name="supervisor_email" id="email" value="<?php echo $supervisor_email; ?>">
		
		
    
    <td colspan="3" align="center" valign="middle" bgcolor="#A2A2A2"><br><input name="transaction_id" id="transaction_id" type="text" class="form-control" placeholder="Rocket Transaction ID">
    <br></td>
    
   <tr>
       <br>
          <td colspan="3" align="center" valign="middle" bgcolor="#A2A2A2"> <br> <input type="submit" name="submit" id="submit" value="Confirm Payment & Submit" > <br> </td>
        <br> </tr> </tr> <br>
    
        
      
</form>

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
          <td width="80%" align="left" valign="middle"><tt>©2021 Chittagong University of Engineering & Technology All Rights Reserved. HelpLine :  Call @ 01580755805(Within Office time)</tt></td>
     
          <td width="9%" align="left" valign="middle"></td>
        </tr>
      </tbody></table>
    </fieldset></td>
  </tr>
	
</tbody></table>



</td></tr></tbody></table></body></html>
