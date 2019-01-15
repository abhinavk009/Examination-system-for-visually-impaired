<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>REGISTER COLLEGE</title>
     <link rel="stylesheet" type="text/css" href="registercollegecss.css"/>
</head>

<body>
<!-- The sidebar -->
<div class="sidenav">
  <a class="active" href="registercollege.php">REGISTER COLLEGE</a>
  <a href="removecollege.php">REMOVE COLLEGE</a>
  <a href="modifycollege.php">MODIFY COLLEGE DETAILS</a>
  <a href="demo.php">LOGOUT</a>
  
</div>

<!-- Page content -->
<div class="content">
  
  <!-- CSS Styles -->
<style>
  .speech {border: 1px solid #DDD; width: 300px; padding: 0; margin: 0}
  .speech input {border: 0; width: 240px; display: inline-block; height: 30px;}
  .speech img {float: right; width: 40px }
</style>
<div id="coll" align="center">
<!-- Search Form -->

  <div class="speech">
  <form name="form1" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" >

  
  
  <br><br>
        <h2>ENTER COLLEGE NAME:</h2>
        <input type="text"name="college_name" id="transcript1"/>
        <img onclick="startDictation('transcript1')" src="//i.imgur.com/cHidSVu.gif" /><br><br>
  </div>
  <br>
  <div class="speech">
        <h2>ENTER COLLEGE ADDRESS:</h2>
        <input type="text" name="college_address" id="transcript2"/>
        <img onclick="startDictation('transcript2')" src="//i.imgur.com/cHidSVu.gif" /><br><br>
  </div>
     <br>   
     <div class="speech">
        <h2>ASSIGN REGISTRATION NO. :</h2>
        <input type="text" name="college_reg_no" id="transcript3"/>
        <img onclick="startDictation('transcript3')" src="//i.imgur.com/cHidSVu.gif" /><br><br>
  </div>
     <br>
     <div class="speech">
        <h2>ASSIGN PASSWORD :</h2>
        <input type="password" name="college_password" id="transcript4"/>
        <img onclick="startDictation('transcript4')" src="//i.imgur.com/cHidSVu.gif" /><br><br>
  </div>
     <br>   
     <div class="speech">
     <input type="submit" value="SUBMIT" name="submit">
     </div>   
</div>
</form>
</div>
<!-- HTML5 Speech Recognition API -->
<script>
  function startDictation(idVal) {

    if (window.hasOwnProperty('webkitSpeechRecognition')) {

      var recognition = new webkitSpeechRecognition();

      recognition.continuous = false;
      recognition.interimResults = false;

      recognition.lang = "en-US";
      recognition.start();

      recognition.onresult = function(e) {
        document.getElementById(idVal).value
                                 = e.results[0][0].transcript;
        recognition.stop();
        document.getElementById('labnol').submit();
      };

      recognition.onerror = function(e) {
        recognition.stop();
      }
    }
  }
</script>
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
echo "<script>alert('CONNECTION SUCCESSFULLY');</script>";
if (isset($_POST['submit']))
{
    $collegename   = $_POST['college_name'];
    $collegeaddress   = $_POST['college_address'];
    $college_registration_no  = $_POST['college_reg_no'];
    $college_password = $_POST['college_password'];   
    
    $query = $conn->prepare("INSERT INTO college (college_name, college_address, college_registration_no, college_password) VALUES (?, ?, ?, ?)");
    $query->bind_param('ssii',$collegename,$collegeaddress,$college_registration_no,$college_password);
    $query->execute();
 }
?>

  


</body>
</html>