<?php

///////cqrfs //Fengguo tian editing

    // Database: `user_profile`
// Table structure for table `user_reg`
// CREATE TABLE user_reg (id INT NOT NULL PRIMARY KEY AUTO_INCREMENT, 
// user_name	varchar(50),	
//  user_password	varchar(50),	
//  user_mail	varchar(50),			

//  user_skill	text,	
//  user_resume	text,	
//  user_code_rate	float);


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
	$upass = md5(mysql_real_escape_string($_POST['pass']));
	$email = mysql_real_escape_string($_POST['u_email']);
	$skill = mysql_real_escape_string($_POST['u_skill']);
	$resume = mysql_real_escape_string($_POST['u_resume']);


$email = mysql_real_escape_string($_POST['u_email']);
	$upass = mysql_real_escape_string($_POST['pass']);
	$res=mysql_query("SELECT * FROM user_reg WHERE user_mail='$email'");
	$row=mysql_fetch_array($res);
	

	if(mysql_query("INSERT INTO user_reg(user_name,user_password,user_mail,user_skill,user_resume) VALUES('$uname','$upass','$email','$skill','$resume')"))
	{
		?>
        <script>alert('successfully registered ');</script>
        <?php
	}
	else
	{
		?>
        <script>alert('error while registering you...');</script>
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
<td><input type="Comp" name="pass" placeholder="Your rate" required /></td>
</tr>

<!-- user_skill	text,	
 user_resume	text, -->
<tr>
<td><input type="text" name="u_skill" placeholder="Your skills" required /></td>
</tr>
<tr>
<td><input type="text" name="u_resume" placeholder="Your resume" required /></td>
</tr>

<tr>
<td><button type="submit" name="btn-signup">Sign Me Up</button></td>
</tr>
<tr>
<td><a href="login.php">Sign In Here</a></td>
</tr>
</table>
</form>
</div>
</center>
</body>
</html>
