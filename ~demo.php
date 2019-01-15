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
       <form action="admin.php"><br>
          <b>ADMIN LOGIN PORTAL</b><br>
                &nbsp;REGISTRATION NO.:&nbsp; <input type="text" name="fname" size="30px"><br>
                &nbsp;PASSWORD: &nbsp;<input type="password" name="lname" size="30px"><br>
                &nbsp;&nbsp;&nbsp; <input type="submit" value="LOGIN">&nbsp;
   <form action="college.html">
  
   </form><br><br></form>
   
   
   
</form> 
   
    <?php
$servername = "localhost";
$username = "root";
$password = "";
$database="examinationsystem";

// Create connection
$conn = new mysqli($servername, $username, $password,$database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
 ?>  
</body>
</html>