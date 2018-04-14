<?php
$time=time();
//cookie is often used to identify a user.
//A cookie a small file that the server embeds on the user's computer.
//Each time the same computer requests a page with a browser,it will send the cookie too.

//setcookie(name, value, expire);
$cookie=setcookie('studentName','Mark',$time+10);
if(!isset($cookie))
{
	echo "cookie did not successfully";
}else
{
	echo "cookie set";
}



?>