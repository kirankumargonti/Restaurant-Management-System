<?php
  require "header.php";
?>
<!DOCTYPE html>
<html>

<head>
	<title>SpicyScoff</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Signup" />
	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- Custom Theme files -->
	<link href="css/login-signup.css" rel="stylesheet" type="text/css" media="all" />
	<!-- //Custom Theme files -->
	<!-- web font -->
	<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
	<!--web font-->
	<!-- //web font -->
</head>

<body class="picture">
	<!-- main -->
	<div class="agileits-main">
		<div class="w3top-nav">

		</div>
		<div class="header-main">
			<h2>Signup</h2>
			<div class="header-bottom">
				<div class="header-right w3agile">
					<div class="header-left-bottom agileinfo">
						<form action="includes/signup.inc.php" method="post">
							<div class="icon1 text">
								<input type="text" name="uid" placeholder="Username" required="" />
							</div>
							<div class="icon1">
								<input type="email" name="mail" placeholder="Email" required="" />
							</div>
							<div class="icon1">
								<input type="password" name="pwd" placeholder="Password" required="" />
							</div>
							<div class="icon1">
								<input type="password" name="pwd-repeat" placeholder="Repeat password" required="" />
							</div>
							<div class="login-check">
								<label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i> </i> Keep me logged in</label>
							</div>
							<div class="bottom">
								<input type="submit" name="signup-submit" value="Signup" />
							</div>
<p style="color:rgb(255, 255, 255);">Already a Member..<a style="text-decoration: underline;" href="login.php">Login</a></p>

						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>

</html>