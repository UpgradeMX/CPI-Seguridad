<?php 
if (!isset($_SESSION)) {
	session_name('_cpi');
	session_start();
}
if (isset($_SESSION['User'])) {
	if ($_SESSION['Timeout'] + 10 * 60 < time()) {
		session_destroy();
		$parametros_cookies = session_get_cookie_params(); 
		setcookie(session_name('_cpi'),0,1,$parametros_cookies["path"]);
		$class = "";
		$login_logout = 'href="#" id="login-btn" data-load="login"';
		$logText = "Login";
	} else {
		$edit=true;
		$class="edit_log";
		$login_logout = 'href="./edit_online/_session/_session.php?log=out"';
		$logText = "Logout";
	}
}else{
	session_destroy();
	$parametros_cookies = session_get_cookie_params(); 
	setcookie(session_name('_cpi'),0,1,$parametros_cookies["path"]);
	$class = "";
	$login_logout = 'href="#" id="login-btn" data-load="login"';
	$logText = "Login";
}
?>