<?php
$stu_id = $_POST['sid'];
$user_name = $_POST['sname'];
$user_address = $_POST['saddress'];
$user_class = $_POST['sclass'];
$user_phone = $_POST['sphone'];

$conn = mysqli_connect('localhost', 'root', '', 'crud') or die('connection failed');
$sql = "UPDATE student SET sname = '{$user_name}',saddress = '{$user_address}',sclass = '{$user_class}',sphone = '{$user_phone}' WHERE sid = {$stu_id} ";
$result = mysqli_query($conn, $sql) or die('query failed');

header('Location: http://localhost/crud/index.php');

mysqli_close($conn);

