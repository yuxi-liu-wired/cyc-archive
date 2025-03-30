<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr">
<head>
	<title>larKC &rsaquo; Lost Password</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<link rel='stylesheet' href='http://www.larkc.eu/wp-admin/wp-admin.css?version=2.3.2' type='text/css' />
	<!--[if IE]><style type="text/css">#login h1 a { margin-top: 35px; } #login #login_error { margin-bottom: 10px; }</style><![endif]--><!-- Curse you, IE! -->
	<script type="text/javascript">
		function focusit() {
			document.getElementById('user_login').focus();
		}
		window.onload = focusit;
	</script>
</head>
<body class="login">

<div id="login"><h1><a href="http://wordpress.org/" title="Powered by WordPress">larKC</a></h1>
<p class="message">Please enter your username and e-mail address. You will receive a new password via e-mail.</p>

<form name="lostpasswordform" id="lostpasswordform" action="wp-login.php?action=lostpassword" method="post">
	<p>
		<label>Username:<br />
		<input type="text" name="user_login" id="user_login" class="input" value="" size="20" tabindex="10" /></label>
	</p>
	<p>
		<label>E-mail:<br />
		<input type="text" name="user_email" id="user_email" class="input" value="" size="25" tabindex="20" /></label>
	</p>
	<p class="submit"><input type="submit" name="wp-submit" id="wp-submit" value="Get New Password &raquo;" tabindex="100" /></p>
</form>
</div>

<ul>
	<li><a href="http://www.larkc.eu/" title="Are you lost?">Back to larKC</a></li>
	<li><a href="http://www.larkc.eu/wp-login.php">Login</a></li>
</ul>

</body>
</html>
