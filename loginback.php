<?php

$host = "localhost";
$user = "root";
$password="";
// $db = "hotel";
$conn = mysqli_connect($host,$user,$password);
mysqli_select_db($conn,'hotel');

if(isset($_POST['username'])){
    $username = trim($_POST["username"]); 
    $password = trim($_POST["password"]);
    $sql = "select *  from user where username='".$username."'";

 $result = mysqli_query($conn,$sql);

 $num = mysqli_num_rows($result); 

  if($num==1){
    $row = mysqli_fetch_array($result);
        if($row[2]== $password)
        {
            session_start();                            
             // Store data in session variables
                $_SESSION["loggedin"] = true;
                $_SESSION["password"] = $password;
                $_SESSION["username"] = $username;                            
            header('Location:test.html');
            // echo"Password Correct";
          

        }else{
            echo "password incorrect";
        }
 }else{
    echo "failed";
    exit();
 }
}




?>