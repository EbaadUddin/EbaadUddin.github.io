 
<?php
 include("connect1.php");
?>
 <?php
 
  if($_POST['submit'])
  {
  $n=$_POST['name'];
  $p=$_POST['pass'];
  $e=$_POST['email'];
  $c=$_POST['contact'];
  $fname=$_FILES['uploadfile']['name'];
  $tmpfname=$_FILES['uploadfile']['tmp_name'];
  $folder="images1/".$fname;
  move_uploaded_file($tmpfname,$folder);
  
  $query="INSERT INTO users1 VALUES('$n','$p','$e','$c','$folder')";
  $data=mysqli_query($connection,$query);
if($data)
{
    echo '<script>alert("Registration Completed")</script>';
    
}

else 
{
echo '<script>alert("Enter data again!")</script>';

}
  }

  ?>
<head><link rel="stylesheet" href="updatestyle.css" /></head>
<form>
<input class="SignIN" name="" type="submit" value="Back To Form" formaction="form1.php" /><br />
</form>