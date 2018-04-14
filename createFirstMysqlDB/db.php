<?php
$mysql_host='localhost';
$mysql_user='root';
$mysql_password='';

 
if(!@mysql_connect($mysql_host,$mysql_user,$mysql_password))
{

	die('can not connect to database');

}
else
{
		if(@mysql_select_db('students'))
	     {
         	//echo "connect to database";
	     }
			else
			{
				die('can not connect to database');
			}

}
 







?>