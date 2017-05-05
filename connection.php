<?php
	try
	{
	 $dsn = "mysql:host=mysli.oamk.fi;dbname=opisk_t6safa00";
	 $db = new PDO ($dsn, "t6safa00", "1234");
	 $db->setAttribute (PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	 //print ("Connected\n");
	}
	catch (PDOException $e)
	{
	 print ("Cannot connect to server\n");
	 print ("Error code: " . $e->getCode () . "\n");
	 print ("Error message: " . $e->getMessage () . "\n");
	}
?>
