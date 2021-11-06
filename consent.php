<?php
$consent=$_GET["consent"];
$email=$_GET["email"];

$servername = "localhost";
$username = "cuetac_msadmission";
$password = "Iict518#@!";
$dbname = "cuetac_msadmission";

$db = new mysqli($servername, $username, $password,$dbname);
   if ($db->connect_error) {
  die("Connection failed: " . $db->connect_error);
}
$sql = "UPDATE student SET supervisor_recommendation='$consent' WHERE `email`='$email'";
$row= mysqli_query($db, $sql);
if($row){
    
    echo "<h3>*Thank you for your response! <br></h3>";
}
else{
    
    echo "Please click on the link again!";
    
}

?>