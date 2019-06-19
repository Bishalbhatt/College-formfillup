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
<form method="post">
<h4>Give the details:</h4>
<label for="unname">Username:</label><br>
<input type="text" id="uname" name="uname" required><br>
<label for="pass">Password:</label><br>
<input type="password" id="pass" name="pass" required><br><br>
<button class="btn btn-secondary" name="submit">Submit</button>
</form>
</div>
</body>
</html>
<?php
include("bootstrap link.html");
$conn=new mysqli("localhost","root","","college_form");
if($conn==TRUE){
    //echo "Connected";
}
if(isset($_POST['submit'])){
$name=$_POST['uname'];
$pass=$_POST['pass'];
if($_FILES)
{
    $target_Path = $target_Path.basename($_FILES['photo']['name']);
    move_uploaded_file($_FILES['photo']['tmp_name'],$target_Path);
}
$sql="select * from signup where uname='$name' && password='$pass'";
$result=$conn->query($sql);
if($result->num_rows>0){
    while($row=$result->fetch_assoc()){
           header('Location: form1.php');
        }
     }
        else{
            header('Location: updatelog.php');
        }
    }
?>
