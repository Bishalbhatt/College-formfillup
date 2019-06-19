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
        <a class="nav-link" href="logout.php">Logout</a>
      </li>
    </ul>
  </div>
</nav>
<div class="form">
<h5>Delete Account</h5>
<form method="post" action="delete.php">
<label for="uname">Username:</label><br>
<input type="text" name="uname" id="uname" required><br>
<label for="pass">Password:</label><br>
<input type="password" name="pass" id="pass" required><br><br>
<button class="btn btn-secondary" name="delete">Delete</button>
</form>
<?php
//error_reporting(0);
include("bootstrap link.html");
session_start();
if($_SESSION['Name']==TRUE){
  
}
else{
  header('Location: login.php');
}
$conn=new mysqli('localhost','root','','college_form');
if($conn==TRUE){
    //echo "connected";
}
if(isset($_POST['delete'])){
$uname=$_POST['uname'];
$pass=$_POST['pass'];
$sql="select * from signup where uname='$uname' && password='$pass'";
$result=$conn->query($sql);
if($result->num_rows>0){
   while($row=$result->fetch_assoc()){
    $del="delete from form where uname='$uname'";
    if($conn->query($del)==TRUE){
        echo "<script>alert('Records deleted')</script>";
    }
  }
}
    else{
        echo "<script>alert('Something wrong')</script>.";
    }
  } 
?>
</div>
</body>
</html>