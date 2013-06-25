<?php
//Put form elements into post variables (this is where you'd sanitize your data)
$field1 = $_POST['field1'];

//Establish values that will be returned via ajax
$return = array();
$return['msg'] = '';
$return['error'] = false;

//Begin form validation functionality
if (!isset($field1) | empty($field1)){
	$return['error'] = true;
	$return['msg'] .= '<li>Error: Field1 is empty.</li>';
}

//Begin form success functionality
if ($return['error'] === false){
	$return['msg'] = '<li>SUCCESS!</li>';
}

//Return results
echo json_encode($return);
?>
