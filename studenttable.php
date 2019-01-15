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

if (isset($_POST['submit']))
{
    $studentname   = $_POST['std_name'];
    $studentpassword=$_POST['std_pass'];
    $student_registration_no  = $_POST['std_reg'];
       
    
    $query = $conn->prepare("INSERT INTO student (student_name,  student_reg, student_pass) VALUES (?, ?, ?)");
    $query->bind_param('ssii',$studentname, $student_registration_no, $studentpassword);
    $query->execute();
 }
?>
