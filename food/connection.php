<?php
if(isset($_POST['rregister'])){
$uname1 = $_POST['rname'];
$rmobile = $_POST['rmobile'];
$email  = $_POST['remail'];
$username  = $_POST['rusername'];
$upswd1 = $_POST['rpassword'];
$upswd2 = $_POST['rcopassword'];




if (!empty($uname1) || !empty($rmobile) || !empty($email) || !empty($username) || !empty($upswd1) || !empty($upswd2))
{

$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "nafli";



// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

if (mysqli_connect_error()){
  die('Connect Error ('. mysqli_connect_errno() .')'
    . mysqli_connect_error());
}
else{
  $SELECT = "SELECT remail From receivers Where remail = ? Limit 1";
  $INSERT = "INSERT Into receivers (rname , rmobile	, remail , rusername , rpassword, rcopassword)values(?,?,?,?,?,?)";

//Prepare statement
     $stmt = $conn->prepare($SELECT);
     $stmt->bind_param("s", $email);
     $stmt->execute();
     $stmt->bind_result($email);
     $stmt->store_result();
     $rnum = $stmt->num_rows;

     //checking username
      if ($rnum==0) {
      $stmt->close();
      $stmt = $conn->prepare($INSERT);
      $stmt->bind_param("sissss", $uname1,$rmobile,$email,$username,$upswd1,$upswd2);
      $stmt->execute();
      echo "New record inserted sucessfully";
        
      header("location:login.html");
     } else {
      echo "Someone already register using this email";

      
     }
     $stmt->close();
     $conn->close();
    }

    
} else {
 echo "All field are required";
 die();

}
}
?>