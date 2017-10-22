<?php
 $conn=mysql_connect("localhost", "root", "");             
 $result=mysql_db_query("messages", "SELECT * FROM 'users'", $conn);

 ?>