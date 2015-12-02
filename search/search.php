<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>CQRFS-Code report</title>

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
                        <a class="page-scroll" href="#services">Tasks</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#portfolio">Jobs</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="readyourreport.php">Code report</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="http://54.183.186.209/">Payment</a>
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
         <p><br /></p>
      <center>   
        <div style = "padding-left:1px" >
            <table border="0"  width="1000" style="background-color:white">
                   <tr>
                      <td >
                          
                            <?php 
                                     //require("updatedatabase.php");
                                     $con=mysql_connect("localhost","root","3317323") or die("Error connecting to database: ".mysql_error());
    /*
        localhost - it's location of the mysql server, usually localhost
        root - your username
        third is your password
         
        if connection fails it will stop loading the page and display an error
    */
     
                                    mysql_select_db("posting") or die(mysql_error());

                                       $query = $_GET['query']; 
    // gets value sent over search form
     
    $min_length = 3;
    // you can set minimum length of the query if you want
     
    if(strlen($query) >= $min_length){ // if query length is more or equal minimum length then
         
        $query = htmlspecialchars($query); 
        // changes characters used in html to their equivalents, for example: < to &gt;
         
        $query = mysql_real_escape_string($query);
        // makes sure nobody uses SQL injection
         
        $raw_results = mysql_query("SELECT * FROM posting_detail WHERE (`user_name` LIKE '%".$query."%') OR(`project_name` LIKE '%".$query."%')OR(`budget` LIKE '%".$query."%')OR (`programming_language` LIKE '%".$query."%')OR (`project_detail` LIKE '%".$query."%')OR (`user_mail` LIKE '%".$query."%')") or die(mysql_error());
if(mysql_num_rows($raw_results) > 0){ // if one or more rows are returned do following
         
            while($results = mysql_fetch_array($raw_results)){
            // $results = mysql_fetch_array($raw_results) puts data from database into array, while it's valid it does the loop
                echo "<tr>";

                
                echo "<td width=\"50\">";
                echo "<p>".$results['project_name']."</p>";
                echo "</td>";

                echo "<td width=\"100\">";
                echo "<p>".$results['user_name']."</p>";
                echo "</td>";

                
                echo "<td width=\"300\">";
                echo "<p>".$results['user_mail']."</p>";
                echo "</td>";
                

                echo "&nbsp;&nbsp;";
                echo "<td width=\"200\">";
                echo "<p>".$results['budget']."</p>";
                echo "</td>";
                

                echo "<td width=\"200\">";
                echo "<p>".$results['programming_language']."</p>";
                echo "</td>";
                

                echo "<td width=\"450\">";
                echo "<p>".$results['project_detail']."</p>";
                echo "</td>";

                echo "</tr>";


                // posts results gotten from database(title and text) you can also show id ($results['id'])
            }
             
        }
        else{ // if there is no matching rows do following
            echo "No results";
        }
         
    }
    else{ // if query length is less than minimum
        echo "Minimum length is ".$min_length;
    }


                        ?> 
                           </td>

                      <td width="550">
                                     

                      </td>
                      
                     
                    </tr> 
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

     </center>


        

        

         <p><br /></p>
            

</header>

    
    
    <div class="copyrights">Collect from <a href="http://www.cssmoban.com/" >网页模板</a></div>

    

    



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



