<!DOCTYPE HTML>
<html>
<body>
<?php 

if(isset($_POST['submit']))
{

$con=mysql_connect("localhost","root","");

if(!$con)
{
echo "can not connect";
}
mysql_select_db("register",$con);

$firstname=$_POST['fname'];
$lastname=$_POST['lname'];
$dob=$_POST['dob'];
$email=$_POST['email'];
$username=$_POST['username'];
$password=$_POST['password'];


$sql="INSERT INTO login VALUES ('$firstname','$lastname','$dob','$email','$username','$password')";

if(!mysql_query($sql,$con))
	echo "not inserted";
else
{
	echo "inserted";

}

mysql_close($con);



}
?>

<br>
<br>
<p> Go to login page </p>
<a href="login.html">LOGIN PAGE</a>
</html>
</body>