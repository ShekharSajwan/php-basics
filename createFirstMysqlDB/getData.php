<?php
require 'db.php';

$query="SELECT * FROM user_ingo";
if($is_query_run=mysql_query($query))
{
   // echo "Query executed";

    while ($query_execute=mysql_fetch_assoc($is_query_run))
    {
        echo "<table style='width: 100px; border:1px solid black;'><tr> <td>".$query_execute['Name']."</td> <td>".$query_execute['Surname']."</td> <td>".$query_execute['Username']."</td>
         <td>".$query_execute['Password']."</td> <td></td></tr></table>";
    }
}
else
{
    echo "Query did not executed";
}



?>