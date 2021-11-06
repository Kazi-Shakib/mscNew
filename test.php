
<?php ?>
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
				<td width="20%" align="left" valign="middle"><img src="logo.png" width="90" height="120"></td>
				
				<td width="80%" align="middle" valign="middle">
				 
				 	<font color="white"><font size="6"><font face="Times New Roman"><b> CUET Post-Graduate Admission Form </b></font></font><br>
				 	 
					<!--<font color="white"><font size="2"><b><a href="http://www.cuet.ac.bd/" target="_blank"><mark>www.cuet.ac.bd<mark></mark></mark></a></b></font>-->  Helpline : Call @ 01580755805(Office hour) or mail at @cuet.ac.bd<br> 
           
			  </tr>
			</tbody></table></td>
		  </tr>
		<tbody>
		 </tr>
    <tr>
				        <td height="30" align="left" valign="middle" bgcolor="#38B003">


					<table border="1" bordercolor="White" cellpadding="8" cellspacing="0" class="#FF0000">
						<tbody><tr>
						    					<tbody><tr>
						    

						</tr>
					</tbody></table>
				</td>
			</tr>
  
  <tr>
  	<td height="25" align="center" valign="middle" bgcolor="#E3E3E3" class="black12bold">

	<?php
//1912388697


$servername = "localhost";
$username = "cuetac_msadmission";
$password = "Iict518#@!";
$dbname = "cuetac_msadmission";

$db = new mysqli($servername, $username, $password,$dbname);
   if ($db->connect_error) {
  die("Connection failed: " . $db->connect_error);
}

$transaction_id=2477867950;
	$username = "dbill";
	$password = "dBILL!23";
	$remote_url = "http://103.11.136.153/BillPayGW/BillInfoService?shortcode=246&userid=CUET101&password=j874hejduierunaigt&opcode=GT&txnid=$transaction_id";
	$opts = array(
	'http' => array(
	'method' => "GET",
	'host' => '10.10.200.142',
	'header' => "Authorization: Basic " . base64_encode("$username:$password")
	)
	);
	$context = stream_context_create($opts);
	
	// Open the file using the HTTP headers set above
	$file = file_get_contents($remote_url, false, $context);
	
	$ex=explode("|",$file);
	$cc=count($ex);
	if($cc>2){
	   $bank_amount=0;
	$bank_amount=$ex[2];
	echo 	" <br> Rocket Payment Received   from:".$bank_appid=$ex[1]."</br>Amount : ".$bank_amount."</br>";
	
	if(($bank_amount<500)){ 
		
			die("Payment error for Amount .Contact Call @ 01580755805(Office hour) or mail at kazishakib98@cuet.ac.bd for transaction query.To apply again: <br> <a href='preview2.php'> Dashboard </a>.  ");
		}
		else{
	
	echo "Payment Done!"; 
	}}
	
	?>					  

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
    <td height="25" align="center" valign="middle" bgcolor="lightgreen" class="black10"><font size="1"><b><i>For any inconvenience, please send email to kazishakib98@cuet.ac.bd,or call </i></b></font></td>
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
