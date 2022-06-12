<?php 
include_once "db.php";
$db = new Database();
$ticketStudent = $_POST['ticketStudent'];
$ticketBook = $_POST['ticketBook'];
$ticketDate = $_POST['ticketDate'];

$query = "INSERT INTO reading_ticket (id_student, id_book, open_date) VALUES ('$ticketStudent', '$ticketBook', '$ticketDate')";
$db->query($query);
header("Location: index.php"); 
?>