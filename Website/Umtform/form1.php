
<html>
<head>
<link rel="stylesheet" href="style1.css" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"/>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<head>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>

</head>
<body>
<div class="body">

  <form  action="" method="POST" enctype="multipart/form-data">
   <div class="form">
   <p style="text-align: center; color: #38A1F3; font-size: 10px;"><img src="cssimg/UMT-logo-notext.png" width="50px" height="50px" /></p>
   <h1 style="font-size: medium; text-align: left;">Create Your Account</h1>
   
   
   
   <input id="user" autocomplete="off" type="text"  name="name" value=""  placeholder="Name" /><br />
   <span id="username" class="text-danger "></span>
   
   
   
   
   <input id="mailadd" autocomplete="off" type="email" name="email" value=""  placeholder="Mail Address" /><br />
   <span id="addr" class="text-danger "></span>
   

   
   
   
   
   
   
   <input id="ph" autocomplete="off" type="text" name="contact" value=""  placeholder="Phone" /><br />
   <span id="phone" class="text-danger "></span>
   
   
   
   
   
   
   
   
   
   
   
   <input type="password" id="show" onfocus="this.value=''" name="pass" value=""  placeholder="Password" /><br />
   <span id="passwords" class="text-danger "></span>
   <br />
   
   
   
   
   
   
   <input style="" type="checkbox" onclick="pswd()" />
   <p style="font-size:xx-small; ">Show Password</p>
   <p style="font-size: x-small;">Submit Image </p>
   <input type="file" name="uploadfile" value="" /><br />
   <input class="SignIN" name="submit" type="submit" onsubmit="return validate()" value="Register" formaction="insert1.php"/>
   <input class="signin1 " name="view" type="submit" value="Display" formaction="Select1.php"  />
  
   <br />
   
   </div>
  </form>
  </div>
  
  
  
  
  
<script type="text/javascript">
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
  function validate()
{
    var user= document.getElementById('user').value;
     
    if(user=="")
    {
        document.getElementById('username').innerHTML="Please fill this field";
        return false;
    }
    
    var emails= document.getElementById('mailadd').value;
     
    if(emails=="")
    {
        document.getElementById('addr').innerHTML="Please fill this field";
        return false;
    }
    var Mobile= document.getElementById('ph').value;
     
    if(Mobile=="")
    {
        document.getElementById('ph').innerHTML="Please fill this field";
        return false;
    }
    var Passwords= document.getElementById('show').value;
     
    if(Passwords=="")
    {
        document.getElementById('passwords').innerHTML="Please fill this field";
        return false;
    }
    
    
    
}

</script>  
  
  
  
  
</body>

</html>
