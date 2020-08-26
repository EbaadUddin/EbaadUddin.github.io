<?php
if(isset($_POST['Submit']))
{
$subject="Web Project";


$message=$_POST['msg'];
$header="From:" .$_POST['Email'];
$recipient="ebaaduddinn@gmail.com";

$send=mail($recipient,$subject,$message,$header);
header("Location: contactUS.php?mailsent");
  }

?>