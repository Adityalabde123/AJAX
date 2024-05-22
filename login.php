<?php
$con=mysqli_connect("localhost","root","");
if(!$con)
{
    die("error in connection");
}
$u=$_POST["t1"];
$p=$_POST["t2"];


mysqli_connect("use ajax");
$res=mysqli_execute_query("select * from ajax1 where username='$u'and password='$p'");
if($row=mysqli_fetch_array($res))
echo("login successful");
else
echo("invalid username or password");
?>