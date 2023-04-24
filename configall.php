<?php
define('db_server','database-2.c9qjmjksixyl.us-east-1.rds.amazonaws.com');
define('db_username','admin');
define('db_password','12345678');
define('db_database','payrollmanagement');
$connection=mysqli_connect(db_server,db_username,db_password,db_database);
?>
