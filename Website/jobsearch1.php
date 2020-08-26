<style>
    body
    {
        background-color:#f5f5f5;
    }
    div 
    {
        padding-left: 10px;
        background-color:white ;
        border-color: grey;
        width: 50%;
        margin-left: 40px;
        border-style: groove;
        border-width: thin;
    }
    div h2
    {
               color: white;
        background-color: #0b4471;
        font-family: arial;
        font-size: medium;
        font-style: normal;
        padding-left: 10px;
        padding-bottom: 10px;
        padding-top: 10px;
    }
    div a
    {
        
        border-radius: 2pt;
        position: relative;
        right: -463px;
        top: -10px;
        color: white;
        text-decoration: none;
        background-color: #0b4471;
        border-style: solid;
        border-width: thin;
        padding-right: 60px;
        padding-top: 10px;
        padding-left: 60px;
        padding-bottom: 10px;
     
        border-color: #0b4471;
    }
    div p
    {
        font-family: arial;
        color: #a1a1a1;
    }
td
{
    padding: 10px;
}
a
{
   color: #00DF00; 
}
</style>
    
<?php
 /*for records display*/
 include("connect.php");
?>




<?php
if(isset($_POST['search']))
{
    $name=mysqli_real_escape_string($connection,$_POST['jobname']);
    $category=$_POST['jobcategory'];
    

$query="SELECT * FROM jobs WHERE (JobName LIKE '%$name%' OR JobName LIKE '%[a-z]' OR JobName LIKE '%[A-Z]') AND Category='".$category."' ";
$data=mysqli_query($connection,$query);
$total= mysqli_num_rows($data);
if($total>0)
{
while($r=mysqli_fetch_assoc($data))
{

echo "
<div >
<h2>".$r['JobName']. "</h2>
<p>Job Type: ".$r['Category']. "</p>
<p>Apply Before ".$r['LastDate']. "</p>
<p>Address: ".$r['Address']. "</p>
<a href=#>Apply</a>
</br>
</div></br></br>";
}
}
else
{
    echo "no results";
}
 }
   
   
   
   
  
   
   
    ?>
    
 
    
    
    
    
    
    
  