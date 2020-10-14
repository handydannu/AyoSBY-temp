<html>
	<head>
		<title>User Agent - AyoBandung.com</title>
		<style>
			p, pre { font-family: Arial, Helvetica, sans-serif; font-size: 48px; }
		</style>
	</head>
	<body>
		<?php
			echo _p($user_agent);
			echo ($user_agent_referral != '') ? _p($user_agent_referral) : '';
		?>

	</body>
</html>
