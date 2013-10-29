<?php
class ajaxValidate {

	function formValidate() {
		//Put form elements into post variables (this is where you would sanitize your data)
		$field1 = @$_POST['field1'];

		//Establish values that will be returned via ajax
		$return = array();
		$return['msg'] = '';
		$return['error'] = false;

		//Begin form validation functionality
		if (!isset($field1) || empty($field1)){
			$return['error'] = true;
			$return['msg'] .= '<li>Error: Field1 is empty.</li>';
		}

		//Begin form success functionality
		if ($return['error'] === false){
			$return['msg'] = '<li>Success Message</li>';
		}

		//Return json encoded results
		return json_encode($return);
	}

}

$ajaxValidate = new ajaxValidate;
echo $ajaxValidate->formValidate();
?>
