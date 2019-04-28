<!DOCTYPE html>
<html>

<head>
	<title>SpicyScoff</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Login" />
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

<body>
	<!-- main -->
	<div class="agileits-main">
		<div class="w3top-nav">

		</div>
		<div class="header-main">
			<main>
    <?php
      if (isset($_SESSION['userId'])) {
        echo '<p style="color:white";>sucessfully logged in.!</p>';
        
      }
      else {
        echo '<p style="color:white";>sucessfully logged out.!</p>';
      }
     ?>
			<h2>Login</h2>
			<div class="header-bottom">
				<div class="header-right w3agile">
					<div class="header-left-bottom agileinfo">
						<form action="includes/login.inc.php" method="post">
							<div class="icon1">
								<input type="email" name="mailuid" placeholder="Email/Username" required="" />
							</div>
							
							<div class="icon1">
								<input type="password" name="password" placeholder="Password" required="" />
							</div>
							<div class="login-check">
								<label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i> </i> Keep me logged in</label>
							</div>
							<div class="bottom">
								<input type="submit" name="login-submit" value="Log in" />
							</div>
							<p style="color:rgb(255, 255, 255);">Create New Account..<a style="text-decoration: underline;" href="signup.php">Signup</a></p>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>

</html>