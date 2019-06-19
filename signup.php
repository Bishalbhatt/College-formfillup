<?php
include("bootstrap link.html");
?>
<html>
<head>
<link rel="stylesheet" href="abc.css">
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
        <a class="nav-link" href="signup.php">Signup</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="login.php">Login</a>
      </li>
    </ul>
  </div>
</nav>
<div class="form" style="background-color: green; ">
  <h5>Enter the details</h5>
  <form method="post" action="back.php">
      <label for="name">Username:</label><br>
      <input type="text" id="name" name="uname" required><br>
      <label for="password">Password:</label><br>
      <input type="password" id="password" name="pass" required><br>
      <label for="cpassword">Confirm Password:</label><br>
      <input type="password" id="cpassword" name="cpass" required><br><br>
      <button class="button btn-secondary">Submit</button>
 </form>
</div>
</body>
</html>