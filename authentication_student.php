<?php

/**
 * @author hpeduction
 * @copyright 2018
*/ 
$servername = "localhost";
$username = "root";
$password = "";
$database="examinationsystem";

// Create connection
    $conn = new mysqli($servername, $username, $password,$database);

    $registration_no = $_POST["reg"];
    $pass = $_POST["pass"];


    //$result = mysql_query("SELECT registration_no, password_admin FROM admin WHERE password_admin = $pass");
    $stmt = $conn->prepare("SELECT 	student_reg, student_pass FROM student WHERE student_pass = ?");
    $stmt->bind_param('i',$pass);
    $stmt->execute();

    $stmt->store_result();
    $stmt->bind_result($regno,$passwd);
    $stmt->fetch();
    
    if($regno==$registration_no && $passwd==$pass)
        header('Location: /questions.php');
    else{
        echo '<script>alert("Wrong password or username");</script>';
        header('Location: /studentlogin.php');
    }

?>