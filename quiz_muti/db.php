<?php
header('Access-Control-Allow-Origin', '*');

$connect = new mysqli('localhost', 'root', '', 'quizapp');
mysqli_set_charset($connect,"utf8");
if ($connect->connect_errno) {
    printf('Error', $db->connect_errno);
    exit();
}
?>

