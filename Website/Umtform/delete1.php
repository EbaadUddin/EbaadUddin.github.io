<?php
include('connect1.php');
  
  $contact=$_GET['contact'];
  $query="DELETE FROM users1 WHERE Contact='$contact'";
$data=mysqli_query($connection,$query);
if($data)
{
    echo '<script>alert("deleted")</script>';
    
    
}
else
{
    echo '<script>alert("not deleted")</script>';
}
?>
<head><link rel="stylesheet" href="updatestyle.css" /></head>
<form>
<input class="SignIN" name="" type="submit" value="Back To Form" formaction="form1.php" /><br />
</form>