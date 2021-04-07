<!DOCTYPE html>
<head>
	<title>USCommunications</title>
	<?php 
function print_p(){
	if (isset($_GET['temp_login'])){
		echo htmlentities($_GET['temp_login']);
	}
}
?>
</head>
<body>
	<p>
		<?php print_p()?>		
	</p>
</body>