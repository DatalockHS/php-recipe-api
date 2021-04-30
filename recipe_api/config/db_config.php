<?php
//give the path to the ini file

//an example ini file is located inside this folder. it is called database_credential.ini

//recommend placing the ini file outside of the public folder in a secure location your server

$db_params = parse_ini_file("path");

define("SERVERNAME",$db_params['server']);

define("DBUSER",$db_params['user']);

define("DBPASSWORD",$db_params['password']);

define("DBNAME",$db_params['db']);
