<?php

    include('Config.php');

    $sql="Insert into reservation (name, check_in, check_out,room,adults,children,email,telephone) values 
    ('".$_POST['fullname']."',
    '".$_POST['checkin']."',
    '".$_POST['checkout']."',
    '".$_POST['roomtype']."',
    '".$_POST['adult']."',
    '".$_POST['children']."',
    '".$_POST['email']."',
    '".$_POST['number']."')";

    if($con->query($sql) == FALSE){
        die("Error: ".$con->error);
    }

    echo "New Record Added";

$con->close();

?>