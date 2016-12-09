<?php

$login_cookie = $_COOKIE['username_admin'];
setcookie('username_admin', '', (time() - ( -10)));

echo"<script language='javascript' type='text/javascript'>alert('Volte sempre!');
window.location.href='index.php'
</script>";

?>