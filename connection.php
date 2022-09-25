<?php 

$conn = new mysqli('localhost', 'root', '', 'sms_db');

if($conn->connect_error){

    echo "Connection Failed". $conn->connect_error;
}
else
// echo "Connect Successfully.";
echo "Welcome to our Website";

?>