<html>

<head>

	<title>ADMIN_MODIFY</title>
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
           <h2><b>ENTER THE REGISTRATION NO: OF THE COLLEGE TO BE MODIFIED</b><br></h2>
                &nbsp;REGISTRATION NO.:&nbsp; <input type="text" name="college_reg_no" id="college_reg_no" size="30px"><br><br>
                <h4>ENTER THE NEW DETAILS BELOW:-</h4><br>
                &nbsp;NEW COLLEGE NAME:&nbsp; <input type="text" name="college_name" size="30px"><br><br>
                 &nbsp;NEW PASSWORD:&nbsp; <input type="password" name="college_password" size="30px"><br><br>
                 &nbsp;MODIFIED ADDRESS:&nbsp; <input type="text" name="college_address" size="30px"><br><br>
                &nbsp;&nbsp;&nbsp; <input type="submit" value="submit" name="submit">&nbsp;  
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
//echo "<script>alert('CONNECTION SUCCESSFULLY');</script>";
if (isset($_POST['submit']))
{
    $collegename   = $_POST['college_name'];
    $collegeaddress   = $_POST['college_address'];
    $college_registration_no  = $_POST['college_reg_no'];
    $college_password = $_POST['college_password'];
        
    $query = $conn->prepare("UPDATE college SET college_name=?,college_address=?,college_password=? WHERE college_registration_no=?");
    $query->bind_param('ssii',$collegename,$collegeaddress,$college_password,$college_registration_no);
    $query->execute();
    
    echo "<script type='text/javascript'>alert('Successful');</script>";
}
?>
     
     
    



</body>
</html>