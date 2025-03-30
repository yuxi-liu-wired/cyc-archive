<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>LarKC: the Large Knowledge Collider &rsaquo; Log In</title>
<link rel='stylesheet' id='login-css'  href='http://www.larkc.eu/wp-admin/css/login.css?ver=20110610' type='text/css' media='all' />
<link rel='stylesheet' id='colors-fresh-css'  href='http://www.larkc.eu/wp-admin/css/colors-fresh.css?ver=20110703' type='text/css' media='all' />
<script type='text/javascript' src='http://www.larkc.eu/wp-includes/js/l10n.js?ver=20101110'></script>
<script type='text/javascript' src='http://www.larkc.eu/wp-includes/js/jquery/jquery.js?ver=1.6.1'></script>
<script type='text/javascript' src='http://www.larkc.eu/wp-content/plugins/bib2html/js/bib2html.js?ver=0.7'></script>
<meta name='robots' content='noindex,nofollow' />
</head>
<body class="login">
<div id="login"><h1><a href="http://wordpress.org/" title="Powered by WordPress">LarKC: the Large Knowledge Collider</a></h1>

<form name="loginform" id="loginform" action="http://www.larkc.eu/wp-login.php" method="post">
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
		<input type="submit" name="wp-submit" id="wp-submit" class="button-primary" value="Log In" tabindex="100" />
		<input type="hidden" name="redirect_to" value="http://www.larkc.eu/wp-admin/" />
		<input type="hidden" name="testcookie" value="1" />
	</p>
</form>

<p id="nav">
<a href="http://www.larkc.eu/wp-login.php?action=lostpassword" title="Password Lost and Found">Lost your password?</a>
</p>

<script type="text/javascript">
function wp_attempt_focus(){
setTimeout( function(){ try{
d = document.getElementById('user_login');
d.focus();
d.select();
} catch(e){}
}, 200);
}

wp_attempt_focus();
if(typeof wpOnload=='function')wpOnload();
</script>

	<p id="backtoblog"><a href="http://www.larkc.eu/" title="Are you lost?">&larr; Back to LarKC: the Large Knowledge Collider</a></p>
	</div>


</body>
</html>
