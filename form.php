<?php
include("bootstrap link.html");
session_start();
if($_SESSION['Name']==TRUE){
  
}
else{
  header('Location: login.php');
}
?>
<html>
<head>
<link rel="stylesheet" href="signup.css">
<link rel="stylesheet" href="form.css">
<title>Signup</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="home.php">Pragjyotish College</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="logout.php">Logout</a>
      </li>
    </ul>
  </div>
</nav>
<div class="form1">
<form action="backform.php" method="post" enctype="multipart/form-data">
  <label for="name">Full Name:</label><br>
  <input type="text" name="name" id="name" required><br>
  <label for="uname">User Name:</label><br>
  <input type="text" name="uname" id="uname" required><br>
  <label for="fname">Father's Name:</label><br>
  <input type="text" name="fname" id="fname" required><br>
  <label for="mname">Mother's Name:</label><br>
  <input type="text" name="mname" id="mname" required><br>
  <label for="nation">Nationality:</label><br>
  <input type="text" name="nation" id="nation" required><br>
  <label for="caste">Caste:</label><br>
  <input type="text" name="caste" id="caste" required><br>
  <label for="lea">Last Exam Appeared:</label><br>
  <input type="text" name="lea" id="lea" required><br>
  <label for="lep">Last Exam Percentage:</label><br>
  <input type="text" name="lep" id="lep" required><br>
  <label for="photo">Passport Photo:</label><br>
  <input type="file" name="photo" id="photo" required><br><br>
  <button class="btn btn-secondary">Submit</button>
</form>
</div>
</body>
</html>