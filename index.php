<!DOCTYPE html>
<html>
	<head>
		<title>USComms</title>
		<style>
			<?php include "style.css" ?>
		</style>
		<script src="login.js"></script>
	</head>
	<body>
		<button class="button">News</button><br>
		<button class="button">Archive</button><br>
		<form class="login" id="temp" action="chat.php">
			<input id="temp" name="temp_login" maxlength=10 placeholder="Temp Username" type="text" method="get" required><br>
			<button type="submit">Submit</button>
		</form>
		<form class="login" id="perm" action="">
			<input id="perm" maxlength=20 placeholder="Username" type="text" required><br>
			<input id="perm" maxlength=20 placeholder="Password" type="text" required><br>
			<button>Log in</button>
		</form>
		<p>By logging in you are agreeing to the rules.</p>
		<button class="button">Register</button>
		<button class="rules">Rules</button>
	</body>
</html>