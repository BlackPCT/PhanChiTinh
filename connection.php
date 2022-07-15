<?php

$conn = pg_connect("postgres://szbpkavsyujrrd:dba485b302f023b6e8ee030391110140baed5828c5707ad4883daf3669cc179a@ec2-3-219-229-143.compute-1.amazonaws.com:5432/d4far3htrm0ltd");
	if(!$conn)
	{
		die("Could not connect to database");
    }

	
/*	
$conn = pg_connect("host=localhost port=5432 dbname=ATNshop user=postgres password=20102001");
if (!$conn) {
	die("Connection failed");
}*/
?>