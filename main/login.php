<?php
session_start();
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "nafli";

// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
    if(isset($_POST['rlogin'])){
    $email=$_POST['remail'];
    $upswd1=$_POST['rpassword'];
    $sql="select * from receivers where remail='$email' and rpassword='$upswd1'";
    $result=mysqli_query($conn,$sql) or die(mysqli_error($conn));
    $rows_fetched=mysqli_num_rows($result);
    if($rows_fetched==0){
        echo "Wrong email or password. Please try again.";
       
    }else{
        $row=mysqli_fetch_array($result);
        $_SESSION['remail']=$row['remail'];
        $_SESSION['rname']=$row['rname'];
        $_SESSION['rid']=$row['id'];
        echo "successfully login";
        //link next page

        $main.php=""

    }

    
  }
?>