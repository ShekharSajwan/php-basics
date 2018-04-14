<?php
if(isset($_GET['submit']))
{
	if(empty($_GET["user-name"]) ||
		empty($_GET['user-age']) || 
		empty($_GET["user-weight"]))
	{
		echo "fill all Input fields";
        return 'failed';
	}
echo "Name:".$_GET["user-name"]."<br>";
echo "Age:".$_GET["user-age"]."<br>";
echo "Weight:".$_GET["user-weight"]."<br>";

}

?>
