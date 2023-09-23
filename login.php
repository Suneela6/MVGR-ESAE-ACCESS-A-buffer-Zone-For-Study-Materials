<!DOCTYPE html>
<html>
<head>
<title>staff Login</title>
<style>
body{
font-family : "Garamond",serif;
font-size : 100px;
background-color:#367588;
}
</style>
</head>
<?php
$servername="localhost";
$user="root";
$password="Mohan@560";
$db="access";

$conn = new mysqli($servername, $user, $password, $db);
$un = $_POST["uname"];
$pw = $_POST["pword"];
if($conn->connect_error){
die("connection failed" . $conn->connect_error);
}else{
$sql="select * from staff where UNAME = '$un' AND PWD = '$pw';";
$res=$conn->query($sql);
if($res->num_rows > 0){
?>
<body>
<center>
<br><br><br>
<?php
while($row= $res->fetch_assoc()){
echo "WELCOME ".$row["UNAME"] ."  SIR/MADAM";
}
?>
<BR><BR>
<a href="insert.php">CLICK HERE TO UPLOAD PDF'S<a>
<?php
}
}
?>
</center>
</body>
</html>
