<?php
header("countent-type:text-html;charset=utf-8");


$mysqli=new mysqli("localhost","root","root","shuaijin");

$sql="insert into enroll(name,pwd,email,age) values('$_POST[name]','$_POST[pwd]','$_POST[email]','$_POST[age]')";

$res=$mysqli->multi_query($sql);

$mysqli->close();

?>
