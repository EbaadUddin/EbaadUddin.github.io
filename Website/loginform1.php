
<html>
<head>
<link rel="stylesheet" href="stylelogin.css" />
</head>
<head>
<script>
function pswd()
{
    password=document.getElementById("show");
    if(password.type=='password')
    {
        password.type='text';
    }
    else
    {
        password.type='password';
    }
}

</script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>

</head>
<body>
<div class="body">

  <form action="" method="POST" enctype="multipart/form-data">
   <div class="form">
   <p style="text-align: center; color: #38A1F3; font-size: 10px;"><img src="Umtform/cssimg/UMT-logo-notext.png" width="50px" height="50px" /></p>
   <h1 style="font-size: medium; text-align: left;">Log In</h1>
   <input  type="text"  name="name" value=""  placeholder="Name" autocomplete="off" /><br />
   <input type="password" id="show" onfocus="this.value=''" name="pass" value=""  placeholder="Password"/><br />
   <input style="" type="checkbox" onclick="pswd()" />
   <p style="font-size:xx-small; ">Show Password</p>
   <input class="SignIN" name="submit" type="submit" value="Sign In" formaction="login1.php"/>
   <p>Don't have an account?&nbsp;<a href="Umtform/form1.php">Register</a></p>
   <a href="#">Forgot Password?</a>
   <br />
   
   </div>
  </form>
  </div>
  
</body>

</html>














