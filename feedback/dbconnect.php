<?php
//Fengguo tian editing
if(!mysql_connect("localhost","root","tx19900101"))
{
	///////cqrfs fgt
	// Database: `user_profile`
// Table structure for table `user_reg`
	die('Error  cannot build connection ! --> '.mysql_error());
}
if(!mysql_select_db("posting"))
{
	die('Error database selection problem ! --> '.mysql_error());
}

?>
