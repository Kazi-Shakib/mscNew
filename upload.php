<?php

if(isset($_POST['okk'])){
	
	
	// Connect to MySql
	$db = mysqli_connect(
	);	//  The default database to query


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


	 // sakib , you start code from here ////////
	 $type_msc_phd=$_POST['type_msc_phd'];
	 $student_name=$_POST['name'];
	 $f_name=$_POST['f_name'];
	 
 
 echo $sql = "INSERT INTO studentssssss (type_msc_phd, student_name, f_name)
VALUES ('$type_msc_phd', '$student_name', '$f_name')";

	mysqli_query($db, $sql);
}
else{echo"No Way";}
