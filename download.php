<?php
$con=mysql_connect("localhost","root","");
if(!$con)
{
echo "can not connect";
}
mysql_select_db('register');

if(isset($_GET['id'])) 
{


$id    = $_GET['id'];
$query = "SELECT name, type, size, content " .
         "FROM upload WHERE id = '$id'";

$result = mysql_query($query) or die('Error, query failed');
list($name, $type, $size, $content) = mysql_fetch_array($result);

header("Content-length: $size");
header("Content-type: $type");
header("Content-Disposition: attachment; filename=$name");

echo $content;

mysql_close($con);

}


?>