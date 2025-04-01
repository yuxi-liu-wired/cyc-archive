<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr">
<head>
	<title>LarKC weblog &rsaquo; Login</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<link rel='stylesheet' href='http://blog.larkc.eu/wp-admin/wp-admin.css?version=2.3.3' type='text/css' />
	<!--[if IE]><style type="text/css">#login h1 a { margin-top: 35px; } #login #login_error { margin-bottom: 10px; }</style><![endif]--><!-- Curse you, IE! -->
	<script type="text/javascript">
		function focusit() {
			document.getElementById('user_login').focus();
		}
		window.onload = focusit;
	</script>
</head>
<body class="login">

<div id="login"><h1><a href="http://wordpress.org/" title="Powered by WordPress">LarKC weblog</a></h1>

<form name="loginform" id="loginform" action="wp-login.php" method="post">
	<p>
		<label>Username:<br />
		<input type="text" name="log" id="user_login" class="input" value="" size="20" tabindex="10" /></label>
	</p>
	<p>
		<label>Password:<br />
		<input type="password" name="pwd" id="user_pass" class="input" value="" size="20" tabindex="20" /></label>
	</p>
	<p><label><input name="rememberme" type="checkbox" id="rememberme" value="forever" tabindex="90" /> Remember me</label></p>
	<p class="submit">
		<input type="submit" name="wp-submit" id="wp-submit" value="Login &raquo;" tabindex="100" />
		<input type="hidden" name="redirect_to" value="wp-admin/" />
	</p>
</form>
</div>

<ul>
	<li><a href="http://blog.larkc.eu/" title="Are you lost?">Back to LarKC weblog</a></li>
	<li><a href="http://blog.larkc.eu/wp-login.php?action=lostpassword" title="Password Lost and Found">Lost your password?</a></li>
</ul>


</body>
</html>
