<?php

$host="localhost";
$user="root";
$pass="";
$db="knowledge base system";
$conn=new mysqli($host,$user,$pass,$db);
if($conn->connect_error){
    echo " connect DB" .$conn->connect_error;
}


?>  