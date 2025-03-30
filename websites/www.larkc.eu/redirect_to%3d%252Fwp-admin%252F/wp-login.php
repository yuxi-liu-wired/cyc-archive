<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr">
<head>
	<title>larKC &rsaquo; Login</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<link rel='stylesheet' href='http://www.larkc.eu/wp-admin/css/login.css?version=2.5.1' type='text/css' />
<link rel='stylesheet' href='http://www.larkc.eu/wp-admin/css/colors-fresh.css?version=2.5.1' type='text/css' />
	<script type="text/javascript">
		function focusit() {
			document.getElementById('user_login').focus();
		}
		window.onload = focusit;
	</script>
</head>
<body class="login">

<div id="login"><h1><a href="http://wordpress.org/" title="Powered by WordPress">larKC</a></h1>

<form name="loginform" id="loginform" action="wp-login.php" method="post">
	<p>
		<label>Username<br />
		<input type="text" name="log" id="user_login" class="input" value="" size="20" tabindex="10" /></label>
	</p>
	<p>
		<label>Password<br />
		<input type="password" name="pwd" id="user_pass" class="input" value="" size="20" tabindex="20" /></label>
	</p>
	<p class="forgetmenot"><label><input name="rememberme" type="checkbox" id="rememberme" value="forever" tabindex="90" /> Remember Me</label></p>
	<p class="submit">
		<input type="submit" name="wp-submit" id="wp-submit" value="Log In" tabindex="100" />
		<input type="hidden" name="redirect_to" value="/wp-admin/" />
		<input type="hidden" name="testcookie" value="1" />
	</p>
</form>

<p id="nav">
<a href="http://www.larkc.eu/wp-login.php?action=lostpassword" title="Password Lost and Found">Lost your password?</a>
</p>

</div>

<p id="backtoblog"><a href="http://www.larkc.eu/" title="Are you lost?">&laquo; Back to larKC</a></p>

</body>
</html>
