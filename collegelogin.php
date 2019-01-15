<html>
<head>
<link rel="stylesheet" type="text/css" href="ab.css"/>
</head>
<body>

<img src="logo.png" width="90px">
  <div id="heading">
 <h1 >WELCOME TO EXAMINATION SYSTEM FOR VISUALLY IMPAIRED</h1> 
 <marquee direction = "left">Specially designed for blind candidates</marquee>  
 <br>
   </div>
   
   <div id="box">
       <form  action="authentication1.php" method="POST">
          <b><center>COLLEGE LOGIN</center></b><br>
                &nbsp;REGISTRATION NO.:&nbsp; <input type="text" name="reg" size="30px"><br>
                &nbsp;PASSWORD: &nbsp;<input type="password" name="pass" size="30px"><br>
                &nbsp;&nbsp;&nbsp; <input type="submit" value="LOGIN">&nbsp;
                  
        </form> 
   
    <?php
/*    
$servername = "localhost";
$username = "root";
$password = "";
$database="examinationsystem";

// Create connection

$conn = new mysqli($servername, $username, $password,$database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    
    mysql_select_db($database,$conn);
    $registration_no = $_POST["reg"];
     $pass = $_POST["pass"];


$result = mysql_query("SELECT college_registration_no, college_password FROM college WHERE college_password = $pass");

$row = mysql_fetch_array($result);

if($row["reg"]==$registration_no && $row["users_pass"]==$pass)
  $action="college.php";
else
   $action="collegelogin.php";
    
}*/
 ?>  
</body>
</html>