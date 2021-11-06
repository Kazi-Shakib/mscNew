<?php
if(isset($_POST['submit'])){
	
$email=$_POST['email'];

 // Connect to MySql
	$servername = "";
$username = "";
$password = "";
$dbname = "";

$db = new mysqli($servername, $username, $password,$dbname);
   if ($db->connect_error) {
  die("Connection failed: " . $db->connect_error);
}

function secure($value) {

	global $db;

	// Stripslashes
	if (get_magic_quotes_gpc()) {
	$value = stripslashes($value);
	}

	// Quote if not a number
	if (!is_numeric($value)) {
	$value = mysqli_real_escape_string($db, $value);
	}

	return $value;
}


	// Loop through POST variables
	foreach($_POST as $input => $value) {
	$_POST[$input] = secure($value);
	}


$sql = "SELECT * FROM student WHERE `email`='$email'";
	$result=mysqli_query($db,$sql);
	 
			
			while($row=mysqli_fetch_array($result)){
	 $ref1 = $row['ref1'];
	 $ref2=$row['ref2'];
	 
	 $ref_email1=$_POST['ref_email1'];

	 if($ref1==$ref_email1){
 
  $ref1Name = $_FILES["reff"]["name"];
  $ref1Name;
  $ref1TmpName = $_FILES["reff"]["tmp_name"];
  $ref1Type = $_FILES["reff"]["type"];
  $ref1Size= $_FILES["reff"]["size"];
  $ref1Error = $_FILES["reff"]["error"];
  $ref1Ext=explode('.',$ref1Name);
$ref1ActualExt=strtolower(end($ref1Ext));

  $allowed=array('pdf','doc','png','jpg','jpeg','docx','');
  if(in_array($ref1ActualExt,$allowed)){
     if($ref1Error==0){
         if($ref1Size<10000000){
            $ref1NewName='1304106_'.uniqid('',true).".".$ref1ActualExt;
            
            $ref1Destination='pic/'.$ref1NewName;
            move_uploaded_file($ref1TmpName,$ref1Destination);
            $sql5 = "UPDATE studentsss SET `ref1`= '$ref1NewName' WHERE `ref1`= '$ref_email1'";
            mysqli_query($db, $sql5);
            echo "<h3>Successfully Recorded the response! Thank you for your Time and Patience!</h3>";
         }
         else{
              echo"</br>Invalid Uploaded_Reference Size</br>";
         }
     }
     else{
         echo "";
     }
    
  }
   else{
              echo"</br>Invalid file formats Reference</br>";
         }	

			}
			 
elseif($ref2==$ref_email1){

 
  $ref2Name = $_FILES["reff"]["name"];
  
  $ref2TmpName = $_FILES["reff"]["tmp_name"];
  $ref2Type = $_FILES["reff"]["type"];
  $ref2Size= $_FILES["reff"]["size"];
  $ref2Error = $_FILES["reff"]["error"];
  $ref2Ext=explode('.',$ref2Name);
$ref2ActualExt=strtolower(end($ref2Ext));
  $allowed=array('pdf','doc','png','jpg','jpeg','docx','');
  if(in_array($ref2ActualExt,$allowed)){
     if($ref2Error==0){
         if($ref2Size<10000000){
            $ref2NewName='1304106_'.uniqid('',true).".".$ref2ActualExt;
            $ref2Destination='pic/'.$ref2NewName;
            move_uploaded_file($ref2TmpName,$ref2Destination);
           $sql6 = "UPDATE studentssss SET `ref2`= '$ref2NewName' WHERE `ref2`= '$ref_email1'";
            mysqli_query($db, $sql6);
            echo "<h3>Successfully Recorded the response! Thank you for your Time and Patience!</h3>";
         }
         else{
              echo"</br>Invalid Uploaded_Reference Size</br>";
         }
     }
     else{
         echo "";
     }
    
  }
   else{
              echo"</br>Invalid file formats Reference</br>";
         }	

			}
			    
			    
			    
else{
    
    echo "Please Enter the same email where referee mail was sent!";
    
    
}			    
			    
			    
			    
			    
			    
			    
			    
			    
			    
			    
			    
			    
			    
			}
			    
			    
			}
?>
