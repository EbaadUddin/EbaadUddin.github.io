
<html>
<head>
<link rel="stylesheet" href="css2.css" />
	<meta http-equiv="content-type" content="text/html" />
	<meta name="author" content="lolkittens" />

	<title>Careers</title>
    <meta http-equiv="content-type" content="text/html" />
	<meta name="author" content="lolkittens" />

	<title>Office of Corporate Linkages and Placements</title>
    
    <meta charset="utf-8"/>
    
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"/>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>












</head>





<header>



</header>

<body style="background: #f5f5f5;">

<nav  class="navbar navbar-light" style="background-color:  #0b4471; margin-top: ;">
  <a class="navbar-brand" style="padding-left: 45px; margin-bottom: 10px; padding-top:  ; color: white;">Join Us</a>
  
  
  
  <a  href="#"><img style="margin-left: -160px;" src="images/in .png" width="30" height="30"/></a>
                    <a  href="#"><img style="margin-left: -305px;" src="images/twitter.png" width="30" height="30"/> </a>
                    <a href="#"><img style="margin-left: -450px;" src="images/facebook.png" width="30" height="30"/></a>
                    <a  href="#"><img style="margin-left: -595px;" src="images/insta.png" width="30" height="30"/></a>
  
  
  
  
  
  
  <form style="margin-top: ;" class="form-inline">
    <button formaction="Umtform/form1.php" class="btn btn-outline-success my-2 my-sm-0" type="submit" style="margin-top:; color: white; background-color:#5cb85c ;">Sign Up</button>
    <button formaction="loginform1.php" class="btn btn-outline-success my-2 my-sm-0" type="submit" style="margin :0 50px 0 10px;  color: white; background-color:#5cb85c ;">Log In</button>
  </form>
</nav>

<nav style="position:;" class="navbar navbar-light bg-light navbar-fixed-top">
  <a class="navbar-brand" href="#">
    <img src="Folder/logo.png" style="margin-left: 38px ;" width="60" height="60" class="d-inline-block align-top"/>
  </a>
  <div class="navbar2">
  <a href="#">HOME</a>
  <a style="margin-right: 830px;" href="#">CAREERS</a>
</div>
</nav>



<div class="formimg">

<form action="jobsearch1.php" method="POST" class="form">

<h1 style="color: white;">Find Job</h1>
  <div class="form-row">
    <div class="col">
      <input type="text" class="form-control" autocomplete="off" name="jobname" placeholder="Job Title"/>
    </div>
    
    
    
    <div class="col">
       
      <select name="jobcategory" class="custom-select mr-sm-2" id="inlineFormCustomSelect">
        <option value="">Select Category</option>
        <option  value="Faculty">Faculty</option>
        <option  value="Management">Management</option>
      </select> 
    </div>
    <div class="col-2">
      <button style="padding-bottom: 9px;  " formaction="jobsearch1.php" type="submit" name="search" >Search</button>
    </div>
    
    <div  class="col-1">
      <button style="padding-bottom: 9px;"  formaction="jobsearch.php" type="submit" name="searchall" >Display</button>
    </div>
    
  </div>
  <p style="color: white;">Or browse job offers by <button>Category</button></p>
  <br />
  <?php
  
  
  
  require 'connect.php';
  $query="SELECT * FROM jobs ORDER BY JobID";
  $result=mysqli_query($connection,$query);
  $row=mysqli_num_rows($result);
  
  echo '<h2> We have '.$row.' Job Offers for you!</h2>';
?>
</form>
</div>




<div>
<h3 style="margin-left: 60px; margin-top: 30px;" ><span>Recent Jobs</span> <span style="margin-left: 600px;">Jobs Spotlight</span></h3>



<ul style="" class="list-group list-group-horizontal">

  <li style="margin-left: 60px; color: #47819d;  background-color: #d9edf7; padding-right: 400px; margin-top: 10px;" class="list-group-item">Search Jobs In The Above Window</li>
  
</ul>



</div>


<div class="card1">
<form action="jobsearch1.php" method="POST">
<p style="font-size: x-large;">Job Filter</p>
<div class="card"  style="width: 18rem;" >
  <div class="card-body" >
  
    <select name="jobcategory" class="custom-select mr-sm-2" id="inlineFormCustomSelect" style="background-color: #f9f09e;">
        <option >Select Category</option>
        <option value="Faculty">Faculty</option>
        <option value="Management">Management</option>
      </select>
    <input style="padding: 5px 0 5px 13px; background-color: #f9f09e; margin: 15px 0 15px 0; border-radius: 2pt; border-width: thin;" type="text" name="jobname" autocomplete="off" placeholder="Keyword" class="col mr-sm-2"/>
    <button style="padding: 5px 0 5px 13px; border-radius: 2pt; border-width: thin; background-color:#0b4471 ; color: white;" type="submit" formaction="jobsearch1.php" value="Search" name="search" class="col mr-sm-2">Search</button>
 
  </div>
</div>
</form> 
</div>





</body>





<footer class="footer1" style="" class="page-footer font-small mdb-color pt-4">
  <div style="color: white;" class="container text-center text-md-left">

    <div  class="row text-center text-md-left mt-3 pb-3">
      
      <div  class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
        <h6 class="text-uppercase mb-4 font-weight-bold">UNIVERSITY OF MANAGEMENT AND TECHNOLOGY</h6>
        <p>C-II Johar Town Lahore</p>
        <p style="margin-top: -20px;">Tel.: +92 42 35212801-10</p>
      </div>
      <hr class="w-100 clearfix d-md-none"/>

      <div  class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
        <h6 class="text-uppercase mb-4 font-weight-bold">STUDY AT UMT</h6>
        <p>
          <a href="#" >&raquo; Undergraduate</a>
        </p>
        <p>
          <a href="#" >&raquo; Graduate</a>
        </p>
        <p>
          <a href="#" >&raquo; MS/MPhil Programs</a>
        </p>
        <p>
          <a href="#" >&raquo; PHD Programs</a>
        </p>
        <p>
          <a href="#" >&raquo; Apply Online</a></a>
        </p>
      </div>
      

      <hr class="w-100 clearfix d-md-none"/>

     
      <div  class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
        <h6 class="text-uppercase mb-4 font-weight-bold">ABOUT THE UNIVERSITY</h6>
        <p>
          <a href="#">&raquo; UMT at Glance</a>
        </p>
        <p>
          <a href="#">&raquo; Accreditations</a>
        </p>
        <p>
          <a href="#">&raquo; Memberships</a>
        </p>
        <p>
          <a href="#">&raquo; Giving to UMT</a>
        </p>
        <p>
          <a href="#">&raquo; Life at UMT</a>
        </p>
        <p>
          <a href="#">&raquo; News</a>
        </p>
      </div>

      
      <hr class="w-100 clearfix d-md-none"/>

     
      <div  class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
        <h6 class="text-uppercase mb-4 font-weight-bold">RESOURCES</h6>
        <p>
          <a href="#">&raquo; Library</a></p>
        <p>
          <a href="#">&raquo; IPC</a></p>
        <p>
          <a href="#">&raquo; Hostels</a></p>
        <p>
        <a>&raquo; Medical</a></p>
      <p>
          <a>&raquo; Souvenir Shop</a>
      </p>
      </div>
    
    </div>

    <hr/>
    <div   class="row d-flex align-items-center">
      
      <div   class="col-md-7 col-lg-8">
        
        <p class="text-center text-md-left">© 2020 Copyright UMT,2020.All Rights Reserved.Office of Information Systems-UMT</p>

      </div>
  </div>
  
  
  
 
</footer>

</html>

























