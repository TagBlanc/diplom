<?php
include "db.php";
session_start();
$phone = trim($_POST['authPhoneWorker']);
$password = trim($_POST['authPasswordWorker']);
$db = new Database();
$query = "SELECT * FROM library_worker WHERE phone = '$phone' AND password = '$password'";
if(!$db->in_db($query)){
    $_SESSION['err']['log'] = "Логин или пароль введены неверно";
}
else{
    $worker = $db->first_res($query);
    $_SESSION['worker'] = [
        'id_worker' => $worker[0],
        'sname' => $worker[1],
        'name' => $worker[2],
        'pname' => $worker[3],
        'phone' => $worker[4],
        'password' => $worker[5],
        
    ];
}
header("Location: index.php"); 
?>