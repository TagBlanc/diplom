<?php 
if ($_POST['type'] == 'student')
{
    $surname = $_POST['surname'];
    $firstname = $_POST['firstname'];
    $parentname = $_POST['parentname'];
    $class_let = $_POST['class_let'];
    $class_num = $_POST['class_num'];
    $phone = $_POST['phone'];
    $parentphone = $_POST['parentphone'];
    $password = $_POST['password'];
    include_once "db.php";
    $query = "INSERT INTO student (sname, name, pname, class_let, class_num, phone, parent_phone, password) VALUES ('$surname', '$firstname', '$parentname', '$class_let', '$class_num', '$phone', '$parentphone', '$password')"; 
    mysqli_query($dbconnect, $query);
    header("Location: index.php");  
} else {
    $surname = $_POST['surname'];
    $firstname = $_POST['firstname'];
    $parentname = $_POST['parentname'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    include_once "db.php";
    $query = "INSERT INTO library_worker (sname, name, pname, phone, password) VALUES ('$surname', '$firstname', '$parentname', '$phone', '$password')"; 
    mysqli_query($dbconnect, $query);
    header("Location: index.php");  
}

?>