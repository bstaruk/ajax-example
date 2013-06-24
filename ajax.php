<?php
//Put form elements into post variables (this is where you'd sanitize your data)
$email = $_POST['email'];

//Establish values for future use 
$return = array();
$return['msg'] = '';
$return['error'] = false;

//Begin form validation
//THIS IS JUST AN EXAMPLE, DOES NOT ACTUALLY VALIDATE AN EMAIL ADDRESS
if (!isset($email) | empty($email))
{
	$return['error'] = true;
	$return['msg'] .= '<li>Error: Invalid Email Address</li>';
}

//Validation is successful
if ($return['error'] === false){
	$return['msg'] = '<li>Success!</li>';
}

//Return results
echo json_encode($return);
?>
