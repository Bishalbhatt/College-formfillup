<?php
$conn=new mysqli("localhost","root","","college_form");
if($conn==TRUE){
    echo "Connect";
}
else{
    echo "Not connected";
}
$name=$_POST['uname'];
$pass=$_POST['pass'];
$cpass=$_POST['cpass'];
if($pass==$cpass){
    $sql="Insert into signup(uname,password) values('$name','$pass')";
    if($conn->query($sql)===TRUE){
        header('Location: login.php');
    }
}
else{
    header('Location: signup.php');
}
?>