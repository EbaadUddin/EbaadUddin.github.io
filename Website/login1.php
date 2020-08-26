<?php
include('connect1.php');
?>

<?php

if(isset($_POST['name']))
{
    $username=$_POST['name'];
    $password=$_POST['pass'];
    $contact=$_POST['contact'];
}
$query="SELECT * FROM users1 WHERE Name='".$username."' AND Password='".$password."'";
$result=mysqli_query($connection,$query);

if(mysqli_num_rows($result))
{
   header("Location: LMS.php");
}
else if($username=='' || $password=='')
{
    
    echo '<script>alert("Please fill all the fields")</script>';
    
}
else
{
echo '<script>alert("Incorrect Info")</script>'; 
}
?>
