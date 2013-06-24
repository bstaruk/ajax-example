<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Ajax Example</title>
<script type="text/javascript" src="jquery.js"></script>
</head>
<body>

<form id="form1" method="post" autocomplete="off">
	<ul class="hfInfo"></ul>
	<div class="hfRow">
		<label for="email">Email Address:</label>
		<input class="text" type="text" name="email" id="email" value="">
		<span class="clr"></span>
	</div>
	<div class="hfRow">
		<input type="submit" class="submit" name="submit" id="submit" value="Submit">
		<span class="clr"></span>
	</div>
</form>
<script>
//Signup form functionality
$('#form1').submit(function(event) {
	event.preventDefault();
	$.ajax({
		type: 'POST',
		url: 'ajax.php',
		data: $("#form1").serialize(),
		dataType: 'json',
		success: function (data) {
			console.log(data);
			$('#form1 .hfInfo').html(data.msg);
		}
	});
});
</script>


</body>
</html>