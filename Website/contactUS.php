<html>
<head>
<style>
.form1 .btn-default {
        background-color: #305896;
        color: #fff;
        border-radius: 0;
    }
    .form1 .btn-default:hover {
        background-color: #4498C6;
        color: #fff;
    }
    .form1 input {
        border-radius: 0;
    }
    .abc
    {
        padding:20px 30px 0px 30px;
    }


</style>
<link rel="stylesheet" href="contact.css" />
<meta name="viewport" content="width=device-width, initial-scale=1"/>
 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"/>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-md navbar-light bg-light">
    <a href="#" class="navbar-brand">
        <img style="padding-left: 15px;"  src="images/UMT-logo-notext.png" height="28" />
    </a>
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav">
          <a href="#" class="nav-item nav-link">University Of Management &amp; Technology </a>
            
            
        </div>
        <div class="navbar-nav ml-auto">
        <a href="homepage.php" class="nav-item nav-link">Home</a>
            <a href="Umtform/form1.php" class="nav-item nav-link">Sign In</a>
            <a href="loginform1.php" class="nav-item nav-link">Log In</a>
            <a href="#" class="nav-item nav-link">Contact Details</a>
        </div>
    </div>
</nav>
<div class="abc">
     
    <div><h1 style="font-size: x-large;">Email us with any questions and inquiries or call 0304-4976411. </h1></div>
    <div><h1 style="font-size: x-large;">We would be happy to answer your questions and set up a meeting with you.</h1></div>
    <br />
    <div><h1>Contact Us</h1></div>
    
    <div class="row">
        <div class="col-md-4">
        <form method="POST" action="mail.php" class="form1">
         <div >
         <label>Name</label>
               
                 <input name="Name" type="text" class="form-control" placeholder="Name"/>
               </div><br />
                <div >
         <label>Phone</label>
               
                 <input name="Contact" type="text" class="form-control" placeholder="Contact Number"/>
               </div><br />
                <div >
                <label >Email Address</label>
                   <input name="Email" type="text" class="form-control" placeholder="Email Address"/>
                </div><br />
                
                
                
                <div >
                    <label >Email your Message</label>
                    <textarea name="msg" class="form-control" placeholder="Message"></textarea>
                </div><br />
                
                <button name="Submit" class="btn btn-primary" type="submit">Contact Us</button>                
            </form>
        </div>
         </div>
</div>






</body>
</html>