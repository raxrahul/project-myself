<?php 
$connection = mysql_connect("localhost", "root", "");
$db = mysql_select_db("synzineer", $connection);
$query = mysql_query("select * from submit", $connection);