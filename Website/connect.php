<?php
error_reporting(0);
    $servername =   'localhost';
    $username   =   'root';
    $password   =   '';
    $dbname     =   'testdb';
    $connection       =   mysqli_connect($servername,$username,$password,$dbname);
if($connection)
{
   echo " ";
}
else
{
    die("".mysqli_connect_error());
}
?>
