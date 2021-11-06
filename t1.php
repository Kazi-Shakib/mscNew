

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
 

</head>
<body>
    <tr>
		<td height="100" align="left	" valign="top" class="blue"><table width="100%" border="0" cellpadding="0" cellspacing="0" class="white14bold">
		 <tbody><tr><td height="120" align="left" valign="top" class="blue"><table width="100%" border="0" cellpadding="0" cellspacing="0" class="white14">
		  <tbody><tr>
			<td bgcolor="Blue" height="120"><table width="100%" border="0" cellpadding="3" cellspacing="0" class="black12">
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
                            <td width="107" align="middle" valign="middle"><a href="tlogin.php" class="link-home"><font color="white">Log Out</font></a></td>    
						</tr>
					</tbody></table>
				</td>
			</tr>

  <tr>
  	<td height="25" align="center" valign="middle" bgcolor="#E3E3E3" class="black12bold">Applicant Details & Status</td>
  </tr>
 

<form action="" method="GET" enctype="multipart/form-data" name="app_form" id="app_form" onsubmit="return app_form_validator(this)">
 
<table width="760" border="0" align="center" cellpadding="0" cellspacing="0"><div class="adv-table">
    <script>
function printContent(el){
	var restorepage = document.body.innerHTML;
	var printcontent = document.getElementById(el).innerHTML;
	document.body.innerHTML = printcontent;
	window.print();
	document.body.innerHTML = restorepage;
}
</script>
    <button style="color: white; width:60px;height:25px; background-color: black;;
border-radius: 4px;" onclick="printContent('pr')">Print</button>
  <header class="panel-heading">
                      Print Application Details
                        <span class="tools pull-right">
                            <a href="javascript:;" class="fa fa-chevron-down"></a>
                            <a href="javascript:;" class="fa fa-cog"></a>
                            <a href="javascript:;" class="fa fa-times"></a>
                         </span>
                    </header> 
   
    
  <tbody>
      
     
          
          

 

      <tr>
    <td height="10" align="center" valign="middle" class="topbg">&nbsp;</td>
  </tr>
           
