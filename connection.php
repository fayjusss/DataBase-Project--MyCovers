<?php
	try
	{
	 $dsn = "mysql:host=localhost;dbname=MyCovers";
	 $db = new PDO ($dsn, "webuser", "webpass");
	 //print ("Connected\n");
	}
	catch (PDOException $e)
	{
	 print ("Cannot connect to server\n");
	 print ("Error code: " . $e->getCode () . "\n");
	 print ("Error message: " . $e->getMessage () . "\n");
	}
?>
