<?php
$link= mysqli_connect("127.0.0.1", "root", "prajesh", "questionpaper-36395d2f");
try{
$db= new PDO('mysql:host=127.0.0.1;dbname=questionpaper-36395d2f','root','prajesh');
}catch(Exception $e)
{
    echo "Connection can't be established";
}
session_start();
?>