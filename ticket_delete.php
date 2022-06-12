<?php
include_once "db.php";
$db = new Database();
$id_ticket = $_GET['value'];
$hui = "DELETE * FROM reading_ticket WHERE id_ticket = '$id_ticket'";
$db->first_res($hui);
require_once "footer.php";
/* header("Location: reading_ticket.php"); */
?>