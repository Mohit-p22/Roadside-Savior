<?php

$checkotp=$_POST['checkotp'];
$otp=$_POST['otp'];

if($checkotp == $otp)
{
    header('Location: ../payment.php');
    exit();
}
else{
    
}
?>