<?php
if(!mysql_connect("localhost","root","3317323"))
{
	///////cqrfs fgt
	// Database: `user_profile`
// Table structure for table `user_reg`
	die('Error  cannot build connection ! --> '.mysql_error());
}

if(!mysql_select_db("user_profile"))
{
	die('Error database selection problem ! --> '.mysql_error());
}


?>
