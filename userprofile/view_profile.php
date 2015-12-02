<?php

    session_start();
//echo $_SESSION['username'];
if(isset($_SESSION['username'])=="")
{
    header("Location: index.html");
}
include_once 'dbconnect.php';

if(isset($_POST['btn-update']))
{
    
    $upass = md5(mysql_real_escape_string($_POST['pass']));
    
    $skill = mysql_real_escape_string($_POST['u_skill']);
    $resume = mysql_real_escape_string($_POST['u_resume']);
    $uuname=$_SESSION['username'];

    if(mysql_query("UPDATE user_reg SET user_password='$upass',user_skill='$skill',user_resume='$resume' WHERE user_name ='$uuname'"))
    {
        ?>
        <script>alert('successfully update ');</script>
        <?php
    }
    else
    {
        ?>
        <script>alert('error while updating');</script>
        <?php
    }
}



    ?>





<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Account</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">

    <!-- Custom Fonts -->
    <link href='http://fonts.useso.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.useso.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" type="text/css">

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="css/animate.min.css" type="text/css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/creative.css" type="text/css"> 

    <header>
        <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="http://54.183.186.209/">CQRFS</a>
            </div>


            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-left">
                    <li>
                        <a class="page-scroll" href="http://54.183.186.209/userprofile/view_profile.php">Account</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#services">Tasks</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#portfolio">Jobs</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="http://54.183.186.209/readyourreport.php">Code report</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="http://54.183.186.209/">Payment</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
</headr>




<body id="page-top">

    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="http://54.183.186.209/">CQRFS</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-left">
                    <li>
                        <a class="page-scroll" href="http://54.183.186.209/userprofile/view_profile.php">Account</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="http://54.183.186.209/task/posting.php">Tasks</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="http://54.183.186.209/search/index.php">Jobs</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="http://54.183.186.209/readyourreport.php">Code report</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#services">Payment</a>
                    </li>
                </ul>
                     
                <ul class="nav navbar-nav navbar-right">
                        

                    <li>
                            <?php
                                         session_start();
                                         
                                         
                                         $pppp=$_SESSION['username'];
                                         echo "<a class=";
                                         echo "\"";
                                         echo "page-scroll";
                                         echo "\"";
                                         echo ">";

                                         echo $pppp;
                                         echo "</a>";


                                        ?> 
                    </li> 
                    
                     <li>
                        <a class="page-scroll" href="logouttest.php">Logout</a>
                    </li>

                </ul>

            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <header>
        

         <p><br /></p>
         <p><br /></p>
         
         
      <center>   
        <div style = "padding-left:1px" >
            <table border="0"  width="700" style="color:white;font-size:30px" >
                   
                      
                          
                            <?php 
                                     //require("updatedatabase.php");
                                     $con=mysql_connect("localhost","root","3317323") or die("Error connecting to database: ".mysql_error());
                                     $usname=$_SESSION['username'];
     
                                    mysql_select_db("user_profile", $con);

                                       $result3 = mysql_query("SELECT * FROM user_reg WHERE user_name='$usname'");
    // gets value sent over search form
     
    
            while($raw = mysql_fetch_array($result3)){
            // $results = mysql_fetch_array($raw_results) puts data from database into array, while it's valid it does the loop
                
                echo "<tr>";               
                echo "<td width=\"250\">";
                echo "<p><h3>Your Account:</h3></p>";
                echo "</td>";


                echo "<tr>";               
                echo "<td width=\"250\">";
                echo "<p>User ID:</p>";
                echo "</td>";


                echo "<td width=\"350\">";
                echo "<p>".$raw['user_name']."</p>";
                echo "</td>";
                echo "</tr>";
                
                echo "<tr >"; 
                echo "<td width=\"250\" height=\"10px\">";
                echo "<p>-----------------------------</p>";
                echo "</td>";

                echo "<td width=\"350\" height=\"10px\">";
                echo "<p>-----------------------------------------</p>";
                echo "</td>";
                echo "</tr>";


                echo "<tr>";               
                echo "<td width=\"100\">";
                echo "<p>E-mail:</p>";
                echo "</td>";

                echo "<td width=\"100\">";
                echo "<p>".$raw['user_mail']."</p>";
                echo "</td>";
                echo "</tr>";

                echo "<tr >"; 
                echo "<td width=\"250\" height=\"10px\">";
                echo "<p>-----------------------------</p>";
                echo "</td>";

                echo "<td width=\"350\" height=\"10px\">";
                echo "<p>-----------------------------------------</p>";
                echo "</td>";

                echo "<tr>";               
                echo "<td width=\"100\">";
                echo "<p>Skills:</p>";
                echo "</td>";

                echo "<td width=\"100\">";
                echo "<p>".$raw['user_skill']."</p>";
                echo "</td>";
                echo "</tr>";

                echo "<tr >"; 
                echo "<td width=\"250\" height=\"10px\">";
                echo "<p>-----------------------------</p>";
                echo "</td>";

                echo "<td width=\"350\" height=\"10px\">";
                echo "<p>-----------------------------------------</p>";
                echo "</td>";         

                echo "<tr>";               
                echo "<td width=\"100\">";
                echo "<p>Resume:</p>";
                echo "</td>";

                echo "<td width=\"100\">";
                echo "<p>".$raw['user_resume']."</p>";
                echo "</td>";
                echo "</tr>";

                echo "<tr >"; 
                echo "<td width=\"250\" height=\"10px\">";
                echo "<p>-----------------------------</p>";
                echo "</td>";

                echo "<td width=\"350\" height=\"10px\">";
                echo "<p>-----------------------------------------</p>";
                echo "</td>";


                // posts results gotten from database(title and text) you can also show id ($results['id'])
            }
             



                        ?> 
                           

                     
            </table>

            
            <span id="selectValue"></span>

            
            <script language="javascript" type="text/javascript">
                var linkadress
               function getSelectValue(obj) {
                 var sValue = obj.options[obj.options.selectedIndex].value; //这是取值
                 linkadress=obj.options[obj.options.selectedIndex].value
                 var sText = obj.options[obj.options.selectedIndex].innerHTML; //这是取文本内容
                 //document.getElementById("selectValue").innerHTML = sText + "，他的值为：" + sValue;
                 document.getElementById("aaa").src=sValue 


                 } 
            </script>

                 

           

            

            <p><br /></p>



        </div>

<div id="login-form">
<form method="post">
<table align="center" width="700" border="0">

<tr>
<td width="350" style="color:white">Password: </td>
<td><input type="password" name="pass"  size="44" placeholder="Your Password" required /></td>
</tr>

<!-- user_skill text,   
 user_resume    text, -->
<tr>
<td width="350" style="color:white">Skills: </td>
<td><input type="text" name="u_skill"  size="44" placeholder="Your skills" required /></td>
</tr>
<tr>
<td width="350" style="color:white">Resume: </td>
<td><input type="text" name="u_resume" size="44" placeholder="Your resume" required /></td>
</tr>

<tr>
<td><p><br /></p></td>
</tr>

<tr>
<td></td>
<td><button type="submit" style="color:black;height:30px" name="btn-update">Updata your profile</button></td>
</tr>

</table>

</form>
</div>





     </center>


        

        

         <p><br /></p>
            

</header>

    
    

    

    



    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/jquery.fittext.js"></script>
    <script src="js/wow.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/creative.js"></script>

</body>
</html>
