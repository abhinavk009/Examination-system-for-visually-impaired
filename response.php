 <html>
    <head>
        <title>RESULT</title>
    </head>
  
  <body background="BACK.jpg">
  <center><br/><br/><br/><br/><br/><br/></center><h1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;YOUR RESPONSE HAVE BEEN RECORED</h1></center>
 
 
 
 <?php

$h=@mysql_connect("localhost","root","");
    mysql_select_db("examinationsystem");
    $sum=0;
     $student_name   = $_POST['std_name'];
    $student_reg   = $_POST['std_reg'];
    
    $response1=$_POST['qsn1'];
    $res1=mysql_query("SELECT solution FROM question WHERE qsn_no = 1");
    $row1=mysql_fetch_array($res1);
    if($row1[0]==$response1)
    {
       
        $sum=$sum+2;
    }
    else
      {  $sum=$sum-1;}
      
 $response2=$_POST['qsn2'];
    $res2=mysql_query("SELECT solution FROM question WHERE qsn_no = 2");
    $row2=mysql_fetch_array($res2);
    if($row2[0]==$response2)
    {
        
         $sum=$sum+2;
    }
    else
         {  $sum=$sum-1;}


$response3=$_POST['qsn3'];
    $res3=mysql_query("SELECT solution FROM question WHERE qsn_no = 3");
    $row3=mysql_fetch_array($res3);
    if($row3[0]==$response3)
    {
        
         $sum=$sum+2;
    }
    else
         {  $sum=$sum-1;}
        

$response4=$_POST['qsn4'];
    $res4=mysql_query("SELECT solution FROM question WHERE qsn_no = 4");
    $row4=mysql_fetch_array($res4);
    if($row4[0]==$response4)
    {
        
         $sum=$sum+2;
    }
    else
         {$sum=$sum-1;  }





$response5=$_POST['qsn5'];
    $res5=mysql_query("SELECT solution FROM question WHERE qsn_no = 5");
    $row5=mysql_fetch_array($res5);
    if($row5[0]==$response5)
    {
        
         $sum=$sum+2;
    }
    else
         {  $sum=$sum-1;}
    
   
    
    
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
    $query = $conn->prepare("INSERT INTO result (std_name, std_reg, score) VALUES (?, ?, ?)");
    $query->bind_param('sii',$student_name,$student_reg,$sum);
    $query->execute();
    
    
   
   
?>

   </body>
</html>