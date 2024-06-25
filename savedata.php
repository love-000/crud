<?php

$user_name = $_POST['sname'];
$user_address = $_POST['saddress'];
$user_class = $_POST['class'];
$user_phone = $_POST['sphone'];

$conn = mysqli_connect('localhost', 'root', '', 'crud') or die('connection failed');
$sql = "INSERT INTO student(sname,saddress,sclass,sphone) VALUES('{$user_name}','{$user_address}','{$user_class}','{$user_phone}')";
$result = mysqli_query($conn, $sql) or die('query failed');

header('Location: http://localhost/crud/index.php');

mysqli_close($conn);
?>