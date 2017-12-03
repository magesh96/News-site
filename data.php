<?php


$username=$_POST['user'];

$password=$_POST['pass'];

$con=mysql_connect("localhost","root","");

if(!$con)
{
echo "can not connect";
}
mysql_select_db("register",$con);

$query=mysql_query("SELECT * FROM login WHERE username='$username'",$con);
  if(! $query ) {
      die('Could not get data: ' . mysql_error());
   }


$user="";
$pass="";
    while($value=mysql_fetch_assoc($query))
	{
		
		$user=$value['username'];
		
		$pass=$value['password'];
	
	}
	
	
	
	
	if($username==$user&&$password==$pass)
	{
			header("Location:index1.php?id={$user}");
	}

	else if  ($username!=$user&&$password!=$pass)
	
		print "user not registered";
		
	else
	{
		header("Location:login.html");
	}
	
	mysql_close($con);
	

	?>



	