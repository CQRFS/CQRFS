
<?php
session_start();
include_once 'dbconnect.php';
// cqrfs //Fengguo tian editing

// Database: `posting`
// Table structure for table `posting_detail`
// CREATE TABLE IF NOT EXISTS 'posting_detail'(id INT NOT NULL PRIMARY KEY AUTO_INCREMENT, user_name varchar(50),user_mail varchar(50),project_name varchar(50), budget varchar(50), programming_language varchar(50), project_detail text);

// LIKE '%term1%' OR LIKE '%term2%' OR LIKE '%term3%

if(isset($_SESSION['username'])!="")
{
	header("Location: readyourreport.php");
}

if(isset($_POST['btn-login']))
{
	$email = mysql_real_escape_string($_POST['u_email']);
	$upass = mysql_real_escape_string($_POST['pass']);
	$res=mysql_query("SELECT * FROM posting_detail WHERE user_mail='$email'");
	$row=mysql_fetch_array($res);
	
	if($row['user_password']==md5($upass))
	{
		$_SESSION['username'] = $row['user_name'];
		header("Location: readyourreport.php");
	}
	else
	{
		?>
        <script>alert('wrong details');</script>
        <?php
	}
	
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>cleartuts - Login & Registration System</title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<center>
<div id="login-form">
<form method="post">
<table align="center" width="30%" border="0">
<tr>
<td><input type="text" name="u_email" placeholder="Your Email" required /></td>
</tr>
<tr>
<td><input type="password" name="pass" placeholder="Your Password" required /></td>
</tr>
<tr>
<td><button type="submit" name="btn-login">Sign In</button></td>
</tr>
<tr>
<td><a href="posting.php">Sign Up Here</a></td>
</tr>
</table>
</form>
</div>
</center>
</body>
</html>
