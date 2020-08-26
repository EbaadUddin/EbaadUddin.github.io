
<?php
 /*for records display*/
 include("connect1.php");
?>
<style>
table
{
    position: relative;
    right: 0px;
}
td
{
    padding: 8px;
}
a
{
   color: #38A1F3; 
}

</style>
<?php
if($_POST['view'])
{
$query="SELECT * FROM users1";
$data=mysqli_query($connection,$query);
$total= mysqli_num_rows($data);
?>
<head><link rel="stylesheet" href="updatestyle.css" /></head>

<table>
<tr>
<th>Name</th>
<th>Password</th>
<th></td>Email</th>
<th>Contact</th>
<th>Image</th>
<th colspan="2">Operations</th>
</tr>

<?php
while($result=mysqli_fetch_assoc($data))
{

echo "
<tr>
<td>".$result['Name']. "</td>
<td>".$result['Password']. "</td>
<td>".$result['Email']. "</td>
<td>".$result['Contact']. "</td>
<td><img height='60' width='60' src='".$result['Picture']."'/></td>
<td><a href='update1.php?name=$result[Name]&password=$result[Password]&email=$result[Email]&contact=$result[Contact]'/>Edit info.</a></td>
<td><a  href='delete1.php?contact=$result[Contact]'/>Delete info.</a></td>
</tr>";
}

 }
    ?>
    
    </table>
    
<form>
<input class="SignIN" name="" type="submit" value="Back To Form" formaction="form1.php" /><br />
</form>
    
    