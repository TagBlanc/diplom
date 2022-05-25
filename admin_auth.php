<?php
session_start();
$login = $_POST['adminLogin'];
$pas = $_POST['adminPassword'];
if ($login == 'root' && $pas == 'root')
    {
        $_SESSION['admin'] = true;
    }
else
    {
      $_SESSION['admin'] = false;
        echo "хуй";
    }
    header('Location: admin_panel.php');
?>