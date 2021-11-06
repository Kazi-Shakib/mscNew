<?php

$email=$_GET["email"];

?>
	<html>
<head>
    
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">


</head>
<body ondragstart="return false" onselectstart="return false" onload="download();"><body>
<table width="760" border="0" align="center" cellpadding="0" cellspacing="0">
  <tbody><tr>
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
				 	 
					<!--<font color="white"><font size="2"><b><a href="http://www.cuet.ac.bd/" target="_blank"><mark>www.cuet.ac.bd<mark></mark></mark></a></b></font>-->  Helpline : (Office hour) or mail at @cuet.ac.bd<br> 
           
			
			  </tr>
			</tbody></table></td>
		  </tr>
		<tbody>
		 
    <tr>
				        <td height="30" align="left" valign="middle" bgcolor="#97BC62FF">


					<table border="1" bordercolor="White" cellpadding="8" cellspacing="0" class="#FF0000">
						<tbody><tr>
						    					<tbody><tr>
						    
						    <form action ="uploadref.php" method="POST" enctype="multipart/form-data" name="app_form" id="app_form" onsubmit="return app_form_validator(this)">
     	
			
    <td colspan="3" align="center" valign="middle" bgcolor="#A2A2A2"><br><font size=5><input name="ref_email1" id="ref_email1" type="text" class="form-control" placeholder="Enter Referee E-mail."></font>
    <br>
    
      <input type="hidden" name="email" id="email" value="<?php echo $email; ?>">
    </td>
<tr>
              <td align="left" valign="middle"><font face="Times New Roman"></font><font size=5>&nbsp;Referee Recommendation Letter</font></font></td>
              <td align="center" valign="middle">:</td>
              <td align="left" valign="middle"><label>
                <input name="reff" type="file" class="textfield03" id="reff"onchange="return validateFileExtension(this), previewSign()">
              
              </label></td>
            </tr>
            
   <tr>
       <br>
          <td colspan="3" align="center" valign="middle" bgcolor="#A2A2A2"> <br> <input type="submit" name="submit" id="submit" value="Confirm" > <br> </td>
        <br> </tr> </tr> <br>
</form>


						</tr>
					</tbody></table>
				</td>
			</tr>
  
  <tr>
  	<td height="25" align="center" valign="middle" bgcolor="#E3E3E3" class="black12bold">
</td>
						</tr>
				
				</td></tbody>
			</tr>
       <tbody><tr>
  
            

           

        </div>

		
		  
     

    </div>


	<tr>
          <td height="30" colspan="3" align="center" valign="middle" bgcolor="#A2A2A2">
          
        </tr>
      </tbody></table>
    </td>
  </tr>
  <tr>
    <td height="25" align="center" valign="middle" bgcolor="lightgreen" class="black10"><font size="1"><b><i>For any inconvenience, please send email to kazishakib98@cuet.ac.bd,or call 01534660559</i></b></font></td>
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


</form></body></html>
