<html>

<head>

	<title>ADD STUDENT</title> 
    <link rel="stylesheet" type="text/css" href="collegecss.css"/>
</head>

<body background="BACK.jpg">
<div align="center"><br /><br /><br /><br /><br /><br /><br /><br />
<form action="studenttable.php" method="post">
ENTER THE NAME OF THE CANDIDATE:<input type="text" name="std_name"/><br /><br />
ENTER THE REGISTRATION NO. OF THE CANDIDATE:<input type="text" name="std_reg"/><br/><br />
ENTER THE PASSWORD OF THE CANDIDATE:<input type="password" name="std_pass"/><br/><br />
<input type="submit"/>
</form>
</div>

 <div class="sidenav">
  
    <button class="dropdown-btn">Conduct Exam
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="studentlogin.php">Enter student portal</a>
   
  </div>  
  
  <button class="dropdown-btn">Manage Exam
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="#">Add Exam</a>
    <a href="#">Delete Exam</a>
    <a href="#">View Exams</a>
  </div>
  
  <button class="dropdown-btn">Manage Students
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="#">Add Student</a>
    <a href="#">Remove Student </a>
    <a href="#">Student List</a>
  </div>
  
    <button class="dropdown-btn">Manage Result
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="#">View Result</a>
    <a href="#">Publish Result</a>
    <a href="#">View marks<br>of individual student</a>
  </div>
  
  <a href="collegelogin.php">LOGOUT</a>
</div> 

<script>
//* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var dropdownContent = this.nextElementSibling;
    if (dropdownContent.style.display === "block") {
      dropdownContent.style.display = "none";
    } else {
      dropdownContent.style.display = "block";
    }
  });
} 


</script>
     
     




</body>
</html>