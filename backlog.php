<html>
<head>
<link rel="stylesheet" href="backlog.css">
<!--<link rel="stylesheet" href="form.css">-->
<title>Signup</title>
</head>
<body style="background-color: aqua;">
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
        $_SESSION['Name']=$name;
        //header('Location: form.php');
        $sql1="select * from form where uname='$name'";
        $result1=$conn->query($sql1);
        if($result1->num_rows>0){
            while($row=$result1->fetch_assoc()){
            $photo=$row['photo'];
            echo "<img src='$photo' height='200px' width='200px'> <br><br>";
            echo "Name: ".$row['name']."<br>";
            echo "User Name: ".$row['uname']."<br>";
            echo "Father Name: ".$row['fname']."<br>";
            echo "Mother Name: ".$row['mname']."<br>";
            echo "Nation: ".$row['nation']."<br>";
            echo "Caste:".$row['caste']."<br>";
            echo "Last Exam Appeared:".$row['lea']."<br>";
            echo "Last Exam Percentage:".$row['lep']."<br>";
        }
     }
        else{
            header('Location: form.php');
        }
    }
}
else{
    header('Location: login.php');
}
}
?>
<br>
<a class="btn btn-secondary" href="updatelog.php">Update</a>
<a class="btn btn-secondary" href="delete.php" name="delete">Delete</a>
</div>
</body>
</html>
