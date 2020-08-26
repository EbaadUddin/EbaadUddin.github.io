<?php
include('connect1.php');
?>
<html>
<head>
	<link rel="stylesheet" href="updatestyle.css" />
</head>

<body>

<form action="" method="GET" >
<input type="text" name="username" value="" placeholder="name" />
<input type="password" name="pass" value="" placeholder="password" />
<input type="text" name="email" value=""  placeholder="email"/>
<input type="text" name="contact" value="<?php echo $_GET['contact'];?> " placeholder="contact" /><br />
<input class="SignIN" name="update" type="submit" value="Update" /><br />
<input class="SignIN" name="" type="submit" value="Home" formaction="form1.php" /><br />
<a href="#" style="color: #38A1F3;">Press update button to save the data</a>
</form>
</body>
</html>
 <?php
 
  if($_GET['update'])
  {
  $name=$_GET['username'];
  $password=$_GET['pass'];
  $mail=$_GET['email'];
  $contact=$_GET['contact'];
  
  
  $query="UPDATE users1 SET Name='$name',Password='$password',Email='$mail' WHERE Contact='$contact'";
  $data=mysqli_query($connection,$query);
  if($data)
  {
    echo "updated";
  }
  else
  {
    echo "not updated";
  }
  }
  ?>
  