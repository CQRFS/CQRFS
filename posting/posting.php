<?php

// cqrfs //Fengguo tian editing

// Database: `posting`
// Table structure for table `posting_detail`
// CREATE TABLE IF NOT EXISTS 'posting_detail'(id INT NOT NULL PRIMARY KEY AUTO_INCREMENT, user_name varchar(50),user_mail varchar(50),project_name varchar(50), budget varchar(50), programming_language varchar(50), project_detail text);

session_start();
echo $_SESSION['username'];
if(isset($_SESSION['username'])!="")
{
	header("Location: index.html");
}
include_once 'dbconnect.php';

if(isset($_POST['btn-signup']))
{
	$uname = mysql_real_escape_string($_POST['u_name']);
	$email = mysql_real_escape_string($_POST['u_email']);
	$project_name = md5(mysql_real_escape_string($_POST['u_project_name']));
	$budget=mysql_real_escape_string($_POST['u_budget']);
	$programming_language = md5(mysql_real_escape_string($_POST['u_programming_language']));
	$project_detail = mysql_real_escape_string($_POST['u_project_detail']);

	if(mysql_query("INSERT INTO posting_detail(user_name,user_mail,project_name,budget,programming_language,project_detail) VALUES('$uname','$email','$project_name','$budget','$programming_language','$project_detail')"))
	{
		?>
        <script>alert('successfully posted ');</script>
        <?php
	}
	else
	{
		?>
        <script>alert('error while psoting you...');</script>
        <?php
	}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login & Registration System</title>
<link rel="stylesheet" href="style.css" type="text/css" />

</head>
<body>
<center>
<div id="login-form">
<form method="post">
<table align="center" width="30%" border="0">
<tr>
<td><input type="text" name="u_name" placeholder="User Name" required /></td>
</tr>
<tr>
<td><input type="email" name="u_email" placeholder="Your Email" required /></td>
</tr>
<tr>
<td><input type="text" name="u_project_name" placeholder="Your Project Name" required /></td>
</tr>
<tr>
<td><input type="text" name="u_budget" placeholder="Your Project Budget" required /></td>
</tr>

<tr>
<td><input type="text" name="u_programming_language" placeholder="Programming Language" required /></td>
</tr>
<tr>
<td><input type="text" name="u_project_detail" placeholder="Your Project Detail" required /></td>
</tr>

<tr>
<td><button type="submit" name="btn-signup">Posting</button></td>
</tr>
<tr>
<td><a href="posting.php">Create posting</a></td>
</tr>
</table>
</form>
</div>
</center>
</body>
</html>
