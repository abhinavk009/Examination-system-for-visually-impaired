<html>
   <head>
        <title>RESULT TABLE</title>
   </head>
   <body background="BACK.jpg">
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
$result = $_POST['reg'];
$stmt = "SELECT std_reg,score, std_name  FROM result WHERE std_reg=%s";
//$stmt->bind_param('s',$result);
//$exec = $stmt->execute();
$res=$conn->query(sprintf($stmt,$_POST['reg']));

//$result = $conn->query($stmt);


    // output data of each row
    
    while($row = $res->fetch_assoc()) {
       echo "<br>". $row["std_reg"]. " - Name: ". $row["std_name"]." ". "score: " . $row["score"] . "<br>";
    }
   

    $conn->close();
?>
   </body>
</html>