<?php 
$sl=$_GET['sl'];
 // Connect to MySql
	$conn = mysqli_connect(
	'localhost',		//  The host to connect to
	'cuetac_msadmission',		//  The user to connect as
	'Iict518#@!',		//  The password to use
	'cuetac_msadmission');	//  The default database to query


		
    
    $sql_user_exist = "SELECT * FROM student WHERE `sl`='$sl'";
		
		$result=mysqli_query($conn,$sql_user_exist);
	 
			
			while($row=mysqli_fetch_array($result)){
	 $status = $row['status'];
	    
	$type_msc_phd = $row['type_msc_phd'];
		$student_type = $row['student_type'];
		$student_mode = $row['student_mode'];
	    $student_name = $row['student_name'];
		$f_name = $row['f_name'];
		$m_name = $row['m_name'];	
		$dep = $row['dep'];
		$b_day = $row['b_day'];
		
		$gender = $row['gender'];
		$nation = $row['nation'];	

		$religion = $row['religion'];
		$nid = $row['nid'];	
	    $present_address=$row['present_address'];

		$permanent_address=$row['permanent_address'];
 /*$exx=explode(",",$permanent_address);
 foreach($exx as $exs){
     echo"$exs <br>";
 }*/
   
		
		$phone = $row['phone'];
		$email = $row['email'];
		$degree_name=$row['degree_name'];
		$institute=$row['institute'];
		$passed_dept=$row['passed_dept'];
		$cgpa=$row['cgpa'];
		$passing_year=$row['passing_year'];
		$research_interest = $row['research_interest'];
		$research = $row['research'];
    	$reference = $row['reference'];
		$occupation=$row['occupation'];
		$photo=$row['pic_upload'];
		$signature=$row['signature_upload'];
		$zip=$row['certificate_upload'];
		$NOC=$row['NOC'];
		$paper_proposal=$row['paper_proposal'];
	    $character_certificate=$row['character_certificate'];
	    $supervisor_recommendation=$row['supervisor_recommendation'];
	    $ref1=$row['ref1'];
	    $ref2=$row['ref2'];
	?>

 <td colspan="3" align="left" valign="middle" bgcolor="#DCDCDC" class="black14"><table width="100%" border="0" cellpadding="3" cellspacing="1" class="black12">
            <tbody><tr>
          
              	

  	<td align="center" valign="middle"  width="53%" height="25" bgcolor="#E3E3E3">Photo :  <img src="pic/<?php echo $photo?>" alt="missing" height="150px" width="150px"/></hr></td>
  
  	<td align="center" valign="middle" width="53%" height="75" bgcolor="#E3E3E3">Signature :  <img src="pic/<?php echo $signature?>" alt="missing"height="80px" width="130px"/></hr></td>
  </tr>    </tr> </tbody> </table>  	  

            <input type="hidden" name="phone" id="phone" value="<?php echo $phone ?>">
			<input type="hidden" name="email" id="email" value="<?php echo $email ?>">
		    <input type="hidden" name="password" id="password" value="<?php echo $password ?>">
		    

 <div class="panel-body" id="pr">
  <tr>
      
    <td align="left" valign="top">
      <table width="100%" border="0" cellpadding="5" cellspacing="0" class="black12">
        <tbody>
         <tr>
          <td align="left" valign="middle" bgcolor="#E3E3E3"><p style='color:red'>Applicant's Status</p></td>
          <td align="center" valign="middle" bgcolor="#E3E3E3">:</td>
          <td align="left" valign="middle" bgcolor="#E3E3E3" class="black11"><?php if($status==11){ echo "<B>Payment done and verified</B>";} else{echo "Payment Pending!";} ?></td>
       </tr>
    </div>
        <tr>
          <td width="23%" align="left" valign="middle" bgcolor="lightgreen">Name of the Post</td>
          <td width="7%" align="center" valign="middle" bgcolor="lightgreen">:</td>
          <td width="70%" align="left" valign="middle" bgcolor="lightgreen"><?php echo $type_msc_phd?></td>
        </tr>
<tr>
          <td width="23%" align="left" valign="middle" bgcolor="lightgreen">Admission Type</td>
          <td width="7%" align="center" valign="middle" bgcolor="lightgreen">:</td>
          <td width="70%" align="left" valign="middle" bgcolor="lightgreen"><?php echo $student_type?></td>
        </tr>
<tr>
          <td width="23%" align="left" valign="middle" bgcolor="lightgreen">Mode of Admission</td>
          <td width="7%" align="center" valign="middle" bgcolor="lightgreen">:</td>
          <td width="70%" align="left" valign="middle" bgcolor="lightgreen"><?php echo $student_mode?></td>
        </tr>

              <tr>
          <td align="left" valign="middle" bgcolor="#E3E3E3">Applicant's Name</td>
          <td align="center" valign="middle" bgcolor="#E3E3E3">:</td>
          <td align="left" valign="middle" bgcolor="#E3E3E3" class="black11"><?php echo $student_name ?></td>
       </tr>

        <tr>
          <td align="left" valign="middle" bgcolor="#E3E3E3">Father's Name</td>
          <td align="center" valign="middle" bgcolor="#E3E3E3">:</td>
          <td align="left" valign="middle" bgcolor="#E3E3E3" class="black11"><?php echo $f_name?></td>
        </tr>

        <tr>
          <td align="left" valign="middle" bgcolor="#E3E3E3">Mother's Name</td>
          <td align="center" valign="middle" bgcolor="#E3E3E3">:</td>
          <td align="left" valign="middle" bgcolor="#E3E3E3" class="black11"><?php echo $m_name?></td>
        </tr>
<tr>
    <tr>
          <td align="left" valign="middle" bgcolor="#DCDCDC">Date of Birth</td>
          <td align="center" valign="middle" bgcolor="#DCDCDC">:</td>
          <td align="left" valign="middle" bgcolor="#DCDCDC" class="black11"><?php echo $b_day ?></td>
        </tr>

    

        <tr>
          <td align="left" valign="middle" bgcolor="#DCDCDC">Nationality</td>
          <td align="center" valign="middle" bgcolor="#DCDCDC">:</td>
          <td align="left" valign="middle" bgcolor="#DCDCDC"><table width="100%" border="0" cellpadding="0" cellspacing="0" class="black12">
            <tbody><tr>
              <td width="20%" height="23" align="left" valign="middle" class="black11"><?php echo $nation ?></td>
              <td width="5%" align="left" valign="middle">&nbsp;</td>
            </tr>

          </tbody></table></td>
        </tr>
	
     
         <tr>
          <td align="left" valign="middle" bgcolor="#DCDCDC">National ID</td>
          <td align="center" valign="middle" bgcolor="#DCDCDC">:</td>
          <td align="left" valign="middle" bgcolor="#DCDCDC" class="black11"><?php echo $nid ?></td>
        </tr>


		<tr>
          <td align="left" valign="middle" bgcolor="#E3E3E3">Religion</td>
          <td align="center" valign="middle" bgcolor="#E3E3E3">:</td>
          <td align="left" valign="middle" bgcolor="#E3E3E3" class="black11"><?php echo $religion ?></td>
        </tr>
		
        <tr>
          <td colspan="3" align="left" valign="middle" bgcolor="#DCDCDC" class="black12"><table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tbody><tr>
              <td width="50%" align="left" valign="middle" class="bdr02"><table width="100%" border="0" cellpadding="3" cellspacing="0" class="black12">
                <tbody><tr>
                  <td colspan="2" height="25" align="left" valign="middle" bgcolor="lightgreen">Mailing/Present Address</td>
                </tr>
		
                <tr>
                  <td width="47%" align="left" valign="middle"></td>
                  <td width="53%" align="left" valign="middle" claspasss="black11"><?php $exx=explode("##",$present_address);
 foreach($exx as $exs){
     echo"$exs <br>"; }  ?></td>
                   </tr>
                <!--<tr>
                  <td align="left" valign="middle">
				  Village/Town/<br>
                  Road/House/Flat:</td>
                  <td width="53%" align="left" valign="middle" class="black11"><?php echo $present_vill ?></td>
                </tr>
                <tr>
                  <td align="left" valign="middle">District:</td>
                  <td align="left" valign="middle" class="black11"><?php echo $present_dist ?></td>
                </tr>
                <tr>
                  <td align="left" valign="middle">P.S./Upazila:</td>
                  <td align="left" valign="middle" class="black11"><?php echo $present_upazila ?></td>
                </tr>
                <tr>
                  <td align="left" valign="middle">Post Office:</td>
                  <td align="left" valign="middle" class="black11"<?php echo $present_post ?></td>
                </tr>
                <tr>
                  <td align="left" valign="middle">Post Code:</td>
                  <td align="left" valign="middle" class="black11"><?php echo $present_pcode ?></td>
                </tr>-->
              </tbody></table></td>
              <td align="left" valign="middle">&nbsp;</td>
              <td width="50%" align="left" valign="middle" class="bdr02"><table width="100%" border="0" cellpadding="3" cellspacing="0" class="black12">
                <tbody>
				
          </tbody></table></td>
     
        </tr>
        <tr bgcolor="#E3E3E3">
          <td align="left" valign="middle">Contact Mobile</td>
          <td align="center" valign="middle">:</td>
          <td align="left" valign="middle">
		  <table width="100%" border="0" cellpadding="0" cellspacing="0" class="black12">
            <tbody><tr>
              <td width="37%" height="23" align="left" valign="middle" class="red12bold"><?php echo $phone ?></td>
              <td width="21%" align="right" valign="middle">&nbsp;</td>
              <td width="33%" align="right" valign="middle" class="red12bold">&nbsp;</td>
              <td width="9%" align="left" valign="middle" class="red12bold">&nbsp;</td>
              </tr>
          </tbody></table></div>
		  </td>
        </tr>
        <tr bgcolor="#E3E3E3">
          <td align="left" valign="middle">Email</td>
          <td align="center" valign="middle">:</td>
          <td align="left" valign="middle"><?php echo $email ?></td>
        </tr>

        <tr>
          <td colspan="3" align="left" valign="middle" bgcolor="lightgreen">Academic Qualifications:</td>
        </tr>
        <tr>
          <td colspan="3" align="left" valign="middle" bgcolor="#DCDCDC" class="black14"><table width="100%" border="0" cellpadding="3" cellspacing="1" class="black12">
            <tbody><tr>
              <td width="20%" height="25" align="center" valign="middle" bgcolor="#A2A2A2">Examination & Roll</td>
              <td width="20%" height="25" align="center" valign="middle" bgcolor="#A2A2A2">Board/University</td>
              
              <td width="20%" height="25" align="center" valign="middle" bgcolor="#A2A2A2">Result</td>
              <td width="20%" height="25" align="center" valign="middle" bgcolor="#A2A2A2">Group/Subject</td>
              <td width="20%" height="25" align="center" valign="middle" bgcolor="#A2A2A2">Year</td>
            </tr>


	<tr class="black11">
				  <td height="25" align="center" valign="middle" bgcolor="#C7C7C7"><?php 
				 $exx=explode("##",$degree_name);
 foreach($exx as $exs){
     echo"$exs <br>"; }?></td>
				  <td height="25" align="center" valign="middle" bgcolor="#C7C7C7"><?php $exx=explode("##",$institute);
 foreach($exx as $exs){
     echo"$exs <br>"; }  ?></td>
				  
				  <td height="25" align="center" valign="middle" bgcolor="#C7C7C7"><?php $exx=explode("##",$cgpa);
 foreach($exx as $exs){
     echo"$exs <br>"; }  ?> </td>
				  <td height="25" align="center" valign="middle" bgcolor="#C7C7C7"><?php $exx=explode("##",$passed_dept);
 foreach($exx as $exs){
     echo"$exs <br>"; } ?></td>
				  <td height="25" align="center" valign="middle" bgcolor="#C7C7C7"><?php $exx=explode("##",$passing_year);
 foreach($exx as $exs){
     echo"$exs <br>"; }  ?></td>
				  <td align="center" valign="middle" bgcolor="#C7C7C7">&nbsp;</td>
				
	
        
      
        </tr>



 </tbody></table></td>
    
        
	
	<tr>
       </tr><tr>
          <td colspan="3" align="left" valign="middle" bgcolor="lightgreen"><table width="100%" border="0" cellpadding="3" cellspacing="1" class="black12">Research/Publication:</td>
        </tr>


</div>
   <tr>
          <td colspan="3" align="left" valign="middle" bgcolor="#DCDCDC" class="black14">
      
    <table width="100%" border="0" cellpadding="3" cellspacing="1" class="black12">
          <div class="adv-table">  <tbody><tr>
              <td width="20%" height="25" align="center" valign="middle" bgcolor="#A2A2A2">Research Interest,Tentative Supervisor name & email(For PhD only),Number of Publication,Publication Type, Titles & info</td>

              
    </tr><tr>
              <td width="10%" height="25" align="center" valign="middle" bgcolor="#A2A2A2"><?php 
              $exx=explode("##",$research);
 foreach($exx as $exs){
     echo"$exs <br>";}
     ?></td>
              


	
        </tbody></table></td>
        </tr>

 
<tr>
       </tr><tr>
          <td colspan="3" align="left" valign="middle" bgcolor="lightgreen">Professional Experience:</td>
        </tr>



   <tr>
          <td colspan="3" align="left" valign="middle" bgcolor="#DCDCDC" class="black14">
      
    <table width="100%" border="0" cellpadding="3" cellspacing="1" class="black12">
            <tbody><tr>
              <td width="20%" height="25" align="center" valign="middle" bgcolor="#A2A2A2">Organization Name,Post Name,Responsibilities,Start Date,End Date</td>
              
             
         
    </tr><tr>
              <td width="20%" height="25" align="center" valign="middle" bgcolor="#A2A2A2"><?php $exx=explode("##",$occupation);
 foreach($exx as $exs){
     echo"$exs <br>";} ?></td>
              



             </tr>


  

    </tbody></table></td>

    <tr>
       </tr><tr>
          <td colspan="3" align="left" valign="middle" bgcolor="lightgreen">Reference:</td>
        </tr>



   <tr>
          <td colspan="3" align="left" valign="middle" bgcolor="#DCDCDC" class="black14">
      
    <table width="100%" border="0" cellpadding="3" cellspacing="1" class="black12">
            <tbody><tr>
              <td width="20%" height="25" align="center" valign="middle" bgcolor="#A2A2A2">Reference</td>
              
             
             
         
    </tr><tr>
              <td width="20%" height="25" align="center" valign="middle" bgcolor="#A2A2A2"><?php 
              $exx=explode("##",$reference);
 foreach($exx as $exs){
     echo"$exs <br>";} ?> </td>
             

             
      
         
            </tr>
            </div>
             <tr>
       </tr>
<?php
		}
		
	?>
  </div>

    </tbody></table></td>
    
            <tr>
   </tr><tr>
      <td align="left" valign="top" bgcolor="#F1DCC9">

      <table width="230" border="0" align="center" cellpadding="0" cellspacing="0">

      <tbody></tbody></table></td>
	   </tr>


	<tr>
          <td colspan="3" align="left" valign="middle" bgcolor="#E3E3E3" class="black12bold"><b>Uploaded Files:</b></td>
          </tr>
        
          <tr>
          <td colspan="3" align="left" valign="middle" bgcolor="#DCDCDC"><table width="100%" border="0" cellpadding="0" cellspacing="0" class="black12">
            <tbody><tr>
              <td width="22%" align="left" valign="middle">&nbsp;Uploaded Photo</td>
              <td width="7%" align="center" valign="middle">:</td>
              <td width="51%" align="left" valign="middle">
              <label>
                 <a href="pic/<?php echo $photo?>">Uploaded Photo</a>
              
              </label>
              </td>
              </tr>
              
              
              <tr>
              <td align="left" valign="middle">&nbsp;Uploaded Signature</td>
              <td align="center" valign="middle">:</td>
              <td align="left" valign="middle"><label>
                <a href="pic/<?php echo $signature?>">Uploaded Signature</a>
                
              </label></td>
            </tr>
            <tr>
              <td align="left" valign="middle">&nbsp;Uploaded Academic Certificates in Zip Format</td>
              <td align="center" valign="middle">:</td>
              <td align="left" valign="middle"><label>
                <a href="zip/<?php echo $zip?>">Uploaded Academic Certificates in Zip Format</a>
                
              </label></td>
            </tr>
            
            <tr>
              <td align="left" valign="middle">&nbsp;NOC(If uploaded)</td>
              <td align="center" valign="middle">:</td>
              <td align="left" valign="middle"><label>
                <a href="pic/<?php echo $NOC?>">NOC(If uploaded)</a>
                
              </label></td>
            </tr>
             <tr>
              <td align="left" valign="middle">&nbsp;Uploaded Proposal Manuscript(If Uploaded)</td>
              <td align="center" valign="middle">:</td>
              <td align="left" valign="middle"><label>
                <a href="pic/<?php echo $paper_proposal?>">Uploaded Proposal Manuscript</a>
                
              </label></td>
            </tr>
              <tr>
              <td align="left" valign="middle">&nbsp;Uploaded Last Institution Character Certificate</td>
              <td align="center" valign="middle">:</td>
              <td align="left" valign="middle"><label>
                <a href="pic/<?php echo $character_certificate?>">Uploaded Last Institution Character Certificate</a>
                
              </label></td>
            </tr>
            <tr>
              <td align="left" valign="middle">&nbsp;Uploaded Reference 1(Mandatory for PhD)(If Uploaded)</td>
              <td align="center" valign="middle">:</td>
              <td align="left" valign="middle"><label>
             <a href="pic/<?php echo $ref1?>">Uploaded Reference 1(Mandatory for PhD)(If Uploaded)</a>
              </label></td>
            </tr>
                 <tr>
              <td align="left" valign="middle">&nbsp;Uploaded Reference 2(Mandatory for PhD)(If Uploaded)</td>
              <td align="center" valign="middle">:</td>
              <td align="left" valign="middle"><label>
             <a href="pic/<?php echo $ref2?>">Uploaded Reference 2(Mandatory for PhD)(If Uploaded)</a>
              </label></td>
            </tr>
            </tbody></table></td>
              </tr>
         

		
	<tr>
          <td height="30" colspan="3" align="center" valign="middle" bgcolor="#A2A2A2">
          
        </tr>
      </tbody></table>
    </td>
  </tr>
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tbody>
  <tr>
    <td height="25" align="center" valign="middle" bgcolor="lightgreen" class="black10" width="100%"><font size="1"><b><i>For any inconvenience, please send email to iict@cuet.ac.bd</i></b></font></td>
  </tr>
  <tr>
    <td align="left" valign="top">&nbsp;</td>
  </tr>
  <tr>
    <td align="left" valign="top"><fieldset>
      <table width="100%" border="0" cellpadding="0" cellspacing="0" class="black10">
        <tbody><tr>
          <td width="1%" align="left" valign="middle">&nbsp;</td>
          <td width="100%" align="left" valign="middle"><tt>©2021 Chittagong University of Engineering & Technology All Rights Reserved.</tt></td>
     
          <td width="9%" align="left" valign="middle"></td>
        </tr>
      </tbody></table>
    </fieldset></td>
  </tr>
	
