<?php

include("./connect.php");
/* so, the form has been posted, we'll process the data in three steps:
	1.  Check the data
	2.  Let the user refill the wrong fields (if necessary)
	3.  Varify if the data is correct and return the correct response
*/
$errors = array(); /* declare the array for later use just incase we want it in the future */

if(!isset($_POST['username'])) {
	$errors[] = 'The username field must not be empty.';
	return false;
}
 
if(!isset($_POST['password'])) {
	$errors[] = 'The password field must not be empty.';
	return false;
}



//the form has been posted without errors, so save it
//notice the use of mysql_real_escape_string, keep everything safe!
//also notice the sha1 function which hashes the password
$sql = "SELECT 
			user_id,
			user_name,
			user_level
		FROM
			users
		WHERE
			user_name = '" . mysql_real_escape_string($_POST['username']) . "'
		AND
			user_pass = '" . sha1($_POST['password']) . "'";
			 
$result = mysql_query($sql);

if(!$result) {
	//something went wrong, return false
	//echo mysql_error(); //debugging purposes, uncomment when needed
	echo '!$result';
}

//the query was successfully executed, there are 2 possibilities
//1. the query returned data, the user can be signed in
//2. the query returned an empty result set, the credentials were wrong
if(mysql_num_rows($result) == 0) {
	echo 'Wrong username / password combination';
}

//set the $_SESSION['signed_in'] variable to TRUE
$_SESSION['signed_in'] = true;

//we also put the user_id and user_name values in the $_SESSION, so we can use it at various pages
while($row = mysql_fetch_assoc($result)) {
	$_SESSION['user_id']    = $row['user_id'];
	$_SESSION['user_name']  = $row['user_name'];
	$_SESSION['user_level'] = $row['user_level'];
}

header('Location: ../../index.php');

?>