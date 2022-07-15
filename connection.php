<?php

$conn = pg_connect("postgres://zxxjmrziazkdxe:e96e17631f87b366c97720704ef5e99c5cd9f8e28aa426ea35eaece492287a92@ec2-3-223-169-166.compute-1.amazonaws.com:5432/dbuthks9cjpecc");
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