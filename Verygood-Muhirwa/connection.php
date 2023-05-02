<?php
$con=new mysqli('localhost','root','','php_crud_work');
if($con){
    // echo "connection successfull <br>";
}else{
    die(mysqli_error($con));
}
?>