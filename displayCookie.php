<?php
//will destroy after 10 second
$name= @$_COOKIE['studentName'];
if(!empty($name))
{
	echo "$name";
}else
{
	echo "cookie has been expired 10 second ago.";
}




?>