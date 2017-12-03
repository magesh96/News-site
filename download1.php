<!DOCTYPE HTML>
<html>
<body>
<?php
    
$con=mysql_connect("localhost","root","");
if(!$con)
{
echo "can not connect";
}

mysql_select_db('register');
    $query = "SELECT id, name FROM upload";
    $result = mysql_query($query) or die('Error, query failed'. mysql_error($con));

    if(mysql_num_rows($result)==0)
        echo "Database is empty" ;
    
    else
	{    
        while($row=mysql_fetch_array($result))
		{
        $id=$row['id'];	
		echo "<a href='download.php?id=$id'>download</a><br>";
        }
    }

echo "<a href='index1.php?'>Go Home</a><br>";
?>
  
</html>
</body>