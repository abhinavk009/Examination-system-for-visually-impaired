<html>

<head>

	<title>ADMIN_REMOVE</title>
    <link rel="stylesheet" type="text/css" href="removecollegecss.css"/>
</head>

<body>


<!-- The sidebar -->
<div class="sidenav">
  <a class="active" href="registercollege.php">REGISTER COLLEGE</a>
  <a href="removecollege.php">REMOVE COLLEGE</a>
  <a href="modifycollege.php">MODIFY COLLEGE DETAILS</a>
  <a href="demo.php">LOGOUT</a>
  
</div>
       <div align="center">  
       <form name="form1" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" >
          <br><br><br><br><br><br><br><br><br>
          <h1>&nbsp;&nbsp;&nbsp;&nbsp;<b>ENTER THE REGISTRATION NO: OF THE COLLEGE TO BE REMOVED</b><br></h1>
                &nbsp;REGISTRATION NO.:&nbsp; <input type="text" name="idelete" id="idelete" size="30px"/><br/>
                &nbsp;&nbsp;&nbsp; <input type="submit" value="submit"/>&nbsp;  
        </form>
        </div> 
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
$delete = $_POST['idelete'];
$stmt = $conn->prepare("DELETE FROM college WHERE college_registration_no = (?)");
$stmt->bind_param('s',$delete);
$exec = $stmt->execute();

?>
     



</body>
</html>