</tbody></table>


<!-- Placed js at the end of the document so the pages load faster -->

<!--Core js-->
<script src="backend/js/jquery.js"></script>
<script src="backend/bs3/js/bootstrap.min.js"></script>
<script class="include" type="text/javascript" src="backend/js/jquery.dcjqaccordion.2.7.js"></script>
<script src="backend/js/jquery.scrollTo.min.js"></script>
<script src="backend/js/jQuery-slimScroll-1.3.0/jquery.slimscroll.js"></script>
<script src="backend/js/jquery.nicescroll.js"></script>
<!--Easy Pie Chart-->
<script src="backend/js/easypiechart/jquery.easypiechart.js"></script>
<!--Sparkline Chart-->
<script src="backend/js/sparkline/jquery.sparkline.js"></script>
<!--jQuery Flot Chart-->
<script src="backend/js/flot-chart/jquery.flot.js"></script>
<script src="backend/js/flot-chart/jquery.flot.tooltip.min.js"></script>
<script src="backend/js/flot-chart/jquery.flot.resize.js"></script>
<script src="backend/js/flot-chart/jquery.flot.pie.resize.js"></script>

<!--dynamic table-->
<script type="text/javascript" language="javascript" src="backend/js/advanced-datatable/js/jquery.dataTables.js"></script>
<script type="text/javascript" src="backend/js/data-tables/DT_bootstrap.js"></script>
<!--common script init for all pages-->
<script src="backend/js/scripts.js"></script>

<!--dynamic table initialization -->
<script src="backend/js/dynamic_table_init.js"></script>




</td></tr></tbody></table></form></body></html>