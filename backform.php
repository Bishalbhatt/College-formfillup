<html>
<head>
<link rel="stylesheet" href="backlog.css">
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
<?php
include("bootstrap link.html");
session_start();
if($_SESSION['Name']==TRUE){
  
}
else{
  header('Location: login.php');
}
$conn=new mysqli("localhost","root","","college_form");
if($conn==TRUE){
    //echo "Connected";
}
else{
   // echo "Not connected";
}
$name=$_POST['name'];
$uname=$_POST['uname'];
$fname=$_POST['fname'];
$mname=$_POST['mname'];
$nat=$_POST['nation'];
$caste=$_POST['caste'];
$lea=$_POST['lea'];
$lep=$_POST['lep'];
if($_FILES)
{
    $target_Path="student/..";
    $target_Path = $target_Path.basename($_FILES['photo']['name']);
    move_uploaded_file($_FILES['photo']['tmp_name'],$target_Path);
}
$sql="Insert into form (name,photo,uname,fname,mname,nation,caste,lea,lep) values('$name','$target_Path','$uname','$fname','$mname','$nat',
'$caste','$lea','$lep')";
if($conn->query($sql)===TRUE){
    echo "<img src='$target_Path' height='200px' width='200px'><br><br>";
    echo "Name: ".$name."<br>";
    echo "User Name: ".$uname."<br>";
    echo "Father's Name: ".$fname."<br>";
    echo "Mother's Name: ".$mname."<br>";
    echo "Nation: ".$nat."<br>";
    echo "Caste: ".$caste."<br>";
    echo "Last Exam Appeared: ".$lea."<br>";
    echo "Last Exam Percentage: ".$lep."<br>";
}
else{
    echo "Not inserted".$sql."<br>".$conn->error;
}
?>
</div>
</body>
</html>