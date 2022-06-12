<?php
include "db.php";
session_start();
$phone = trim($_POST['authPhone']);
$password = trim($_POST['authPassword']);
$db = new Database();
$query = "SELECT * FROM student WHERE phone = '$phone' AND password = '$password'";
if(!$db->in_db($query)){
    $_SESSION['err']['log'] = "Логин или пароль введены неверно";
}
else{
    $student = $db->first_res($query);
    $_SESSION['student'] = [
        'id_student' => $student[0],
        'sname' => $student[1],
        'name' => $student[2],
        'pname' => $student[3],
        'class_let' => $student[4],
        'class_num' => $student[5],
        'phone' => $student[6],
        'parent_phone' => $student[7],
        'password' => $student[8],
        'role' => 'student',
    ];
}
header("Location: index.php"); 
?>