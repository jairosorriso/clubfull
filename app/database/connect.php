<?php 

function connect()
{
	return new PDO("mysql:host=localhost;dbname=club", 'root','1234567',[

       PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ
	]);
}