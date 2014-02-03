<?php include 'Core/initialization.php'; ?>
<!DOCTYPE html>
	<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../Resources/CSS/style.css">
	</head>
	<body>
		<div class="main">
			<div class="header">
			<form id='login' action='Core/Database/connection.php' method='post' accept-charset='ETF-8'>
			<input type='hidden' name='submitted' id="submitted" value='1' />
			Username: <input type='text' name='username' id='name' maxlength="50" />
			Password: <input type='password' name='password' id='password' maxlength="50" />
			<!-- Email: <input type='text' name='email' id='email' maxlength="50" /> --> 
			<input type='submit' name='Submit' value='Submit' />
			</div>
			<div class="body">
				<form id="register" action="" method="get">
				Username: <input type='text' name='username' />
				Password: <input type='password' name='password' />
				Email: <input type='text' name='email' />
				<input type='submit' name='Submit' value='Register' />
				</form>
			</div>
			<div class="footer">
			</div>
		</div>
	</body>
</html>